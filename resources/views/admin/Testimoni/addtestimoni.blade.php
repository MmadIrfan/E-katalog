@extends('template.navigasiadmin')
@section('title', 'Testimoni')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Testimonial</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label type="file" class="form-label">Photo</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Jobs</label>
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                            value="{{ old('pekerjaan') }}" name="pekerjaan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="testi" class="form-label">Testimonial</label>
                                        <textarea type="text" class="form-control @error('testi') is-invalid @enderror" name="testi">{{ old('testi') }}</textarea>
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
