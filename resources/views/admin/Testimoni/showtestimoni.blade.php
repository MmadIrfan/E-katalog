@extends('template.navigasiadmin')
@section('title', 'Show Testimonial')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card w-100">
                <div class="mt-3 mx-3">
                    <a href="{{ route('dashboard') }}"><button type="button" class="btn btn-primary m-1">Back</button></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Testimonial Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <p>{{ $testimonials->nama }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Photo</label>
                                <img src="{{ asset('storage/profile/' . $testimonials->foto) }}" alt="Profile Photo"
                                    class="img-fluid mx-3" style="max-width: 200px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jobs</label>
                                <p>{{ $testimonials->pekerjaan }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Testimonial</label>
                                <p>{{ $testimonials->testi }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Created At</label>
                                <p>{{ $testimonials->created_at->setTimezone('Asia/Jakarta')->format('d M Y H:i') }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Updated At</label>
                                <p>{{ $testimonials->updated_at->setTimezone('Asia/Jakarta')->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <a href="{{ route('testimoni.edit', $testimonials->id) }}">
                            <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                        </a>
                        <form action="{{ route('testimoni.destroy', $testimonials->id) }}" method="POST"
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
@endsection
