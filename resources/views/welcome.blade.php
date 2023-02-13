<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FSpongeBob_SquarePants_%2528character%2529&psig=AOvVaw2GAhUQCViTeXOqoj1orfOV&ust=1676406525943000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOjm1Y2rk_0CFQAAAAAdAAAAABAE">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center py-3">
        <h1>Data Karyawan</h1>
    </div>

    <div class="d-flex justify-content-center">
        <a href="add-karyawan">Add Karyawan</a>
    </div>
    <div class="d-flex flex-wrap justify-content-center py-5">
    @foreach ($karyawans as $karyawan)
    <div class="px-1 py-1">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$karyawan->Nama}}</h5>
            <p class="card-text">{{$karyawan->Umur}}</p>
            <p class="card-text">{{$karyawan->Alamat}}</p>
            <p class="card-text">{{$karyawan->Telepon}}</p>

            <div class="d-flex flex-wrap justify-content-lg-between">
            <a href="{{route('show',$karyawan->id)}}" class="btn btn-primary">See Detail</a>
            <a href="{{route('edit', $karyawan->id)}}" class="btn btn-success">Edit</a>

            <form action="/delete-karyawan/{{$karyawan->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</a>
            </form>
        </div>
        </div>
    </div>
</div>
    @endforeach
</div>

</body>
</html>
