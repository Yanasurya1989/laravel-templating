<div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">Recent Posts</h3>

    <div class="mt-3">
        @foreach ($template as $list)
            <div class="post-item mt-3">
                <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-recent-1.jpg" alt="">
                <div>
                    <h4><a href="blog-details.html">{{$list->title}}</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
            </div><!-- End recent post item-->
        @endforeach

        {{-- <div class="post-item">
            <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-recent-2.jpg" alt="">
            <div>
                <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
        </div><!-- End recent post item-->

        <div class="post-item">
            <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-recent-3.jpg" alt="">
            <div>
                <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
        </div><!-- End recent post item-->

        <div class="post-item">
            <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-recent-4.jpg" alt="">
            <div>
                <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
        </div><!-- End recent post item-->

        <div class="post-item">
            <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-recent-5.jpg" alt="">
            <div>
                <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
        </div><!-- End recent post item--> --}}

    </div>

</div>
