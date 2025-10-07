<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('students', function(Blueprint $table) {
            $table->unsignedBigInteger('college_address_id')->afer('phone_number');
        });

        DB::statement('update students set college_address_id = college_address');

        Schema::table('students', function(Blueprint $table) {
            $table->foreign('college_address_id')->references('id')->on('addresses');
            $table->dropColumn('college_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function(Blueprint $table) {
            $table->integer('college_address');
            $table->dropForeign('students_college_address_id_foreign');
        });

        DB::statement('update students set college_address = college_address_id');

        Schema::table('students', function(Blueprint $table) {
            $table->dropColumn('college_address_id');
        });

    }
}
