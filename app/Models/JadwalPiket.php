<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class JadwalPiket extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'jadwal_piket';

    protected $fillable = [
        'hari', 'tanggal', 'tempat', 'santri_id'
    ];

    protected $hidden = [

    ];

    public function santri()
    {
        return $this->belongsTo('App\Models\Santri');
    }
}
