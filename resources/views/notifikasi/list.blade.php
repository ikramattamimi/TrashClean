<div class="row d-flex justify-content-center align-items-center mb-3 " style="min-height: 300px;">
    <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body p-4 d-flex">
                <form action="/admin/products/update" method="post" style="width: 100%;">
                    @csrf
                    <div class="row text-start d-flex align-items-center">
                        <div class="col-2 text-center">
                            <img src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}"
                                alt="Generic placeholder image" class="img-fluid"
                                style="width: 100px; border-radius: 10px;">
                        </div>

                        <div class="col-8 form-group">
                            <h5 class="mb-1">{{ $user[$key]->nama }}</h5>
                            <p class="mb-2 pb-1" style="color: #2b2a2a;">Membuat {{ count($item) }} Request
                            </p>
                            <input type="text" name="status_barang" value="valid" hidden>
                            <input type="text" name="user_id" value="{{ $user[$key]->id }}" hidden>
                        </div>
                        <div class="col-2 form-group">
                            {{-- <a type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</a> --}}
                            <button href="" type="submit"
                                class="btn btn-primary flex-grow-1">Konfirmasi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
