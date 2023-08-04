<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Anak</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route('anak.update', $anak->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input value="{{ old('nama', $anak->nama) }}" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input value="{{ old('tanggal_lahir', $anak->tanggal_lahir )}}" name="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('jenis_kelamin', $anak->jenis_kelamin) == 'Laki-Laki') value="Laki-Laki">Laki-Laki</option>
                    <option @selected(old('jenis_kelamin', $anak->jenis_kelamin) == 'Perempuan') value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Ortu</label>
                <select name="ortu_id" class="form-control @error('ortu_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($ortus as $ortu)
                        <option @selected(old('ortu', $anak->ortu_id) == $ortu->id) value="{{ $ortu->id }}">{{ $ortu->nama }}</option>
                    @endforeach
                </select>
                @error('ortu_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $anak->alamat) }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
