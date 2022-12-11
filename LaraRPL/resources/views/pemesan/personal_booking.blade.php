 @extends('pemesan.main')
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
										<span class="form-label">Nama Pribadi</span>
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
                            <div class ="row">
                            <div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Lokasi Pickup</span>
								<select style="background-color:white;" class="form-control" name="lok_pickup"  id="loc" required>
                        		@foreach($rute as $datas)
                        		<option>{{$datas->titik_awal}}</option>
                       			 @endforeach
                        		</select>
								<span class="select-arrow"></span>
						</div>
                        </div>
                        <div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Tujuan</span>
								<select class="form-control" style="background-color:white;" name="tujuan"  id="Tuju" required>
                            		@foreach($rute as $datas)
                        			<option>{{$datas->titik_sampai}}</option>
                       				@endforeach
                        </select>
						<span class="select-arrow"></span>
						</div>
                        </div>
                        </div>
                        <div class ="row">
                        <div class="col-sm-8">
									<div class="form-group">
										<span class="form-label">Jumlah Kursi</span>
										<input name="jmlh_kursi" class="form-control" type="number" required>
                                        <span class="form-label">Jumlah Kursi Tersedia : {{$stock}}</span>
									</div>
								</div>
                                </div>
                        
							
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">Tanggal Pickup</span>
										<input name="tgl" class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-5">
											<div class="form-group">
												<span class="form-label">Berangkat</span>
												@foreach($rute as $datas)
										<input name="berangkat" class="form-control" type="text" value={{$datas->jam_berangkat}} readonly>
										@endforeach
									</div>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<span class="form-label">Sampai</span>
												@foreach($rute as $datas)
										<input name="sampai" class="form-control" type="text" value={{$datas->jam_sampai}} readonly>
										@endforeach
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