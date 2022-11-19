@extends('notifikasi.layout')

@section('content-right')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Identitas</h5>
            </div>
            <div class="card-body align-items-center">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $user->nama }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $user->no_telepon }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $user->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="/admin/notification/store" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Validasi Request</h5>
                    </div>
                    <div class="card-body">
                        <div class="row flex-column-reverse">
                            @foreach ($products as $product)
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" id="{{ $product->nama_barang }}"
                                            name="{{ $product->nama_barang }}" type="checkbox" value="valid">
                                        <label class="form-check-label" for="{{ $product->nama_barang }}">
                                            {{ $product->nama_barang }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-12">
                @include('notifikasi.trashcoin')
            </div>
        </div>
    </form>
@endsection
