@extends('pemesan.main')
@section('title','Booking Bus')
@section('content')
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a Bus</h1>
						</div>
						<form method="GET" action="/booking/invoice">
						@csrf
						<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">ID Bus</span>
										<input class="form-control" type="text-" value="ID001" disabled>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nama Bus</span>
										<input class="form-control" type="text-" value="Bus 01" disabled>
									</div>
								</div>
								</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nama Instusi</span>
										<input class="form-control" type="text" placeholder="Masukkan Nama Instusi">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Masukkan email anda">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Nomor Handphone</span>
								<input class="form-control" type="tel" placeholder="Masukkan Nomor Handphone anda">
							</div>
                            
							<div class="form-group">
								<span class="form-label">Lokasi Pickup</span>
								<input class="form-control" type="text" placeholder="Masukkan Lokasi Pickup">
							</div>
							<div class="form-group">
								<span class="form-label">Tujuan</span>
								<input class="form-control" type="text" placeholder="Masukkan Tujuan Bus">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Tanggal Pickup</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Jam</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Menit</span>
												<select class="form-control">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection