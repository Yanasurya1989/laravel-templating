@foreach ($template as $list)
    <div class="post-img">
        <img src="http://127.0.0.1:8000{{ Storage::url($list->images) }}" alt="" class="img-fluid">
    </div>

    <h2 class="title">{{ $list->title }}</h2>

    <div class="meta-top">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$list->author}}</a>
            </li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                        datetime="2020-01-01">{{$list->created_at}}</time></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                    Comments</a></li>
        </ul>
    </div><!-- End meta top -->

    <div class="content">

        {{$list->content}}

        <p>
            Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel
            aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
        </p>

        <blockquote>
            <p>
                Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam
                doloribus
                minus autem quos.
            </p>
        </blockquote>

        <p>
            Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas
            mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex
            rerum assumenda dolores nihil quaerat.
            Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis
            dolorum exercitationem harum qui qui blanditiis neque.
            Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam
            quod
            et tempora deleniti error rerum nihil tempora.
        </p>

        <h3>Et quae iure vel ut odit alias.</h3>
        <p>
            Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio
            provident
            dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis
            nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
            Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur
            dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor
            consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
            Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem
            voluptatem accusamus mollitia aut atque aut.
        </p>
        <img src="{{ asset('UpConstruction') }}/assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

        <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
        <p>
            Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id
            praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat
            quia
            repellat incidunt labore. Autem facilis hic dolorum dolores vel.
            Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex
            libero
            illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
        </p>
        <p>
            Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit
            eaque
            mollitia nisi asperiores est veniam.
        </p>

    </div><!-- End post content -->

    <div class="meta-bottom">
        <i class="bi bi-folder"></i>
        <ul class="cats">
            <li><a href="#">Business</a></li>
        </ul>

        <i class="bi bi-tags"></i>
        <ul class="tags">
            <li><a href="#">Creative</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>
    </div><!-- End meta bottom -->
@endforeach
