<x-panel-layout>
    <x-slot:title>
        Edit destinasi
    </x-slot>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit destinasi wisata</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" class="form form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="name">Nama destinasi</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input required type="text" class="form-control" name="name" id="name" value="{{ $destination->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="upload_photo">Upload foto</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control" name="upload_photo" id="upload_photo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="address">Alamat</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input required type="text" class="form-control" name="address" id="address" value="{{ $destination->address }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="link">Link Google Maps</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input required type="url" class="form-control" name="link" id="link" value="{{ $destination->link }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="description">Keterangan</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <textarea required class="form-control" name="description" id="description">{{ $destination->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label>Kategori</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <select required name="category_id" class="form-select">
                                                                <option selected value="">Pilih kategori</option>
                                                                @foreach (\App\Models\Category::all() as $key => $item)
                                                                    <option 
                                                                    <?= $item->id === $destination->category_id ? ' selected' : ''; ?>
                                                                    value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-panel-layout>
