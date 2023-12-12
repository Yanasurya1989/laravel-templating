@extends('backEnd.layout.master')
@section('inititle', 'categories')

@section('inikontent')

<div class="content_bottom">
    <div class="col-md-12 span_3">
        <h1>List post</h1>
        <a href="/categories/create" class="btn btn-primary pb-5">+Tambah Data</a>
        <div
            class="bs-example1"
            data-example-id="contextual-table"
        >
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>                        
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $list)
                        
                    <tr class="active">
                        {{-- <th scope="row">{{$loop->iteration+$post->firstItem()-1}}</th> --}}
                        
                        <td>{{$loop->iteration}}</td>
                        <td>{{$list->category}}</td>
                        <td>
                            <a href="/categories/edit/{{$list->id}}">Update | </a>
                            <a href="/categories/destroy/{{ $list->id }}" onclick="return confirm('Yakin?')">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
            <div class="text-right mt-5">
                {{-- {{ $post->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>
</div>
    
@endsection