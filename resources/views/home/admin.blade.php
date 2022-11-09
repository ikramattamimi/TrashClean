@extends('home.identitas')

@section('role-based-content-left')
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10">
                    <a href="{{ '/' . Auth::user()->role . '/notification' }}">
                        <p class="mb-0">Notifikasi Pengiriman Sampah</p>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="{{ '/' . Auth::user()->role . '/notification' }}"><i class="bi bi-bell-fill"></i></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                    <p class="mb-0">Daftar Pengirim Sampah</p>
                </div>
                <div class="col-sm-2">
                    <a href="index"><i class="bi bi-people-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('role-based-content-right')
    {{-- JUMLAH SAMPAH --}}

    <div class="row">
        <div class="col-md">
            <div class="card mb-4 mb-md-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between  align-items-center mb-3">
                        <h4><span class="text-primary font-italic">Jumlah Sampah</span>
                            Terkumpul dan Tervalidasi
                        </h4>
                    </div>

                    <div>
                        <h5 class="mb-1" style="font-size: .99rem;">Organik</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">800 KG</div>
                        </div>
                        <h5 class="mt-4 mb-1" style="font-size: .99rem;">Anorganik</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                aria-valuemin="0" aria-valuemax="100">720 KG</div>
                        </div>
                        <h5 class="mt-4 mb-1" style="font-size: .99rem;">B3</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                aria-valuemin="0" aria-valuemax="100">890 KG</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
