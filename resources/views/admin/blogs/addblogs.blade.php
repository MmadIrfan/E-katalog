@extends('template.navigasiadmin')
@section('title', 'Blogs')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updateblogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Blog</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Blog title</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            value="{{ old('judul') }}" name="judul">
                                    </div>
                                    <div class="mb-3">
                                        <label type="file" class="form-label">Photo</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="konten" class="form-label">Content</label>
                                        <textarea type="text" class="form-control @error('konten') is-invalid @enderror" name="konten">{{ old('konten') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
