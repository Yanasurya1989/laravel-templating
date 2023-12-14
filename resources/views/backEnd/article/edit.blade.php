@extends('backEnd.layout.master')
@section('inititle', 'add article')
@section('inikontent')

    <div class="container">
        <div class="tab-pane active" id="horizontal-form">
            <form action="/admin/article/update/{{$articles->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('errors')->first() }}
                    </div>
                @endif
                {{-- @csrf
            <div class="mb-3 form-group">
                <label for="" class="form-label">Id jenis</label>
                <input type="text" name="id_jenis" class="form-control1" >
            </div> --}}

                @csrf

                <div class="mb-3 form-group">
                    <label for="" class="form-label">Id</label>
                    <input type="text" name="id" class="form-control1" value="{{$articles->id}}">
                </div>

                <div class="mb-3 form-group">
                    <label for="" class="form-label">Image</label><br>
                    <img src="http://127.0.0.1:8000{{Storage::url($articles->gambar)}}" alt="" width="107">
                    <input type="file" name="gambar" class="form-control1">
                </div>

                <div class="mb-3 form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control1" value="{{$articles->title}}">
                </div>

                <div class="mb-3 form-group">
                    <label for="" class="form-label">Kategori</label>
                    {{-- <input type="text" name="title" class="form-control1"> --}}

                    {{-- <input type="text" value="{{$articles->category}}" name="id_category">
                    <select class="form-select" aria-label="Default select example" name="id_category">
                        <option selected>select kategori : </option>

                        @foreach ($categories as $list)
                            <option value="{{$list->id}}">{{$list->category}}</option>
                            
                        @endforeach
                        
                    </select> --}}
                </div>

                {{-- summernote --}}
                {{-- @include('backEnd.layout.summernote') --}}
                @include('backEnd.article.ckeditor')
                {{-- end summernote --}}

                {{-- <div class="mb-3 form-group">
                <label for="" class="form-label">Jenis</label>
                <input type="text" name="jenis" class="form-control1">
            </div> --}}

                {{-- <div class="mb-3 form-group">
                <label for="" class="form-label">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control1"></textarea>
            </div> --}}


                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {{-- summernote --}}
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    {{-- end summernote --}}

    <script>
        CKEDITOR.replace('content')
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
