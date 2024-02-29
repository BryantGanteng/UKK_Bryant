<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="../../images/logo.svg" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form id="formAuthentication" class="mb-3" action="login/aksi_login" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Username</label>
                                <input type="text" class="form-control" id="email" name="username"
                                    placeholder="Enter your email or username" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="pswd">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="pswd"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                            <div class="mb-3">
                                <a href="<?= base_url('Home/pendaftaran') ?>"
                                    class="btn btn-primary d-grid w-100">Register</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


<script>
// Saat halaman dimuat
document.addEventListener("DOMContentLoaded", function() {
    // Cek apakah ada cookie dengan nama "remember_me"
    if (getCookie("remember_me")) {
        // Jika ada, tandai checkbox "Ingat Saya"
        document.getElementById("flexCheckDefault").checked = true;
        // Dan isi field username dan password dengan nilai cookie
        var cookie = JSON.parse(getCookie("remember_me"));
        if (cookie && cookie.username && cookie.password) {
            document.getElementsByName("username")[0].value = cookie.username;
            document.getElementsByName("password")[0].value = cookie.password;
        }
    }
});

// Saat form login disubmit
document.querySelector("form").addEventListener("submit", function() {
    // Cek apakah checkbox "Ingat Saya" di-tick
    if (document.getElementById("flexCheckDefault").checked) {
        // Jika iya, buat cookie dengan nama "remember_me" yang berisi nilai username dan password
        var username = document.getElementsByName("username")[0].value;
        var password = document.getElementsByName("password")[0].value;
        if (username && password) {
            var cookie = {
                username: username,
                password: password
            };
            setCookie("remember_me", JSON.stringify(cookie), 30);
        }
    } else {
        // Jika tidak, hapus cookie dengan nama "remember_me" (jika ada)
        deleteCookie("remember_me");
    }
});

// Fungsi untuk membuat cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fungsi untuk membaca nilai cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fungsi untuk menghapus cookie
function deleteCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}


$(document).ready(function() {
    $('#show-password-btn').click(function() {
        var passwordInput = $('#password-input');
        var passwordInputType = passwordInput.attr('type');
        var showPasswordBtn = $('#show-password-btn');
        if (passwordInputType === 'password') {
            passwordInput.attr('type', 'text');
            showPasswordBtn.html('<i class="fa-solid fa-eye-slash"></i>');
        } else {
            passwordInput.attr('type', 'password');
            showPasswordBtn.html('<i class="fa-solid fa-eye"></i>');
        }
    });
});
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
// Callback function saat CAPTCHA berhasil diverifikasi
function onCaptchaVerified(token) {
    // Enable tombol login
    document.getElementById("login-button").disabled = false;
}
</script>