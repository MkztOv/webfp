<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SPPAKTIF extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE PROCEDURE VIEW_P_AKTIF()
        BEGIN
        SELECT p.pegawai_id, p.pegawai_pin, p.pegawai_nip, p.pegawai_nama,
              jdw_kerja_m_name, jdw_kerja_m_mulai, p.tempat_lahir,
              p.tgl_lahir, pg1.pembagian1_nama, pg2.pembagian2_nama, pg3.pembagian3_nama,
              p.pegawai_pwd, p.pegawai_rfid, p.pegawai_telp, p.pegawai_privilege,
              p.pegawai_status, p.tgl_mulai_kerja, kk.kontrak_end
        FROM pegawai p
        left join
            jkm_with_jkp jj
            on p.pegawai_id = jj.pegawai_id
        left join
            pembagian1 pg1
            on p.pembagian1_id = pg1.pembagian1_id
        left join
            pembagian2 pg2
            on p.pembagian2_id = pg2.pembagian2_id
        left join
            pembagian3 pg3
            on p.pembagian3_id = pg3.pembagian3_id
        left join
            kontrak_kerja kk
            on p.pegawai_id = kk.pegawai_id;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS VIEW_P_AKTIF();');
    }
}
