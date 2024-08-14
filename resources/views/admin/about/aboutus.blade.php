@extends('template.navigasiadmin')
@section('title', 'About')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('updateabout.create') }}"><button type="button" class="btn btn-primary m-1">Add
                        Gallery</button></a>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr class="text-center">
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Photo</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Caption</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Waktu Upload</h6>
                                </th>
                                <th class="border-bottom-2">
                                    <h6 class="fw-semibold mb-0">Aksi</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $item)
                                <tr class="text-center">
                                    <td class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">
                                            {{ $loop->iteration + ($about->currentPage() - 1) * $about->perPage() }}
                                        </h6>
                                    </td>
                                    <td class="border-bottom-2">
                                        <img src="{{ asset('storage/gallery/' . $item->foto) }}" style="width:80px">
                                    </td>
                                    <td class="border-bottom-2">
                                        <p class="mb-0 fw-normal">{{ $item->keterangan }}</p>
                                    </td>
                                    <td class="border-bottom-2">
                                        <p class="mb-0 fw-normal">
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</p>
                                    </td>
                                    <td class="border-bottom-2">
                                        <a href="{{ route('updateabout.edit', $item->id) }}">
                                            <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                                        </a>
                                        <form action="{{ route('updateabout.destroy', $item->id) }}" method="POST"
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
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $about->links('pagination::bootstrap-4')->with('paginationSize', 'pagination-lg') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
