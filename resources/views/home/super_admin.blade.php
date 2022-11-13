@extends('home.identitas')

@section('role-based-content-right')
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <form class="row" action="{{ '/' . Auth::user()->role . '/update-konten' }}" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput1">
                            <h5>Judul Home Screen</h5>
                        </label>
                        <input name="judul_halaman_awal" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="judul content" value="{{ $post->judul_halaman_awal }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">
                            <h5>Text Home Screen</h5>
                        </label>
                        <textarea name="konten_halaman_awal" class="form-control" id="exampleFormControlTextarea1" rows="5">{{ $post->konten_halaman_awal }}</textarea>
                    </div>
                    <hr>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput1">
                            <h5>Judul About Us</h5>
                        </label>
                        <input name="judul_tentang" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="judul content" value="{{ $post->judul_tentang }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">
                            <h5>Text About Us</h5>
                        </label>
                        <textarea name="konten_tentang" class="form-control" id="exampleFormControlTextarea1" rows="5">{{ $post->konten_tentang }}</textarea>
                    </div>
                    <hr>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput1">
                            <h5>Katalog bahan organik</h5>
                        </label>
                        <textarea name="katalog_bahan_organik" class="form-control" id="exampleFormControlInput1" rows="4">{{ $post->katalog_bahan_organik }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">
                            <h5>Katalog bahan anorganik</h5>
                        </label>
                        <textarea name="katalog_bahan_anorganik" class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $post->katalog_bahan_anorganik }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">
                            <h5>Katalog bahan b3</h5>
                        </label>
                        <textarea name="katalog_bahan_b3" class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $post->katalog_bahan_b3 }}</textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
