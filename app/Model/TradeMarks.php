<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TradeMarks extends Model
{
    protected $table = 'trade_marks';

    protected $fillable = [
        'name_ar',
        'name_en',
        'logo'
    ];
}
