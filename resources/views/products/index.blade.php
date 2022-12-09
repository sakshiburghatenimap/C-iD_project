<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Listing of products</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('products.create') }}"> Create Product</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Product Name</th>
<th>Brand</th>
<th>Category</th>
<th>Product Type</th>
<th>Product Image</th>
<th>Description</th>
<th>Model Year</th>
<th>Product Code</th>
<th>Selling Price</th>
<th>Calculation price</th>
<th>Frequency</th>
<th>Maintanance Sheet</th>
<th>Installation Sheet</th>
<th>Brand_logo</th>
<th>Life span</th>
<th>Environment score </th>
<th>Energy neutral</th>
<th>Returnable</th>
<th>Movable</th>
<th>Compatible</th>
<th>Demountable</th>
<th>Pace_layering</th>
<th>Recycle_Content</th>
<th>BioBased</th>
<th>Extendable_life</th>
<th>Manufacturer</th>
<th>Website_Brand</th>
<th>Bearing_Capacity</th>
<th>U_Value</th>
<th>Fire_Resistence</th>
<th>Lenght_X</th>
<th>Height_Y</th>
<th>Widht_Z</th>
<th>Construction_Method</th>
<th>Building_System</th>
<th>Construction_Type</th>
<th>Interior_Finish</th>
<th>Exterior_Cladding</th>
<th>Color</th>
<th>Designed_By</th>
<th>Configuaration</th>
<th>Specification_Text</th>
<th>3D_Object</th>
<th width="280px">Action</th>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->product_name }}</td>
<td>{{ $product->brand }}</td>
<td>{{ $product->category }}</td>
<td>{{ $product->product_type }}</td>
<td>{{ $product->product_image }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->model_year }}</td>
<td>{{ $product->product_code }}</td>
<td>{{ $product->selling_price }}</td>
<td>{{ $product->calculation_price }}</td>
<td>{{ $product->frequency }}</td>
<td>{{ $product->maintenance_sheet }}</td>
<td>{{ $product->installation_sheet }}</td>
<td>{{ $product->brand_log }}</td>
<td>{{ $product->life_span }}</td>
<td>{{ $product->env_score }}</td>
<td>{{ $product->energy_neutral }}</td>
<td>{{ $product->returnable }}</td>
<td>{{ $product->movable }}</td>
<td>{{ $product->compatible }}</td>
<td>{{ $product->demountable }}</td>
<td>{{ $product->pace_layering }}</td>
<td>{{ $product->recycled_content }}</td>
<td>{{ $product->biobased }}</td>
<td>{{ $product->extendable_life }}</td>
<td>{{ $product->manufacturer }}</td>
<td>{{ $product->website_brand }}</td>
<td>{{ $product->bearing_capacity }}</td>
<td>{{ $product->fire_resistance }}</td>
<td>{{ $product->length_x }}</td>
<td>{{ $product->height_y }}</td>
<td>{{ $product->width_z }}</td>
<td>{{ $product->construction_method }}</td>
<td>{{ $product->building_system }}</td>
<td>{{ $product->construction_type }}</td>
<td>{{ $product->interior_finish }}</td>
<td>{{ $product->exterior_cladding }}</td>
<td>{{ $product->color }}</td>
<td>{{ $product->designed_by }}</td>
<td>{{ $product->configuration }}</td>
<td>{{ $product->specification_text }}</td>
<td>{{ $product->td_object }}</td>

<form action="{{ route('products.destroy',$product->id) }}" method="Post">
<td>
<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $products->links() !!}
</body>
</html>