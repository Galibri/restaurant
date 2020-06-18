@extends('layouts.admin.index')

@section('page-heading', 'Sliders')
@section('page-title', 'Sliders')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">All Slides</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<tr>
											<th>Title</th>
											<th>Sub Title</th>
											<th>Image</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sliders as $slider)
											<tr>
												<td>{{ $slider->title }}</td>
												<td>{{ $slider->sub_title }}</td>
												<td>
													@if($slider->image)
													<img height="60" src="{{ asset('uploads/images') . '/' . $slider->image }}" alt="{{ $slider->title }}">
													@endif
												</td>
												<td>
													<a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning btn-sm px-2"><i class="material-icons nav-right-icon">edit</i></a>
													<a href="{{ route('admin.slider.destroy', $slider->id) }}" data-id="{{ $slider->id }}" class="btn btn-danger btn-sm px-2 delete"><i class="material-icons nav-right-icon">delete_forever</i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $sliders->links() }}
							</div>
						</div>
					  </div>
				</div>
			</div>
        </div>
      </div>
@endsection