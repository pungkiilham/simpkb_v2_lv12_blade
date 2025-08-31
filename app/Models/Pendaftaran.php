<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    /**
     * Nama tabel yang terkait dengan model ini.
     *
     * @var string
     */
    protected $table = 'pendaftarans';

    /**
     * Mendefinisikan relasi 'belongsTo' ke model Kendaraan.
     * Ini menghubungkan pendaftaran ke satu kendaraan.
     */
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    /**
     * Mendefinisikan relasi 'belongsTo' ke model JenisKendaraan.
     * Ini menghubungkan pendaftaran ke satu jenis kendaraan.
     */
    public function jenisKendaraan()
    {
        return $this->belongsTo(JenisKendaraan::class, 'jenis_kendaraan_id');
    }

    /**
     * Mendefinisikan relasi 'belongsTo' ke model JenisPengujian.
     * Ini menghubungkan pendaftaran ke satu jenis layanan pengujian.
     */
    public function jenisPengujian()
    {
        return $this->belongsTo(JenisPengujian::class, 'jenis_pengujian_id');
    }
}
