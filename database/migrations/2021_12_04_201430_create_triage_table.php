<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('triage')){
            Schema::create('triage', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('patient_id');
                $table->string('temperature');
                $table->string('pulse_rate');
                $table->string('blood_pressure');
                $table->unsignedInteger('created_by')->nullable();
                $table->unsignedInteger('updated_by');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triage');
    }
}
