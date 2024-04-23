<x-panel-layout>
    <x-slot:title>
        Buat baru
    </x-slot>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambahkan destinasi wisata</h3>
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
                                <form class="form form-horizontal">
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
                                                                <input type="text" class="form-control" id="name">
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
                                                                <input type="file" class="form-control" id="upload_photo">
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
                                                                <input type="text" class="form-control" id="address">
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
                                                                <input type="url" class="form-control" id="link">
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
                                                            <textarea class="form-control" id="description"></textarea>
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
                                                            <select class="form-select">
                                                                <option selected>Pilih kategori</option>
                                                                <option value="pegunungan">pegunungan</option>
                                                                <option value="pantai">pantai</option>
                                                                <option value="curug">curug</option>
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
