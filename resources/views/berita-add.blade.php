@extends('main')
@section('title')
    Berita Acara
@endsection
@section('content')
    <div class="container mt-2">
        <h4>Tambahkan Berita Acara</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{url('/berita')}}">Berita Acara</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambahkan</li>
            </ol>
        </nav>
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">
                    <strong>Tambahkan</strong> Berita Acara
                </div>
                <div class="card-body">
                    

                        @if(Session::has('msg'))
                            <div class="card alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                        @endif

                        <form action="{{url('berita-add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title"><Title>Title</Title></label>
                                <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type berita title ...">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description"><Title>Description</Title></label>
                                <input value="{{old('description')}}" type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Type berita description ...">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="date"><Title>Date Upload</Title></label>
                                <input value="{{old('date')}}" type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="Type berita date ...">
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="photo">Photo</label>
                                <input value="{{old('price')}}" type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror">
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Process
                            </button>
                            <button type="reset" class="btn btn-light">
                                Reset
                            </button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
