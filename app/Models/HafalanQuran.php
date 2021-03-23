<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class HafalanQuran extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'hafalan_quran';

    protected $fillable = [
        'hari', 'tanggal', 'surat_quran', 'santri_id'
    ];

    protected $hidden = [

    ];

    public function santri()
    {
        return $this->belongsTo('App\Models\Santri');
    }

}
