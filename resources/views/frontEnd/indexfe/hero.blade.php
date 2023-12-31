<section id="hero" class="hero">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

        @foreach ($blog as $index => $list)
            {{-- <div class="carousel-item active" style="background-image: url({{asset('UpConstruction')}}/assets/img/hero-carousel/hero-carousel-1.png)"> --}}

            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                style="background-image: url('{{ Storage::url($list->images) }}')">

                <div class="info d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h2 data-aos="fade-down">{{ $list->title }}</h2>
                                {{-- <p data-aos="fade-up">{{$list->content}}</p> --}}

                                {{-- {{ substr(strip_tags($list->content), 0, 500) }} --}}


                                {{-- <a href="detil/{{$list->id}}">see more..</a> --}}

                                <a data-aos="fade-up" data-aos-delay="200" href="#get-started"
                                    class="btn-get-started">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="carousel-item" style="background-image: url({{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-2.png)">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down"> Kegiatan Olahraga <span>SDIT Salsabilla</span></h2>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url({{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-3.png)">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down">Kegiatan Pramuka <span>SDIT Salsabilla</span></h2>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url({{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-4.png)">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down">Gelar Karya <span>Pameran Pendidikan</span></h2>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url({{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-5.jpg)">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down">Kegiatan <span>Sambut Siswa</span></h2>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section><!-- End Hero Section -->
