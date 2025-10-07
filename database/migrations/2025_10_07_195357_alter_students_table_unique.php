<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStudentsTableUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function(Blueprint $table)  {
            $table->string('name')->unique()->change();
            $table->string('email')->unique()->change();
            $table->string('phone_number')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function(Blueprint $table)  {
            $table->dropUnique(['name']);
            $table->dropUnique(['email']);
            $table->dropUnique(['phone_number']);
        });
    }
}
