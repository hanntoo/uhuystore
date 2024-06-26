<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['uuid', 'name', 'email', 'number', 'transaction_total', 'transaction_status'];
    protected $hidden = [];

    //relasi
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
