<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->unique();
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('hosting');
            $table->string('dashboard');
            $table->string('ssl');
            $table->date('sslexpire');
            $table->string('wordpress');
            $table->decimal('cost', 8, 2);
            $table->date('due_date');
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
        Schema::dropIfExists('clients');
    }
}
