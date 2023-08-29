<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
    <link rel="stylesheet" href="home.css">

    <!-- aos  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- header sections start -->

    <header>
        <a href="" class="logo">AKSCSC BIOMETRICS ATTENDANCE SYSTEM</a>
    
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fa-solid fa-user"></i>
        </div>

    </header>

    <!-- header sections ends -->

    <!-- about sections start  -->

    <section class="about" id="about">
        <div class="container">
            <div class="wrapper">
                <div class="slide">
                    <div class="content">
                        <div data-aos="flip-left"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <H1><span>WELCOME</span></H1>
                        <h3> TO WORK </h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Pariatur dolorum, in, est accusantium accusamus beatae ea eum officiis</p>
                    </div>
                </div>
                    <div class="image">
                        <img src="cropped-AKSG-Logo-PNG.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--sign in  -->
    <section class="sign-in">
        <div class="Main">
            <div data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom">
                 <img src="fingerscan.jpg" alt="">
            </div>
            <div data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom">
     
            <div class="sign-in-text">
            <h2>sign in </h2>
            <h5>dear staff,</h5>
            <p>please input fingerprint in the biometrics scanner to sign in to work today.
                any other complain? please hit the button below
            </p>
            <a href='#'>
             <button type="button">click here and place your index finger on the scanner</button>
            </a><br><br>
            <a href='staff_sign_up.php'>
             <button type="button">Register Here</button>
            </a>
             </div>
            </div>
        </div>
    </div>
    </section>
    
<section class="footer">
        <div class="credit">
            copyright @ 2023 by <span> Godswill samuel</span>
        </div>
</section>


<!-- AOS  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
  </script>
</body>
</html>