<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">

        <div class=" section-header">
            <h2>Berita</h2>
            <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>

        <div class="row gy-5">

            @foreach ($post as $list)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            {{-- <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-1.png" --}}
                            <img src="{{Storage::url($list->image)}}"
                                class="img-fluid" alt="">
                            <span class="post-date">{{$list->created_at}}</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <a href="/detil">
                                <h3 class="post-title">{{$list->title}}</h3>
                            </a>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">{{$list->author}}</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Guru</span>
                                </div>
                            </div>

                            <hr>

                            <a href="/detilformthem" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>                
            @endforeach
            <div class="text-left mt-5"> Older post : 
                {{ $post->links('pagination::bootstrap-4') }}
            </div>
            <!-- End post item -->

            {{-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-2.png"
                            class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Kegiatan Olahraga SDIT Salsabilla Baiturrahman</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Indra kUrniawan</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Guru</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div> --}}
            <!-- End post item -->

            {{-- <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('UpConstruction') }}/assets/img/hero-carousel/hero-carousel-3.png"
                            class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Kegiatan Pramuka SDIT Salsabilla Baiturrahman</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Indra Kurniawan</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Guru</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div> --}}
            <!-- End post item -->

        </div>

    </div>
</section>
