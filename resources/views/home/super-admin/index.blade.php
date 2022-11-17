@extends('home.identitas')

@section('role-based-content-right')
    <div class="card mb-4">
        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-home-tab" data-bs-target="#pills-home" data-bs-toggle="pill"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        Content Landing Page
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-target="#pills-profile"
                        data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">
                        Akun Admin
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-target="#pills-contact" data-bs-toggle="pill"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @include('home.super-admin.lpcontent')
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <div class="d-flex justify-content-start">
                        <div class="col ps-2 supplier">
                            {{-- <a href="tambah-admin" class="btn btn-primary mb-3">Tambah</a> --}}
                            @include('home.super-admin.modal-tambah')

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    ...
                </div>
            </div>

        </div>
    </div>
@endsection
