<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingAddress extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['trans_id', 'address', 'city', 'postal_code', 'country', 'state', 'created_at', 'updated_at'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'trans_id');
    }
}
