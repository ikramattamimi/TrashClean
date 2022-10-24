@extends('layouts.main')

@section('main-content')
  <!-- ======= Breadcrumbs ======= -->
  {{-- <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs --> --}}

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      {{-- <div class="section-title">
        <h2>Tutorial</h2>
        <p>Tutorial mengelola sampah supaya menjadi barang yang lebih bernilai untuk diperjualbelikan</p>
      </div> --}}

      <div class="row gy-4">

        <div class="col-lg-4">
          {{-- <div class="portfolio-details-slider swiper"> --}}
          {{-- <div class="swiper-wrapper align-items-center"> --}}

          {{-- <div class="swiper-slide"> --}}
          <img src={{ url('assets/img/tutorial/kompos.jpg') }} alt="">
          {{-- </div> --}}

          {{-- <div class="swiper-slide">
                <img src={{ url('assets/img/portfolio/portfolio-2.jpg') }} alt="">
              </div>

              <div class="swiper-slide">
                <img src={{ url('assets/img/portfolio/portfolio-3.jpg') }} alt="">
              </div> --}}

          {{-- </div>
            <div class="swiper-pagination"></div>
          </div> --}}
        </div>

        <div class="col-lg-8">
          <div class="portfolio-info">
            <h2>Tutorial Membuat Pupuk Kompos</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
              Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
              accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatem accusantium magni facilis
              minima, nobis, recusandae fuga obcaecati deserunt, itaque veniam numquam harum? Fuga at quibusdam distinctio
              nesciunt incidunt modi!
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatem accusantium magni facilis
              minima, nobis, recusandae fuga obcaecati deserunt, itaque veniam numquam harum? Fuga at quibusdam distinctio
              nesciunt incidunt modi!
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
@endsection
