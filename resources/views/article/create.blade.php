@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Create new article</h2>
                <hr>
                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class=" mb-3">
                        <label for="" class=" form-label">Article title</label>
                        <input type="text" class=" form-control  @error('title') is-invalid @enderror" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for="" class=" form-label">Article description</label>
                        <textarea rows="10" class=" form-control  @error('description') is-invalid @enderror" name="description"></textarea>
                        @error('description')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <button class=" btn btn-primary"> Create Article</button>
                </form>
            </div>
        </div>
    </div>
@endsection
