@extends('halamanUtama.utama')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto">
                <form action="/lupaPassword" method="POST">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal text-center">Lupa Password</h1>

                    <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" />
                        <label for="lupapass">Username</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">
                        Simpan
                    </button>
                    <small class="d-block text-center mt-3">Ubah Password? <a href="/ubahPassword">Klik
                            Disini</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
