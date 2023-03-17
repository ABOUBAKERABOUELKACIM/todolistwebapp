<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userlogin', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }
    
    public function down()
    {
        Schema::table('userlogin', function (Blueprint $table) {
            $table->timestamps();
        });
    }
}
