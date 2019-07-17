<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class Viewjkmjkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::unprepared('CREATE VIEW `jkm_with_jkp` AS
        SELECT
        `jp`.`pegawai_id` AS `pegawai_id`,
        `jp`.`jdw_kerja_m_id` AS `jdw_kerja_m_id`,
        `jp`.`jdw_kerja_m_mulai` AS `jdw_kerja_m_mulai`,
        `jm`.`jdw_kerja_m_name` AS `jdw_kerja_m_name`
        FROM
        (`jdw_kerja_pegawai` `jp`
          LEFT JOIN `jdw_kerja_m` `jm` ON ((`jp`.`jdw_kerja_m_id` = `jm`.`jdw_kerja_m_id`)))');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          DB::unprepared('DROP view IF EXISTS VIEW_P_AKTIF();');
    }
}
