<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable; //Looks use Authenticatable
class Teacher extends Authenticatable
//class Teacher extends Model
{
    //use HasFactory;
    use HasFactory;
    protected $fillable = ["name","email","password","is_active"];

    public function setPasswordAttribute($value){
        $this->attributes['password']  = Hash::make($value);
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }
}
