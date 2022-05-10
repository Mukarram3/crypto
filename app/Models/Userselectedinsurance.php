<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userselectedinsurance extends Model
{
    use HasFactory;
    protected $table='userselectedinsurances';
    protected $fillable=['id','userid','insuranceid'];

    public function hasusers(){
        return $this->belongsTo(User::class,'userid','id');
    }
        public function hasinsurance(){
            return $this->belongsTo(Insurance::class,'insuranceid','id');
        }
}
