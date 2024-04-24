<x-panel-layout>
    <x-slot:title>
        Dashboard
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Destinasi</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <a href="{{ route('destinasi.create') }}" class="float-start float-lg-end btn btn-primary">Tambahkan destinasi</a>
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
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($destinations as $destination)
                                    <tr>
                                        <td class="text-bold-500">{{ $destination->name }}</td>
                                        <td>{{ $destination->address }}</td>
                                        <td>
                                            <a href="/destinasi/{{ $destination->name }}" class="btn btn-sm btn-primary">Detail</a>
                                            <a href="{{ route('destinasi.edit', $destination->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('destinasi.delete', $destination->id) }}" method="post" style="display: inline;">
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
