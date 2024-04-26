<x-panel-layout>
    <x-slot:title>
        Dashboard
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Kategori</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <a href="{{ route('kategori.create') }}" class="float-start float-lg-end btn btn-info fw-semibold">Tambahkan kategori</a>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table mb-0 table-lg">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="text-bold-500">{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('kategori.edit', $category->id) }}" class="btn btn-sm btn-info fw-semibold">Edit</a>
                                            <form action="{{ route('kategori.delete', $category->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-panel-layout>

@if (session('status'))
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <span class="btn btn-info fw-semibold btn-sm" style="margin-right: 4px;"><i class="bi bi-bell"></i></span>
        <strong class="me-auto">New notification</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        {{ session('status') }}
      </div>
    </div>
</div>
@endif