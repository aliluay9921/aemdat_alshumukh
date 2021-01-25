<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mechanisms extends Model
{
    use HasFactory;
    protected $fillable = [
        'pumping_concret', 'pum_station', 'trailer_qatra', 'transfer_concret'
    ];
}