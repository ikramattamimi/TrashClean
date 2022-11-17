@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container py-5">

            <form class="row" action="{{ '/' . Auth::user()->role . '/update-profil' }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- PROFIL --}}
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->nama }}</h5>
                            <div class="px-5 mb-3">
                                {{-- <label for="formFile" class="form-label">Default file input example</label> --}}
                                <input class="form-control" name="foto" type="file" id="formFile" label>
                            </div>
                            {{-- <p class="text-muted mb-1">Member Silver</p> --}}
                            <div class="d-flex justify-content-center mb-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">

                    {{-- IDENTITAS --}}
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="mb-0 form-control" name="nama"
                                        value="{{ Auth::user()->nama }}" />
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <input class="mb-0 form-control" type="text" name="no_telepon"
                                        value="{{ Auth::user()->no_telepon }}" />
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <input class="mb-0 form-control" type="text" name="alamat"
                                        value="{{ Auth::user()->alamat }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('role-based-content')

                </div>

            </form>

        </div>
    </section>
@endsection
