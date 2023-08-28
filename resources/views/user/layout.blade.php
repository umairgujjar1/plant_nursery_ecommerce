<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Nurcery Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</head>

<body>

    <!-- header section starts  -->



    <!-- header section ends -->
    <!-- home section starts  -->
    @include('user.header')

    <section class="home" id="home">

        <div class=" swiper-container home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box" style="background: url(images/slider1.jpg); ">
                        <div class="content">
                            <span>upto 75% off</span>
                            <h3>plant big sale special offer</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(images/slider2.jpg);">
                        <div class="content">
                            <span>upto 45% off</span>
                            <h3>plant make people happy</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(images/slider3.jpg);">
                        <div class="content">
                            <span>upto 65% off</span>
                            <h3>decorate your home now</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    @yield('content')





    <section class="footer">
        <hr>
        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic eum veniam aut nisi. Libero autem
                    nemo amet recusandae eveniet?</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Layyah</a>
                <a href="#">Chock Azam</a>
                <a href="#">Karor</a>
                <a href="#">Jaman sha</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://web.facebook.com/profile.php?id=100041604254458">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linked</a>
            </div>

        </div>

        <h1 class="credit"> created by <span> mr. Irfan & Team</span> | all rights reserved! </h1>

    </section>

    <!-- footer section ends -->

    <!-- scroll top button  -->
    <a href="#home" class="scroll-top fas fa-angle-up"></a>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
