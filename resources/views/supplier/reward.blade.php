@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>Reward</h2>
            </div>

            <div class="card mb-4">
                <div class="card mb-4 mb-md-0">
                    <div class="card-header">
                        <h5>Pilih Reward</h5>
                    </div>
                    <div class="card-body pr-1">

                        <div class="row d-flex justify-content-center mb-3 ">
                            @foreach ($rewards as $reward)
                                @include('supplier.list-reward')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
