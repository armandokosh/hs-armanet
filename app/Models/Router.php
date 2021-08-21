<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    use HasFactory;
    protected $fillable = ['name','ip','username','password','dns_name', 'version','web_port','lan_interface','api_port','coordinates','status'];
}
