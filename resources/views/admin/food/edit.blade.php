@extends('layouts.admin.index')

@section('page-heading', 'Edit Food Item')
@section('page-title', 'Edit Food Item')

@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title">Edit Food Item</h4>
						</div>
						<div class="card-body">
							<form action="{{ route('admin.food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bd-form-group">
											<label for="">Category</label>
											<select name="category_id" id="" class="form-control">
												@foreach($categories as $category)
													<option value="{{ $category->id }}" {{ old('category_id') ? (old('category_id') == $category->id ? "selected='selected'" : '') : ($food->category_id == $category->id ? "selected='selected'" : '') }}>{{ $category->title }}</option>
												@endforeach
											</select>
										</div>
										@error('category_id')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<input type="text" id="name" value="{{ old('name') ? old('name') : $food->name }}" name="name" class="form-control" placeholder="Food Item Name">
										</div>
										@error('name')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<textarea name="description" class="form-control" placeholder="Description" cols="30" rows="5">{{ old('name') ? old('description') : $food->description }}</textarea>
										</div>
										@error('description')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<input type="number" step="any" min="0" id="price" value="{{ old('name') ? old('price') : $food->price }}" name="price" class="form-control" placeholder="Food Item Price">
										</div>
										@error('price')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Status</label>
											<select name="status" id="" class="form-control">
												<option value="1" {{ old('status') ? (old('status') == 1 ? "selected='selected'" : '') : ($food->status == 1 ? "selected='selected'" : '') }}>Active</option>
												<option value="0" {{ old('status') ? (old('status') == 0 ? "selected='selected'" : '') : ($food->status == 0 ? "selected='selected'" : '') }}>Inactive</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 my-2">
										<label for="image" class="bmd-label-floating">Food Image</label><br>
										<input type="file" id="image" name="image">
										@error('image')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
									<div class="col-md-6">
										@if($food->image)
										<img height="60" src="{{ asset('uploads/images') . '/' . $food->image }}" alt="{{ $food->title }}">
										@endif
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save Food</button>
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