<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesDetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'vehicles_details';
    protected $primaryKey = 'id';
    protected $fillable = ['ftype','etype','lnum','vmodel'];

}
