@extends('layouts.admin.index')

@section('page-heading', 'Create Slider')
@section('page-title', 'Create Slider')

@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title">Create Slider</h4>
						</div>
						<div class="card-body">
							<form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<input type="text" id="title" value="{{ old('title') }}" name="title" class="form-control" placeholder="Slider Title">
										</div>
										@error('title')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<input type="text" id="sub_title" value="{{ old('sub_title') }}" name="sub_title" class="form-control" placeholder="Slider Sub Title">
										</div>
										@error('sub_title')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 my-2">
										<label for="image" class="bmd-label-floating">Slider Image</label>
										<input type="file" id="image" name="image">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save Slider</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection