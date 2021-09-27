<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table="Car";
    protected $fillable=["marka","model","tip","aciklama","created_at","updated_at"];
}
