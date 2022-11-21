@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita</h2>
                <p>Semua informasi mengenai sampah ada disini!</p>
            </div>

            <div class="row portfolio-container">

                @foreach ($berita as $item)
                    <div class="portfolio-container">
                        <img src="{{ asset('storage/uploads/berita/' . $item->gambar) }}" class="img-fluid" alt="">
                        <a href="{{ '/berita/detail/' . $item->id }}">
                            <div class="portfolio-info">
                                <h4>{{ $item->judul }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
