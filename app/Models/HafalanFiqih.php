<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class HafalanFiqih extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'hafalan_fiqih';

    protected $filable = [
        'tanggal','hari','bab_fiqih', 'santri_id'
    ];

    protected $hidden = [

    ];

    public function santri()
    {
        return $this->belongsTo('App\Models\Santri');
    }
}
