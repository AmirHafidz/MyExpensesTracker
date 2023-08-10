<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFinancial extends Model
{
    use HasFactory;

    protected $table = 'user_financials';

    protected $primaryKey = 'financial_id';

    protected $fillable = [
        'user_id',
        'total_money',
        'total_expenses',
    ];

}
