    <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs row  g-2 d-flex">
                @foreach($ganti as $list)

                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-{{$list->id}}">

                        <h4>TPA IT Baiturrahman</h4>
                        {{-- <h4>{{ $list->title }}</h4> --}}
                    </a>
                </li><!-- End tab nav item -->

                {{-- <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>KBIT Baiturrahman</h4>
                    </a><!-- End tab nav item -->
                </li> --}}

                {{-- <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>TKIT Baiturrahman</h4>
                    </a>
                </li><!-- End tab nav item --> --}}

                {{-- <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4>SDIT Baiturrahman</h4>
                    </a>
                </li><!-- End tab nav item --> --}}

                @endforeach
            </ul>

            <div class="tab-content">
                @foreach($ganti as $index => $g)
                <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="tab-{{ $g->id }}">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>Program Unggulan</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate
                                    velit.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="http://127.0.0.1:8000{{Storage::url($g->image)}}"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End tab content item -->

                {{-- <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Program Unggulan</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate
                                    velit.</li>
                                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                    dolores
                                    quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-2.png"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item --> --}}

                {{-- <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Program Unggulan</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate
                                    velit.</li>
                                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                    dolores
                                    quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            </ul>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-3.png"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item --> --}}

                {{-- <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Program Unggulan</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate
                                    velit.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-4.png"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item --> --}}

            </div>
        </div>
    </section>
