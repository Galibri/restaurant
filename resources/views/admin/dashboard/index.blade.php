@extends('layouts.admin.index')

@section('page-heading', 'My Dashboard')
@section('page-title', 'My Dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
					<div class="card-header card-header-warning card-header-icon">
						<div class="card-icon">
						<i class="material-icons">view_sidebar</i>
						</div>
						<p class="card-category">Total Categories</p>
						<h3 class="card-title">{{ $total_cats }}
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
						<i class="material-icons text-info">view_sidebar</i>
						<a href="{{ route('admin.category.index') }}">View all categories</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
						<i class="material-icons">fastfood</i>
						</div>
						<p class="card-category">Total Food Items</p>
						<h3 class="card-title">{{ $total_food_items }}
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
						<i class="material-icons text-info">fastfood</i>
						<a href="{{ route('admin.food.index') }}">View all food items</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
						<div class="card-icon">
						<i class="material-icons">calendar_today</i>
						</div>
						<p class="card-category">Total Reservation (Unread) </p>
						<h3 class="card-title">{{ $reservation_unread }}
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
						<i class="material-icons text-success">calendar_today</i>
						<a href="{{ route('admin.reservation.index') }}">View all unmarked reservation</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
					<div class="card-header card-header-primary card-header-icon">
						<div class="card-icon">
						<i class="material-icons">mark_email_unread</i>
						</div>
						<p class="card-category">Total Messages (Unread)</p>
						<h3 class="card-title">{{ $contact_unread }}
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
						<i class="material-icons text-primary">mark_email_unread</i>
						<a href="{{ route('admin.contact.index') }}">View all unread messages</a>
						</div>
					</div>
					</div>
				</div>

			</div>
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
											<th>Phone</th>
											<th>Date</th>
											<th>Time</th>
											<th>Message</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($reservations as $reservation)
											<tr class="@if($reservation->status == 0) bg-gray @endif">
												<td>{{ $reservation->name }}</td>
												<td>{{ $reservation->email }}</td>
												<td>{{ $reservation->phone }}</td>
												<td>{{ $reservation->reservation_date }}</td>
												<td>{{ $reservation->reservation_time }}</td>
												<td>{{ $reservation->message }}</td>
												<td class="text-right">
													@if($reservation->status == 0)
													<form method="POST" action="{{ route('admin.reservation.update', $reservation->id) }}" class="form-inline d-inline">
														@csrf
														@method('PUT')
														<input type="hidden" name="status" value="1">
														<button title="Approve" class="btn btn-warning btn-sm px-2"><i class="material-icons nav-right-icon">check_circle_outline</i></button>
													</form>
													@endif
													<a href="{{ route('admin.reservation.destroy', $reservation->id) }}" title="Delete" data-id="{{ $reservation->id }}" class="btn btn-danger btn-sm px-2 delete ml-3"><i class="material-icons nav-right-icon">delete_forever</i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $reservations->links() }}
							</div>
						</div>
					  </div>
				</div>
			</div>
        </div>
      </div>
@endsection