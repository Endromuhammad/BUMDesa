<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\GoodsLoan;
use App\Models\GoodsLoanDetails;
use App\Models\MoneyLoan;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Status;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LandingPageController extends Controller
{
    public function index() : View {
        return view('contents.index');
    }

    public function profile() : View {
        return view('contents.profile');
    }

    public function berita() : View {
        $berita = News::getAllNews();
        $latest_news    = News::getLatestNews();

        return view('contents.berita', [
            'list_berita'   => $berita,
            'latest_news'   => $latest_news
        ]);
    }

    public function beritaDetail(int $beritaId) : View {
        $berita         = News::getNewsDetails($beritaId);
        $latest_news    = News::getLatestNews();

        return view('contents.berita-details', [
            'berita'        => $berita,
            'latest_news'   => $latest_news
        ]);
    }

    public function portofolio() : View {
        $portofolios = Portfolio::all();

        return view('contents.portofolio', [
            'portofolios'    => $portofolios
        ]);
    }

    public function portofolioDetails (int $id) : View {
        $portofolio = Portfolio::find($id);

        return view('contents.portofolio-details ', [
            'portofolio'    => $portofolio
        ]);
    }

    public function moneyLoan () : View {        
        return view('contents.money-loan');
    }
    
    function moneyLoanList() {
        $list = MoneyLoan::getUserTransactions();

        return view('contents.money-loan-list', ['transactions' => $list]);
    }

    public function moneyLoanStore(Request $request) : RedirectResponse {
        $request->validate([
            'nik'           => ['required'],
            'name'          => ['required'],
            'phone_number'  => ['required'],
            'address'       => ['required'],
            'nominal'       => ['required'],
            'tenor'         => ['required'],
        ]);
        
        $loanAmount     = $request->post('nominal');
        $loanDuration   = $request->post('tenor');
        $monthyFee      = (new MoneyLoanController)->getMonthyFee($loanAmount, $loanDuration);

        $path   = 'public/images/money_loans';

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
            'monthly_fee'       => $monthyFee,
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
 
        return redirect()->route('money-loan-list');
    }

    public function goodsLoan () : View {
        $list_barang = Barang::all();
        
        return view('contents.goods-loan', [
            'list_barang'   => $list_barang
        ]);
    }

    public function goodsLoanList () : View {
        $transactions = GoodsLoan::getUserTransactions();
        
        return view('contents.goods-loan-list', ['transactions'   => $transactions]);
    }

    public function goodsLoanStore(Request $request) : RedirectResponse {
        $request->validate([
            'nik'           => ['required'],
            'name'          => ['required'],
            'phone_number'  => ['required'],
            'address'       => ['required'],
            'barang'        => ['required'],
            'start_date'    => ['required'],
            'end_date'      => ['required'],
            'qty'           => ['required']
        ]);
        
        $barang     = $request->post('barang');
        $start_date = $request->post('start_date');
        $end_date   = $request->post('end_date');
        $qty        = $request->post('qty');

        $path   = 'public/images/goods_loans';

        $file_ktp = $request->file('ktp');
        $filename = "ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp->extension();

        $path_ktp = $file_ktp->storeAs($path, $filename);
        
        if ( ! $path_ktp ) {
            echo "error upload";exit;
        }  
        
        $total_price = 0; // will be updated below
        $loanData = array(
            'nik'               => $request->post('nik'),
            'name'              => $request->post('name'),
            'phone_number'      => $request->post('phone_number'),
            'address'           => $request->post('address'),
            'start_date'        => $start_date,
            'end_date'          => $end_date,
            'total_price'       => $total_price,
            'ktp_path'          => $path_ktp,
            'created_by'        => Auth::id(),
            'status'            => Status::getStatusSubmit()
        );

        $create = GoodsLoan::create($loanData);
        
        if ( !$create ) {
            echo "error create";exit;
        }

        $goods_loan_id = $create->id;
        
        if (! is_array($barang)) {
            $barang = array($barang);
        }

        foreach ($barang as $key => $value) {
            $detail_barang = Barang::find($value);
            $qty_barang     = isset($qty[$key]) ? $qty[$key] : 0;

            $loanDetail = array(
                'barang_id'     => $detail_barang->id,
                'price'         => $detail_barang->price,
                'qty'           => $qty_barang,
                'goods_loan_id' => $goods_loan_id
            );

            $createDetail = GoodsLoanDetails::create($loanDetail);
            $total_price += ($detail_barang->price * $qty_barang);
        }

        $date1      = new DateTime($start_date);
        $date2      = new DateTime($end_date);
        $interval   = $date1->diff($date2);
        $diff       = $interval->days + 1;

        $goodsLoan = GoodsLoan::find($goods_loan_id);
        $goodsLoan->total_price = $total_price * $diff;
        $goodsLoan->save();
 
        return redirect()->route('goods-loan-list');
    }
}