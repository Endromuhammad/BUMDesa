<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'ktp_path'
    ];
}
