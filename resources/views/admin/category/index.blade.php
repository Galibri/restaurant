@extends('layouts.admin.index')

@section('page-heading', 'Categories')
@section('page-title', 'Categories')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">All Categories</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<tr>
											<th>Title</th>
											<th class="w-25">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($categories as $category)
											<tr>
												<td>{{ $category->title }}</td>
												<td>
													<a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning btn-sm px-2"><i class="material-icons nav-right-icon">edit</i></a>
													<a href="{{ route('admin.category.destroy', $category->id) }}" data-id="{{ $category->id }}" class="btn btn-danger btn-sm px-2 delete"><i class="material-icons nav-right-icon">delete_forever</i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $categories->links() }}
							</div>
						</div>
					  </div>
				</div>
			</div>
        </div>
      </div>
@endsection