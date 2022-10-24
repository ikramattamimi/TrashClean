@extends('layouts.main')

@section('main-content')
  <!-- ======= Katalog Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Katalog</h2>
        <p>Produk yang telah kami kumpulkan yang bisa didaur ulang</p>
      </div>

      <div class="row justify-content-center mb-3">
        <div class="col-md-12 col-xl-10">
          <div class="card shadow-0 border rounded-3">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                  <div class="bg-image hover-zoom ripple rounded ripple-surface">
                    <img src="{{ url('/assets/img/katalog/sampah-organik.jpg') }}" class="w-100" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <h5>Sampah Organik</h5>
                  <div class="d-flex flex-row">
                    <div class="text-danger mb-1 me-2">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <span>300 kg</span>
                  </div>
                  <div class="mt-1 mb-0 text-muted small">
                    <span>Bahan pupuk kompos</span>
                    <span class="text-primary"> • </span>
                    <span>Bahan pupuk kandang</span>
                    <span class="text-primary"> • </span>
                    <span>Lainnya<br /></span>
                  </div>
                  {{-- <div class="mb-2 text-muted small">
                    <span>Unique design</span>
                    <span class="text-primary"> • </span>
                    <span>For men</span>
                    <span class="text-primary"> • </span>
                    <span>Casual<br /></span>
                  </div> --}}
                  <p class="text-truncate mb-4 mb-md-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga optio natus excepturi ab ad. Doloremque,
                    eos minus voluptas odit ratione excepturi laborum molestiae sed? Iste, officia? Ipsum laboriosam nam
                    velit!
                  </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                  <div class="d-flex flex-row align-items-center mb-1">
                    <h4 class="mb-1 me-1">100 kg</h4>
                    {{-- <span class="text-danger"><s>$20.99</s></span> --}}
                  </div>
                  <h6 class="text-success">Free shipping</h6>
                  <div class="d-flex flex-column mt-4">
                    <button class="btn btn-success btn-sm" type="button">Details</button>
                    <button class="btn btn-outline-success btn-sm mt-2" type="button">
                      Hubungi admin
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mb-3">
        <div class="col-md-12 col-xl-10">
          <div class="card shadow-0 border rounded-3">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                  <div class="bg-image hover-zoom ripple rounded ripple-surface">
                    <img src="{{ url('/assets/img/katalog/sampah-anorganik.jpg') }}" class="w-100" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <h5>Sampah Anorganik</h5>
                  <div class="d-flex flex-row">
                    <div class="text-danger mb-1 me-2">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <span>300 kg</span>
                  </div>
                  <div class="mt-1 mb-0 text-muted small">
                    <span>Bahan plastik ulang</span>
                    <span class="text-primary"> • </span>
                    {{-- <span>Bahan pupuk kandang</span>
                    <span class="text-primary"> • </span> --}}
                    <span>Lainnya<br /></span>
                  </div>
                  {{-- <div class="mb-2 text-muted small">
                    <span>Unique design</span>
                    <span class="text-primary"> • </span>
                    <span>For men</span>
                    <span class="text-primary"> • </span>
                    <span>Casual<br /></span>
                  </div> --}}
                  <p class="text-truncate mb-4 mb-md-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga optio natus excepturi ab ad. Doloremque,
                    eos minus voluptas odit ratione excepturi laborum molestiae sed? Iste, officia? Ipsum laboriosam nam
                    velit!
                  </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                  <div class="d-flex flex-row align-items-center mb-1">
                    <h4 class="mb-1 me-1">100 kg</h4>
                    {{-- <span class="text-danger"><s>$20.99</s></span> --}}
                  </div>
                  <h6 class="text-success">Free shipping</h6>
                  <div class="d-flex flex-column mt-4">
                    <button class="btn btn-success btn-sm" type="button">Details</button>
                    <button class="btn btn-outline-success btn-sm mt-2" type="button">
                      Hubungi admin
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->
@endsection
