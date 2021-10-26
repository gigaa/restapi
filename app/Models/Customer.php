<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname','lastname','gender','age'
    ];
    protected $hidden = [
        'addresses',
    ];
    
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }
}