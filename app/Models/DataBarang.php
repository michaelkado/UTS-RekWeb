<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DataBarang extends Model
{

    protected $table = 'DataBarang' ;

    protected $fillable = ['idBarang', 'NamaBarang', 'DeskripsiBarang'];
}