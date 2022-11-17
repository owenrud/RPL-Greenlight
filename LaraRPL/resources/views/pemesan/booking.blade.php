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
						<form method="POST" action="/booking/invoice">
						@csrf
						<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">ID Bus</span>
										<input name="id" class="form-control" type="text" value="{{$bus->id}}" readonly>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nama Bus</span>
										<input name="nama_bus" class="form-control" type="text" value="{{$bus->Nama_Bus}}" readonly>
									</div>
								</div>
								</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nama Instusi</span>
										<input name="nama_user" class="form-control" type="text"  value="{{$user->nama}}" placeholder="Masukkan Nama Instusi">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input name="email" class="form-control" type="email" value="{{$user->email}}">
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Nomor Handphone</span>
								<input name="no_telp" class="form-control" type="tel" value="{{$user->no_telp}}" placeholder="Masukkan Nomor Handphone anda">
							</div>
							</div>
							<div class="col-sm-6">
							<div class="form-group">
												<span class="form-label">Pembayaran</span>
												<select name="tipe_bayar" class="form-control">
													<option>Dana</option>
													<option>Ovo</option>
													<option>Gopay</option>

												</select>
												<span class="select-arrow"></span>
											</div>
							</div>
							</div>
                            
							<div class="form-group">
								<span class="form-label">Lokasi Pickup</span>
								<input name="lok_pickup" class="form-control" type="text"value="{{$user->alamat}}"  placeholder="Masukkan Lokasi Pickup">
							</div>
							<div class="form-group">
								<span class="form-label">Tujuan</span>
								<input name="tujuan" class="form-control" type="text" placeholder="Masukkan Tujuan Bus">
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Tanggal Pickup</span>
										<input name="tgl" class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Jam</span>
												<select name="jam" class="form-control">
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
												<select name="menit" class="form-control">
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
												<select name="waktu" class="form-control">
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