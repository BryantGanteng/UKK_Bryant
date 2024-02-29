<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="../../images/logo.svg" alt="logo">
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="form-horizontal form-label-left" novalidate
                            action="<?= base_url('Home/aksi_tambah_user')?>" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-xl" placeholder="E-Mail"
                                    name="email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-xl" placeholder="Nama" name="nama">
                                <div class="form-control-icon">
                                    <i class="bi bi-123"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-xl" placeholder="Username"
                                    name="username">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-xl" placeholder="Password"
                                    name="pswd">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class="text-gray-600">
                                Already have an account?
                                <a href="/login" class="font-bold">Log in</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>