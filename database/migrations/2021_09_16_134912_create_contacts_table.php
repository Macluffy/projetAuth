<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('btn1');
            $table->string('btn2');
            $table->string('btn3');
            $table->string('btn4');
            $table->string('btn5');
            $table->string('btn6');
            $table->string('btn7');
            $table->string('btn8');
            $table->string('btn9');
            $table->string('btn10');
            $table->string('btn11');
            $table->string('btn12');
            $table->string('btn13');
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
        Schema::dropIfExists('contacts');
    }
}
