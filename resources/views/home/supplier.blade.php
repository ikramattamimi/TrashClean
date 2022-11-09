@extends('home.identitas')

@section('role-based-content-left')
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h4><span class="text-primary font-italic">Point</span>
                        Anda
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row point_left align-items-center">
                <div class="col">
                    <img src="{{ url('assets/img/trashcoin.png') }}" class="trash_coin">
                </div>
                <div class="col-5">
                    <b>
                        <p class="point_text">{{ Auth::user()->point }}</p>
                    </b>
                </div>
                <div class="col trash_coin_text">
                    <p>Trash Coin</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('role-based-content-right')
    {{-- JUMLAH SAMPAH --}}
    <div class="row supplier">
        <div class="col-lg">
            <div class="card mb-4 mb-md-0">
                <div class="card-body pr-1">
                    <form action="/supplier/products/store" method="POST">

                        <div class="d-flex justify-content-between  align-items-center mb-3">
                            <h4><span class="text-primary font-italic">Jumlah Sampah</span>
                                Tervalidasi
                            </h4>
                            @include('home.modal-tambah')
                        </div>


                        @csrf
                        <div class="row d-flex align-items-end">
                            <div class="col-10">
                                <h5 class="mt-4 mb-1" style="font-size: .99rem;">Organik</h5>
                                <div class="progress rounded" style="height: 30px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $organik }}0%"
                                        aria-valuenow="{{ $organik }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $organik }} Keranjang</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $organik_pending }}0%"
                                        aria-valuenow="{{ $organik_pending }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $organik_pending }} Keranjang</div>
                                </div>
                            </div>
                            <div class="col-2">
                                @include('home.input-plus-minus', ['number' => '1'])

                            </div>
                        </div>

                        <div class="row d-flex align-items-end">
                            <div class="col-10">
                                <h5 class="mt-4 mb-1" style="font-size: .99rem;">Anorganik</h5>
                                <div class="progress rounded" style="height: 30px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $anorganik }}0%"
                                        aria-valuenow="{{ $anorganik }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $anorganik }} Keranjang</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $anorganik_pending }}0%"
                                        aria-valuenow="{{ $anorganik_pending }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $anorganik_pending }} Keranjang</div>
                                </div>
                            </div>
                            <div class="col-2">
                                @include('home.input-plus-minus', ['number' => '2'])
                            </div>
                        </div>

                        <div class="row d-flex align-items-end">
                            <div class="col-10">
                                <h5 class="mt-4 mb-1" style="font-size: .99rem;">B3</h5>
                                <div class="progress rounded" style="height: 30px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $b3 }}0%"
                                        aria-valuenow="{{ $b3 }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $b3 }} Keranjang</div>


                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $b3_pending }}0%"
                                        aria-valuenow="{{ $b3_pending }}" aria-valuemin="0" aria-valuemax="10">
                                        {{ $b3_pending }} Keranjang</div>

                                </div>
                            </div>
                            <div class="col-2">
                                @include('home.input-plus-minus', ['number' => '3'])
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
