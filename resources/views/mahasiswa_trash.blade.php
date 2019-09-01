<!DOCTYPE html>
<html>
<head>
    <title>Soft Deletes Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="card mt-5">
        <div class="card-header text-center">
            Data Mahasiswa
        </div>
        <div class="card-body">

            <a href="/mahasiswa">Data Guru</a>
            |
            <a href="/mahasiswa/trash" class="btn btn-sm btn-primary">Tong Sampah</a>

            <br/>
            <br/>

            <a href="/mahasiswa/kembalikan_semua">Kembalikan Semua</a>
            |
            <a href="/mahasiswa/hapus_permanen_semua">Hapus Permanen Semua</a>
            <br/>
            <br/>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th width="30%">OPSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->umur }}</td>
                        <td>
                            <a href="/mahasiswa/kembalikan/{{ $mhs->id }}" class="btn btn-success btn-sm">Restore</a>
                            <a href="/mahasiswa/hapus_permanen/{{ $mhs->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html