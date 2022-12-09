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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('brand');
            $table->string('category');
            $table->string('product_type');
            $table->string('product_image');
            $table->string('description');
            $table->string('model_year');
            $table->string('product_code');
            $table->string('selling_price');
            $table->string('calculation_price');
            $table->string('frequency');
            $table->string('maintenance_sheet');
            $table->string('installation_sheet');
            $table->string('brand_log');
            $table->string('life_span');
            $table->string('env_score');
            $table->boolean('energy_neutral');
            $table->boolean('returnable');
            $table->boolean('movable');
            $table->boolean('compatible');
            $table->boolean('demountable');
            $table->boolean('pace_layering');
            $table->boolean('recycled_content');
            $table->boolean('biobased');
            $table->boolean('extendable_life');
            $table->string('manufacturer');
            $table->string('website_brand');
            $table->string('bearing_capacity');
            $table->string('u-value');
            $table->string('sound_insulation');
            $table->string('fire_resistance');
            $table->string('length_x');
            $table->string('height_y');
            $table->string('width_z');
            $table->string('construction_method');
            $table->string('building_system');
            $table->string('construction_type');
            $table->string('interior_finish');
            $table->string('exterior_cladding');
            $table->string('color');
            $table->string('designed_by');
            $table->string('configuration');
            $table->string('specification_text');
            $table->string('td_object');
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
