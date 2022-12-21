<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql2';

    protected $fillable = [
        'product_name',
        'brand',
        'category',
        'product_type',
        'product_image',
        'description',
        'model_year',
        'product_code',
        'selling_price',
        'calculation_price',
        'frequency',
        'maintenance_sheet',
        'installation_sheet',
        'brand_log',
        'life_span',
        'env_score',
        'energy_neutral',
        'returnable',
        'movable',
        'compatible',
        'demountable',
        'pace_layering',
        'recycled_content',
        'biobased',
        'extendable_life',
        'manufacturer',
        'website_brand',
        'bearing_capacity',
        'u_value',
        'fire_resistance',
        'length_x',
        'height_y',
        'width_z',
        'construction_method',
        'building_system',
        'construction_type',
        'interior_finish',
        'exterior_cladding',
        'color',
        'designed_by',
        'configuration',
        'specification_text',
        'td_object',

    ];

}
