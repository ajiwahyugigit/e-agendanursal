<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Santri extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'santri';

    protected $fillable = [
        'nis' , 'nama', 'telepon', 'jenis_kelamin', 'tempat_lahir', 'alamat', 'users_id'
    ];

    protected $hidden = [

    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
