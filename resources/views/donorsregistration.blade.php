<!DOCTYPE html>
	<html>
	<head>
		@include("master.homecss")
	</head>
    <body>
    	@include("master.header")

    	@if (Route::has('login'))
                
                    @auth
             
                   

<div class="container p-12" style="background-color: white;">
			<h2 class="p-6" style="font-size: 24px">Register As Donor</h2>
			<div class="p-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif
  
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif
   
            <form class="form-horizontal" role="form" action="add_donor" method="POST" >
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">* All filled must be required</span>
                    </div>
                </div>
                @csrf
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="blood_group" id="blood_group">
							  <option value="">None</option>
							  <option value="a+">A+</option>
							  <option value="a-">A-</option>
							  <option value="b+">B+</option>
							  <option value="b-">B-</option>
							  <option value="o+">O+</option>
							  <option value="o-">O-</option>
							  <option value="ab+">AB+</option>
							  <option value="ab-">AB-</option>
						</select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight </label>
                    <div class="col-sm-9">
                        <input type="number" name="weight" id="weight" placeholder="Please write your weight in kilograms" class="form-control">
                    </div>

                </div>


                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row" >
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
            
                    	<select name="city" class="form-control">
                    		<option value="">None</option>
                    		<optgroup label="Dhaka Division">
							  <option value="dhaka">Dhaka</option>
							  <option value="mymensingh">Mymensingh</option>
							  <option value="netrokona">Netrokona</option>
							  <option value="sherpur">Sherpur</option>
							  <option value="tangail">Tangail</option>
							  <option value="jamalpur">Jamalpur</option>
							 </optgroup>
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" id="address" placeholder="Full Address" class="form-control" autofocus>
                    </div>
                </div><!-- /.form-group -->
                
                <div class="p-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                
            </form> <!-- /form -->
            </div>
        </div> <!-- ./container -->


                    @else
                        <h1 class="font-semibold sm:px-6 leading-tight">Please <a href="{{ route('login') }}">Log in</a> First to Register as Donor</h2>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
    	
    	
    
    </body>
    @include("master.homescript")
    </html>
