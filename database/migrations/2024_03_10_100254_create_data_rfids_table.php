<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datarfid', function (Blueprint $table) {
            $table->bigIncrements('idx');
            $table->string('statuspenerbitan', 255);
            $table->string('nouji', 255);
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('noidentitaspemilik', 255);
            $table->string('nosertifikatreg', 255);
            $table->string('tglsertifikatreg', 255);
            $table->string('noregistrasikendaraan', 255);
            $table->string('norangka', 255);
            $table->string('nomesin', 255);
            $table->string('merek', 255);
            $table->string('tipe', 255);
            $table->string('jenis', 255);
            $table->string('thpembuatan', 255);
            $table->string('bahanbakar', 255);
            $table->string('isisilinder', 255);
            $table->string('dayamotorpenggerak', 255);
            $table->string('jbb', 255);
            $table->string('jbkb', 255);
            $table->string('jbi', 255);
            $table->string('jbki', 255);
            $table->string('mst', 255);
            $table->string('beratkosong', 255);
            $table->string('konfigurasisumburoda', 255);
            $table->string('ukuranban', 255);
            $table->string('panjangkendaraan', 255);
            $table->string('lebarkendaraan', 255);
            $table->string('tinggikendaraan', 255);
            $table->string('panjangbakatautangki', 255);
            $table->string('lebarbakatautangki', 255);
            $table->string('tinggibakatautangki', 255);
            $table->string('jalurdepan', 255);
            $table->string('jalurbelakang', 255);
            $table->string('jaraksumbu1_2', 255);
            $table->string('jaraksumbu2_3', 255);
            $table->string('jaraksumbu3_4', 255);
            $table->string('dayaangkutorang', 255);
            $table->string('dayaangkutbarang', 255);
            $table->string('kelasjalanterendah', 255);
            $table->string('fotodepansmall', 255);
            $table->string('fotobelakangsmall', 255);
            $table->string('fotokanansmall', 255);
            $table->string('fotokirismall', 255);
            $table->string('idpetugasuji', 255);
            $table->string('idkepaladinas', 255);
            // $table->string('iddirektur', 255);
            // $table->string('kodewilayah', 255);
            // $table->string('kodewilayahasal', 255);
            // $table->string('huv_nomordankondisirangka', 255);
            // $table->string('huv_nomordantipemotorpenggerak', 255);
            // $table->string('huv_kondisitangkicorongdanpipabahanbakar', 255);
            // $table->string('huv_kondisiconverterkit', 255);
            // $table->string('huv_kondisipipapembuangan', 255);
            // $table->string('huv_ukurandankondisiban', 255);
            // $table->string('huv_kondisisistemsuspensi', 255);
            // $table->string('huv_kondisisistemremutama', 255);
            // $table->string('huv_kondisipenutuplampudanalatpantulcahaya', 255);
            // $table->string('huv_kondisipanelinstrumentdashboard', 255);
            // $table->string('huv_kondisikacaspion', 255);
            // $table->string('huv_kondisispakbor', 255);
            // $table->string('huv_bentukbumper', 255);
            // $table->string('huv_keberadaandankondisiperlengkapan', 255);
            // $table->string('huv_rancanganteknis', 255);
            // $table->string('huv_keberadaandankondisifasilitastanggapdaruratuntukmobilbus', 255);
            // $table->string('huv_kondisibadankacaengseltempatdudukmbarangbakmuatantertutup', 255);
            // $table->string('hum_kondisipenerusdaya', 255);
            // $table->string('hum_sudutbebaskemudi', 255);
            // $table->string('hum_kondisiremparkir', 255);
            // $table->string('hum_fungsilampudanalatpantulcahaya', 255);
            // $table->string('hum_fungsipenghapuskaca', 255);
            // $table->string('hum_tingkatkegelapankaca', 255);
            // $table->string('hum_fungsiklakson', 255);
            // $table->string('hum_kondisidanfungsisabukkeselamatan', 255);
            // $table->string('hum_ukurankendaraan', 255);
            // $table->string('hum_ukurantempatdudukdanbagiandalamkendaraanuntukmobilbus', 255);
            // $table->string('alatuji_emisiasapbahanbakarsolar', 255);
            // $table->string('alatuji_emisicobahanbakarbensin', 255);
            // $table->string('alatuji_emisihcbahanbakarbensin', 255);
            // $table->string('alatuji_remutamatotalgayapengereman', 255);
            // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan1', 255);
            // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan2', 255);
            // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan3', 255);
            // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan4', 255);
            // $table->string('alatuji_remparkirtangan', 255);
            // $table->string('alatuji_remparkirkaki', 255);
            // $table->string('alatuji_kincuprodadepan', 255);
            // $table->string('alatuji_tingkatkebisingan', 255);
            // $table->string('alatuji_lampuutamakekuatanpancarlampukanan', 255);
            // $table->string('alatuji_lampuutamakekuatanpancarlampukiri', 255);
            // $table->string('alatuji_lampuutamapenyimpanganlampukanan', 255);
            // $table->string('alatuji_lampuutamapenyimpanganlampukiri', 255);
            // $table->string('alatuji_penunjukkecepatan', 255);
            // $table->string('alatuji_kedalamanalurban', 255);
            // $table->string('qrcodeurl', 255);
            // $table->string('qrnoujipm133', 255);
            // $table->string('masaberlakuuji', 255);
            // $table->string('tgluji', 255);
            // $table->string('statuslulusuji', 255);
            // $table->string('uid', 255);
            // $table->string('nokendalikartu', 255);
            // $table->string('datetimepersochip', 255);
            // $table->string('datetimepersovisual', 255);
            // $table->string('datetimecetaksertifikat', 255);
            // $table->string('datetimeupload', 255);
            // $table->string('vcode', 255);
            // $table->string('cetaksukses', 255);
            // $table->string('rfid', 255);
            // $table->string('datetimepersorfid', 255);
            // $table->string('rfid_tid', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datarfid');
    }
};
