@extends('main')
@section('title')
    Berita Acara
@endsection
@section('content')
    <div class="container mt-3">
        <h4 style="color: black">Berita Acara</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: black">Berita Acara</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-2"> <strong>Data</strong> Table </div>
                    <div class="w-100 text-end">
                        <a href="{{url('berita-add')}}" class="btn btn-danger"> 
                            <i class="bi bi-plus-circle"></i> Tambahkan Data
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20">NO</th>
                            <th width="200">PHOTO</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>DATE UPLOAD</th>
                            <th width="200">ACT</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{url('images')}}/{{$item->photo}}" class="img-fluid">
                            </td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->date}}</td>
                            <td>  
                                <a href="{{route('delbrt',['id'=>$item->id])}}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are u sure ?');">
                                        <i class="bi bi-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection