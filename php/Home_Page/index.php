<?php include '../navbar_footer/navbar.php'; ?>

<!-- Banner Image -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center p-md-4">
    <div class="content text-left p-md-5 ">

        <h5 class="welcome text-white mx-md-2 my-md-3">WELCOME</h5>
        <h1 class="text-white mx-md-2 my-md-3">Best English Learning</h1>
        <p class="text-white mx-md-2 my-md-3">We know how large objects will act, <br>
            but things on a small scale</p>
        <button type="button" class="btn btn-primary mx-md-2 my-md-3">Get Quote Now</button>
        <button type="button" class="btn btn-outline-primary">Learn More</button>
    </div>
    <div class="content text-right p-md-5">
        <img src="../../assets/asset_web/hero.png" alt="" class="img-fluid">
    </div>
</div>

<div class="container" style="padding-top: 4%;text-align-last: center;padding-bottom: 4%;">
    <h1>Daftar Harga Kursus Bahasa Inggris</h1>
    <div class="row">
        <?php
        include '../connection.php';


        $sql = "SELECT *
        FROM harga
        JOIN class ON harga.Id_Class = class.Id_Class;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['Nama_Class']; ?></h5>
                            <p class="card-text">Sesi per Bulan : <?php echo $row['session']; ?></p>
                            <p class="card-text">Harga : <?php echo $row['Price']; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "Belum ada data harga kursus yang tersedia.";
        }
        ?>
    </div>
</div>
<!-- Main Content Area -->

<!-- <div class="container text-left ">
        <div class="row align-items-start p-md-5">
            <div class="col my-md-4">
                <h5>Get In Touch</h5>
                <p clas="text-secondary">The quick fox jumps over the <br> lazy dog</p>
            </div>
            <div class="col my-md-4">
                <h5>Company info</h5>

                <li class="list-group-item">About Us</li>
                <li class="list-group-item">Carrier</li>
                <li class="list-group-item">We are hiring</li>

            </div>
            <div class="col my-md-4">

            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col my-md-4">
                <p>Made With Love By Figmaland All Right Reserved</p>
            </div>

        </div>
    </div> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script> -->

<?php include '../navbar_footer/footer.php'; ?>