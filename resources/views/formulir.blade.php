<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form | Pengisian</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Formulir Mahasiswa</h3>
                        <br/>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <br/>
                         <!-- form validasi -->
                        <form action="/proses" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control" id="nrp" name="nrp" value="{{ old('nrp') }}">
                            </div>
                            <div class="form-group">
                                <label for="departemen">Departemen</label>
                                <input type="text" class="form-control" id="departemen" name="departemen" value="{{ old('departemen') }}">
                            </div>
                            <div class="form-group">
                                <label for="ipk">Nilai PBKK</label>
                                <input type="text" class="form-control" id="ipk" name="ipk" value="{{ old('ipk') }}">
                            </div>


                            <div class="form-group">
                                <label for="gambar">Foto</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{ old('gambar') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>