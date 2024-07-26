@extends('template.navigasiadmin')
@section('title', 'Edit Blog')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updateblogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Edit Blog</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Blog title</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            value="{{ old('judul', $blog->judul) }}" name="judul">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Photo</label>
                                        <img src="{{ asset('storage/blogs/' . $blog->foto) }}" alt="Current Photo"
                                            class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                    <div class="mb-3">
                                        <label type="file" class="form-label">New Photo (leave blank to keep
                                            current)</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="konten" class="form-label">Content</label>
                                        <textarea id="konten" class="form-control @error('konten') is-invalid @enderror" name="konten">{{ old('konten', $blog->konten) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        CKEDITOR.replace('konten');
    </script>
@endpush
