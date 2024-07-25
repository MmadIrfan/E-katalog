@extends('template.navigasiadmin')
@section('title', 'Blogs')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('updateblogs.create') }}"><button type="button" class="btn btn-primary m-1">Add
                            Blog</button></a>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr class="text-center">
                                    <th class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">Title</h6>
                                    </th>
                                    <th class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">Photo</h6>
                                    </th>
                                    <th class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">Upload at</h6>
                                    </th>
                                    <th class="border-bottom-2">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr class="text-center">
                                        <td class="border-bottom-2">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-2">
                                            <p class="mb-0 fw-normal">{{ substr($blog->judul, 0, 50) . '...' }}</p>
                                        </td>
                                        <td class="border-bottom-2">
                                            <img src="{{ asset('storage/blogs/' . $blog->foto) }}" style="width:80px">
                                        </td>
                                        <td class="border-bottom-2">
                                            <p class="mb-0 fw-normal">
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}</p>
                                        </td>
                                        <td class="border-bottom-2">
                                            <a href="{{ route('updateblogs.show', $blog->id) }}">
                                                <button type="button" class="btn btn-primary m-1 ti ti-eye fs-4"></button>
                                            </a>
                                            <a href="{{ route('updateblogs.edit', $blog->id) }}">
                                                <button type="button" class="btn btn-primary m-1 ti ti-edit fs-4"></button>
                                            </a>
                                            <form action="{{ route('updateblogs.destroy', $blog->id) }}" method="POST"
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
@endsection
