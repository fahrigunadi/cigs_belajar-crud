<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD Anak</title>
  </head>
  <body>

    <div class="container mt-5">

        <a href="{{ route('anak.create') }}" class="btn btn-primary mb-3">Tambah</a>

        @if ($pesan = session('berhasil'))
            <div class="alert alert-primary" role="alert">
                {{ $pesan }}
            </div>
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Ortu</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($anak as $ank)
                    <tr>
                        <th scope="row">{{ $ank->id }}</th>
                        <td>{{ $ank->nama }}</td>
                        <td>{{ $ank->tanggal_lahir }}</td>
                        <td>{{ $ank->jenis_kelamin }}</td>
                        <td>{{ $ank->alamat }}</td>
                        <td>{{ $ank->ortu->nama }}</td>

                        <td>
                            <a href="{{ route('anak.edit', $ank->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('anak.destroy', $ank->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
