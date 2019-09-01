<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body>
<a href="/anggota/tambah"> + tambah User</a>
<br/>
<br/>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
    </tr>
    @foreach($anggota as $member)
        <tr>
            <td>{{ $member->nama }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->umur }}</td>
            <td>
                <a href="/anggota/edit/{{ $member->id }}">Edit</a>
                <a href="/anggota/hapus/{{ $member->id }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>