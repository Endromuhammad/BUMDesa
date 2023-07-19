<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GoodsLoan extends Model
{
    use HasFactory;

    protected $table = 'goods_loans';
    protected $fillable = [
        'name',
        'nik',
        'address',
        'phone_number',
        'start_date',
        'end_date',
        'total_price',
        'ktp_path',
        'status',
        'created_by'
    ];

    public static function getAllTransactionStatus() {
        $transaksi = DB::select("SELECT 
                                    gl.*,
                                    s.`name` AS status_name,
                                    s.`description`
                                    FROM `goods_loans` gl
                                    LEFT JOIN `status` s ON s.`id` = gl.status");

        return $transaksi;
    }

    public static function getUserTransactions() {
        $user_id = Auth::id();
        $transaksi = DB::select("SELECT 
                                    gl.*,
                                    s.`name` AS status_name,
                                    s.`description`
                                    FROM `goods_loans` gl
                                    LEFT JOIN `status` s ON s.`id` = gl.status
                                    WHERE gl.`created_by` = {$user_id}");

        return $transaksi;
    }
}
