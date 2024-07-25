@extends('template.navigasiadmin')
@section('title', 'Products')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('updateproducts.index') }}"><button type="button"
                                class="btn btn-primary m-1">Back</button></a>
                        <div class="col-md-6">
                            <div class="gallery">
                                <!-- Foto Default -->
                                <div class="main-photo">
                                    <img id="main-image"
                                        src="{{ asset('storage/products/' . json_decode($products->foto)[0]) }}"
                                        alt="{{ $products->nama }}" class="img-fluid">
                                </div>
                            </div>
                            <!-- Foto Gallery -->
                            <div class="gallery-items">
                                @foreach (json_decode($products->foto) as $foto)
                                    <div class="gallery-item">
                                        <img src="{{ asset('storage/products/' . $foto) }}" alt="{{ $products->nama }}"
                                            class="img-fluid gallery-img"
                                            data-src="{{ asset('storage/products/' . $foto) }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>{{ $products->nama }}</h2>
                            <p class="text-muted">{{ $products->deskripsi }}</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Dimension</th>
                                        <td>{{ $products->dimensi }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Color</th>
                                        <td>{{ $products->warna }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Material</th>
                                        <td>{{ $products->material }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Category</th>
                                        <td>{{ $products->kategori }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('updateproducts.edit', $products->id) }}">
                                <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                            </a>
                            <form action="{{ route('updateproducts.destroy', $products->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary m-1 ti ti-trash fs-4"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
