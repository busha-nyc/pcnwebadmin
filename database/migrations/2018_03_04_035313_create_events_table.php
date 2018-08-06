<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('event_date');
            $table->string('event_title',100);
            $table->string('event_location', 75);
            $table->string('event_address', 100)->nullable();
            $table->enum('event_type',['Board Meeting','Fundraiser', 'Marketing', 'Public Relations', 'PCN-Kids Seminar', 'Committee Meeting']);
            $table->text('event_description');
            $table->string('event_sponsor',100)->nullable();
            $table->string('event_url', 255)->nullable();
            $table->mediumInteger('event_budget')->nullable();
            $table->mediumInteger('event_cost')->nullable();
            $table->integer('event_attendance')->nullable();
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
        Schema::dropIfExists('events');
    }
}
