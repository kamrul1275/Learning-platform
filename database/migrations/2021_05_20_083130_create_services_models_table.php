<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;
use App\Models\ServicesModel;
use Illuminate\Support\Facades\Schema;


class CreateServicesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_models',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('service_name');
            $table->string('service_des');
            $table->string('service_img');
        });
    }







    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_models');
    }
}
