<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/add-product" method="POST">
            @csrf
            <div class="modal-header" style="color: white; background: blue">
                <h1>ADD DATA</h1>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">ID Produk</label>
                            <input type="number" class="form-control" name="id" placeholder="ID Produk" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Produk"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Harga</label>
                            <input type="number" class="form-control" name="price" placeholder="Harga" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" name="category" placeholder="Kategori" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Status</label>
                            <select name="status" class="form-control" id="" required>
                                <option value="" hidden>Pilih Status</option>
                                <option value="bisa dijual">bisa dijual</option>
                                <option value="tidak bisa dijual">tidak bisa dijual</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn mb-2 btn-primary">Add</button>
            </div>
    </div>
    </form>
</div>
