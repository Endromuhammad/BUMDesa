<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $primary_key = 'id';
    protected $fillable = [
        'title',
        'description',
        'category',
        'project_date',
        'image_path'
    ];

}
