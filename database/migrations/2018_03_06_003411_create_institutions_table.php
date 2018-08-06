<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institution_id');
            $table->string('institution');
            $table->enum('institution_type',['elementary','secondary','tertiary'])->nullable();
            $table->string('address_line1',75)->nullable();
            $table->string('address_line2',75)->nullable();
            $table->string('city', 75)->nullable();
            $table->string('state_parish_territory', 75)->nullable();
            $table->string('country', 75)->nullable();
            $table->string('telephone_no', 14)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('webURL', 150)->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
