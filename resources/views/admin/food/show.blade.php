@extends('layouts.admin.index')

@section('page-heading', 'Food Item')
@section('page-title', 'Food Item')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title "><strong>Food Item Name: </strong>{{ $food->name }}</h4>
						</div>
						<div class="card-body">
							<div class="row py-5">
								<div class="col-md-4">
									<img height="200" src="{{ asset('uploads/images/' . $food->image) }}" alt="">
								</div>
								<div class="col-md-8">
									<h4><strong>Category Name:</strong> {{ $food->category->title }}</h4>
									<h4><strong>Price:</strong> ${{ $food->price }}</h4>
									<h4><strong>Status:</strong> {{ $food->status == 0 ? 'Inactive' : 'Active' }}</h4>
									<h4><strong>Description:</strong> {{ $food->description }}</h4>
									<a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-primary">Edit this item</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
@endsection