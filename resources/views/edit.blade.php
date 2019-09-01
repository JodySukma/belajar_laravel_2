<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
</head>
<body>
    <h2>Edit Data Anggota</h2>

    <a href="/anggota">Kembali</a>

<br/>
<br/>

    @foreach($anggota as $member)
    <form action="/anggota/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $member->id }}"> <br/>
        Nama<input type="text" name="nama" value="{{ $member->nama }}"> <br/>
        Email<input type="text" name="email" value="{{ $member->email }}"> <br/>
        Umur<input type="number" name="umur" value="{{ $member->umur }}"> <br/>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</body>
</html>