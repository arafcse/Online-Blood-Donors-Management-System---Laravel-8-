<!DOCTYPE html>
	<html>
	<head>
		@include("master.homecss")
	</head>
    <body>
    	@include("master.header")

    	@if (Route::has('login'))
                
                    @auth
                    
                    @else
                        <h1 class="font-semibold sm:px-6 leading-tight">Please <a href="{{ route('login') }}">Log in</a> First to Register</h2>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
    	
    	

    
    </body>
    @include("master.homescript")
    </html>