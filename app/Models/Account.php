<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance',
        'accountNumber',
        'transactionPin',
        'userDetails',
    ];

    protected $hidden = [
        'transactionPin',
    ];

    protected $casts = [
        'transactionPin' =>'hashed',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userDetails', 'id');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public static function generateAccountNumber()
    {
        $prefix = '09';
        $randomNumber = mt_rand(1000, 9999); // Generate a 6-digit random number
        $suffix = now()->format('YmdHis');

        // Ensure the total length is 11 digits
        $accountNumber = $prefix . $randomNumber . $suffix;
        $remainingDigits = 11 - strlen($accountNumber);

        if ($remainingDigits > 0) {
            // If there are remaining digits, add random digits to meet the total length
            $additionalRandom = mt_rand(pow(10, $remainingDigits - 1), pow(10, $remainingDigits) - 1);
            $accountNumber .= $additionalRandom;
        }

        return $accountNumber;
    }



}
