<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("ip");
            $table->string("username");
            $table->string("password");
            $table->string("dns_name");
            $table->string('version')->nulleable();
            $table->string('web_port')->nulleable();
            $table->string('lan_interface')->nulleable();
            $table->integer('api_port')->default(8728);
            $table->string('coordinates')->nulleable();
            $table->string('status')->default('online');
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
        Schema::dropIfExists('routers');
    }
}
