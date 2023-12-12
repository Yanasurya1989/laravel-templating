@extends('backEnd.layout.master')
@section('inititle', 'insert')
@section('inikontent')

<div class="container">
    <div class="tab-pane active" id="horizontal-form">
        <form action="/categories/store" method="POST" class="form-horizontal">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{(session('errors'))->first()}}
                </div>
            @endif
            @csrf

            <div class="mb-3 form-group">
                <label for="" class="form-label">Category</label>
                <input type="text" name="category" class="form-control1">
            </div>
                
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
