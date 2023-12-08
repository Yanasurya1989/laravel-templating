@extends('backEnd.layout.master')
@section('inititle', 'insert')
@section('inikontent')

<div class="container">
    <div class="tab-pane active" id="horizontal-form">
        <form action="/head/store" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{(session('errors'))->first()}}
                </div>
            @endif
            @csrf
            <div class="mb-3 form-group">
                <label for="" class="form-label">favicon</label>
                <input type="file" name="favicons" class="form-control1">
            </div>

            <div class="mb-3 form-group">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control1">
            </div>

            <button class="btn btn-primary">Post</button>
        </form>
    </div>
</div>

@endsection
