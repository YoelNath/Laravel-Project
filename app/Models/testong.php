<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testong extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";
    protected $guarded =[];
    public function maha(){
        return $this->hasMany(mahasiswa::class);
    }

}
