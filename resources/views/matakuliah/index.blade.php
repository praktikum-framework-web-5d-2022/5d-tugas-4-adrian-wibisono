<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="../../css/app.css">
    <title>Matakuliah</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Data Matakuliah</h1>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        @forelse ($matakuliahs as $matakuliah)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $matakuliah->nama_mk }} (<span style="color: rgb(255, 101, 204); font-weight: normal">{{ $matakuliah->kode_mk }}</span>)</h5>
                      <p style="font-size:15px">{{ $matakuliah->sks }} SKS</p>
                      </div>
                      <p class="card-text">{{ $matakuliah->nama_dosen }}</p>
                    </div>
                </div>
            </div>    
          @empty
          <div class="card">
            <div class="card-body">
              <p class="card-text">lah iya kosong</p>
            </div>
          </div>
        @endforelse 
      </div>
    </div>
</body>
</html>