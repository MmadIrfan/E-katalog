@extends('template.navigasiadmin')
@section('title', 'Blogs')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('updateblogs.index') }}"><button type="button"
                                class="btn btn-primary m-1">Back</button></a>
                        <div class="col-lg-8 mx-auto">
                            <article class="blog-post">
                                <h1 class="post-title mb-3">{{ $blogs->judul }}</h1>

                                <div class="post-meta mb-4">
                                    <span>by <a href="#">Admin</a></span>
                                    <span>on <a
                                            href="#">{{ $blogs->created_at->setTimezone('Asia/Jakarta')->format('M d, Y') }}</a></span>
                                </div>

                                <img src="{{ asset('storage/blogs/' . $blogs->foto) }}" alt="{{ $blogs->judul }}"
                                    class="img-fluid mb-4">

                                <div class="post-content">
                                    {!! $blogs->konten !!}
                                </div>
                            </article>
                        </div>
                        <div class="text-end mt-3">
                            <a href="{{ route('updateblogs.edit', $blogs->id) }}">
                                <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                            </a>
                            <form action="{{ route('updateblogs.destroy', $blogs->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary m-1 ti ti-trash fs-4"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
