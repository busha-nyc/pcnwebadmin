<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('students', function(Blueprint $table) {
            $table->BigIncrements('student_id')->unsigned;
            $table->string('student_first_name', 35);
            $table->string('student_last_name', 50);
            $table->integer('award_year')->nullable();
            $table->enum('award_code', ['FRED', 'ERNA', 'HDGR', 'PCNK'])->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->integer('elementary_school_id')->nullable();
            $table->integer('sixth_grade_teacher_id')->nullable();
            $table->text('biographical_summary')->nullable();
            $table->string('awardee_status', 1)->nullable();
            $table->timestamps();
        });
        //then set autoincrement to 1000
        DB::update('ALTER TABLE students AUTO_INCREMENT = 9350;')
        /**
    }
    
     * Reverse the migrations.
     *
     * @return void
     */
        public function down() {
            Schema::dropIfExists('students');
        }
    }