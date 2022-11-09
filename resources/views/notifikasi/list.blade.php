<div class="row d-flex justify-content-center align-items-center mb-3 ">
    <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body p-4">
                <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}"
                            alt="Generic placeholder image" class="img-fluid" style="width: 100px; border-radius: 10px;">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">{{ $user[$key]->nama }}</h5>
                        <p class="mb-2 pb-1" style="color: #2b2a2a;">Membuat {{ count($item) }} Request
                        </p>
                        {{-- <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                            <div>
                                <p class="small text-muted mb-1">Articles</p>
                                <p class="mb-0">41</p>
                            </div>
                            <div class="px-3">
                                <p class="small text-muted mb-1">Followers</p>
                                <p class="mb-0">976</p>
                            </div>
                            <div>
                                <p class="small text-muted mb-1">Rating</p>
                                <p class="mb-0">8.5</p>
                            </div>
                        </div> --}}
                        <div class="d-flex pt-1">
                            <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                            <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
