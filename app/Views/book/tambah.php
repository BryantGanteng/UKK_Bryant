<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" novalidate action="<?= base_url('book/aksi_tambah')?>" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Buku</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama Buku"
                                                name="nama_b" id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Penulis</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Penulis" name="penulis"
                                                id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Penerbit</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Penerbit"
                                                name="penerbit" id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tahun</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Tahun" name="tahun"
                                                id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sipnopsis</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Sipnopsis"
                                                name="sipnopsis" id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Stok</label>
                                        <div class="col-sm-9">
                                            <input type="text-area" class="form-control" placeholder="Stok" name="stok"
                                                id="first-name-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <fieldset class="form-group">
                                                <select class="form-control" id="basicSelect" name="kategori">
                                                    <option>-PILIH-</option>
                                                    <?php
                                        foreach ($a as $b) {
                                            ?>
                                                    <option value="<?= $b->id_kategori?>"><?php echo $b->nama_k?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cover</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control file-upload" name="cover" id="cover"
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <img id="preview" src="" alt="" style="max-width: 100px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 ml-3">
                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                                        <button type="reset" class="btn btn-secondary me-1">Reset</button>
                                    </div>
                                </div>
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
<script>
function previewImage() {
    var preview = document.querySelector('#preview');
    var file = document.querySelector('#cover').files[0];
    var reader = new FileReader();

    reader.addEventListener("load", function() {
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>