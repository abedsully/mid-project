<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center">
        <h1>Detail Karyawan</h1>
    </div>

    <div class="d-flex justify-content-center py-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$karyawan->Nama}}</h5>
            <p class="card-text">{{$karyawan->Umur}}</p>
            <p class="card-text">{{$karyawan->Alamat}}</p>
            <p class="card-text">{{$karyawan->Telepon}}</p>

            <div class="d-flex justify-content-center">
                <a href="/home" class="btn btn-primary">Back</a>
            </div>

        </div>
    </div>
</div>
</div>

</body>
</html>
