<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RechargeLog extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $keyType = 'string';
    protected $table = 'recharge_logs';

    protected $fillable = [
        'amount',
        'installments',
        'action',
        'platform',
        'ip_address',
        'card_log_id',
        'user_log_id',
        'recharge_id',
    ];
}
