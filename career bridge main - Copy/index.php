<?php 
echo '

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAREERBRIDGE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style1.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet">
        <link href="css/profiledropdown.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include (" indexx.php");
        ?>

        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                        
                            </div>
                              
                    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Internships</a>
                        <a href="feature.html" class="nav-item nav-link">Jobs</a>
                        <a href="review.html" class="nav-item nav-link">Review</a>
                        <a href="resumeindex.html" class="nav-item nav-link">resumebuilder</a>
                        <a href="loginpage.html" class="nav-item nav-link">login </a>
                        
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <div class="profile-menu">
                            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" alt="Profile Avatar" class="profile-avatar" id="profile-menu-toggle">
                            <div class="profile-dropdown" id="profile-dropdown">
                              
                            <p class="dropdown-item">User@123</p>
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="indexx.php" class="dropdown-item">applied job</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                          </div>
                
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
       
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <video>
                             <source src="welcome page.mp4" type="video/mp4">
                             </video>   
                        </div>
                        <div class="carousel-text">
                            <h1>CAREERBRIDGE</h1>
                            <p>
                                At CareerBridge, our mission is to bridge the gap between talent and opportunity, making career growth accessible to everyone.
                            </p>
                            <div class="carousel-btn">
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Your Success Our Achievement</h1>
                            <p>
                                Celebrating Milestones and Impacting Careers.
                            </p>
                            <div class="carousel-btn">
                              
                        </div>
                                
                            <
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-4.png" alt="Icon">
                            <p class="text">30+ Internship</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-1.png" alt="Icon">
                            <p class="text">30+ Job company</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-8.png" alt="Icon">
                            <p class="text">Internship and job</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-6.png" alt="Icon">
                            <p class="text">0 placed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="img/about-2.jpg" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="img/about-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            
                            <h2>About us</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Welcome to CareerBridge, your gateway to a world of career opportunities! At CareerBridge, we are dedicated to bridging the gap between talented individuals and leading companies across various industries. Our platform is designed to simplify the job and internship search process by offering a comprehensive range of opportunities tailored to diverse career goals. Whether you\'re a student seeking valuable internship experiences or a professional looking to advance your career, CareerBridge provides a user-friendly experience with features like detailed company profiles, seamless application processes, and insightful reviews. Our mission is to empower job seekers and connect them with the right opportunities to foster growth and success. Join us on CareerBridge and take the next step in your professional journey!
                              </p>
                            
                            <a class="btn" href="file:///C:/Users/hp/Desktop/career%20bridge%20main%20-%20Copy/about.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
       
        <body>
            <h1>TOP Companies</h1>
            <section class="top-companies">
                <div class="marquee-wrapper">
                    <div class="marquee-content">
                            
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEiklEQVRYha2XW2wUVRzGf7OX2SVt2d1ut11cMrVkt4XAA0oLiURC4UHI8iDpi4oJobXFRjCRRAJKTBDpW8VwEVGIwcjFd0OCSRHKMxEoCbSYmm7YsL1QdrdAZ/Yy40OnWNqZ7QzyPc75zv/79uw5/4tw+/ZdbOI14E0gBpTr354A94G/gKSdYC6LvAjQCrzvdruWeb1ePB4Rh8MBgKqqKEoOWZbJ5wv3gAvAGStmhHlOwA98DXRUV1d5/P6FeDxiyYCKkiOdzjIyMqYAPwJfAemXMbABOBcKBcM1NVUIglBSeDY0TWN4eIzR0Ucp4EOgx4jnMNnfAfwhSZFwOByyLQ4gCALhcAhJioSBy8BOqwY6Kyv9p2Kx150+X4UlMVVVOX/+At3d385Z8/kqiMXqnJWV/h+AzvkMbASOBYMBvF6vJXFZlmltbWPfvv309fUZcrxeD8FgAOCYrmFowA+ck6SI0+v1WBIHOHr0GFeu/AnA9u3bTXlerwdJijiBX3WtOQYOhULBGqvHDlO//vTpMwDs2vUJzc3rS/J9vgpCoWCYqZcF/PcKJOD+ihUN4nwXbnDwH1S1SF1dHU6nkyNHvqOpqZFoNMrDhykqKwPU1taa7tc0jTt3+nPAEiA5nYh2VFdXlRTv7b1Od3c3fX13UFWVhoZ64vE4tbUSZ8/+Qm/vdSYnJxFFkbVr3+LAgS+JxWJz4giCQHV1lTgyMvYRcHD6BO7W1y9ZapZkrl69xo4drRSLxZKnMxOxWIxLl37H45l7nxQlx8DAYD+w1AEsdrtdpuJPnz5l//4vbImXlZXR1XUYUTSO6fGIuN2uBmCxA1hZ6sldu9ZLMmmrvtDR0c6aNatLJjBdc6UDiJXK7zdu3LAlDrB586Z5ObpmvQOomK5qRpiYmLAlLgiCpSSma5abK+sIBAK2DGiaRn//gGW+A5hQVdWUsHz5clsGAI4fP0GhUCjJ0TWfOID7ipIzJTY1NVquC9O4desW7e07SSQSphxdc8AB3JRl2ZS4aNEi1q1725YBgJ6enuc1wgi65k0H8CCfL9wrdQqdnR/bNhAIBNi69V3DNUXJkc8XBoAH05fwYjqdNQ22atUqWlpabBnYu/dzfD6f4Vomk4WpvvF5Nfx5ZGQsr2maacBDhw4SjUYticfjcbZt+8BwTW/VcsBPAM7Ozl0AGaBG01hdXl5muFEURTZu3MDg4CAAzc3r2bPnM9ra2mhsbESWZVwuF1u2xOnqOozLZdxwDw+P8ezZ5EngN3ixKfUD9yQpYqsnsINMZoJEIpkClqF3yjMTURrYlkgki7KsvHJxWVZIJJJFpjrk52367EzYA+x+9Ogxr9KELCuMjz8G2M2s9tzojzo5Pp5Wx8fTJyQpYrkzNkM2O8HQULIIfAqcnL1uVgtOAe8kEslUKjVKqddhBk3TSKVGGRpKpoBNwPdGPCuj2TdAe01NlejzWRvNMpnszKd2gJcczWYiArQD77ndroYFC7yI4ovDaS6XY3JSJp8v9AMXdfH/PZwaYTHwBhAFFurfssDfTI3nD+wE+xfxCKNpO+N8NAAAAABJRU5ErkJggg==" alt="Company A Logo" class="marquee-image">
                        
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAD30lEQVR4AayShW4cMRCGLQgzHArKDK9xor5KnyDMSZmZmZmZRWWuKMy8e3y7U8/KvXG6PlR+6dM3Wtv/tElYulnzHXI918HnvQZ7PNfgGfdvz1XQEJzFtz14B++y+crCO+D2XoG97ssw475swhwuGWSOK26T3zX24luWbZbehTxe1uS+YOiuCzGwOB+3mA2yAvcFU8cO7Mrsf30R3Lz4nfMcL+eglZyNkm3QGXZhJ0snzrOw3nE61uc4zQs4wmKOxC3PaIszZA4/I2On6zSsY8ni4P9Kx6loX/WJMCCOk5G47dCZ+r79HLtxR8LfueN45F318TDEORYiW4TJHBcvbf8QhT/TJoRiJkQME2bCJvRpJnwaM8TbuX24Q/k3wS82VR0JwRwOB8nSjF5xJgRvhgxIEtEj3kngLibHcQzc1YdDetWhICSj8iD5UW8MUsX+PoBGdNzJ/qXqQHBv5f4AVHCEBX4yp1LMG26EIJ2I+2hpFn18J8OsuQi5lXv9MxV7/ZAul35HIY0k7cCduJtV7tN95bt0sNgdt5g1sjR/GrX/+E9+j8DyI35xV7eh6q/cpftY2Q5tDwfSoVxYj5jwf5Yf4qV0j+bknXtY2bbZZxxIh9KtlkERfjaD52QFcgdSvl17xkq3zP4u3TwDSAlZAZ2pgmeZgrtZ6aZpraRrGpR0kuVZFTpXv1eBu1lpx5RW3DEFFu1kmWzSM21AiehC04wWc/uUxorbpn4XtU6CiuLWKcvZ5HVPxN7ZQkZwNytqnnxW1DwBSGETWSabnPsSkjuV4G5W2DC+hwPJyCZdL/22ngLJYt7DihonfAW1Y2BRR5bJJhtvaeL9OFoJ7mZrGiC3sHb8b6vlcdswFATRL2ZCDagAX12H+3DOOWe7A8d2fFQZlsRMXpzu6z8kVnGdPcDgDbRJ5InP/nFB3lFOTMlck1TVuW8gD8wzcRO3FeQfFvfeQUbeQU5M2K0yOGBJXlVjcmaO1HFTsernecPZTd/c3ZQ0CeTM7M+S3L0MNWbpT/a94abql7ebXDrburidECiZa5LsspZUZO+kzNI2Z31r9JPsmlx7M2namzHZG7J1vaQkp6qBff09csYN3FKS6jt5w1mPA2stos8sCb/b6zFzIPMcduOG+kzORjpurUaBtRKRuRwSsz8LqnpWQuaoV8MAu9V3VF/MG9Zi2DQXAxrwUlhSENeZA7aWwyY/+bc1tkKu/hOXxkLwZswHVLlTUlINNW0mjFnswC71W+FtGLOd+9ps+7k2qw/MtEmSrlNZB+c6z5jBrPo3nZNjzXQm1FTrjgSp6dYDakr3oFd9U+9y1lO9tTZT6gAAAABJRU5ErkJggg==" alt="Company B Logo" class="marquee-image">
                        
                        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Company C Logo" class="marquee-image">
                        
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAnFBMVEVHcEzy0UDInSPYqizbripqYVHWzHzy20Tq2F3u2VXzwTB3XBrz2D7ery315UnhsS0wcKL15k7y20oAbr4Hb7sHa7b64DH55DD82TEGheP45y8Kg9n63THxxi/4xzHuvC/+yjHlsyz80zLowysEetP/3h7vxBUHecyMp6L450G0qWhxlaQgi9hMkMB3pLTksBbWu1G0uomVnYXXyWSrIjT1AAAAFnRSTlMAcUl4/Q0a9T9Q7B20jsuoXL2GgoFsvBma+wAAAadJREFUOI11kw1zojAQhiN+BGxte+2dBoEQQggB+dL+//92uwmeIL1nnGHG53V32URCpmz9IPB35D/4r9XZUv0KftABPU+oVs/+bWJPwJnOOu2qiRup/Cd/euJ4eiSqhXTcu7wtlYOO8y9lAcAj/rQB+vS7U0GvpjM0Bux+ZvYYH+MuRLqCMYbreHVfW4XQxvqw0RDAKeJ/CmEFeBtpdQIJOJ+JBAqDuqm11nkuGfOJf1eOAouHQ44kiZQrErAZ32ETQfUxwBeB4hpGUWi08wkXK+LflaPDQI0DJBjgK7Kzml4793YRgM8BvUyER4hk0kK7yNLYTO0KiC0symomv030INxkdoQ9nhXoob4ZcwFatO3lUmdZyqHAAQ+DS5nkuc5hN9ooCNz6Pttk2diBkLXERJrCR7eqVKregE7TlIt3dyH2Ugjrcx0pFSn0NsDHG/XChRQ4dTJAgbLpXYBz734nPQHATLxWZVle+rHA+nGtPW4DwkBA3fqFhy57LCJaKKBqV8Ajcw5QRGAHha+QvW8Xf87tej9goIQlHF4W2mU+/vz++vBm9i+r/FSYRl4w2gAAAABJRU5ErkJggg==" alt="Company D Logo" class="marquee-image">
                        
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADsUlEQVRYhbWWT2gcVRzHP8/sBsSkpkLUpdlQRAgptexuqrR6EcxqDipWacCLB4PJwUNpwEUwiAgt4sE/NHdLwIM1NFvw4CUU04JJs7HSRDYbD1VCNiRBiTtJDmnh62F3pjOZyc40ab/wmHlvfu/9vu/7+/3eG6hBUpOkjyXN6+HhlqRBSY/ihqQOSX8+RMdBRNoBjKQm4CbwLBFhWRYLCwtO3xhDIpEgkUhEXQJgFjiOpE+j0h7L59WdzSoWjzutwfXenc1qLJ+/HyXOoAjSVyoVdWezHmf1Wi6Xi0qgQBSr07293l3HYqFkIiqxFUogn88HOkhlMjrd2+sLid1eyWajEFAogQ/6+0MlzuVygSSi4JGwVDXG+MaGhoY8/b6+PgROux8YSaFz3GVnjCGTyfhs4o2Nnr6Au9vboQRiUVg2NzfT1dXl9JeXlymXy/w6OQnAxMRE1akUqNi+CdhOv7t4kR9HR5mbnfV8E2AIDlcooiTKWD6vtmQyMNHqlWMUhObAzMwMJ06edHZpPwEGz54l2d7Okc5OXuvp8akSJQdCFUil076ddWezWlpa8tjtVYG6BEqlUuDChULBY1cul30haXgQ50Bxft6R0y2tuyIAisWi825cz+Xl5dAI1CWwuLjoWdR+tyzLY/fDpUuB829MT4cSqBuC8fFx5/LZ7SgeGRnx2dhhSGcyqlQqdUNQl4A7tjtLL5VOqy2Z3LUM7fELw8N7JyD5r+LdWiqT8Y21JZMqlUr7I2D/jPh2WJO8oRYSy7KcW9FWKMx5JAI2iQvDww6RhlhMqUxG/QMDvpI8d/68+gcGZFmu2G8sSavT0soNadubE96T8I9v4bEkHH47PHujYKsMUx/Cav5eLR/7Bo6ccUy8ZXioB37rh6unYK2wfwKNB+DoJ/D6ErxTgaZO3w+Dl0BLB7xxG7b/hfHnq0T+ugx3NvZGYHUK5s7BT4dgswwbRWh90WNiJN0FGjyjdyy4+Rnc/gpUu4CS70PLMXjypSrReDO+OeslWJ+D1WuwcgW2/6meXCcuQ/wAzH0Or/7invWfkXQLeC5wB2sFmHwPNov3jsOdd6dxje38HXjqLUh/AY93wNp0lURLh9viupH0EfBlIAEbf4/B/Newfo2ge1ly+TbAM4Nw+F1oPV53WWDASGoEpoBUmDVbZVibgs1FWLlac2ggfrAanoNHofUFf3iCcR14ubYDPS3pSpQz4QHhe0lP2II5kHQKeBPoYre82Dt+B2aAUWPMz/bg/5AZ2OKL1i4FAAAAAElFTkSuQmCC" alt="Company E Logo" class="marquee-image">

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAS1BMVEVHcEzVBhLkCBPbBxKwBQ6xBg/FBhCtBQ7oCBPiBxLkCBOlBA7iBxTkCBPxCBSXAw3kCBOUAw3lCBJtAAuDAQynBQ6xBg+xBRDjBxJ6RmETAAAAGXRSTlMA//+Xgf////9NuP9m0xr/gn7zcf/MtjhOS7LcjwAAAMtJREFUeAF10MESgzAIRVFUCVZqMTW2/f8v7RjYtMNjlcUZbgaKGcZrpus5cx/6nTL2wUCWDm4YeGOFgNlXYKD+iTsG/s0NAolvPhBg88ZOFQAtfcWTquRALBpVEYhzH5YDNvYGBNo6WM4mOZDmjdI0B2zqK5ohEA1FQJufe2iSA2lnNDQHbMezAzYIpmgAoPXRwWKSA6nkjaIQ7GMfywFXioZKDmaiLRoQ3L2BAXmDMVj9FALBzVdg4I2x/IPzNc3z+3p+9n1at4F8vruuDABTzZR7AAAAAElFTkSuQmCC" alt="Company E Logo" class="marquee-image">

                        <img src="data:image/png;base64,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" alt="Company C Logo" class="marquee-image">

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAY1BMVEUAAAD////////////////////////////////////////////Pz8+Pj49fX18AAAC/v78/Pz9gYGDv7+9/f39QUFBAQECfn59vb28vLy/f398QEBAfHx+vr69PT08gICD////OKcp2AAAAIXRSTlMAEF+fz+//II8f3y///////////////////////////2AqutFBAAABHElEQVR4AYVTBQLCMAysHk7Wtdj8/6+EkbnepBa7JhE9pNLGAtZoJcUch6NFD32aHMsjJjjKkfoZM5wHRi58PpW4rOpPbMj2fC7BcRyxiuPfATZQO9EArrd1E7Ie73TFIqwUigUiLEMJzQIujj18eDwfLw/49/NZj4AWhgU+ziXXlDKXUQyfkXOUA4ARtnORZH9HkUegAvAchEAnEKjlklGZoMFA4NlSichR+WoF7EDAg8VTvDJ6Ny5MJ1C0XLM7kDh6cZB6EAMrBUoAJBQzzYr37tcoo98fyZtCknvcWFwJaYGaOFFZi/zwxqsemIhssp28ws0D0S3cIvzH9iL3071fMPslt1u0e2W/3zj7rcdGNHrY41B93v7VQPsL6J8c5Xq3hQ0AAAAASUVORK5CYII=" alt="Company C Logo" class="marquee-image">

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAWCAMAAACi/q9qAAAAYFBMVEX///+Vttoadr4QdL2xyOPT4O8AcLumwd/F1uq/0uisxeGcutwAbbry9vra5fHO3O18ptIAabk9hMNqm83r8fhTj8grfMBxoNA1gMJJisZdlMqMsNcAZbeEq9W4zeXi6vSZ2xeiAAABm0lEQVQ4jZWT7ZKrIAyGQ6JgBZSCBj+29f7vclFkz+mM3c7mhwKTJ8n7otCpHl7DVlo94WO0cn096GRYw9f2EaxQvB4c+234M9jL7iPzAw5tB51e9QbDGtiJPbR46FzCPrVo6x8gbdVzyGBttJNhllTZuHBw7rGwHCObkBLFPeqVqTiRtiJKf4KMj3TWMW3QUnLZTtPujiIPldldt4zngGYfw64niOE4Vdim5AZgxmyOxkeczlW+IT//r7GmbNCNMthQMWxiz1kZHUSH/jfQUblGzRPPhzGR9hndxGF4D85YyjYYF8QlyazJpb7GekS3vQOZC7irr1LuvIEnC8rtapGivQZH+tcxpUI/Ig5PUoC514T+Glyp3LfG6nyvgL4ulsbk8RXYSVdcLb2nCCvPtzKJVJcgRJlbalJnb9SwIcOW/0FrGqjoAoRR7sWFiTCGpMtGtBm+i7SwS9L49Apqr7MVPo3uj6LC4CzThwRCGsJ7SOk3Y8GO0jDfi5LLqG/nlF2fFz7uz6Fv6rfMZTTmj0CJaf6ccxWbeG34DWpUFhZCtzqaAAAAAElFTkSuQmCC" alt="Company C Logo" class="marquee-image">
                        <!-- Repeat the images and text as needed -->
                    </div>
                </div>
            </section>
        </body>
        <!-- Service End -->


        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    
                    <h2>Positive Customer Reviews</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZNV_-lnY3ggGuETrzO6S-OFJd7-CGaEvUrH3Jy5MgaMRQK3_kureHiJ6me09MWeAhhM&usqp=CAU" alt="Image">
                        <p>
                            CareerBridge has been an amazing tool in my job search. The platform is easy to navigate and the variety of internships and job opportunities is impressive. The user-friendly interface and detailed company profiles have made applying for positions a breeze. I highly recommend CareerBridge to anyone looking to take the next step in their career!
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZNV_-lnY3ggGuETrzO6S-OFJd7-CGaEvUrH3Jy5MgaMRQK3_kureHiJ6me09MWeAhhM&usqp=CAU" alt="Image">
                        <p>
                            I\'m thrilled with my experience on CareerBridge. The site offers a wide range of job listings and internships that fit perfectly with my career goals. The application process is straightforward, and the ability to review companies before applying has been incredibly helpful. CareerBridge is definitely my go-to platform for job hunting!
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZNV_-lnY3ggGuETrzO6S-OFJd7-CGaEvUrH3Jy5MgaMRQK3_kureHiJ6me09MWeAhhM&usqp=CAU" alt="Image">
                        <p>
                            CareerBridge is fantastic! The comprehensive job listings and smooth application process have significantly streamlined my job search. The additional resources and company insights are invaluable for making informed decisions. I’ve already recommended CareerBridge to several friends and will continue to use it for future career opportunities.
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZNV_-lnY3ggGuETrzO6S-OFJd7-CGaEvUrH3Jy5MgaMRQK3_kureHiJ6me09MWeAhhM&usqp=CAU" alt="Image">
                        <p>
                            I’ve found CareerBridge to be a game-changer in my career journey. The platform is modern, intuitive, and filled with great opportunities. The ease of finding and applying for internships and jobs is unmatched. I’m very impressed with how CareerBridge has helped me connect with top employers!
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


       
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Get In Touch For Any Query</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>Add. N6 Cidco chh.sambhajinagar(aurangabad)</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email address</h3>
                                <p>CareerBridge003@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <div class="chatbot-container">
            <div class="chatbot-header">
                <h3>Interview Bot</h3>
                <span class="close-btn">&times;</span>
            </div>
            <div class="chatbot-body">
                <div class="message bot-message">👋 Welcome! I\'m your virtual interviewer.</div>
                <div class="message bot-message">Click the button below to start the interview.</div>
                <button id="startInterviewBtn">Start Interview</button>
            </div>
            <div class="chatbot-footer">
                <input type="text" placeholder="Type your response..." id="userInput" disabled>
                <button id="sendBtn" disabled>Send</button>
            </div>
        </div>
    
        <button id="openChatBtn">💬 Chat with us!</button>
    
        <script src="chatbot.js"></script>

        

        <!-- Footer Start -->
     <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Add.N6 cidco chh.sambhajinagar(Aurangabad)</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>CareerBridge003@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="about.html">about us </a>
                                    <a href="FEATURESS.html">features</a>
                                    <a href="about.html">our team</a>
                                    <a href="contact.html">Help</a>
                                    <a href=" faq.html">FAQs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>About CareerBridge</h2>
                            <p>
                                CareerBridge is dedicated to connecting job seekers and employers, providing the best opportunities for your career growth.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">CAREERBRIDGE</a> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAOVBMVEVHcEzlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAijlAig3YE2NAAAAE3RSTlMAEDByx/fkvAhk7P8cVJWB1K1EJHINmwAAALRJREFUeAHNzwUShDAMQNHUXe9/2KXBAgMj62+8vxZ4HeNCKqVXRthTdz7sZISjKGmFc9Wkpu1KfMKaQOS5lKprjqMZjuqIDe+qYdC84cJQtpOHX6TB4dN9ailcw0vydatsxBZuarw7iXWKPRC6IR8Geq9W2yhcrZGZ5Q23ReYxImeqEQzABdlRC2scLCCnAgEcKK5J06A7ad0HokMIJS4pZpp0ApBSNsGjZbxIXeWqiQj/5wFJ9REumq+7xwAAAABJRU5ErkJggg==" alt="stylesheet">, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="">Code4life</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/chatbot.js"></script>
        <script src="js/profiledropdown.js"></script>
        <script src="js/fiverserver.config.js"></script>
    </body>
</html>';