<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLogin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customer_logins';
    protected $primaryKey = 'id';
    protected $fillable = ['user','pass'];

}
