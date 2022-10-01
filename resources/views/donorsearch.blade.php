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
            <h2 class="p-6" style="font-size: 24px">Search For Blood Donors</h2>
            <div class="p-12">
                <form action="{{ route('web.donorsearch') }}" method="GET">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><b>Search by your location</b></label>
                    <div class="col-sm-9">
                        <input type="text" name="query" placeholder="Type Area" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>

            </form>
            <br>
            <hr>
            <br>
            @if(isset($cities))
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Blood Group</th>
                            <th>Mobile Number</th>
                            <th>City</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($cities) > 0)
                            @foreach($cities as $value)
                            <tr>
                                <td> {{ $value->firstName }}</td>
                                <td> {{ $value->lastName }}</td>
                                <td> {{ $value->blood_group }}</td>
                                <td> {{ $value->phoneNumber }}</td>
                                <td> {{ $value->city }} </td>
                            </tr>
                            @endforeach

                        @else
                            <tr><td>No Result Found!</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>


            @endif

    	   @else
                        <h1 class="font-semibold sm:px-6 leading-tight">Please <a href="{{ route('login') }}">Log in</a> First to Search</h2>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

</body>
</html>