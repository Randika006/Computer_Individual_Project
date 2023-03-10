<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'officers';
    protected $primaryKey = 'Officerid';
    protected $fillable = ['fullname','address','tel'];

}
