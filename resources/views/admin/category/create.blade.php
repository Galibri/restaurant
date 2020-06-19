@extends('layouts.admin.index')

@section('page-heading', 'Create Category')
@section('page-title', 'Create Category')

@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title">Create Category</h4>
						</div>
						<div class="card-body">
							<form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<input type="text" id="title" value="{{ old('title') }}" name="title" class="form-control" placeholder="Category Title">
										</div>
										@error('title')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save Category</button>
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