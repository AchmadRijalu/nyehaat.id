<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone'];

    public function conditions() {
        return $this->belongsToMany(Condition::class, 'customers_conditions');
    }

    public function customerCondition() {
        return $this->hasMany(CustomerCondition::class);
    }
}
