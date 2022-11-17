<div class="row">
    <form class="row" action="{{ '/' . Auth::user()->role . '/update-konten' }}" method="post">
        @csrf
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">
                <h5>Judul Home Screen</h5>
            </label>
            <input class="form-control" id="exampleFormControlInput1" name="judul_halaman_awal" type="text"
                value="{{ $post->judul_halaman_awal }}" placeholder="judul content">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">
                <h5>Text Home Screen</h5>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="konten_halaman_awal" rows="5">{{ $post->konten_halaman_awal }}</textarea>
        </div>
        <hr>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">
                <h5>Judul About Us</h5>
            </label>
            <input class="form-control" id="exampleFormControlInput1" name="judul_tentang" type="text"
                value="{{ $post->judul_tentang }}" placeholder="judul content">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">
                <h5>Text About Us</h5>
            </label>
            <textarea class="form-control" id="editor1" name="konten_tentang" rows="5">{{ $post->konten_tentang }}</textarea>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </div>
        <hr>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">
                <h5>Katalog bahan organik</h5>
            </label>
            <textarea class="form-control" id="editor2" name="katalog_bahan_organik" rows="4">{{ $post->katalog_bahan_organik }}</textarea>
            {{-- <script>
                        CKEDITOR.replace('editor2');
                    </script> --}}
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">
                <h5>Katalog bahan anorganik</h5>
            </label>
            <textarea class="form-control" id="editor3" name="katalog_bahan_anorganik" rows="4">{{ $post->katalog_bahan_anorganik }}</textarea>
            {{-- <script>
                        CKEDITOR.replace('editor3');
                    </script> --}}
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">
                <h5>Katalog bahan b3</h5>
            </label>
            <textarea class="form-control" id="editor4" name="katalog_bahan_b3" rows="4">{{ $post->katalog_bahan_b3 }}</textarea>
            {{-- <script>
                        CKEDITOR.replace('editor4');
                    </script> --}}
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>
