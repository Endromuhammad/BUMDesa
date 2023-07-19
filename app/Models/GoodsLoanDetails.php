<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GoodsLoanDetails extends Model
{
    use HasFactory;
    protected $table = 'goods_loan_details';
    protected $fillable = [
        'barang_id',
        'price',
        'goods_loan_id',
        'qty'
    ];

    public static function getDetailSelectedBarang(int $goods_loan_id) : Array {
        $barang = DB::select("SELECT 
        b.`name`,
        b.`price`,
        b.`id`,
        gld.`qty` as qty_input
        FROM `goods_loan_details` gld
        JOIN barang b ON b.`id` = gld.`barang_id`
        WHERE gld.`goods_loan_id` = $goods_loan_id");

        return $barang;
    }
}