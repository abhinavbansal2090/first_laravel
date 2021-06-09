<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('user');
          $table->string('mobile');
          $table->string('assets');
          $table->string('priority');
          $table->string('serialNo');
          $table->string('ModelNo');
          $table->string('ticketStatus');
          $table->string('agent');
          $table->timestamps('created_at');
          $table->timestamps('updated_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subadmin');
    }
}
