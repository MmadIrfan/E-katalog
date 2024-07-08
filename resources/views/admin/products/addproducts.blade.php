@extends('template.navigasiadmin')
@section('title', 'Products')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updateproducts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">Product</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Product Name</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                value="{{ old('nama') }}" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label type="file" class="form-label">Photo</label>
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Description</label>
                                            <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Dimensi" class="form-label">Dimensions</label>
                                    <input type="text" class="form-control @error('dimensi') is-invalid @enderror"
                                        value="{{ old('dimensi') }}" name="dimensi">
                                </div>
                                <div class="mb-3">
                                    <label for="warna" class="form-label">Color</label>
                                    <input type="text" class="form-control @error('warna') is-invalid @enderror"
                                        value="{{ old('warna') }}" name="warna">
                                </div>
                                <div class="mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control @error('material') is-invalid @enderror"
                                        value="{{ old('material') }}" name="material">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Category</label>
                                    <select type="text" class="form-select @error('kategori') is-invalid @enderror"
                                        value="{{ old('kategori') }}" name="kategori">
                                        <option value="Chair">Chair</option>
                                        <option value="Soffa">Soffa</option>
                                        <option value="Storage">Storage</option>
                                        <option value="Others">Others</option>
                                    </select>
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
