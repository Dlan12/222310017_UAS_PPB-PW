<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olahan extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // value id yang ngisi sistem, semua selain id boleh kita isi

    public function sampah()
    {
        return $this->belongsTo(Sampah::class); // untuk menghubungkan antara olahan dengan sampah (1 olahan memiliki 1 sampah)
    }
}
