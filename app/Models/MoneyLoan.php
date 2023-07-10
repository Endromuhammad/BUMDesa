<?php

namespace App\Models;

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
    ];
}
