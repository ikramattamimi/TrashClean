@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <img src="{{ asset('storage/uploads/berita/' . $berita->gambar) }}" alt="">
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info">
                        <h2>{{ $berita->judul }}</h2>
                        {{ Illuminate\Mail\Markdown::parse($berita->konten) }}
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
