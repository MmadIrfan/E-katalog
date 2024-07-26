@extends('template.navigasiadmin')
@section('title', 'Contact')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updatecontact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Product</h5>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Address</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ old('alamat', $contact->alamat) }}" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $contact->email) }}" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="hp" class="form-label">Telephone</label>
                                    <input type="text" class="form-control @error('hp') is-invalid @enderror"
                                        value="{{ old('hp', $contact->hp) }}" name="hp">
                                </div>
                                <div class="mb-3">
                                    <label for="gmaps" class="form-label">Embed maps</label>
                                    <textarea type="text" class="form-control @error('gmaps') is-invalid @enderror" name="gmaps">{{ old('gmaps', $contact->gmaps) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <iframe src="{{ $contact->gmaps }}" width="100%" height="350"
                                        style="border: 5px #3b5d50; border-radius: 15px; overflow: hidden; "
                                        allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
