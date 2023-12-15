@extends('backEnd.layout.master')
@section('inititle', 'edit')
@section('inikontent')

<div class="container">
    <div class="tab-pane active" id="horizontal-form">
        {{-- @php dd($user) @endphp --}}
        <form action="/user/update/{{$user->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{(session('errors'))->first()}}
                </div>
            @endif
            @csrf
            <div class="mb-3 form-group">
                <label for="" class="form-label">id</label>
                <input type="text" name="id" class="form-control1" value="{{$user->id}}" readonly>
            </div>
            <div class="mb-3 form-group">
                <label for="" class="form-label">Foto</label> <br>
                {{-- <a href="http://127.0.0.1:8000{{ Storage::url($admins->images) }}">lihat</a> --}}
                <img src="http://127.0.0.1:8000{{ Storage::url($user->foto) }}" alt="" width="100"><br>
                <input type="file" name="foto" class="form-control1">
            </div>

            <div class="mb-3 form-group">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control1" value="{{$user->name}}">
            </div>
    
            <div class="mb-3 form-group">
                <label for="" class="form-label">Profesi</label>
                <textarea name="profesi" id="summernote" cols="30" rows="10" class="form-control1">{{ $user ->profesi }}"</textarea>
            </div>

            <div class="mb-3 form-group">
                <label for="" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="summernote" cols="30" rows="10" class="form-control1">{{ $user ->deskripsi }}"</textarea>
            </div>

            <button class="btn btn-warning">Update</button>
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
