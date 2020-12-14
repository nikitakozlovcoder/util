<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('phone1');
            $table->longText('phone2');
            $table->longText('email');
            $table->longText('addr');
            $table->longText('ogrn');
            $table->longText('inn');
            $table->longText('rs');
            $table->longText('head');
            $table->longText('social');
            $table->longText('content');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts_pages');
    }
}
