<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">






<h1>Login</h1>
<form class="container mt-5" method="POST">

    <div class="img-log">
        <img src="assets/images/login/login.jpg" class="img-fluid">
    </div>


    <div class="mb-3">

        <label for="uname" class="form-label">Username</label>
        <input type="email" class="form-control" id="username" placeholder="Enter your username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>


























<?php include 'includes/footer.php'; ?>