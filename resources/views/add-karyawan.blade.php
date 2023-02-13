<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="m-5">
        <h1 class="text-center">Tambah Karyawan</h1>

        <div class="d-flex justify-content-center">
            <a href="home">Lihat Karyawan</a>
        </div>

    <form action="/show-karyawan" method="POST" onsubmit="return validasi()">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Umur</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="Umur" min="20">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="Alamat">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Telepon</label>
            <input type="tel" class="form-control" id="exampleInputPassword2"  name="Telepon" pattern="08[1-9][0-9]{9,12}$">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script>

        function validasi(){

            let nama = document.getElementById("exampleInputEmail1").value.trim();
            let umur = document.getElementById("exampleInputPassword1").value;
            let alamat = document.getElementById("exampleInputEmail2").value.trim();
            let telepon = document.getElementById("exampleInputPassword2").value;

            var start = 0;

            if(nama == ""){
                alert("Nama tidak boleh kosong!")
                return false
            }

            else if(nama.length < 5 || nama.length > 20){
                alert("Nama harus setidaknya 5 karakter dan tidak lebih dari 20 karakter")
                return false
            }

            if(umur == ""){
                alert("Umur tidak boleh kosong!")
                return false
            }

            if (isNaN(umur) || x<1 || x>10){
                alert("Umur hanya boleh diisi dengan angka")
                return false
            }

            if(alamat.length < 10 || nama.length > 40){
                alert("Alamat setidaknya harus memiliki 10 karakter dan tidak lebih dari 40 karakter")
                return false
            }

            if(telepon.length < 9 || telepon.length > 12){
                alert("Nomor telepon setidaknya harus memiliki 9 angka dan tidak lebih dari 12 angka")
                return false
            }

            if (isNaN(telepon) || x<1 || x>10){
                alert("Nomor telepon hanya boleh diisi dengan angka")
                return false
            }








            alert("Penambahan karyawan sukses!")
            return true
        }

    </script>


</body>
</html>
