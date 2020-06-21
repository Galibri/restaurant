@extends('layouts.admin.index')

@section('page-heading', 'Reservation')
@section('page-title', 'Reservation')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">All Reservations</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Subject</th>
											<th>Message</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($contacts as $contact)
											<tr class="@if($contact->mark_as_read == 0) bg-gray @endif">
												<td>{{ $contact->name }}</td>
												<td>{{ $contact->email }}</td>
												<td>{{ $contact->subject }}</td>
												<td>{{ $contact->message }}</td>
												<td class="text-right">
													@if($contact->mark_as_read == 0)
													<form method="POST" action="{{ route('admin.contact.update', $contact->id) }}" class="form-inline d-inline">
														@csrf
														@method('PUT')
														<input type="hidden" name="mark_as_read" value="1">
														<button title="Mark as read" class="btn btn-warning btn-sm px-2"><i class="material-icons nav-right-icon">check_circle_outline</i></button>
													</form>
													@endif
													<a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-success btn-sm px-2"><i class="material-icons nav-right-icon">remove_red_eye</i></a>
													<a href="{{ route('admin.contact.destroy', $contact->id) }}" title="Delete" data-id="{{ $contact->id }}" class="btn btn-danger btn-sm px-2 delete ml-3"><i class="material-icons nav-right-icon">delete_forever</i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $contacts->links() }}
							</div>
						</div>
					  </div>
				</div>
			</div>
        </div>
      </div>
@endsection