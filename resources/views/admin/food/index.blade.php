@extends('layouts.admin.index')

@section('page-heading', 'Foods')
@section('page-title', 'Foods')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">All Foods</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<tr>
											<th>Name</th>
											<th>Category</th>
											<th>Price</th>
											<th>Image</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($foods as $food)
											<tr>
												<td>{{ $food->name }}</td>
												<td>{{ $food->category->title }}</td>
												<td>{{ $food->price }}</td>
												<td>
													@if($food->image)
													<img height="60" src="{{ asset('uploads/images') . '/' . $food->image }}" alt="{{ $food->title }}">
													<a href="{{ route('admin.food.delete-image', $food->id) }}" data-id="{{ $food->id }}" class="btn btn-danger btn-sm px-2 delete"><i class="material-icons nav-right-icon">close</i></a>
													@endif
												</td>
												<td>
													@if($food->status == 1)
													<span class="badge badge-success">Active</span>
													<form method="POST" action="{{ route('admin.food.status', $food->id) }}" class="form-inline d-inline">
														@csrf
														@method('PUT')
														<input type="hidden" name="status" value="0">
														<button class="badge badge-danger border-0 p-2">Make Incative</button>
													</form>
													@else
													<span class="badge badge-warning">Inactive</span>
													<form method="POST" action="{{ route('admin.food.status', $food->id) }}" class="form-inline d-inline">
														@csrf
														@method('PUT')
														<input type="hidden" name="status" value="1">
														<button class="badge badge-primary border-0  p-2">Make Active</button>
													</form>
													@endif
												</td>
												<td>
													<a href="{{ route('admin.food.show', $food->id) }}" class="btn btn-success btn-sm px-2"><i class="material-icons nav-right-icon">remove_red_eye</i></a>
													<a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning btn-sm px-2"><i class="material-icons nav-right-icon">edit</i></a>
													<a href="{{ route('admin.food.destroy', $food->id) }}" data-id="{{ $food->id }}" class="btn btn-danger btn-sm px-2 delete"><i class="material-icons nav-right-icon">delete_forever</i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $foods->links() }}
							</div>
						</div>
					  </div>
				</div>
			</div>
        </div>
      </div>
@endsection