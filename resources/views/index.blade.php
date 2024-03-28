<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Dosen Pembimbing</th>
                <th>Wali</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->dosen ? $mahasiswa->dosen->nama : 'Belum ada' }}</td>
                    <td>{{ $mahasiswa->wali ? $mahasiswa->wali->nama : 'Belum ada' }}</td>
                    <td>
                        <ul>
                            @forelse ($mahasiswa->hobi as $hobi)
                                <li>{{ $hobi->hobi }}</li>
                            @empty
                                <li>Tidak ada hobi</li>
                            @endforelse
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
