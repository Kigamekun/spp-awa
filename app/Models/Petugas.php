<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];


    protected $primaryKey = 'id_petugas';

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
