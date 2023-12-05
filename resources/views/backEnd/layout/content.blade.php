@extends('backEnd.layout.master')
@section('inititle', 'content')

@section('inikontent')

<div class="content_bottom">
    <div class="col-md-12 span_3">
        <h1>List post</h1>
        <a href="/post/insert" class="btn btn-primary pb-5">+Tambah Data</a>
        <div
            class="bs-example1"
            data-example-id="contextual-table"
        >
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Images</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $list)
                        
                    <tr class="active">
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>

                            {{-- <img src="http://127.0.0.1:8000{{ Storage::url($list->image) }}" alt="" width="100"> --}}
                            <a href="{{Storage::url($list->image)}}">Lihat file</a>
                        </td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->author}}</td>
                        <td>{{$list->content}}</td>
                        <td>
                            <a href="">Detil | </a>
                            <a href="/post/edit/{{$list->id}}">Update | </a>
                            <a href="post/delete/{{ $list->id }}" onclick="return confirm('Yakin?')">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="clearfix"></div>
</div>
    
@endsection