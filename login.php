<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<section class="login-page">
    <div class="login-container">
        <h1>Login</h1>

        <p class="sub-title">Enter your email and password to login:</p>
        <form action="login.php" method="$_POST">

            <div class="mb-3">

                <label for="uname" class="form-label"><i class="fa fa-envelope"></i>Username</label>
                <input type="email" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="mb-3 pass">
                <label for="password" class="form-label"><i class="fa fa-lock"></i>Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-success ">Login</button>

            <p class="register-link">
                Don't have an account?<a href="register.php">Create Account</a>
            </p>
        </form>
    </div>
</section>


<script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl, {
            delay: 3000
        });
    });
    toastList.forEach(toast => toast.show());
</script>





















<?php include 'includes/footer.php'; ?>