<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>
<body>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Aprilia</td>
                    <td>Menikah</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>Bagaskara</td>
                    <td>Belum</td>
                </tr>
            </tbody>
    </table>
    <div class="text-center">
    <button class="btn btn-primary">Tambah</button>
    <button class="btn btn-warning">Edit</button>
    <button class="btn btn-danger">Hapus</button>
    <button class="btn btn-secondary">Kembali</button>
    </div>
</body>
</html>
