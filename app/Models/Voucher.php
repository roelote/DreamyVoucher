<?php

namespace App\Models;

use Illuminate\Support\Carbon;
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

    public function getDateShowAttribute()
    {
        return $this->date_package = Carbon::parse($this->date_package)->format('d/m/Y');
     }

     public function getDateAdvAttribute()
    {
        return $this->date_advancement = Carbon::parse($this->date_advancement)->format('d/m/Y');
     }


}
