@extends('backEnd.layout.master')
@section('inititle', 'edit')
@section('inikontent')

<div class="container">
    <div class="tab-pane active" id="horizontal-form">
        <form action="/unit/update/{{$units->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{(session('errors'))->first()}}
                </div>
            @endif
            @csrf
            <div class="mb-3 form-group">
                <label for="" class="form-label">id</label>
                <input type="text" name="id" class="form-control1" value="{{$units->id}}">
            </div>
            <div class="mb-3 form-group">
                <label for="" class="form-label">Image</label> <br>
                {{-- <a href="http://127.0.0.1:8000{{ Storage::url($admins->images) }}">lihat</a> --}}
                <img src="http://127.0.0.1:8000{{ Storage::url($units->image) }}" alt="" width="100"><br>
                <input type="file" name="image" class="form-control1">
            </div>

            <div class="mb-3 form-group">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control1" value="{{$units ->title}}">
            </div>
    
            <div class="mb-3 form-group">
                <label for="" class="form-label">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control1">{{ $units ->content }}"</textarea>
            </div>

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
