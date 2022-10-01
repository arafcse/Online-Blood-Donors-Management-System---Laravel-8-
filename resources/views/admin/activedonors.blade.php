<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

   
    @include("admin.admincss")

  </head>
  <body>

  	<div class="container-scroller">

    
  	@include("admin.navbar")



  	<div class="p-12">


					<div class="overflow-hidden shadow-sm sm-rounded-lg">
						<h1 class="font-semibold text-white sm:px-6 leading-tight">
							{{ __('Donors List') }}
						</h1>


						<div class="p-6 border-b border-gray-500">
							
							
							<table class="w-full-whitespace-nowrap">
								<thead>
									<tr class="text-left font-bold">
										<td class="border px-2 py-2">First Name</td>
										<td class="border px-2 py-2">Last Name</td>
										<td class="border px-2 py-2">Email</td>
										<td class="border px-2 py-2">Blood group</td>
										<td class="border px-2 py-2">Birth Date</td>
										<td class="border px-2 py-2">Phone Number</td>
										<td class="border px-2 py-2">weight</td>
										<td class="border px-2 py-2">Gender</td>
										<td class="border px-2 py-2">City</td>
										<td class="border px-2 py-2">Address</td>
										
									</tr>
								</thead>
								<tbody>

								@foreach($data as $data)
									<tr>
										<td class="border px-2 py-2">{{$data->firstName}}</td>
										<td class="border px-2 py-2">{{$data->lastName}}</td>
										<td class="border px-2 py-2">{{$data->email}}</td>
										<td class="border px-2 py-2">{{$data->blood_group}}</td>
										<td class="border px-2 py-2">{{$data->birthDate}}</td>
										<td class="border px-2 py-2">{{$data->phoneNumber}}</td>
										<td class="border px-2 py-2">{{$data->weight}}</td>
										<td class="border px-2 py-2">{{$data->gender}}</td>
										<td class="border px-2 py-2">{{$data->city}}</td>
										<td class="border px-2 py-2">{{$data->address}}</td>
												
									</tr>
									</tr>
									@endforeach
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>

  	@include("admin.adminscript")

    
  </body>
</html>