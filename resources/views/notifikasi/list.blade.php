<div class="row d-flex justify-content-center align-items-center mb-3 ">
    <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body p-4">
                {{-- <form action="/admin/products/update" method="post" style="width: 100%;">
                    @csrf --}}
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-2 text-center">
                        <img class="img-fluid" src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}"
                            alt="Generic placeholder image" style="width: 100px; border-radius: 10px;">
                    </div>

                    <div class="col-6">
                        <p class="mb-1 h6">{{ $user[$key]->nama }}</p>
                        <small class="mb-2 pb-1" style="color: #2b2a2a;">Membuat {{ count($item) }} Request
                        </small>
                        <input name="status_barang" type="text" value="valid" hidden>
                        <input name="user_id" type="text" value="{{ $user[$key]->id }}" hidden>
                    </div>
                    <div class="col-4 text-end">
                        {{-- <a type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</a> --}}
                        <a class="btn btn-primary flex-grow-1" type="submit"
                            href="/admin/notification/{{ $user[$key]->id }}">Lihat</a>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
