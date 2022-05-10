<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userselectedplan extends Model
{
    use HasFactory;
    protected $table='userselectedplans';
    protected $fillable=['id','userid','planid'];
    
    public function hasusers(){
        return $this->belongsTo(User::class,'userid','id');
    }
    public function hasplans(){
        return $this->belongsTo(Plans::class,'planid','id');
    }
}
