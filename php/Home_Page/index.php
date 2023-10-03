<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .banner-image{
            background-image: url('../../assets/asset_web/bg.png');
            background-size: cover;
        }

        .title{
            top: 50%;
        }

        .row{
            align-items: flex-start;
        }

        .li{
            text-decoration: none;
        }

        img{
            width: 500px;
            height: auto;
        }

        @media(max-width: 1024px){
            .banner-image{
                height: 50%;
            }
            .welcome{
                font-size: 20px;
                
            }
            img{
                width: 300px;
                height: auto;
            }

            .col {
                margin-top : 30px;
                
            }

        }

        @media(max-width: 500px){
            .banner-image{
                height: 50%;
                top: 10%;
            }
            .welcome{
                font-size: 20px;
                
            }
            img{
                display: none;
            }

            .col {
                margin-top : 30px;
                margin-left : 20px
                
            }

        }
        
        

    </style>
</head>
<body>

        <!-- Navbar 
        <nav class="navbar fixed-top navbar-expand-md navbar-dark p-md-3">
            <div class="container">
                <a href="#" class="navbar-brand">BrandName</a>
        
            
                <button type="button" class="navbar-toggler"
                data-bs-target="#navbarNav"
                data-bs-toggle="collapse"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-lable="Toggle Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Product</a>
                        </li>
                        <li class="nav-item">
        
                        <a href="#" class="nav-link text-white">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Contact</a>
                        </li>
                        
                    </ul>
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Login</a>
                        </li>
                        <li class="nav-item">
                        <button type="button" class="btn btn-primary mx-md-2">Join Us</button>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        -->



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
       

        <!-- Main Content Area -->

        <div class="container text-left ">
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
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
           
        <script> 
        var nav = document.querySelector('nav');
            
            window.addEventListener('scroll', function(){
                if (window.pageYOffset > 100) {
                    nav.classList.add('bg-dark','shadow');
                } else {
                    nav.classList.remove('bg-dark','shadow');
                }
            });
        </script>

        
</body>
</html>