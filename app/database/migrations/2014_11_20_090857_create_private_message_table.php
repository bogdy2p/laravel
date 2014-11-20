<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('private_message', function(Blueprint $table) {
            
            $table->increments('id');
            $table->text('content');
            $table->integer('sent_from');
            $table->integer('sent_to');
            $table->integer('status');
            $table->integer('attachment_id');
            $table->integer('times_viewed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('private_message');
    }

}
