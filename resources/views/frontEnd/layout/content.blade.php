@extends('frontEnd.layout.master')
@section('title', 'blog')
@section('inikonten')
    <div class="container">
        <a href="https://www.instagram.com/yana.surya1989/" class="instagram" target="_blank">Yana</a>
        <div class="header">
            <h1 class="judul">MyWebsite</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="hero"></div>

        <div class="content cf">
            <div class="main text-right">
                @foreach ($post as $list)
                    <h2>{{ $list->title }}</h2>
                    <p class="penulis">ditulis oleh <a href="https://github.com/Yanasurya1989"
                            target="_blank">{{ $list->author }}</a>.
                        pada {{date('d-m-Y',strtotime($list->created_at))}}</p>

                    <p>
                        {{-- {{ $list->content }} --}}
                        {{substr(strip_tags($list->content),0,100)}} 
                        <a href="detil/{{$list->id}}">see more..</a>
                    </p>
                @endforeach

                <div class="text-right mt-5">
                    {{ $post->links('pagination::bootstrap-4') }}
                </div>
                
            </div>
            <div class="sidebar">
                <h3>Tentang Penulis</h3>
                <img src="{{ asset('blog') }}/assets/images/Yana.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam debitis fugiat est praesentium ea quo,
                    dignissimos quos nemo laboriosam labore soluta ullam ipsum maxime dolores rem sapiente voluptatibus
                    perferendis ab?</p>
            </div>
        </div>

        <div class="footer">
            <p class="copy">Copyright 2023, Yana. </p>
        </div>
    </div>
@endsection
