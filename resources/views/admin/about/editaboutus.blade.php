@extends('template.navigasiadmin')
@section('title', 'Edit About')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updateabout.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Edit Gallery Item</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Current Photo</label>
                                        <img src="{{ asset('storage/gallery/'.$about->foto) }}" alt="Current Photo" class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                    <div class="mb-3">
                                        <label type="file" class="form-label">New Photo</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Caption</label>
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                            value="{{ old('keterangan', $about->keterangan) }}" name="keterangan">
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