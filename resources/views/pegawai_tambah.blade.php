<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Eloquent Laravel </title>
    </head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD data Pegawai - <strong>Tambah Data</strong>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembail</a>

                <br/>
                <br/>

                <form method="post" action="/pegawai/store">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai ..">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Pegawai .."></textarea>

                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>