<div class="dropdown">
    <button class="btn btn-sm btn-primary" type="button">
        Menu
        <i class="bi bi-plus-circle"></i>
    </button>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="d-flex justify-content-end">
                <div class="col-10 ps-2">
                    <h5>Daftar akun admin</h5>
                </div>
                <div class="col-2 ps-2 supplier">
                    {{-- <a href="tambah-admin" class="btn btn-primary mb-3">Tambah</a> --}}
                    @include('home.super-admin.modal-tambah')

                </div>
            </div>
            @foreach ($admin as $key => $user)
                @include('home.super-admin.list-admin')
            @endforeach                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Profile
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Contact
        </div>
    </div>
</div>
