<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
include '../database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute
    $stmt = $conn->prepare("SELECT password FROM userdata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if (password_verify($password, $db_password)) {
            $message = "Login successful";
            $toastClass = "bg-success";
            // Start the session and redirect to the dashboard or home page
            session_start();
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "Incorrect password";
            $toastClass = "bg-danger";
        }
    } else {
        $message = "Email not found";
        $toastClass = "bg-warning";
    }

    $stmt->close();
    $conn->close();
}
?>

<section class="login-page">
    <div class="login-container">
        <h1>Login</h1>

        <form action="login.php" method="POST">



            <label for="email" class="form-label"><i class="fa fa-envelope"></i>Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">


            <label for="password" class="form-label"><i class="fa fa-lock"></i>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">


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