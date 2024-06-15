<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\SubTalent;

class Talent extends Model
{
    use HasFactory;
    //Searchable;

    protected $table = 'talent';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'kategori'
    ];
     public function subtalent()
     {
         return $this->hasMany(SubTalent::class, 'id_kategori', 'id');
     }
}
