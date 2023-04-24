<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalParam extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'internal_params';
    protected $primaryKey = 'id';
    protected $fillable = ['CO','CO2','Acetaldehyde','Formaldehyde'];

}
