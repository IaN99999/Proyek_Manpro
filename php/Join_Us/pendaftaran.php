<?php



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Join us</title>

</head>

<body style="background-image: url('../../assets/asset_web/bg3.png');">

    <div style="margin-left:20%;padding:0px 16px;">
        <br>
        <div class="user">
            <h3 class="welcome" style="margin-left: 49vh;color:white">JOIN US</h3>
        </div>
        <br><br>
        <form action="insertForm.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Name :</p>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Input Name" id="input_name" name="input_name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Place/Date of Birth :</p>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="City" id="city_name" name="city_name">
                            </div>
                            <div class="col-1">
                                <span style="color:white">/</span>
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Status :</p>
                    </div>
                    <div class="col-4">
                        <select class="form-select" id="Status" name="Status">
                            <option selected>Choose...</option>
                            <option value="Student">Student</option>
                            <option value="Employee">Employee</option>
                            <option value="None">None</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">No.Hp :</p>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" placeholder="Input number" id="numberhp" name="numberhp">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Address :</p>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Input your address" id="address" name="address">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Gender :</p>
                    </div>
                    <div class="col-4">
                        <select class="form-select" id="Gender" name="Gender">
                            <option selected>Choose...</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>

                <hr style="width: 75%;">

                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Email :</p>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Input email" id="email" name="email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Password :</p>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" placeholder="Input password" id="input_pw" name="input_pw">
                    </div>
                    <div class="col-1">
                        <i class="fa-regular fa-eye-slash" id="togglePassword" style="color: white;"></i>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <p style="color:white">Confirm Password :</p>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" placeholder="Confirm password" id="confirm_pw" name="confirm_pw">
                    </div>
                    <div class="col-1">
                        <i class="fa-regular fa-eye-slash" id="togglePasswordconfirm" style="color: white;"></i>
                    </div>
                </div>
                <br>
                <div class="class">
                    <button type="submit" class="btn btn-primary" style="margin-left: 49vh">Submit</button>
                </div>
                <br><br>

            </div>
        </form>
    </div>
</body>
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const input_pw = document.querySelector("#input_pw");
    togglePassword.addEventListener("click", function() {
        // toggle the type attribute
        const type = input_pw.getAttribute("type") === "password" ? "text" : "password";
        input_pw.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("fa-eye");
    });

    const togglePasswordconfirm = document.querySelector("#togglePasswordconfirm");
    const confirm_pw = document.querySelector("#confirm_pw");
    togglePasswordconfirm.addEventListener("click", function() {
        // toggle the type attribute
        const type = confirm_pw.getAttribute("type") === "password" ? "text" : "password";
        confirm_pw.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("fa-eye");
    });
</script>

</html>