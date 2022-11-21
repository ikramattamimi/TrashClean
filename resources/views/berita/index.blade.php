@extends('layouts.main')

@section('main-content')
    <!--Main layout-->
    <section style="background-color: #eee;">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Media Informasi</h2>
                {{-- <p>Produk yang telah kami olah</p> --}}
            </div>

            <!--Section: Content-->
            <section>
                <div class="row gx-lg-5">
                    @foreach ($berita as $item)
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                            <!-- News block -->
                            <div>


                                <!-- Featured image -->
                                <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('storage/uploads/berita/' . $item->gambar) }}" class="img-fluid"
                                        style="height: 200px; width: 100%;" />
                                    <a href="{{ '/berita/detail/' . $item->id }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>

                                <!-- Article data -->
                                <div class="row mb-3">
                                    {{-- <div class="col-6">
                                <a href="" class="text-info">
                                    <i class="fas fa-plane"></i>
                                    Travels
                                </a>
                            </div> --}}

                                    <div class="col-12 text-end">
                                        <u>{{ $item->created_at->format('Y-m-d') }}</u>
                                    </div>
                                </div>

                                <!-- Article title and description -->
                                <a href="" class="text-dark">
                                    <h5>{{ $item->judul }}</h5>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                                        id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                        adipisci iusto nam temporibus modi animi laboriosam?
                                    </p>
                                </a>

                                <hr />


                            </div>
                            <!-- News block -->
                        </div>
                    @endforeach

                </div>
            </section>
            <!--Section: Content-->

            <!-- Pagination -->
            <nav class="my-4" aria-label="...">
                <ul class="pagination pagination-circle justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Main layout-->
    @endsection
