@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>Tukar Koin</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card mb-4 col-12 col-lg-8">
                    <div class="card-body pr-1">
                        <form style="width: 100%;" action="/supplier/reward/tukar/{{ $reward->id }}" method="post">
                            @csrf
                            <div class="row d-flex justify-content-center mb-3 ">
                                <div class="col-12 col-md-4 text-center mt-4">
                                    <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $reward->gambar) }}"
                                        alt="User" style="width: 100px; border-radius: 10px;">
                                </div>

                                @if ($errors->any())
                                    <div
                                        class="alert alert-danger alert-block d-flex justify-content-between align-items-center">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <button class="btn close" data-dismiss="alert" type="button">×</button>
                                    </div>
                                @endif
                                @if ($message = Session::get('success'))
                                    <div
                                        class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                                        <strong>{{ $message }}</strong>
                                        <button class="btn close" data-dismiss="alert" type="button">×</button>
                                    </div>
                                @endif

                                <div class="col-12 col-md-8 mt-4">
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah
                                            TrashCoin</label>
                                        <div class="col-sm-6">
                                            <input class="form-control-plaintext" id="staticEmail" type="text"
                                                value="{{ $koin }}" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah Dana</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="jumlah" type="number"
                                                    max="{{ $koin }}" maxlength="2"
                                                    placeholder="{{ $koin }}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Nomor Dana</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input class="form-control" name="no_telepon" type="number"
                                                    value="{{ Auth::user()->no_telepon }}"
                                                    placeholder="{{ Auth::user()->no_telepon }}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input name="reward" type="text" value="{{ $reward->nama }}" hidden>
                                <button class="btn btn-primary my-3 col-4 col-md-2" type="submit">Tukar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
