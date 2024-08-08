@extends('template.userpage')
@section('title', 'Blogs')
@section('judul', 'Latest Insights and Inspiration')
@section('sub', $blogs->judul)
@section('content')
    <div id="product-section" class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
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
            </div>
        </div>
    </div>
@endsection
