<!DOCTYPE html>
<html>
<head>
	<title>Soft Deletes Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Mahasiswa
			</div>
			<div class="card-body">
				<a href="/mahasiswa" class="btn btn-sm btn-primary">Data Mahasiswa</a>
				|
				<a href="/mahasiswa/trash" class="btn btn-sm btn-danger">Tong Sampah</a>

				<br/>
				<br/>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>NIM</th>
							<th>Alamat</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mahasiswa as $mhs)
						<tr>
							<td>{{ $mhs->nama }}</td>
							<td>{{ $mhs->nim }}</td>
							<td>{{ $mhs->alamat }}</td>
							<td><a href="/mahasiswa/hapus/{{ $mhs->id }}" class="btn btn-danger btn-sm">Hapus</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>