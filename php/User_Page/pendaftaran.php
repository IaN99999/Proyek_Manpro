<!DOCTYPE html>
<html>
<head>
    <title>Dana English Course Resgitration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/boostrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'navbar_footer/navbar.php'; ?> 
    
    <div class="container">
        <h2>Registration Form</h2>
        <form action="process_registration.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" name="registrationForm">
            <input type="text" name="nama" placeholder="Nama lengkap" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="date" name="tanggal_lahir" required>
            <input type="file" name="bukti_transfer" accept="image/*" required>
            <input type="submit" value="Daftar">
        </form>
    </div>

    <?php include 'navbar_footer/footer.php'; ?>
</body>
</html>
