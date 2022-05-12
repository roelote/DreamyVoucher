<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voucher extends Model
{
    use HasFactory;


    protected $fillable = [
        'number_voucher',
        'name_package',
        'name_pax',
        'email',
        'phone',
        'date_package',
        'language',
        'currency',
        'price',
        'advancement',
        'date_advancement',
        'debt',
        'Message',
    ];


   // protected $dateFormat = 'd/m/Y';

}
