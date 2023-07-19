<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public static function getStatusSubmit() {
        return 1;
    }

    public static function getStatusApprove() {
        return 2;
    }

    public static function getStatusReject() {
        return 3;
    }

    public static function getStatusDone() {
        return 5;
    }

    public static function getStatusCancel() {
        return 0;
    }
}
