<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all()->count();
        $products = Product::latest()->paginate(50);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        
        $image = $request->file('image');

         foreach($image as $product_image)
         {
        $name_gen = hexdec(uniqid()).'.'.$product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(300,300)->save('image/product'.$name_gen);

        $last_img = 'image/product' .$name_gen;
    
        Product::insert([
               'pname' => $request->pname,
               'brand'=> $request->brand ,
               'category'=> $request-> category,
                'type'=> $request->type, 
                'image'=>$last_img ,
                'description'=> $request->description,
                'year'=> $request->year,
                'sprice'=> $request->sprice,
                'cprice'=> $request->cprice,
                'frequency'=> $request->frequency,
                'msheet'=> $request->msheet,
                'isheet'=> $request->isheet,
                'blogo'=> $request->blogo,
                'span'=> $request->span,
                'score'=> $request->score,
                'energyn'=> $request->energyn,
                'returnable'=> $request->returnable,
                'movable'=> $request->movable,
                'compatible'=> $request->compatible,
                'demountable'=> $request->demountable,
                'pacel'=> $request->pacel,
                'recycled'=> $request->recycled,
                'biobased'=> $request->biobased,
                'extendable'=> $request->extendable,
                'manufacturer'=> $request->manufacturer,
                'website'=> $request->website,
                'bearing'=> $request->bearing,
                'value'=> $request->value,
                'soundi'=> $request->soundi,
                'resistance'=> $request->resistance,
                'length'=> $request->length,
                'height'=> $request->height,
                'weight'=> $request->weight,
                'method'=> $request->method,
                'system'=> $request->system,
                'ctype'=> $request->ctype,
                'ifinish'=> $request->ifinish,
                'color'=> $request->color,
                'designed'=> $request->designed,
                'configuration'=> $request->configuration,
                'specification'=> $request->specification,
                'object'=> $request->object,
                'created_at'=>Carbon::now()
        ]);
       
    }
       
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',['product'=>$product]);
    }

    public function update(Request $request, Product $product)
    {
       
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }

}
