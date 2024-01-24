<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = [''];

    public function riwayatPendidikan()
    {
        return $this->hasMany(RiwayatPendidikan::class, 'nim', 'nim');
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'nim', 'nim');
    }

    public function kontakDarurat()
    {
        return $this->hasOne(KontakDarurat::class, 'nim', 'nim');
    }

    public function aktivitasAlumni()
    {
        return $this->hasMany(AktivitasAlumni::class, 'nim', 'nim');
    }
}
