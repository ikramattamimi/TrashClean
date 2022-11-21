<div class="row d-flex justify-content-center mb-3 ">
    <div class="col-lg-12 col-xl-12">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body">
                {{-- <form style="width: 100%;" action="{{ '/super_admin/edit-tutorial/' . $tutorial->id }}" method="get">
                    @csrf --}}
                <div class="row text-start d-flex align-items-center justify-content-center">
                    <div class="col-2 text-center">
                        <img class="img-fluid" src="{{ asset('storage/uploads/berita/' . $berita->gambar) }}"
                            alt="Tutorial" style="width: 100px; border-radius: 10px;">
                    </div>

                    <div class="col-6 form-group">
                        <p class="mb-1">{{ $berita->judul }}</p>
                        {{-- <input type="text" value="{{ $tutorial->id }}" hidden> --}}
                    </div>
                    <div class="col-4 form-group">
                        <a href="{{ '/super_admin/berita/' . $berita->id }}" class="btn btn-primary w-100">Edit</a>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
