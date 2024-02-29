<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" novalidate action="<?= base_url('kategori/aksi_tambah')?>"
                            method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Kategori" name="nama_k"
                                                id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mb-1">Submit</button>
                                <button type="reset" class="btn btn-dark mb-1">Reset</button>
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