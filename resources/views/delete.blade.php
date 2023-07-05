<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/delete-product/{{ $data->id }}" method="GET">
            <div class="modal-header" style="background: red; color: white; ">
                <h1 class="modal-title" id="defaultModalLabel">Delete Product ID {{ $data->id_produk }} </h1>
            </div>
            <div class="modal-body">
                Are you sure to delete {{ strtolower($data->nama_produk) }}?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-danger" type="submit">Delete</button>
            </div>
        </form>
    </div>
</div>
