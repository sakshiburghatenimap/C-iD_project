@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">SignUp User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Brand/Company/Last name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                            <p>Please select User Type:</p>
                                  <input type="radio" id="resident" name="user_role" value="resident">
                                  <label for="resident">Resident</label><br>
                                  <input type="radio" id="owner" name="user_role" value="owner">
                                  <label for="owner">Property Owner</label><br>
                                  <input type="radio" id="manufacturer" name="user_role" value="manufacturer">
                                  <label for="manufacturer">Manufacturer</label><br>
                                  <input type="radio" id="architech" name="user_role" value="architech">
                                  <label for="architech">Architech</label><br>
                                  <input type="radio" id="inspector" name="user_role" value="inspector">
                                  <label for="inspector">Installer/Inspector/Contractor</label><br>
                                  <input type="radio" id="agent" name="user_role" value="agent">
                                  <label for="agent">Reseller/Agent</label><br>
                                  <input type="radio" id="dismantler" name="user_role" value="dismantler">
                                  <label for="dismantler">Dismantler</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="User Email" id="email" class="form-control"
                                    name="email" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="phone number" id="phone_number" class="form-control"
                                    name="phone_number" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Country" id="country" class="form-control"
                                    name="country" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="VAT number" id="VAT_number" class="form-control"
                                    name="VAT_number" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Comapny Name" id="company_name" class="form-control"
                                    name="company_name" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Zip_code" id="zip_code" class="form-control"
                                    name="zip_code" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="City" id="city" class="form-control"
                                    name="city" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Street Name" id="street_name" class="form-control"
                                    name="street_name" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Street Number" id="street_number" class="form-control"
                                    name="street_number" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection