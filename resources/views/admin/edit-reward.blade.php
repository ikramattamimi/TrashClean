@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container">

            <div class="section-title">
                <h2>Validasi Reward</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card mb-4 col-12 col-lg-8">
                    <div class="card-body pr-1">
                        <div class="row d-flex justify-content-center align-items-center mb-3 ">

                            <div class="col-8 col-md-3 text-center mt-4 mx-4">
                                <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $rewards->reward->gambar) }}"
                                    alt="User" style="width: 100%; border-radius: 10px;">
                            </div>

                            <div class="col-12 col-md-8 mt-4">

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah
                                        {{ $rewards->reward->nama }}</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">{{ $rewards->jumlah }}</p>
                                        </div>
                                    </div>
                                </div>

                                @if ($rewards->reward->kategori == 'ewallet')
                                    <div class=" row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Nomor
                                            {{ $rewards->reward->nama }}</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <p class="form-control-plaintext text-muted">{{ $rewards->no_ewallet }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">TrashCoin
                                        digunakan</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $rewards->jumlah * $rewards->reward->koin }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">Status</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">{{ $rewards->status }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a class="btn btn-secondary my-3 col-4 col-md-2" href="/admin/reward">Kembali</a>
                            <button class="btn btn-primary m-3 col-4 col-md-2" data-bs-toggle="modal"
                                data-bs-target="#modal-konfirmasi" type="button">Konfirmasi</button>
                            @include('admin.modal-konfirmasi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
