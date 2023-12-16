<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('{{ asset('UpConstruction') }}/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Blog Details</h2>
        <ol>
            <li><a href="/indexfe">Home</a></li>
            <li>Blog Details</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

            <div class="col-lg-8">

                <article class="blog-details">

                    @include('frontEnd.indexfe.blogsdetil.detilsarticle')
                    {{-- @yield('konten') --}}

                </article><!-- End blog post -->

                <div class="post-author d-flex align-items-center">
                    <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-author.jpg"
                        class="rounded-circle flex-shrink-0" alt="">
                    <div>
                        <h4>Jane Smith</h4>
                        <div class="social-links">
                            <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                        </div>
                        <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas
                            repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde
                            voluptas.
                        </p>
                    </div>
                </div><!-- End post author -->

                <div class="comments">

                    @include('frontEnd.indexfe.blogsdetil.peoplescoment')

                </div><!-- End blog comments -->

            </div>

            <div class="col-lg-4">

                <div class="sidebar">

                    <div class="sidebar-item search-form">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="" class="mt-3">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <div class="sidebar-item categories">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="mt-3">
                            @foreach ($category as $list)
                                {{-- <li><a href="#">{{ $list->$category }} <span>({{$list->count($category)}})</span></a></li> --}}
                                {{-- <li><a href="#">{{ $list->$category }} <span>({{$list->category->count()}})</span></a></li> --}}
                                <li><a href="#">{{ $list->$category }} <span>()</span></a></li>
                            @endforeach
                            {{-- <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li> --}}
                        </ul>
                    </div><!-- End sidebar categories-->

                    <!-- sidebar recent posts-->
                    @include('frontEnd.indexfe.blogsdetil.recentpost')
                    <!-- End sidebar recent posts-->

                    <div class="sidebar-item tags">
                        <h3 class="sidebar-title">Tags</h3>
                        <ul class="mt-3">
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End Blog Sidebar -->

            </div>
        </div>

    </div>
</section><!-- End Blog Details Section -->
