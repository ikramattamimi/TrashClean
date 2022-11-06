@extends('home.identitas')
@section('role-based-content')
    {{-- JUMLAH SAMPAH --}}
    <div class="row">
        <div class="col-md">
            <div class="card mb-4 mb-md-0">
                <div class="card-body">

                    <div class="d-flex justify-content-between  align-items-center mb-3">
                        <h4><span class="text-primary font-italic">Jumlah Sampah</span>
                            Tervalidasi
                        </h4>
                        <a href="#" type="button" class="btn btn-sm btn-primary">Tambah Sampah
                            Baru</a>
                    </div>

                    <div>
                        <h5 class="mb-1" style="font-size: .99rem;">Organik</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">80 KG</div>
                        </div>
                        <h5 class="mt-4 mb-1" style="font-size: .99rem;">Anorganik</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                aria-valuemin="0" aria-valuemax="100">72 KG</div>
                        </div>
                        <h5 class="mt-4 mb-1" style="font-size: .99rem;">B3</h5>
                        <div class="progress rounded" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                aria-valuemin="0" aria-valuemax="100">89 KG</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
