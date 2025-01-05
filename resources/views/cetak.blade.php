<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form-Pendaftaran</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
        <div class="col-8">

        <div class="card shadow" style="width: 40rem;">
            <div class="card-body">
              <h5 class="card-title">Formulir Pendaftaran</h5>
              <h6 class="card-subtitle mb-2 text-muted">SMK Wikrama Bogor</h6>
              <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">No Register</div>
                        <div class="col-6">{{$cetak->no}}</div>
                        <div class="col-6">Nama Lengkap</div>
                        <div class="col-6">{{$cetak->name}}</div>
                        <div class="col-6">Jenis Kelamin</div>
                        <div class="col-6">{{$cetak->gender}}</div>
                        <div class="col-6">Agama</div>
                        <div class="col-6">{{$cetak->religion}}</div>
                        <div class="col-6">Alamat</div>
                        <div class="col-6">{{$cetak->address}}</div>
                        <div class="col-6">Asal SMP</div>
                        <div class="col-6">{{$cetak->school}}</div>
                        <div class="col-6">Jurusan</div>
                        <div class="col-6">{{$cetak->major}}</div>
                    </div>
                </div>
            </div>
            </div>

            </div>
            </div>
          </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        window.print();
    </script>
</div>
  </body>
</html>