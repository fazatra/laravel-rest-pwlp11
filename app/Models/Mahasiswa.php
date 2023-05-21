<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey
    public $incrementing = false;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'Nim',
    'Nama',
    'Foto',
    'Tanggal_Lahir',
    'Kelas',
    'Jurusan',
    'No_Handphone',
    'Email',
    ];
}
