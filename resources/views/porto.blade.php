@extends('layouts.app')

@section('title')
Portofolio
@endsection


@section('cover')
<div class="jumbotron jumbotron-fluid mb-0" style="background-image: url({{ asset('img/gurun.png') }});background-size: 100% 100%; height: 30rem;">
    <p class="text-center text-light mt-5" style="font-size: 40px;">MY PORTOFOLIO</p>
</div>
@endsection

@section('content')

<h1 class="mt-5" align="center">Portofolio</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="container mt-3">
				<h2>Summary of Me</h2>
				<div class="card">
					<div class="card-body">
						<p>Nama Saya <b>Kevin Surya Augusto</b> Berasal Dari SMK Taruna Bhakti Mempunyai Profesi Sebagai Web Designer. Saya Mulai Belajar Bahasa Pemrograman mulai saya menginjak kelas XI dan bahasa yang pertama kali dipelajari adalah PHP dan juga di ajari dasar dasar seperti HTML dan CSS.</p>
						<p>Pengalaman Saya Dalam Belajara Bahasa Pemrogramman Di SMK Taruna Bhakti adalah saya bisa memahami konsep konsep yang akan digunakan dalam dunia kerja. Seperti Contoh dasar yang diajarkan adalah CRUD dalam PHP.</p>
					</div>
				</div>
				<h2 class="mt-3">All Programmer Language</h2>
				<div class="card">
					<div class="card-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">
											<img class="mb-3" src="{{asset('img/php-logo.png')}}" style="width: 100%;">
											<p>PHP</p>
											<div class="progress">
											  <div class="progress-bar text-seccondary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">
											<img src="{{asset('img/python.png')}}" style="width: 60%;">
											<p>Python</p>
											<div class="progress">
											  <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
									<div align="center" class="card justify-content-center mt-2" style="min-height: 250px;">
										<div class="card-body">
											<img src="{{asset('img/java_logo.png')}}" style="width: 60%;">
											<p>Java</p>
											<div class="progress">
											  <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">
											<img src="{{asset('img/javas.png')}}" style="width: 60%;">
											<p>JavaScript</p>
											<div class="progress">
											  <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="container mt-3">
				<h2>Contac Me</h2>
				<div class="card">
					<div class="card-body">

						<div class="from-group mb-3">
							<label>Email</label>
							<input type="text" readonly value="tricaks91@gmail.com" class="form-control">
						</div>
						<div class="from-group mb-3">
							<label>Phone</label>
							<input type="text" readonly value="087789318854" class="form-control">
						</div>
						<div class="from-group mb-3">
							<label>Address</label>
							<input type="text" name="" class="form-control" readonly value="Depok, Bukit Cengkeh 1 Jln.Medan Blok B2 No.3">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="container-fluid mt-4">
				<h2>What I have created</h2>
				<div class="card">
					<div class="card-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">
											<img src="{{asset('img/lowongan.jpg')}}" style="width: 100%;" >
											<h4 class="mt-3">Penelusuran Tamatan dan Bursa Kerja SMK Taruna Bhakti</h4>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">	
											<img src="{{asset('img/db.jpg')}}" style="width: 100%;" >
											<h4 class="mt-5">DashBoard Lite</h4>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div align="center" class="card justify-content-center" style="min-height: 250px;">
										<div class="card-body">	
											<img src="{{asset('img/full_metal.jpg')}}" style="width: 100%; height: 157px;" >
											<h4 class="mt-5">Website Anime</h4>
										</div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection