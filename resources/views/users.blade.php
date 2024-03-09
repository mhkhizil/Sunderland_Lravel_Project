@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>User lists </h2>
                <hr>
                {{-- create button --}}
                {{-- <div class="  row justify-content-between mb-3">
                    <div class=" col-md-3">
                        <a href="{{ route('article.create') }}" class=" btn btn-outline-primary">Create</a>
                    </div> --}}
                    {{-- search ui --}}
                    {{-- <div class="  col-md-5">
                        <form action="{{ route('article.index') }}" method="GET">
                            <div class=" input-group ">
                                <input type="text" class=" form-control" name="keyword"
                                    @if (request()->has('keyword')) {
                                    value="{{ request()->keyword }}"
                                } @endif>
                                @if (request()->has('keyword'))
                                    <a href="{{ route('article.index') }}" class=" btn btn-danger">Clear</a>
                                @endif
                                <button class=" btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <table class=" table table-borderless">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Information
                                {{-- sort ui --}}
                                {{-- <a class=" " href="{{ route("article.index", ['name' => 'asc']) }}"><i class="bi bi-sort-alpha-down"></i></a>
                                <a class="  "
                                    href="{{ route("article.index", ['name' => 'desc']) }}"><i class="bi bi-sort-alpha-down-alt"></i></a>
                                <a class=" " href="{{ route("article.index") }}"><i class="bi bi-x-lg"></i></a> --}}
                            </th>


                            {{-- <th>Control</th> --}}
                            <th>Updated at</th>
                            <th>Created at</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}
                                <br>
                                <span class=" small   text-black-50">
                                    {{ $user->email }}
                                </span>
                                </td>


                                {{-- control actions --}}
                                {{-- <td>
                                    <div class=" btn-group">
                                        <a class=" btn btn-sm  btn-outline-info"
                                            href="{{ route('article.show', $article->id) }}">
                                            <i class=" bi bi-info bold"></i></a>
                                        <a href="{{ route('article.edit', $article->id) }}"
                                            class=" btn btn-sm  btn-outline-success"><i class=" bi bi-pencil"></i></a>
                                        <button form="article-delete-form{{ $article->id }}"
                                            class=" btn btn-sm btn-outline-danger"> <i class=" bi bi-trash3"></i></button>

                                    </div>
                                    <form id="article-delete-form{{ $article->id }}" method="post"
                                        class=" d-inline-block" action="{{ route('article.destroy', $article->id) }}">
                                        @method('delete')
                                        @csrf

                                    </form>
                                </td> --}}
                                <td>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-calendar"></i>
                                        {{ $user->updated_at->format('d M Y') }}
                                    </p>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-clock"></i>
                                        {{ $user->updated_at->format('h:i a') }}
                                    </p>
                                </td>
                                <td>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-calendar"></i>
                                        {{ $user->created_at->format('d M Y') }}
                                    </p>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-clock"></i>
                                        {{ $user->created_at->format('h:i a') }}
                                    </p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class=" text-center  mt-5">
                                    <p> There is no record</p> <br>
                                    <a class=" btn btn-sm btn-primary" href="{{ route('article.create') }}">Create
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
