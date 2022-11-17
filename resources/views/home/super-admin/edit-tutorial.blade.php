@php
    $title = 'Edit Tutorial';
    $form_action = '/super_admin/update-tutorial/';
    $right_button = 'Tambah';
@endphp

<div class="row d-flex justify-content-center">


    <form action="{{ $form_action }}" method="post" class="mx-1 mx-md-4" enctype="multipart/form-data">
        @csrf
        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center col-10">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center col-10">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif

            <div class="col-10 col-xl-10">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input type="text" class="form-control" name="judul" placeholder="Judul Tutorial" value="{{ $tutorial->judul }}" required />
                        <label>Judul</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input type="file" class="form-control" name="gambar"/>
                        <input type="text" class="form-control" name="id" value="{{ $tutorial->id }}"/>
                        <label>Gambar</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <textarea type="text" id="konten-tutorial" class="form-control" name="konten" placeholder="Konten" required>{{ $tutorial->konten }}</textarea>
                        <script>
                            CKEDITOR.replace('konten-tutorial');
                        </script>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center col-10 my-3">
                <button type="submit" class="btn btn-primary btn-lg ">{{ $right_button }}</button>
            </div>
        </div>
    </form>




</div>
