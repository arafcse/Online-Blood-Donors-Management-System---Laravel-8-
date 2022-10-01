<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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

				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

					<div class="overflow-hidden shadow-sm sm-rounded-lg">
						<h1 class="font-semibold text-white sm:px-6 leading-tight">
							{{ __('User List') }}
						</h1>

						<div class="p-6 border-b border-gray-500">

							<table class="w-full-whitespace-nowrap">
								<thead>
									<tr class="text-left font-bold">
										<td class="border px-6 py-4">Name</td>
										<td class="border px-6 py-4">Email</td>
										<td class="border px-6 py-4">Action</td>
									</tr>
								</thead>
								<tbody>

									@foreach($data as $data)
									<tr>
										<td class="border px-6 py-4">{{$data->name}}</td>
										<td class="border px-6 py-4">{{$data->email}}</td>

										@if($data->role=="0")
										<td class="border px-6 py-4"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
										@elseif($data->role=="2")
										<td class="border px-6 py-4"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
										@else
										<td class="border px-6 py-4"><a>Not Allowed</a></td>
										@endif
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


</body>
</html>