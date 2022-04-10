<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('nama_tamu');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('tipe_kamar');
            $table->integer('jml_kamar');
            $table->string('cek_in');
            $table->string('cek_out');
            $table->timestamps();
        });

        // trigger
        DB::unprepared('
            CREATE TRIGGER `beli_kamar` AFTER INSERT ON `reservasis`
            FOR EACH ROW BEGIN
                UPDATE kamars SET jml_kamar = jml_kamar-NEW.jml_kamar
                WHERE tp_kamar = NEW.tipe_kamar;
            END
        ');

        // stored procedure
        // DB::unprepared('
        //     DELIMITER $$
        //     CREATE PROCEDURE `FasilitasKamar`()
        //     BEGIN
        //         SELECT kamar_id, nama_fasilitas FROM fasi_kamars;
        //     END$$
        //     DELIMITER ;
        // ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
        DB::unprepared('DROP TRIGGER IF EXISTS `beli_kamar`');
        // DB::unprepared('DROP PROCEDURE IF EXISTS `FasilitasKamar`');
    }
};
