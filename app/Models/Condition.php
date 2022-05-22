<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = ['condition'];

    public function customers() {
        return $this->belongsToMany(Customer::class, 'customers_conditions');
    }

    public function customerCondition() {
        return $this->hasMany(Customer::class);
    }
}
