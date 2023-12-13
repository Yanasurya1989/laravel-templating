@extends('backEnd.layout.master')
@section('inititle', 'article')

@section('inikontent')

<div class="content_bottom">
    <div class="col-md-12 span_3">
        <h1>List post</h1>
        <a href="/admin/article/create" class="btn btn-primary pb-5">+Tambah Data</a>
        <div
            class="bs-example1"
            data-example-id="contextual-table"
        >
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Profesi</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Title</th>
                        <th>Konten</th>
                        <th>Category</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $list)
                        
                    <tr class="active">
                        <th scope="row">{{$loop->iteration+$articles->firstItem()-1}}</th>
                        <td> {{$list->users->name}} </td>
                        
                        {{-- <td>{{ $list->users->name }}</td>
                        <td>{{ $list->users->profesi }}</td> --}}
                        
                        
                        {{-- <td>{{ $list->users->deskripsi }}</td> --}}
                        <td> </td>   
                        <td>
                            {{-- <a href="{{Storage::url($list->users->foto)}}">Lihat file</a> --}}
                            <img src="http://127.0.0.1:8000{{Storage::url($list->users->foto)}}" alt="" width="100">
                        </td>                     
                        <td>{{$list->title}}</td>
                        <td>{{$list->categories->category}}</td>
                        <td>{{substr(strip_tags($list->content),0,100)}}</td>
                        <td>{{substr(strip_tags($list->content),0,100)}}</td>
                        <td>
                            <a href="">Detil | </a>
                            {{-- <a href="/post/edit/{{$list->id}}">Update | </a>
                            <a href="post/delete/{{ $list->id }}" onclick="return confirm('Yakin?')">Delete</a> --}}
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
            <div class="text-right mt-5">
                {{ $articles->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>
</div>
    
@endsection