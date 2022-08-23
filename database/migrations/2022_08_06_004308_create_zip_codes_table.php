<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();
            $table->string('d_codigo', 10);
            $table->string('d_asenta', 100)->default('');
            $table->string('d_tipo_asenta', 100)->default('');
            $table->string('D_mnpio', 100)->default('');
            $table->string('d_estado', 100)->default('');
            $table->string('d_ciudad', 100)->default('');
            $table->string('d_CP', 10)->default('');
            $table->string('c_estado', 10)->default('');
            $table->string('c_oficina', 10)->default('');
            $table->string('c_CP', 10)->default('');
            $table->string('c_tipo_asenta', 10)->default('');
            $table->string('c_mnpio', 10)->default('');
            $table->string('id_asenta_cpcons', 10)->default('');
            $table->string('d_zona', 10)->default('');
            $table->string('c_cve_ciudad', 10)->default('');
            $table->timestamps();

            $table->index('d_codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
}
