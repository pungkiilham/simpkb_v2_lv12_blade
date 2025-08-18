<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE TABLE `datapengujian` (
            `idx` BIGINT ( 20 ) NOT NULL AUTO_INCREMENT,
            `statuspenerbitan` VARCHAR ( 1 ) NOT NULL,
            `nouji` VARCHAR ( 20 ) NOT NULL,
            `nama` VARCHAR ( 50 ) NOT NULL,
            `alamat` VARCHAR ( 255 ) NOT NULL,
            `noidentitaspemilik` VARCHAR ( 255 ) DEFAULT NULL,
            `nosertifikatreg` VARCHAR ( 255 ) NOT NULL,
            `tglsertifikatreg` VARCHAR ( 8 ) NOT NULL,
            `noregistrasikendaraan` VARCHAR ( 255 ) NOT NULL,
            `norangka` VARCHAR ( 255 ) NOT NULL,
            `nomesin` VARCHAR ( 255 ) NOT NULL,
            `merek` VARCHAR ( 255 ) NOT NULL,
            `tipe` VARCHAR ( 255 ) NOT NULL,
            `jenis` VARCHAR ( 255 ) NOT NULL,
            `thpembuatan` VARCHAR ( 255 ) NOT NULL,
            `bahanbakar` VARCHAR ( 255 ) NOT NULL,
            `isisilinder` VARCHAR ( 255 ) NOT NULL,
            `dayamotorpenggerak` VARCHAR ( 255 ) NOT NULL,
            `jbb` VARCHAR ( 255 ) NOT NULL,
            `jbkb` VARCHAR ( 255 ) NOT NULL,
            `jbi` VARCHAR ( 255 ) NOT NULL,
            `jbki` VARCHAR ( 255 ) NOT NULL,
            `mst` VARCHAR ( 255 ) NOT NULL,
            `beratkosong` VARCHAR ( 255 ) NOT NULL,
            `konfigurasisumburoda` VARCHAR ( 255 ) NOT NULL,
            `ukuranban` VARCHAR ( 255 ) NOT NULL,
            `panjangkendaraan` VARCHAR ( 255 ) NOT NULL,
            `lebarkendaraan` VARCHAR ( 255 ) NOT NULL,
            `tinggikendaraan` VARCHAR ( 255 ) NOT NULL,
            `panjangbakatautangki` VARCHAR ( 255 ) NOT NULL,
            `lebarbakatautangki` VARCHAR ( 255 ) NOT NULL,
            `tinggibakatautangki` VARCHAR ( 255 ) NOT NULL,
            `julurdepan` VARCHAR ( 255 ) NOT NULL,
            `julurbelakang` VARCHAR ( 255 ) NOT NULL,
            `jaraksumbu1_2` VARCHAR ( 255 ) NOT NULL,
            `jaraksumbu2_3` VARCHAR ( 255 ) DEFAULT NULL,
            `jaraksumbu3_4` VARCHAR ( 255 ) DEFAULT NULL,
            `dayaangkutorang` VARCHAR ( 255 ) NOT NULL,
            `dayaangkutbarang` VARCHAR ( 255 ) NOT NULL,
            `kelasjalanterendah` VARCHAR ( 255 ) NOT NULL,
            `fotodepansmall` BLOB,
            `fotobelakangsmall` BLOB,
            `fotokanansmall` BLOB,
            `fotokirismall` BLOB,
            `idpetugasuji` INT ( 11 ) DEFAULT NULL,
            `idkepaladinas` INT ( 11 ) DEFAULT NULL,
            `iddirektur` INT ( 11 ) DEFAULT NULL,
            `kodewilayah` VARCHAR ( 5 ) NOT NULL,
            `kodewilayahasal` VARCHAR ( 5 ) NOT NULL,
            `huv_nomordankondisirangka` VARCHAR ( 1 ) DEFAULT '0',
            `huv_nomordantipemotorpenggerak` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisitangkicorongdanpipabahanbakar` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisiconverterkit` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisidanposisipipapembuangan` VARCHAR ( 1 ) DEFAULT '0',
            `huv_ukurandankondisiban` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisisistemsuspensi` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisisistemremutama` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisipenutuplampudanalatpantulcahaya` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisipanelinstrumentdashboard` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisikacaspion` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisispakbor` VARCHAR ( 1 ) DEFAULT '0',
            `huv_bentukbumper` VARCHAR ( 1 ) DEFAULT '0',
            `huv_keberadaandankondisiperlengkapan` VARCHAR ( 1 ) DEFAULT '0',
            `huv_rancanganteknis` VARCHAR ( 1 ) DEFAULT '0',
            `huv_keberadaandankondisifasilitastanggapdaruratuntukmobilbus` VARCHAR ( 1 ) DEFAULT '0',
            `huv_kondisibadankacaengseltempatdudukmbarangbakmuatantertutup` VARCHAR ( 1 ) DEFAULT '0',
            `hum_kondisipenerusdaya` VARCHAR ( 1 ) DEFAULT '0',
            `hum_sudutbebaskemudi` VARCHAR ( 1 ) DEFAULT '0',
            `hum_kondisiremparkir` VARCHAR ( 1 ) DEFAULT '0',
            `hum_fungsilampudanalatpantulcahaya` VARCHAR ( 1 ) DEFAULT '0',
            `hum_fungsipenghapuskaca` VARCHAR ( 1 ) DEFAULT '0',
            `hum_tingkatkegelapankaca` VARCHAR ( 1 ) DEFAULT '0',
            `hum_fungsiklakson` VARCHAR ( 1 ) DEFAULT '0',
            `hum_kondisidanfungsisabukkeselamatan` VARCHAR ( 1 ) DEFAULT '0',
            `hum_ukurankendaraan` VARCHAR ( 1 ) DEFAULT '0',
            `hum_ukurantempatdudukdanbagiandalamkendaraanuntukmobilbus` VARCHAR ( 1 ) DEFAULT '0',
            `alatuji_emisiasapbahanbakarsolar` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_emisicobahanbakarbensin` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_emisihcbahanbakarbensin` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remutamatotalgayapengereman` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remutamaselisihgayapengeremanrodakirikanan1` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remutamaselisihgayapengeremanrodakirikanan2` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remutamaselisihgayapengeremanrodakirikanan3` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remutamaselisihgayapengeremanrodakirikanan4` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remparkirtangan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_remparkirkaki` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_kincuprodadepan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_tingkatkebisingan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_lampuutamakekuatanpancarlampukanan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_lampuutamakekuatanpancarlampukiri` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_lampuutamapenyimpanganlampukanan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_lampuutamapenyimpanganlampukiri` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_penunjukkecepatan` VARCHAR ( 255 ) DEFAULT NULL,
            `alatuji_kedalamanalurban` VARCHAR ( 255 ) DEFAULT NULL,
            `qrcodeurl` VARCHAR ( 32 ) DEFAULT NULL,
            `qrnoujipm133` VARCHAR ( 255 ) DEFAULT NULL,
            `masaberlakuuji` VARCHAR ( 8 ) DEFAULT NULL,
            `tgluji` VARCHAR ( 8 ) NOT NULL,
            `statuslulusuji` TINYINT ( 1 ) NOT NULL DEFAULT '0',
            `uid` VARCHAR ( 255 ) DEFAULT NULL,
            `nokendalikartu` VARCHAR ( 255 ) DEFAULT NULL,
            `datetimepersochip` VARCHAR ( 14 ) DEFAULT NULL,
            `datetimepersovisual` VARCHAR ( 14 ) DEFAULT NULL,
            `datetimecetaksertifikat` VARCHAR ( 14 ) DEFAULT NULL,
            `datetimeupload` VARCHAR ( 14 ) DEFAULT NULL,
            `vcode` VARCHAR ( 32 ) DEFAULT NULL,
            `created_at` datetime DEFAULT NULL,
            `updated_at` datetime DEFAULT NULL,
            PRIMARY KEY ( `idx` ),
            UNIQUE KEY `datapengujian_qrcodeurl_key` ( `qrcodeurl` ),
            KEY `idx_idx` ( `idx` ),
        KEY `nouji_idx` ( `nouji` ) 
        ) ENGINE = INNODB AUTO_INCREMENT = 2 DEFAULT CHARSET = latin1;");

        // Schema::create('datapengujian', function (Blueprint $table) {
        //     $table->bigIncrements('idx');
        //     $table->string('statuspenerbitan', 255);
        //     $table->string('nouji', 255);
        //     $table->string('nama', 255);
        //     $table->string('alamat', 255);
        //     $table->string('noidentitaspemilik', 255);
        //     $table->string('nosertifikatreg', 255);
        //     $table->string('tglsertifikatreg', 255);
        //     $table->string('noregistrasikendaraan', 255);
        //     $table->string('norangka', 255);
        //     $table->string('nomesin', 255);
        //     $table->string('merek', 255);
        //     $table->string('tipe', 255);
        //     $table->string('jenis', 255);
        //     $table->string('thpembuatan', 255);
        //     $table->string('bahanbakar', 255);
        //     $table->string('isisilinder', 255);
        //     $table->string('dayamotorpenggerak', 255);
        //     $table->string('jbb', 255);
        //     $table->string('jbkb', 255);
        //     $table->string('jbi', 255);
        //     $table->string('jbki', 255);
        //     $table->string('mst', 255);
        //     $table->string('beratkosong', 255);
        //     $table->string('konfigurasisumburoda', 255);
        //     $table->string('ukuranban', 255);
        //     $table->string('panjangkendaraan', 255);
        //     $table->string('lebarkendaraan', 255);
        //     $table->string('tinggikendaraan', 255);
        //     $table->string('panjangbakatautangki', 255);
        //     $table->string('lebarbakatautangki', 255);
        //     $table->string('tinggibakatautangki', 255);
        //     $table->string('jalurdepan', 255);
        //     $table->string('jalurbelakang', 255);
        //     $table->string('jaraksumbu1_2', 255);
        //     $table->string('jaraksumbu2_3', 255);
        //     $table->string('jaraksumbu3_4', 255);
        //     $table->string('dayaangkutorang', 255);
        //     $table->string('dayaangkutbarang', 255);
        //     $table->string('kelasjalanterendah', 255);
        //     $table->string('fotodepansmall', 255);
        //     $table->string('fotobelakangsmall', 255);
        //     $table->string('fotokanansmall', 255);
        //     $table->string('fotokirismall', 255);
        //     $table->string('idpetugasuji', 255);
        //     $table->string('idkepaladinas', 255);
        //     // $table->string('iddirektur', 255);
        //     // $table->string('kodewilayah', 255);
        //     // $table->string('kodewilayahasal', 255);
        //     // $table->string('huv_nomordankondisirangka', 255);
        //     // $table->string('huv_nomordantipemotorpenggerak', 255);
        //     // $table->string('huv_kondisitangkicorongdanpipabahanbakar', 255);
        //     // $table->string('huv_kondisiconverterkit', 255);
        //     // $table->string('huv_kondisipipapembuangan', 255);
        //     // $table->string('huv_ukurandankondisiban', 255);
        //     // $table->string('huv_kondisisistemsuspensi', 255);
        //     // $table->string('huv_kondisisistemremutama', 255);
        //     // $table->string('huv_kondisipenutuplampudanalatpantulcahaya', 255);
        //     // $table->string('huv_kondisipanelinstrumentdashboard', 255);
        //     // $table->string('huv_kondisikacaspion', 255);
        //     // $table->string('huv_kondisispakbor', 255);
        //     // $table->string('huv_bentukbumper', 255);
        //     // $table->string('huv_keberadaandankondisiperlengkapan', 255);
        //     // $table->string('huv_rancanganteknis', 255);
        //     // $table->string('huv_keberadaandankondisifasilitastanggapdaruratuntukmobilbus', 255);
        //     // $table->string('huv_kondisibadankacaengseltempatdudukmbarangbakmuatantertutup', 255);
        //     // $table->string('hum_kondisipenerusdaya', 255);
        //     // $table->string('hum_sudutbebaskemudi', 255);
        //     // $table->string('hum_kondisiremparkir', 255);
        //     // $table->string('hum_fungsilampudanalatpantulcahaya', 255);
        //     // $table->string('hum_fungsipenghapuskaca', 255);
        //     // $table->string('hum_tingkatkegelapankaca', 255);
        //     // $table->string('hum_fungsiklakson', 255);
        //     // $table->string('hum_kondisidanfungsisabukkeselamatan', 255);
        //     // $table->string('hum_ukurankendaraan', 255);
        //     // $table->string('hum_ukurantempatdudukdanbagiandalamkendaraanuntukmobilbus', 255);
        //     // $table->string('alatuji_emisiasapbahanbakarsolar', 255);
        //     // $table->string('alatuji_emisicobahanbakarbensin', 255);
        //     // $table->string('alatuji_emisihcbahanbakarbensin', 255);
        //     // $table->string('alatuji_remutamatotalgayapengereman', 255);
        //     // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan1', 255);
        //     // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan2', 255);
        //     // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan3', 255);
        //     // $table->string('alatuji_remutamaselisihgayapengeremanrodakirikanan4', 255);
        //     // $table->string('alatuji_remparkirtangan', 255);
        //     // $table->string('alatuji_remparkirkaki', 255);
        //     // $table->string('alatuji_kincuprodadepan', 255);
        //     // $table->string('alatuji_tingkatkebisingan', 255);
        //     // $table->string('alatuji_lampuutamakekuatanpancarlampukanan', 255);
        //     // $table->string('alatuji_lampuutamakekuatanpancarlampukiri', 255);
        //     // $table->string('alatuji_lampuutamapenyimpanganlampukanan', 255);
        //     // $table->string('alatuji_lampuutamapenyimpanganlampukiri', 255);
        //     // $table->string('alatuji_penunjukkecepatan', 255);
        //     // $table->string('alatuji_kedalamanalurban', 255);
        //     // $table->string('qrcodeurl', 255);
        //     // $table->string('qrnoujipm133', 255);
        //     // $table->string('masaberlakuuji', 255);
        //     // $table->string('tgluji', 255);
        //     // $table->string('statuslulusuji', 255);
        //     // $table->string('uid', 255);
        //     // $table->string('nokendalikartu', 255);
        //     // $table->string('datetimepersochip', 255);
        //     // $table->string('datetimepersovisual', 255);
        //     // $table->string('datetimecetaksertifikat', 255);
        //     // $table->string('datetimeupload', 255);
        //     // $table->string('vcode', 255);
        //     // $table->string('cetaksukses', 255);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapengujian');
    }
};
