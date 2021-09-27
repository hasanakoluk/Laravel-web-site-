<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KisiselModel extends Model
{
    use HasFactory;
    protected $table="Kisisel";
    protected $fillable=["adsoyad","tc","il","ilce","created_at	","updated_at"];
}
