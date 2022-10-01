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
							{{ __('Feedbacks') }}
						</h1>


						<div class="p-6 border-b border-gray-500">
							
							
							<table class="w-full-whitespace-nowrap">
								<thead>
									<tr class="text-left font-bold">
										<td class="border px-2 py-2">Name</td>
										<td class="border px-2 py-2">Email</td>
										<td class="border px-2 py-2">Feedback</td>
										<td class="border px-2 py-2">Action</td>
										
									</tr>
								</thead>
								<tbody>

								@foreach($feedback as $data)
									<tr>
										<td class="border px-2 py-2">{{$data->Name}}</td>
										<td class="border px-2 py-2">{{$data->Email}}</td>
										<td class="border px-2 py-2">{{$data->Feedback}}</td>
										<td class="border px-6 py-4"><a href="{{url('/deletefeedback',$data->id)}}">Delete</a></td>			
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