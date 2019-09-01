<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
</head>
<body>
    <h3>Tambah Anggota</h3>
    <a href="/anggota">Kembali</a>

<br/>
<br/>

<form action="/anggota/store" method="post">
    {{ csrf_field() }}
    Nama<input type="text" name="nama" required="required"> <br/>
    Email<input type="text" name="email" required="required"> <br/>
    Umur<input type="number" name="umur" required="required"> <br/>
    <input type="submit" value="Simpan">
</form>
</body>
</html>