@extends('home.identitas')

@section('role-based-content-left')
    <div class="card">
        <div class="card-header">
            <h5>Menu Super Admin</h5>
        </div>
        <div class="card-body">
            <ul class="nav flex-column nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-target="#pills-home" data-bs-toggle="pill"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        Content Landing Page
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-target="#pills-profile" data-bs-toggle="pill"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Akun Admin
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-tutorial-tab" data-bs-target="#pills-tutorial" data-bs-toggle="pill"
                        type="button" role="tab" aria-controls="pills-tutorial" aria-selected="false">Tutorial</button>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('role-based-content-right')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            @include('home.super-admin.lpcontent')
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="card p-2">
                <div class="d-flex justify-content-center">
                    <div class="col ps-2">
                        {{-- <a href="tambah-admin" class="btn btn-primary mb-3">Tambah</a> --}}
                        @include('home.super-admin.kelola-admin')

                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-tutorial" role="tabpanel" aria-labelledby="pills-tutorial-tab">
            <div class="card p-2">
                <div class="d-flex justify-content-center">
                    <div class="col ps-2">
                        {{-- <a href="tambah-admin" class="btn btn-primary mb-3">Tambah</a> --}}
                        @include('home.super-admin.kelola-tutorial')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
