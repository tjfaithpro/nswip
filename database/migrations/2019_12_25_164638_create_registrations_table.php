<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('surname');
            $table->string('middlename')->nullable();
            $table->string('firstname');
            $table->string('email')->primary();;
            $table->string('schoolRegName');
            $table->string('nameOfSchool');
            $table->string('schoolCat');
            $table->string('schoolID')->nullable();
            $table->string('schoolRCNo')->nullable();
            $table->string('officialEmail')->nullable();
            $table->text('schoolAddress');
            $table->string('propritorName');
            $table->longText('taxRate')->nullable();
            $table->string('taxId')->nullable();
            $table->string('businessTel')->nullable();
            $table->string('agentID')->nullable();
            $table->string('nswipPackage');
            $table->string('setupConfig')->nullable();
            $table->string('domain');
            $table->string('fileUpload');
            $table->string('generatedschoolID');
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
        Schema::dropIfExists('registrations');
    }
}
