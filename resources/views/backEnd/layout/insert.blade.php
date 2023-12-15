@extends('backEnd.layout.master')
@section('inititle', 'insert')
@section('inikontent')

<div class="container">
    <div class="tab-pane active" id="horizontal-form">
        <form action="/post/store" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{(session('errors'))->first()}}
                </div>
            @endif
            @csrf
            <div class="mb-3 form-group">
                <label for="" class="form-label">Image</label>
                <input type="file" name="images" class="form-control1" accept="aplication/msword, application/pdf">
            </div>

            

            <div class="mb-3 form-group">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control1">
            </div>

            {{-- <div class="mb-3 form-group">
                <label for="" class="form-label">Author</label>
                <input type="text" name="author" class="form-control1">
            </div> --}}
    
            {{-- <div class="mb-3 form-group">
                <label for="" class="form-label">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control1"></textarea>
            </div> --}}

            {{-- summernote --}}
            {{-- @include('backEnd.layout.summernote') --}}
            @include('backEnd.layout.ckeditor')
            {{-- end summernote --}}

            <button class="btn btn-primary">Post</button>
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
