@extends('template.userpage')
@section('title', 'Blog')
@section('judul', 'Latest Insights and Inspirations')
@section('sub', 'Welcome to our blog, where we share the latest trends in furniture design, tips for maintaining your
    rattan pieces, and stories from our community. Dive into our articles to discover more about our products and the world
    of rattan.')
@section('content')
    <!-- Start Blog Section -->
    <div id="product-section" class="blog-section">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-sm-6 col-md-4 mb-5">
                        <div class="post-entry">
                            <a href="{{ route('home.showblog', $blog->id) }}" class="post-thumbnail"><img
                                    src="{{ asset('storage/blogs/' . $blog->foto) }}" alt="Image" class="img-fluid"></a>
                            <div class="post-content-entry">
                                <h3><a href="{{ route('home.showblog', $blog->id) }}">{{ $blog->judul }}</a></h3>
                                <div class="meta">
                                    <span>by <a href="{{ route('home.showblog', $blog->id) }}">Admin</a></span> <span>on <a
                                            href="{{ route('home.showblog', $blog->id) }}">{{ $blog->created_at->setTimezone('Asia/Jakarta')->format('M d, Y') }}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
