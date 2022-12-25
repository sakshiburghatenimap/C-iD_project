<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('brand');
            $table->string('category');
            $table->string('type');
            $table->string('image');
            $table->string('description');
            $table->string('year');
            $table->string('sprice');
            $table->string('cprice');
            $table->string('frequency');
            $table->string('msheet');
            $table->string('isheet');
            $table->string('blogo');
            $table->string('span');
            $table->string('score');
            $table->string('energyn');
            $table->string('returnable');
            $table->string('movable');
            $table->string('compatible');
            $table->string('demountable');
            $table->string('pacel');
            $table->string('recycled');
            $table->string('biobased');
            $table->string('extendable');
            $table->string('manufacturer');
            $table->string('website');
            $table->string('bearing');
            $table->string('value');
            $table->string('soundi');
            $table->string('resistance');
            $table->string('length');
            $table->string('height');
            $table->string('weight');
            $table->string('method');
            $table->string('system');
            $table->string('ctype');
            $table->string('ifinish');
            $table->string('color');
            $table->string('designed');
            $table->string('configuration');
            $table->string('specification');
            $table->string('object');
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
        Schema::dropIfExists('products');
    }
}
