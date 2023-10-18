<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Data Mahasiswa</h2>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>IPK</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($mahasiswa)
                            <tr>
                                <th>{{ $mahasiswa->id }}</th>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->tanggal_lahir->isoFormat('DD-MM-Y') }}</td>
                                <td>{{ $mahasiswa->ipk }}</td>
                                <td>{{ $mahasiswa->created_at->isoFormat('DD-MM-Y') }}</td>
                                <td>{{ $mahasiswa->updated_at->isoFormat('DD-MM-Y') }}</td>
                            </tr>
                        @else
                            <td colspan="7" class="text-center">Tidak ada data...</td>
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
