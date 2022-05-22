<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCondition extends Model
{
    use HasFactory;

    protected $table = 'customers_conditions';
    protected $fillable = ['customer_id', 'condition_id'];

    public function customer() {
        return $this->belongsToMany(Customer::class);
    }

    public function condition() {
        return $this->belongsToMany(Condition::class);
    }
}
