@extends('template.navigasiadmin')
@section('title', 'Dashboard')
@section('content')
    <!--  Row 1 -->
    <div class="row">
        <div class="d-flex align-items-stretch">
            <div class="card w-100">
                <a href="{{ route('testimoni.create') }}"><button type="button" class="btn btn-primary m-3">Add
                        Testimonial</button></a>
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Testimonials</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr class="text-center">
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Photo</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Job</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Upload at</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr class="text-center">
                                        <td class="border-bottom-2">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-2">
                                            <p class="mb-0 fw-normal">{{ $testimonial->nama }}</p>
                                        </td>
                                        <td class="border-bottom-2">
                                            <img src="{{ asset('storage/profile/' . $testimonial->foto) }}"
                                                style="width:80px">
                                        </td>
                                        <td class="border-bottom-2">
                                            <p class="mb-0 fw-normal">{{ $testimonial->pekerjaan }}</p>
                                        </td>
                                        <td class="border-bottom-2">
                                            <p class="mb-0 fw-normal">
                                                {{ \Carbon\Carbon::parse($testimonial->created_at)->format('d F Y') }} </p>
                                        </td>
                                        <td class="border-bottom-2">
                                            <a href="{{ route('testimoni.show', $testimonial->id) }}">
                                                <button type="button" class="btn btn-primary m-1 ti ti-eye fs-4"></button>
                                            </a>
                                            <a href="{{ route('testimoni.edit', $testimonial->id) }}">
                                                <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                                            </a>
                                            <form action="{{ route('testimoni.destroy', $testimonial->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-primary m-1 ti ti-trash fs-4"></button>
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
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="{{ route('updateproducts.show', $product->id) }}"><img
                                src="{{ asset('storage/products/thumbnail/' . $product->thumbnail) }}"
                                class="card-img-top rounded-0" style="object-fit: cover; width: 100%; height: 200px;"
                                alt="..."></a>
                        <a href="{{ route('updateproducts.edit', $product->id) }}"
                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                class="ti ti-basket fs-4"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">{{ $product->nama }}</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">
                                {{ \Carbon\Carbon::parse($product->created_at)->format('d F Y') }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
