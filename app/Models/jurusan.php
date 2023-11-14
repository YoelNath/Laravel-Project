<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $table="jurusan";

    protected $guarded =[];
    protected $fillable =['deskripsi','jurusan'];
    public function mahasiswa(){
        $this->hasMany(mahasiswa::class);
    }
}
