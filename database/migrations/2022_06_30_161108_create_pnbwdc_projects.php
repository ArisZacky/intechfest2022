<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePnbwdcProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnbwdc_projects', function (Blueprint $table) {
            $table->id();
            $table->regis_user_id();
            $table->project();
            $table->created_at();
            $table->updated_at();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pnbwdc_projects');
    }
}
