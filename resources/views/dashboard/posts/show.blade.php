@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8 ">
                <h1 class="mb-3" class="text-decoration-none">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to my all
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span
                        data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"> <span
                            data-feather="x-circle"></span> Delete</button>
                </form>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
                    alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


            </div>
        </div>
    </div>
@endsection
