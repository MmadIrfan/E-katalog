@extends('template.navigasiadmin')
@section('title', 'Products')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('updateproducts.create') }}"><button type="button" class="btn btn-primary m-1">Add
                        Product</button></a>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr class="text-center">
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Product Picture</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Product Name</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Upload at</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Category</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="text-center">
                                    <td class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td class="border-bottom-2">
                                        <img src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                            style="width:80px">
                                    </td>
                                    <td class="border-bottom-2">
                                        <p class="mb-0 fw-normal">{{ $product->nama }}</p>
                                    </td>
                                    <td class="border-bottom-2">
                                        <p class="mb-0 fw-normal">
                                            {{ \Carbon\Carbon::parse($product->created_at)->format('d F Y') }}</p>
                                    </td>
                                    <td class="border-bottom-2">
                                        <div class="align-items-center gap-2">
                                            @switch($product->kategori)
                                                @case('Chair')
                                                    <span class="badge bg-primary rounded-3 fw-semibold">Chair</span>
                                                @break

                                                @case('Soffa')
                                                    <span class="badge bg-secondary rounded-3 fw-semibold">Soffa</span>
                                                @break

                                                @case('Storage')
                                                    <span class="badge bg-danger rounded-3 fw-semibold">Storage</span>
                                                @break

                                                @case('Others')
                                                    <span class="badge bg-success rounded-3 fw-semibold">Others</span>
                                                @break

                                                @default
                                                    <span
                                                        class="badge bg-info rounded-3 fw-semibold">{{ $product->kategori }}</span>
                                            @endswitch
                                        </div>
                                    </td>
                                    <td class="border-bottom-2">
                                        <a href="{{ route('updateproducts.show', $product->id) }}">
                                            <button type="button" class="btn btn-primary m-1 ti ti-eye fs-4"></button>
                                        </a>
                                        <a href="{{ route('updateproducts.edit', $product->id) }}">
                                            <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                                        </a>
                                        <form action="{{ route('updateproducts.destroy', $product->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary m-1 ti ti-trash fs-4"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
