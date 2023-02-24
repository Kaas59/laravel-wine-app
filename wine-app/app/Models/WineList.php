<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineList extends Model
{
    use HasFactory;

    protected $fillable = ['ravel_id', 'wine_id'];
}
