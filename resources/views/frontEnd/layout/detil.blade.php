@extends('frontEnd.layout.master')
@section('title', 'detil')
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
            <div class="main">
                @foreach ($id_var as $list)
                    <h1>{{ $list->title }}</h1>
                    <p class="penulis">ditulis oleh <a href="https://github.com/Yanasurya1989"
                            target="_blank">{{ $list->author }}</a>.
                        pada {{ date('d-m-Y', strtotime($list->created_at)) }}</p>
                    <p>

                    {{-- <p>{{ $list->author }}</p> --}}
                    <img src="{{ Storage::url($list->image) }}" alt="" height="500">
                    <p>{{ $list->content }}</p>
                @endforeach
            </div>

            <div class="sidebar">
                <h3>Tentang Penulis</h3>
                <img src="{{ asset('blog') }}/assets/images/Yana.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam debitis fugiat est praesentium ea quo,
                    dignissimos quos nemo laboriosam labore soluta ullam ipsum maxime dolores rem sapiente voluptatibus
                    perferendis ab?</p>
            </div>
        </div>

        <form action="">
            <label for="">Leave coment</label><br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </form>

        <div class="footer">
            <p class="copy">Copyright 2023, Yana. </p>
        </div>
    </div>

@endsection
