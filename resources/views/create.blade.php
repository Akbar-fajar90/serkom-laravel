<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Tinggalkan Komentar</title>
</head>
<body>
    <div class="container">
        <h1>Tinggalkan Komentar</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <form action="{{ route('guestMessage.store') }}" method="POST">

                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="username" id="nama" required placeholder="Budi">
                    @error('username')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Budi@contoh.com">
                    @error('email')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <input type="text" name="pesan" id="pesan" required placeholder="Sekolahnya kerenn :)">
                    @error('pesan')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
    </div>
    
</body>
</html>