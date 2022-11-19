@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">
            
            <div class="section-title">
                <h2>Request User</h2>
            </div>

            <div class="row">

                {{-- <div class="col-sm-4 col-lg-4 mb-4">
                    @include('notifikasi.trashcoin')
                </div> --}}

                {{-- <div class="col-sm-12 col-lg-12 mb-4"> --}}
                    @yield('content-right')
                {{-- </div> --}}
                    
            </div>
        </div>
    </section>
@endsection
