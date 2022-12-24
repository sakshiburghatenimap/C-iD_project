<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
     { 
        
            $data['products'] = Product::orderBy('id','desc')->paginate(5);
            return view('products.index', $data);
     }

     public function create()
    {
       return view('products.create');
    }

     public function store(Request $request)
     {
        $request->validate([

        'product_name'=> 'required',
        'brand'=> 'required',
        'category'=> 'required',
        'product_type'=> 'required',
        'product_image'=> 'required',
        'description'=> 'required',
        'model_year'=> 'required',
        'product_code'=> 'required',
        'selling_price'=> 'required',
        'calculation_price'=> 'required',
        'frequency'=> 'required',
        'maintenance_sheet'=> 'required',
        'installation_sheet'=> 'required',
        'brand_log'=> 'required',
        'life_span'=> 'required',
        'env_score'=> 'required',
        'energy_neutral'=> 'required',
        'returnable'=> 'required',
        'movable'=> 'required',
        'compatible'=> 'required',
        'demountable'=> 'required',
        'pace_layering'=> 'required',
        'recycled_content'=> 'required',
        'biobased'=> 'required',
        'extendable_life'=> 'required',
        'manufacturer'=> 'required',
        'website_brand'=> 'required',
        'bearing_capacity'=> 'required',
        'u_value'=> 'required',
        'fire_resistance'=> 'required',
        'length_x'=> 'required',
        'height_y'=> 'required',
        'width_z'=> 'required',
        'construction_method'=> 'required',
        'building_system'=> 'required',
        'construction_type'=> 'required',
        'interior_finish'=> 'required',
        'exterior_cladding'=> 'required',
        'color'=> 'required',
        'designed_by'=> 'required',
        'configuration'=> 'required',
        'specification_text'=> 'required',
        'td_object'=> 'required',
       ]);
       $uploadImage='';

            $product = new Product;
            $product->product_name = $request->product_name;
            $product->brand = $request->brand;
            $product->category = $request->category;
            $product->product_type = $request->product_type;
            if($files=$request->file('image'))
            {
                $dest= public_path('/pimg/');
                $img=date('YmdHis').".".$files->getClientOriginalExtension();
                $files->move($dest,$img);
                $uploadImage=$img;
            }
            $product->product_image=$uploadImage;
            $product->description = $request->description;  
            $product->model_year = $request->model_year;
            $product->product_code = $request->product_code;  
            $product->selling_price = $request->selling_price;
            $product->calculation_price = $request->calculation_price;  
            $product->frequency = $request->frequency;
            $product->maintenance_sheet = $request->maintenance_sheet;  
            $product->installation_sheet = $request->installation_sheet;
            $product->brand_log = $request->brand_log;  
            $product->life_span = $request->life_span;
            $product->env_score = $request->env_score;  
            $product->energy_neutral = $request->energy_neutral;
            $product->returnable = $request->returnable;  
            $product->movable = $request->movable;
            $product->compatible = $request->compatible;  
            $product->demountable = $request->demountable;
            $product->pace_layering = $request->pace_layering;  
            $product->recycled_content = $request->recycled_content;
            $product->biobased = $request->biobased;  
            $product->extendable_life = $request->extendable_life;
            $product->manufacturer = $request->manufacturer; 
            $product->website_brand = $request->website_brand;
            $product->bearing_capacity = $request->bearing_capacity;  
            $product->u_value = $request->u_value;
            $product->fire_resistance = $request->fire_resistance;  
            $product->length_x = $request->length_x;
            $product->height_y = $request->height_y;  
            $product->width_z = $request->width_z;
            $product->construction_method = $request->construction_method;  
            $product->building_system = $request->building_system;
            $product->construction_type = $request->construction_type;  
            $product->interior_finish = $request->interior_finish;
            $product->exterior_cladding = $request->exterior_cladding;  
            $product->color = $request->color;
            $product->designed_by = $request->designed_by;  
            $product->configuration = $request->configuration;
            $product->specification_text = $request->specification_text;
            $product->td_object = $request->td_object;
            $product->save();
            return redirect()->route('products.index')
            ->with('success','Product has been created successfully.');
       }

            public function show(Product $product)
            {
               return view('products.show',compact('product'));
            } 

            public function edit(Product $product)
            {
                return view('products.edit',compact('product'));
            }

            public function update(Request $request, $id)
            {
                $request->validate([

                    'product_name'=> 'required',
                    'brand'=> 'required',
                    'category'=> 'required',
                    'product_type'=> 'required',
                    'product_image'=> 'required',
                    'description'=> 'required',
                    'model_year'=> 'required',
                    'product_code'=> 'required',
                    'selling_price'=> 'required',
                    'calculation_price'=> 'required',
                    'frequency'=> 'required',
                    'maintenance_sheet'=> 'required',
                    'installation_sheet'=> 'required',
                    'brand_log'=> 'required',
                    'life_span'=> 'required',
                    'env_score'=> 'required',
                    'energy_neutral'=> 'required',
                    'returnable'=> 'required',
                    'movable'=> 'required',
                    'compatible'=> 'required',
                    'demountable'=> 'required',
                    'pace_layering'=> 'required',
                    'recycled_content'=> 'required',
                    'biobased'=> 'required',
                    'extendable_life'=> 'required',
                    'manufacturer'=> 'required',
                    'website_brand'=> 'required',
                    'bearing_capacity'=> 'required',
                    'u_value'=> 'required',
                    'fire_resistance'=> 'required',
                    'length_x'=> 'required',
                    'height_y'=> 'required',
                    'width_z'=> 'required',
                    'construction_method'=> 'required',
                    'building_system'=> 'required',
                    'construction_type'=> 'required',
                    'interior_finish'=> 'required',
                    'exterior_cladding'=> 'required',
                    'color'=> 'required',
                    'designed_by'=> 'required',
                    'configuration'=> 'required',
                    'specification_text'=> 'required',
                    'td_object'=> 'required',
                ]);

                    $product = Product::find($id);
                    $product = new Product;
                    $product->product_name = $request->product_name;
                    $product->brand = $request->brand;
                    $product->category = $request->category;
                    $product->product_type = $request->product_type;
                    $product->product_image = $request->product_image;
                    $product->description = $request->description;  
                    $product->model_year = $request->model_year;
                    $product->product_code = $request->product_code;  
                    $product->selling_price = $request->selling_price;
                    $product->calculation_price = $request->calculation_price;  
                    $product->frequency = $request->frequency;
                    $product->maintenance_sheet = $request->maintenance_sheet;  
                    $product->installation_sheet = $request->installation_sheet;
                    $product->brand_log = $request->brand_log;  
                    $product->life_span = $request->life_span;
                    $product->env_score = $request->env_score;  
                    $product->energy_neutral = $request->energy_neutral;
                    $product->returnable = $request->returnable;  
                    $product->movable = $request->movable;
                    $product->compatible = $request->compatible;  
                    $product->demountable = $request->demountable;
                    $product->pace_layering = $request->pace_layering;  
                    $product->recycled_content = $request->recycled_content;
                    $product->biobased = $request->biobased;  
                    $product->extendable_life = $request->extendable_life;
                    $product->manufacturer = $request->manufacturer; 
                    $product->website_brand = $request->website_brand;
                    $product->bearing_capacity = $request->bearing_capacity;  
                    $product->u_value = $request->u_value;
                    $product->fire_resistance = $request->fire_resistance;  
                    $product->length_x = $request->length_x;
                    $product->height_y = $request->height_y;  
                    $product->width_z = $request->width_z;
                    $product->construction_method = $request->construction_method;  
                    $product->building_system = $request->building_system;
                    $product->construction_type = $request->construction_type;  
                    $product->interior_finish = $request->interior_finish;
                    $product->exterior_cladding = $request->exterior_cladding;  
                    $product->color = $request->color;
                    $product->designed_by = $request->designed_by;  
                    $product->configuration = $request->configuration;
                    $product->specification_text = $request->specification_text;
                    $product->td_object = $request->td_object;
                    $product->save();
                    return redirect()->route('products.index')
                    ->with('success','Product Has Been updated successfully');
                 }

                    public function destroy(Product $product)
                   {
                        $product->delete();
                        return redirect()->route('products.index')
                        ->with('success','Product has been deleted successfully');
                    }
              }

