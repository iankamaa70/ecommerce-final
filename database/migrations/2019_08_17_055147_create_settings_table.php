<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('homepage_text1');
            $table->text('homepage_text2');
            $table->string('homepage_youtube');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_address');
            $table->string('fb');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('li');
            $table->string('ig');
            $table->string('paypal_cmd');
            $table->string('paypal_email');
            $table->string('paypal_item_name');
            $table->text('paypal_text');
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
        Schema::dropIfExists('settings');
    }
}
