<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Plans extends Model
{
    use HasFactory;
    protected $table='plans';
    protected $fillable= ['id','percent','minbalance','subscrcost','description'];
    public function hasselectedplans(){
        return $this->hasmany(Userselectedplan::class,'id');
    }

}
