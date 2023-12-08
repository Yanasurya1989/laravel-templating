@extends('backEnd.layout.master')
@section('inititle', 'content')

@section('inikontent')

    <div class="content_bottom">
        <div class="col-md-12 span_3">
            <h1>Set Header</h1>
            <a href="/head/create" class="btn btn-primary pb-5">+Tambah Data</a>
            <div class="bs-example1" data-example-id="contextual-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Favicon</th>
                            <th>Title</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($head as $list)
                            <tr class="active">
                                <th scope="row">{{ $loop->iteration }}</th>
                                {{-- <th scope="row">{{$loop->iteration+$head->firstItem()-1}}</th> --}}
                                <td>
                                    {{-- <img src="http://127.0.0.1:8000{{ Storage::url($list->image) }}" alt="" width="100"> --}}
                                    <a href="{{ Storage::url($list->favicons) }}">Lihat file</a>
                                </td>
                                <td>{{ $list->title }}</td>
                                {{-- <td>{{$list->author}}</td>
                        <td>{{substr(strip_tags($list->content),0,100)}}</td> --}}
                                <td>
                                    <a href="/head/edit/{{ $list->id }}">Update | </a>
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
