@extends('home.identitas')

@section('role-based-content-right')
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <form class="row" action="{{ '/' . Auth::user()->role . '/update-konten' }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul Home Screen</label>
                        <input name="judul_halaman_awal" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="judul content" value="{{ $post->judul_halaman_awal }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Text Home Screen</label>
                        <textarea name="konten_halaman_awal" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul About Us</label>
                        <input name="judul_tentang" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="judul content">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Text About Us</label>
                        <textarea name="konten_tentang" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Katalog bahan organik</label>
                        <textarea name="katalog_bahan_organik" class="form-control" id="exampleFormControlInput1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Katalog bahan anorganik</label>
                        <textarea name="katalog_bahan_anorganik" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Katalog bahan b3</label>
                        <textarea name="katalog_bahan_b3" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
