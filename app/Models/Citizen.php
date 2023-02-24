<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    // • Citizens: – id, full name, gender, address, phone, ward id, {timestamp}
    protected $fillable = ['id','fullname','address','phone','ward_id'];
}
