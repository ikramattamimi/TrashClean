@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">

                {{-- PROFIL --}}
                <div class="col-sm-4 col-lg-4">
                    <div class="card mb-4" style="min-height: 300px">
                        <div class="card-body text-center">
                            <img class="rounded-circle img-fluid"
                                src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}" alt="avatar"
                                style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->nama }}</h5>
                            {{-- <p class="text-muted mb-1">Member Silver</p> --}}
                            <div class="d-flex justify-content-center mb-2">
                                <a class="btn btn-primary" href="{{ '/' . Auth::user()->role . '/edit-profil' }}">Edit
                                    Profil</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-sm-8 col-lg-8">

                    {{-- IDENTITAS --}}
                    <div class="card mb-4" style="min-height: 300px">
                        <div class="card-body align-items-center">
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

                </div>
                    
                <div class="col-sm-4 col-lg-4 mb-3">
                    @yield('role-based-content-left')
                </div>
                <div class="col-sm-8 col-lg-8 mb-3">
                    @yield('role-based-content-right')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
