<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pax extends Model
{
    use HasFactory;

    protected $fillable = [
       'voucher_id',
       'name',
       'lastname',
       'passport',
       'nationality',
       'sex',
       'birth_date',
    ];

    public function voucher()
    {
        return $this->belongsTo(voucher::class);
    }

}
