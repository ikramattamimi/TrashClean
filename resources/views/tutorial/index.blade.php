@extends('layouts.main')

@section('main-content')
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tutorial</h2>
        <p>Tutorial mengelola sampah supaya menjadi barang yang lebih bernilai untuk diperjualbelikan</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-organik">Organik</li>
            <li data-filter=".filter-anorganik">Anorganik</li>
            <li data-filter=".filter-lainnya">Lainnya</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-organik">
          <div class="portfolio-wrap">
            <img src={{ url('assets/img/tutorial/kompos.jpg') }} class="img-fluid" alt="">
            <a href="/tutorial/detail">
              <div class="portfolio-info">
                <h4>Membuat Pupuk Kompos</h4>
                <p>Cara Membuat Pupuk Kompos</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-anorganik">
          <div class="portfolio-wrap">
            <img src={{ url('assets/img/tutorial/kompos.jpg') }} class="img-fluid" alt="">
            <a href="/tutorial/detail">
              <div class="portfolio-info">
                <h4>Membuat Pupuk Kompos</h4>
                <p>Cara Membuat Pupuk Kompos</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-lainnya">
          <div class="portfolio-wrap">
            <img src={{ url('assets/img/tutorial/kompos.jpg') }} class="img-fluid" alt="">
            <a href="/tutorial/detail">
              <div class="portfolio-info">
                <h4>Membuat Pupuk Kompos</h4>
                <p>Cara Membuat Pupuk Kompos</p>
              </div>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
@endsection
