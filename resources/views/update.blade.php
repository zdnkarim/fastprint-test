<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/update-data" method="POST">
            @csrf
            <div class="modal-header" style="color: white; background: blue">
                <h1>UPDATE DATA</h1>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn mb-2 btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
