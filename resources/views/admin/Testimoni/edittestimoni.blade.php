@extends('template.navigasiadmin')
@section('title', 'Edit Testimonial')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('testimoni.update', $testimonials->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Edit Testimonial</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama', $testimonials->nama) }}" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Photo</label>
                                        <img src="{{ asset('storage/profile/' . $testimonials->foto) }}" alt="Current Photo"
                                            class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                    <div class="mb-3">
                                        <label type="file" class="form-label">New Photo</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Jobs</label>
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                            value="{{ old('pekerjaan', $testimonials->pekerjaan) }}" name="pekerjaan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="testi" class="form-label">Testimonial</label>
                                        <textarea class="form-control @error('testi') is-invalid @enderror" name="testi">{{ old('testi', $testimonials->testi) }}</textarea>
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
