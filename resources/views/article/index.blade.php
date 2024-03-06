@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Articles </h2>
                <hr>
                <div>
                    <a href="{{route("article.create")}}" class=" btn btn-outline-primary">Create</a>
                </div>
                <table class=" table table-borderless">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Owner</th>
                            <th>Control</th>
                            <th>Updated at</th>
                            <th>Created at</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>

                                <td>{{ Str::limit($article->description, 20) }}</td>
                                <td>{{$article->user_id}}</td>
                                <td>
                                    <div class=" btn-group">
                                        <a class=" btn btn-sm  btn-outline-info"
                                            href="{{ route('article.show', $article->id) }}">
                                            <i class=" bi bi-info bold"></i></a>
                                        <a href="{{ route('article.edit', $article->id) }}"
                                            class=" btn btn-sm  btn-outline-success"><i class=" bi bi-pencil"></i></a>
                                        <button form="article-delete-form{{ $article->id }}"
                                            class=" btn btn-sm btn-outline-danger"> <i class=" bi bi-trash3"></i></button>

                                    </div>
                                    <form id="article-delete-form{{ $article->id }}" method="post" class=" d-inline-block"
                                        action="{{ route('article.destroy', $article->id) }}">
                                        @method('delete')
                                        @csrf

                                    </form>
                                </td>
                                <td>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-calendar"></i>
                                        {{ $article->updated_at->format('d M Y') }}
                                    </p>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-clock"></i>
                                        {{$article->updated_at->format("h:i a")}}
                                    </p>
                                </td>
                                <td>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-calendar"></i>
                                        {{ $article->created_at->format('d M Y') }}
                                    </p>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-clock"></i>
                                        {{$article->created_at->format("h:i a")}}
                                    </p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class=" text-center  mt-5">
                                    <p> There is no record</p> <br>
                                    <a class=" btn btn-sm btn-primary" href="{{ route('category.create') }}">Create
                                        Category</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
