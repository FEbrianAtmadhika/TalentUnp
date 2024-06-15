<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTalent extends Model
{
    use HasFactory;

    protected $table = "subtalent";

    protected $guarded = 'id';

    protected $fillable = [
        "id_kategori", "nama_talent"
    ];

    public function anggota()
    {
        return $this->belongsToMany(User::class, 'relasi', 'id_subtalent', 'id_user');

    }
    /**
     * Get the user that owns the SubTalent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function talent()
    {
        return $this->belongsTo(Talent::class, 'id_kategori', 'id');
    }
}
