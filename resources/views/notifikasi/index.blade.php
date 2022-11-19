@extends('layouts.main')

@section('main-content')
    <section class="" style="background-color: #eee;">
        <div class="container" data-aos="fade-up" style="min-height: 400px">
            
            <div class="section-title">
                <h2>Notifikasi</h2>
            </div>

            @foreach ($notification as $key => $item)
                @if (count($item) != 0)
                    @include('notifikasi.list')
                @endif
            @endforeach
        </div>
    </section>
@endsection
