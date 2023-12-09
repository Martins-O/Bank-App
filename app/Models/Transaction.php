<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance',
        'sourceAccount',
        'destinationAccount',
        'description',
        'transactionType',
    ];

    public function sourceAccount()
    {
        return $this->belongsTo(Account::class, 'sourceAccount');
    }

    public function destinationAccount()
    {
        return $this->belongsTo(Account::class, 'destinationAccount');
    }

}
