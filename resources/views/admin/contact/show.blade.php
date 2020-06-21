@extends('layouts.admin.index')

@section('page-heading', 'Email Body')
@section('page-title', 'Email Body')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title "><strong>Email Address: </strong>{{ $contact->email }}</h4>
						</div>
						<div class="card-body">
							<div class="row py-5">
								<div class="col-md-12">
									<h4><strong>Name: </strong>{{ $contact->name }}</h4>
									<h4><strong>Email: </strong>{{ $contact->email }}</h4>
									<h4><strong>Subject: </strong>{{ $contact->subject }}</h4>
                                    <h4><strong>Body:</strong></h4>
                                    <p>{{ $contact->message }}</p>
									<a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Back</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
@endsection