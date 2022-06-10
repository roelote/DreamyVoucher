<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function getDatePaxAttribute()
    {
        return $this->birth_date = Carbon::parse($this->birth_date)->format('d/m/Y');
     }

}
