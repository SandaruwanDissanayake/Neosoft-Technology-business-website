<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="animation.css">



</head>

<body class="body">



    <div class="main-header">

        <div class="container-fluid">
            <div class="row">
                <header>
                    <div class="col-12 hedaer1">
                        <div class="row justify-content-center">
                            <!-- <div class="col-lg-1"></div> -->
                            <div class="col-lg-3  col-10 ">
                                <div class="row align-content-center slide-right">
                                    <img src="resourse/neosoft  compleate.png" style="width: 120px; height:50px " alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 d-lg-block d-none">
                                <div class="row justify-content-end ">
                                    <div class="col-1  me-5">
                                        <!-- <button class="button type4" style="margin-top: -1px;" data-aos="fade-up">
                                            Home
                                        </button> -->
                                        <a href="#Home" style="text-decoration: none; position: absolute; margin-top:5px" class="button type4">Home</a>


                                    </div>
                                    <div class="col-1 me-5">

                                        <a href="#about" style="text-decoration: none; position: absolute; margin-top:5px" class="button type4">About</a>
                                        <!-- <button class="button type4" style="margin-top: -1px;"  data-aos="fade-up" data-aos-delay="100">
                                          
                                        </button> -->

                                    </div>
                                    <div class="col-1  me-5">

                                        <!-- <button href="#about" class="button type4" style="margin-top: -1px;"  data-aos="fade-up"  data-aos-delay="200">
                                            Service
                                        </button> -->
                                        <a href="#Service" style="text-decoration: none; position: absolute; margin-top:5px" class="button type4">Service</a>


                                    </div>
                                    <div class="col-1  me-5">

                                        <!-- <button href="#about" class="button type4" style="margin-top: -1px;"  data-aos="fade-up"  data-aos-delay="200">
    Service
</button> -->
                                        <a href="#team" style="text-decoration: none; position: absolute; margin-top:5px" class="button type4">Team</a>


                                    </div>
                                    <div class="col-1  me-5">
                                        <!-- 
                                        <button class="button type4" style="margin-top: -1px;"  data-aos="fade-up" data-aos-delay="300">
                                            Contact
                                        </button> -->
                                        <a href="#contact" style="text-decoration: none; position: absolute; margin-top:5px" class="button type4">Contact</a>


                                    </div>
                                  
                                </div>

                            </div>
                            <div class="col-2 d-lg-none d-block">
                                
                                <button class="mt-3" style="background: transparent; border:none;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" > <i class="bi bi-list" style="color: #16a085;"></i> </a>

                            </div>
                        </div>
                </header>
            </div>
        </div>

    </div>






    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        })
    </script>

</body>


</html>