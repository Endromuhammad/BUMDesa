<?php

namespace App\Http\Controllers;

use App\Models\MoneyLoan;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\VarDumper;

class MoneyLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = MoneyLoan::getAllWithStatus();

        $page = "layanan-keuangan";
        return view('admin.contents.money-loan.layanan-keuangan', ['page' => $page, 'loans' => $loans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = "layanan-keuangan";

        return view('admin.contents.money-loan.layanan-keuangan-create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'           => ['required'],
            'name'          => ['required'],
            'phone_number'  => ['required'],
            'address'       => ['required'],
            'nominal'       => ['required'],
            'tenor'         => ['required'],
            'monthly_fee'   => ['required'],
        ]);

        $path = 'public/images/money_loans';

        $file_ktp = $request->file('ktp');
        $filename = "ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp->extension();

        $path_ktp = $file_ktp->storeAs($path, $filename);
        
        if ( ! $path_ktp ) {
            echo "error upload";exit;
        }

        $file_ktp_holding = $request->file('holding_ktp');
        $filename = "holding-ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp_holding->extension();

        $path_ktp_holding = $file_ktp_holding->storeAs($path, $filename);
        
        if ( ! $path_ktp_holding ) {
            echo "error upload";exit;
        }

        $file_kk = $request->file('kk');
        $filename = "kk-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_kk->extension();

        $path_kk = $file_kk->storeAs($path, $filename);
        
        if ( ! $path_kk ) {
            echo "error upload";exit;
        }

        $loanData = array(
            'nik'               => $request->post('nik'),
            'name'              => $request->post('name'),
            'phone_number'      => $request->post('phone_number'),
            'address'           => $request->post('address'),
            'nominal'           => $request->post('nominal'),
            'tenor'             => $request->post('tenor'),
            'monthly_fee'       => $request->post('monthly_fee'),
            'ktp_path'          => $path_ktp,
            'holding_ktp_path'  => $path_ktp_holding,
            'kk_path'           => $path_kk,
            'created_by'        => Auth::id(),
            'status'            => Status::getStatusSubmit()
        );

        $create = MoneyLoan::create($loanData);

        if ( !$create ) {
            echo "error create";exit;
        }
 
        return redirect()->route('layanan_keuangan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loan = MoneyLoan::find($id);
        $page = 'layanan-keuangan';

        $loan->ktp_path         = Storage::url($loan->ktp_path);
        $loan->holding_ktp_path = Storage::url($loan->holding_ktp_path);
        $loan->kk_path          = Storage::url($loan->kk_path);

        return view('admin.contents.money-loan.layanan-keuangan-view', ['page' => $page, 'loan' => $loan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $loan = MoneyLoan::find($id);
        $page = 'layanan-keuangan';
        
        $loan->ktp_path         = Storage::url($loan->ktp_path);
        $loan->holding_ktp_path = Storage::url($loan->holding_ktp_path);
        $loan->kk_path          = Storage::url($loan->kk_path);

        return view('admin.contents.money-loan.layanan-keuangan-edit', ['page' => $page, 'loan' => $loan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $loan               = MoneyLoan::find($id);
        $path_ktp           = NULL;
        $path_ktp_holding   = NULL;
        $path_kk            = NULL;

        if (! empty($request->file('ktp'))) {
            $file       = $request->file('ktp');
            $filename   = "ktp-" . $request->post('nik') . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();
            $path       = 'public/images/money_loans';
            $path_ktp   = $file->storeAs($path, $filename);

            if ( ! $path_ktp ) {
                echo "error upload";
                exit;
            }
        }

        if (! empty($request->file('holding_ktp'))) {
            $file       = $request->file('holding_ktp');
            $filename   = "holding-ktp-" . $request->post('nik') . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();
            $path       = 'public/images/money_loans';
            $path_ktp_holding   = $file->storeAs($path, $filename);

            if ( ! $path_ktp_holding ) {
                echo "error upload";
                exit;
            }
        }

        if (! empty($request->file('kk'))) {
            $file       = $request->file('kk');
            $filename   = "kk-" . $request->post('nik') . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();
            $path       = 'public/images/money_loans';
            $path_kk   = $file->storeAs($path, $filename);

            if ( ! $path_kk ) {
                echo "error upload";
                exit;
            }
        }

        $loan->nik          = $request->post('nik');
        $loan->name         = $request->post('name');
        $loan->phone_number = $request->post('phone_number');
        $loan->address      = $request->post('address');
        $loan->nominal      = $request->post('nominal');
        $loan->tenor        = $request->post('tenor');
        $loan->monthly_fee  = $request->post('monthly_fee');
        $loan->status       = $request->post('status');

        if ($path_ktp) {
            $loan->ktp_path = $path_ktp;
        }

        if ($path_ktp_holding) {
            $loan->holding_ktp_path = $path_ktp_holding;
        }

        if ($path_kk) {
            $loan->kk_path = $path_kk;
        }

        if (! $loan->save() ) {
            echo "error update";
            exit;
        }

        return redirect()->route('layanan_keuangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loan = MoneyLoan::find($id);

        if (! $loan->delete() ) {
            echo "delete failed";
            exit;
        }

        return redirect()->route('layanan_keuangan');
    }

    public function getMonthyFee($loanAmount, $loanDuration) {
        $interestRate       = 0.015; // Bunga 1.5% per bulan
        $monthlyInterest    = $loanAmount * $interestRate;
        $totalPayment       = $loanAmount + ($monthlyInterest * $loanDuration);
        $monthlyPayment     = $totalPayment / $loanDuration;
        $roundedPayment     = round($monthlyPayment);

        return $roundedPayment;
    }
}
