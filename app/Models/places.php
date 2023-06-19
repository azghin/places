<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;
    protected $fillable=['Title','latitude','longitude','description','image'];
    protected $table='places';
}
