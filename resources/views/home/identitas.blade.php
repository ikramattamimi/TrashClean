@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">

                {{-- PROFIL --}}
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/img/' . Auth::user()->foto) }}" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->nama }}</h5>
                            {{-- <p class="text-muted mb-1">Member Silver</p> --}}
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ '/' . Auth::user()->role . '/edit-profil' }}" class="btn btn-primary">Edit
                                    Profil</a>
                            </div>
                        </div>
                    </div>

                    @yield('role-based-content-left')

                </div>

                <div class="col-lg-8">

                    {{-- IDENTITAS --}}
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->nama }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->no_telepon }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('role-based-content-right')

                </div>
            </div>
        </div>
    </section>
@endsection
