<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markalar extends Model
{
    use HasFactory;
    protected $table="Markalar";
    protected $fillable=["isim","numara","fiyat","created_at","updated_at"];
}
