<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyLoan extends Model
{
    use HasFactory;

    protected $table = 'money_loans';
    protected $fillable = [
        'nik',
        'name',
        'phone_number',
        'address',
        'nominal',
        'tenor',  
        'monthly_fee',
        'ktp_path',
        'holding_ktp_path',
        'kk_path',
        'created_by',
        'status'
    ];

    public static function getAllWithStatus() {
        $transaksi = DB::select("SELECT 
                            ml.*,
                            s.`name`,
                            s.`description`
                            FROM `money_loans` ml
                            LEFT JOIN `status` s ON s.`id` = ml.status");

        return $transaksi;
    }
}
