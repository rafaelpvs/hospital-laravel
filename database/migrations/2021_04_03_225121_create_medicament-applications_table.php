<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament-applications', function (Blueprint $table) {
            $table->id();
            $table->integer('internment_id')->unsigned()->index();
            $table->integer('medicament_id')->unsigned()->index();
            $table->integer('nurse_id')->unsigned()->index();
            $table->timestamp('application_time')->nullable();
            $table->integer('doctor_recieper')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicament-applications');
    }
}
