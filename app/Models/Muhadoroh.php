<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Muhadoroh extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'muhadoroh';

    protected $fillable = [
        'tanggal', 'keterangan', 'santri_id'
    ];

    protected $hidden = [

    ];

    public function santri()
    {
        return $this->belongsTo('App\Models\Santri');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
