<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Data Anggota</title>
</head>
<body>
    <div class ='container'>
        <div class="card">
            <div class="card-body">
                <style type="text/css">
                    .pagination li{
                        float : left;
                        list-style-type: none;
                        margin: 5px;
                    }
                </style>

                <h3>Data Anggota</h3>
                <p>Cari Email Anggota : </p>

                <div class="form-group">

                </div>

                <form action="/anggota/cari" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Email anggota .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-3" type="submit" value="Cari">
                </form>

                <br/>

                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Umur</th>
                    </tr>
                    @foreach($anggota as $member)
                        <tr>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->umur }}</td>
                            <td>
                                <a class="btn btn-dark btn-sm" href="/anggota/tambah">Tambah</a>
                                <a class="btn btn-warning btn-sm" href="/anggota/edit/{{ $member->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/anggota/hapus/{{ $member->id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <br/>
                Halaman : {{ $anggota->currentPage() }} <br/>
                Jumlah Data : {{ $anggota->total() }} <br/>
                Data Per Halaman : {{ $anggota->perPage() }} <br/>

                {{ $anggota->Links() }}
            </div>
        </div>
    </div>
</body>
</html>