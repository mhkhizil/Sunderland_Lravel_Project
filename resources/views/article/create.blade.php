@extends("layouts.app")
@section('content')
<h2>Create new title</h2>
<hr>
<form action="{{route("article.store")}}" method="POST">
    @csrf
    <div class=" mb-3">
        <label for="" class=" form-label">Category title</label>
        <input type="text" class=" form-control  @error('title') is-invalid @enderror" name="title">
        @error('title')
            <div class=" invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class=" mb-3">
        <label for="" class=" form-label">Category description</label>
        <textarea rows="10" class=" form-control  @error('description') is-invalid @enderror" name="description"></textarea>
        @error('description')
            <div class=" invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <button class=" btn btn-primary"> Create Category</button>
</form>
@endsection
