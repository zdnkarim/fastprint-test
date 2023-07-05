<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/edit-product/{{ $datas->id }}" method="POST">
            @csrf
            <div class="modal-header" style="color: white; background: blue">
                <h1>EDIT PRODUK ID {{ $datas->id_produk }}</h1>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" value="{{ $datas->nama_produk }}"
                                placeholder="Nama Produk" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Harga</label>
                            <input type="number" class="form-control" name="price" value="{{ $datas->harga }}"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" name="category" value="{{ $datas->kategori }}"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Status</label>
                            <select class="form-control" name="status" id="" required>
                                <option value="{{ $datas->status }}" selected hidden>{{ $datas->status }}</option>
                                <option value="bisa dijual">bisa dijual</option>
                                <option value="tidak bisa dijual">tidak bisa dijual</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn mb-2 btn-warning">Edit</button>
            </div>
        </form>
    </div>
</div>
