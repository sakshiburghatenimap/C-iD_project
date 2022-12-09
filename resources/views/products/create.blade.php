@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center"></h3>
                    <div class="card-body">
                        <form action="{{ route('products.index') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                            <label for="product_name">Product Name </label>
                                <input type="text" placeholder="Product Name" id="product_name" class="form-control" name="product_name" required autofocus>    
                            </div>
                            <div class="form-group mb-3">
                            <label for="brand">Brand </label>
                                <input type="text" placeholder="Brand Name" id="brand" class="form-control" name="brand" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="category">Choose a category:</label>
                            <select name="category" id="category">
                                <option value="opt1">Opt1</option>
                                <option value="opt2">Opt2</option>
                                <option value="opt3">Opt3</option>
                                <option value="opt4">Opt4</option>
                            </select>
                            <br><br>
                            </div>
                            <div class="form-group mb-3" width="30%">
                            <label for="product_type">Choose Product Type:</label>
                            <select name="product_type" id="product_type">
                                <option value="opt1">Choose The Product Type </option>
                                <option value="opt2">0* elements for volumes (siting)</option>
                                <option value="opt3">00 Rooms (indoor and outdoor areas)</option>
                                <option value="opt5">1* elements for foundation</option>
                                <option value="opt6">11 Groundwork (soil)</option>
                                <option value="opt7">13 Floors on foundation (slabs on grade)</option>
                                <option value="opt4">16 Foundation structures and footing, retaining walls (frost walls)</option>
                                <option value="opt8">17 Pile foundations</option>
                                <option value="opt9">2* composite elements / components (++ = including 4* and 3*)</option>
                                <option value="opt10">21++ Exterior walls (facades)</option>
                                <option value="opt11">22++ Interior walls (interior walls)</option>
                                <option value="opt12">23++ Floors (intermediate floors, gallery floors, balconies and landings)</option>
                                <option value="opt13">24++ Stairs and ramps</option>
                                <option value="opt14">27++ Roofs (sloping and flat roofs)</option>
                                <option value="opt15">28 Main supporting structures, columns and beams (structure)</option>
                                <option value="opt16">3* partial elements (+ = including 4*)</option>
                                <option value="opt17">31+ Exterior wall openings</option>
                                <option value="opt18">31.1+ Outer wall openings with passage</option>
                                <option value="opt19">31.2+ Exterior windows</option>
                                <option value="opt20">31.3+ Exterior doors</option>
                                <option value="opt21">31.4+ Curtain wall (facade framework)</option>
                                <option value="opt22">32+ Interior wall openings</option>
                                <option value="opt23">32.1+ Inner wall openings with passage</option>
                                <option value="opt24">32.2+ Interior windows</option>
                                <option value="opt25">32.3+ Interior doors</option>
                                <option value="opt26">32.4+ Modular walls (partition walls)</option>
                                <option value="opt27">33+ Floor openings (stair hatch)</option>
                                <option value="opt28">34+ Handrails (stairs, landing)</option>
                                <option value="opt29">35+ Suspended ceilings (suspended ceilings)</option>
                                <option value="opt30">37+ Roof openings (roof windows)</option>
                                <option value="opt31">38+ Balustrades (horizontal parapet)</option>
                                <option value="opt32">4* elements for finishing or cladding</option>
                                <option value="opt33">41 Exterior wall finishes (exterior wall cladding)</option>
                                <option value="opt34">42 Interior wall finishes (facing walls)</option>
                                <option value="opt36">43 Floor finishes (top surface)</option>
                                <option value="opt37">44 Stair and ramp finishes (top finish)</option>
                                <option value="opt38">45 Ceiling finishes</option>
                                <option value="opt39">47 Roof finishes (roof cladding)</option>
                                <option value="opt40">5* elements for plumbing installations</option>
                                <option value="opt41">51 heating (heat generation)</option>
                                <option value="opt42">52 drain (collection)</option>
                                <option value="opt43">53 supply (water)</option>
                                <option value="opt44">54 gases</option>
                                <option value="opt45">55 cooling (cold generation)</option>
                                <option value="opt46">56 heat distribution (output)</option>
                                <option value="opt47">57 air treatment (ventilation)</option>
                                <option value="opt48">58 climate control</option>
                                <option value="opt49">6* elements for electrical installations</option>
                                <option value="opt50">61 central electrotechnical facilities (installation)</option>
                                <option value="opt51">62 power current (wiring)</option>
                                <option value="opt51">63 lighting</option>
                                <option value="opt51">64 communication</option>
                                <option value="opt51">65 security</option>
                                <option value="opt51">66 transport (elevator)</option>
                                <option value="opt51">68 automation (domotics, AI, etc.)</option>
                                <option value="opt51">7* elements for fixed inventory or rooms</option>
                                <option value="opt51">71 circulation (passageway, traffic, etc.)</option>
                                <option value="opt51">72 use (living room, bedroom, office, etc.)</option>
                                <option value="opt51">73 food (kitchen)</option>
                                <option value="opt51">74 hygiene and care (sanitary, bathroom, toilet, etc.)</option>
                                <option value="opt51">75 cleaning and maintenance (cleaning, laundry room, technical room, etc.)</option>
                                <option value="opt51">76 storage (storage room, attic, garage, etc.)</option>
                                <option value="opt51">8* elements for movable inventory or furniture</option>
                                <option value="opt51">81 circulation (ladder)</option>
                                <option value="opt51">82 use (seat, bed, desk, etc.)</option>
                                <option value="opt51">83 food (dining table)</option>
                                <option value="opt51">84 hygiëne en verzorging (hangtoilet, douche, …)</option>
                                <option value="opt51">85 cleaning and maintenance (washing machine)</option>
                                <option value="opt51">86 storage and screening (rack)</option>
                                <option value="opt51">9* elements for grounds (exterior)</option>
                                <option value="opt51">91 ground (surfaces)</option>
                                <option value="opt51">92 structures (pergolas)</option>
                                <option value="opt51">93 enclosure (fences)</option>
                                <option value="opt51">94 finish (decking)</option>
                                <option value="opt51">95 plumbing equipment (sewers, rainwater well, etc.)</option>
                                <option value="opt51">96 electrical equipment (solar panel, windmill, etc.)</option>
                                <option value="opt51">97 outdoor furnishing (garden furniture, bicycle shed, etc.)</option>
                            </select>
                            <br><br>
                            </div>
                            <div class="form-group mb-3">
                            <label for="product_image">Product Image </label>
                            <input id="product_image" name="product_image" type="file" class="required form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="description">Description </label>
                                <input type="text" placeholder="description" id="description" class="form-control" name="description" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="model_year">Model Year</label>
                                <input type="text" placeholder="Model year" id="model_year" class="form-control" name="model_year" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="selling_price">Selling Price </label>
                                <input type="text" placeholder="Selling price" id="selling_price" class="form-control" name="selling_price" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="calculation_price">Calculation Price </label>
                                <input type="text" placeholder="calculation_price" id="calculation_price" class="form-control" name="calculation_price" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="frequency">Frequency </label>
                                <input type="text" placeholder="Frequency" id="frequency" class="form-control" name="frequency" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="maintenance_sheet">Maintenance Sheet </label>
                            <input id="maintenance_sheet" name="maintenance_sheet" type="file" class="required form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="installation_sheet">Installation sheet </label>
                            <input id="installation_sheet" name="installation_sheet" type="file" class="required form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="brand_log">Brand Logo </label>
                            <input id="brand_log" name="brand_log" type="file" class="required form-control">
                            </div>
                           
                            <div class="form-group mb-3">
                            <label for="life_span">Life_Span </label>
                                <input type="text" placeholder="Expected life span" id="life_span" class="form-control" name="life_span" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                            <label for="env_scope">Environment scope </label>
                                <input type="text" placeholder="Environment score" id="env_score" class="form-control" name="env_score" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <p>Energy neutral</p>
                                  <input type="radio" id="yes" name="energy_neutral" value="energy_neutral">
                                  <label for="energy_neutral">Yes</label><br>
                                  <input type="radio" id="no" name="energy_neutral" value="energy_neutral">
                                  <label for="energy_neutral">No</label><br>
                            </div>
                            <div class="form-group mb-3">
                                <p>Returnable</p>
                                  <input type="radio" id="yes" name="returnable" value="returnable">
                                  <label for="returnable">Yes</label><br>
                                  <input type="radio" id="no" name="returnable" value="returnable">
                                  <label for="returnable">No</label><br>
                             </div>
                             <div class="form-group mb-3">
                             <p>Movable</p>
                                  <input type="radio" id="yes" name="movable" value="movable">
                                  <label for="movable">Yes</label><br>
                                  <input type="radio" id="no" name="movable" value="movable">
                                  <label for="movable">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Compatible</p>
                                  <input type="radio" id="yes" name="compatible" value="compatible">
                                  <label for="compatible">Yes</label><br>
                                  <input type="radio" id="no" name="compatible" value="compatible">
                                  <label for="compatible">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Demountable</p>
                                  <input type="radio" id="yes" name="demountable" value="demountable">
                                  <label for="demountable">Yes</label><br>
                                  <input type="radio" id="no" name="demountable" value="demountable">
                                  <label for="demountable">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Pace-Layering</p>
                                  <input type="radio" id="yes" name="pace_layering" value="pace_layering">
                                  <label for="pace_layering">Yes</label><br>
                                  <input type="radio" id="no" name="pace_layering" value="pace_layering">
                                  <label for="pace_layering">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Recycle Content</p>
                                  <input type="radio" id="yes" name="recycled_content" value="recycled_content">
                                  <label for="recycled_content">Yes</label><br>
                                  <input type="radio" id="no" name="recycled_content" value="recycled_content">
                                  <label for="recycled_content">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Biobased</p>
                                  <input type="radio" id="yes" name="biobased" value="biobased">
                                  <label for="biobased">Yes</label><br>
                                  <input type="radio" id="no" name="biobased" value="biobased">
                                  <label for="biobased">No</label><br>
                              </div>
                              <div class="form-group mb-3">
                              <p>Extendable life</p>
                                  <input type="radio" id="yes" name="extendable_life" value="extendable_life">
                                  <label for="extendable_life">Yes</label><br>
                                  <input type="radio" id="no" name="extendable_life" value="extendable_life">
                                  <label for="extendable_life">No</label><br>
                              </div>
                            <div class="form-group mb-3">
                            <label for="manufacturer">Manufacturer </label>
                                <input type="text" placeholder="Manufacturer" id="manufacturer" class="form-control"
                                    name="manufacturer" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="website_brand">Website Brand </label>
                                <input type="text" placeholder="Website brand" id="website_brand" class="form-control"
                                    name="website_brand" required>
                            </div>
                            <div class="form-group mb-3">
                            <label for="bearing_capacity">Bearing Capacity </label>
                                <input type="text" placeholder="Bearing Capacity" id="bearing_capacity" class="form-control"
                                    name="bearing_capacity" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="u_value">U-Value </label>
                                <input type="text" placeholder="U-value (W/m2K)" id="u_value" class="form-control"
                                    name="u_value" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="fire_resistance">Fire Resistance </label>
                                <input type="text" placeholder="Fire Resistance" id="fire_resistance" class="form-control"
                                    name="fire_resistance" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="lenght_x">Lenght-X </label>
                                <input type="text" placeholder="Lenght-X(mm)" id="length_x" class="form-control"
                                    name="length_x" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="height_y">Height_Y</label>
                                <input type="text" placeholder="Height-Y(mm)" id="height_y" class="form-control"
                                    name="height_y" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="width_z">Widht_Z </label>
                                <input type="text" placeholder="Width-Z(mm)" id="width_z" class="form-control"
                                    name="width_z" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="constructor_method">Construction Method </label>
                                <input type="text" placeholder="Construction Method" id="construction_method" class="form-control"
                                    name="construction_method" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="building_system">Building_System</label>
                                <input type="text" placeholder="Building System" id="building_system" class="form-control"
                                    name="building_system" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="construction_type">Construction Type </label>
                                <input type="text" placeholder="Construction Type" id="construction_type" class="form-control"
                                    name="construction_type" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="interior_finish">Interior Finish</label>
                                <input type="text" placeholder="Interior Finish" id="interior_finish" class="form-control"
                                    name="interior_finish" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="exterior_cladding">Exterior Cladding</label>
                                <input type="text" placeholder="Exterior Cladding" id="exterior_cladding" class="form-control"
                                    name="exterior_cladding" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="color">Color</label>
                                <input type="text" placeholder="Color" id="color" class="form-control"
                                    name="color" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="designed_by">Designed_By</label>
                                <input type="text" placeholder="Designed By" id="designed_by" class="form-control"
                                    name="designed_by" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="configuration">Configuaration</label>
                                <input type="text" placeholder="All Possible configuration" id="configuration" class="form-control"
                                    name="configuration" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="specification_text">Specification Text</label>
                                <input type="text" placeholder="Specification Text" id="specification_text" class="form-control"
                                    name="specification_text" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="td_object">3D Object(RFA/IFC/DWG/SKIP file)</label>
                                <input type="text" placeholder="3D object (RFA/IFC/DWG/SKP file)" id="td_object" class="form-control"
                                    name="td_object" required autofocus>
                            </div>
                          
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection