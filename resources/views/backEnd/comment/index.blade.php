@extends('backEnd.layout.master')
@section('inititle', 'content')

@section('inikontent')

<div class="content_bottom">
    <div class="col-md-12 span_3">
        <h1>List post</h1>
        <a href="/unit/create" class="btn btn-primary pb-5">+Tambah Data</a>
        <div
            class="bs-example1"
            data-example-id="contextual-table"
        >
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Comment</th>
                        <th>Allow</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comment as $list)
                        
                    <tr class="active">
                        <th scope="row">{{$loop->iteration}}</th>
                        {{-- <td>
                            <img src="http://127.0.0.1:8000{{ Storage::url($list->image) }}" alt="" width="100">
                            <a href="{{Storage::url($list->images)}}">Lihat file</a>
                        </td> --}}
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->website}}</td>
                        <td>{{$list->comment}}</td>
                        <td>Y</td>
                        {{-- <td>{{substr(strip_tags($list->content),0,100)}}</td> --}}
                        <td>
                            <a href="/unit/edit/{{$list->id}}">Update | </a>
                            <a href="/unit/destroy/{{ $list->id }}" onclick="return confirm('Yakin?')">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
            {{-- <div class="text-right mt-5">
                {{ $post->links('pagination::bootstrap-4') }}
            </div> --}}
        </div>
    </div>
    
    <div class="clearfix"></div>
</div>
    
@endsection