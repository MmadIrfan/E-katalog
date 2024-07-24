@extends('template.navigasiadmin')
@section('title', 'Products')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="{{ route('updateproducts.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                                value="{{ old('nama', $products->nama) }}" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Thumbnail</label>
                                            <input type="file"
                                                class="form-control @error('thumbnail') is-invalid @enderror"
                                                name="thumbnail">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Photos (Max 3)</label>
                                            <input type="file" class="form-control @error('foto.*') is-invalid @enderror"
                                                name="foto[]" multiple accept="image/*" max="3">
                                            <small class="text-muted">You can select up to 3 photos</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Description</label>
                                            <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ old('deskripsi', $products->deskripsi) }}</textarea>
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
                                        value="{{ old('dimensi', $products->dimensi) }}" name="dimensi">
                                </div>
                                <div class="mb-3">
                                    <label for="warna" class="form-label">Color</label>
                                    <input type="text" class="form-control @error('warna') is-invalid @enderror"
                                        value="{{ old('warna', $products->warna) }}" name="warna">
                                </div>
                                <div class="mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control @error('material') is-invalid @enderror"
                                        value="{{ old('material', $products->material) }}" name="material">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Category</label>
                                    <select type="text"
                                        class="form-select @error('kategori') is-invalid @enderror"name="kategori">
                                        <option value="Chair"
                                            {{ old('kategori', $products->kategori) === 'Chair' ? 'selected' : '' }}>Chair
                                        </option>
                                        <option value="Soffa"
                                            {{ old('kategori', $products->kategori) === 'Soffa' ? 'selected' : '' }}>Soffa
                                        </option>
                                        <option value="Storage"
                                            {{ old('kategori', $products->kategori) === 'Storage' ? 'selected' : '' }}>
                                            Storage
                                        </option>
                                        <option value="Others"
                                            {{ old('kategori', $products->kategori) === 'Others' ? 'selected' : '' }}>
                                            Others
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="populer" class="form-label">Popular ?</label>
                                    <select type="text"
                                        class="form-select @error('populer') is-invalid @enderror"name="populer">
                                        <option value="Tidak"
                                            {{ old('populer', $products->populer) === 'Tidak' ? 'selected' : '' }}>
                                            No
                                        </option>
                                        <option value="Iya"
                                            {{ old('populer', $products->populer) === 'Iya' ? 'selected' : '' }}>Yes
                                        </option>
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
