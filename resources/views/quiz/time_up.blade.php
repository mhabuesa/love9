<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - SAAB</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/img/logo/saab.jpg">
    <!-- Place favicon.ico in the root directory -->

    {{-- Meta --}}
    <meta name="description" content="Khwalifatul Umam Alaihis Salam">
    <meta name="keywords" content="love9, saab, Chatro Anjuman, Rajarbag, Dorbar Shareef, Kholifatul Umam, 9th romadan, 9 rwamadan, love"/>
    <meta name="author" content="SAAB"/>
    <meta property="og:site_name" content="Love 9"/>
    <meta property="og:url" content="https://9shareef.com"/>
    <meta property="og:title" content="Love 9 - Saab"/>
    <meta property="og:description" content="Khwalifatul Umam Alaihis Salam"/>
    <meta property="og:image" content="{{asset('frontend')}}/assets/img/logo/umam.png"/>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{asset('quiz')}}/fonts/font.css">

    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{asset('quiz')}}/css/Bootstrap/bootstrap.min.css">

    <!-- Custom Css Files -->
    <link rel="stylesheet" href="{{asset('quiz')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('quiz')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('quiz')}}/css/animation.css">

    <!-- thankyou css -->
    <link rel="stylesheet" href="{{asset('quiz')}}/css/thankyou.css">



    <style>
        @font-face {
           font-family: Sirajee_Humayra ;
           src: url({{asset('frontend')}}/assets/fonts/bangla/Li_Sirajee_Humayra_Unicode.ttf);
       }
        @font-face {
           font-family: LiMahfujAK ;
           src: url({{asset('frontend')}}/assets/fonts/bangla/LiMahfujAKUnicode.ttf);
       }
        @font-face {
           font-family: Alinur ;
           src: url({{asset('frontend')}}/assets/fonts/bangla/LiAlinurTarunyaUnicode-Regular.ttf);
       }
       @font-face {
           font-family: QyyumBook ;
           src: url({{asset('frontend')}}/assets/fonts/bangla/QyyumBook.ttf);
       }

   </style>
</head>
<body>

    <main class="overflow-hidden">

        <div class="thankyou-page thankyou_show">
            <header class="thankyouheader">
                <h2>
                    সময় শেষ
                </h2>
            </header>
            <main class="thankyou-page-inner">
                <img src="{{asset('quiz')}}/images/timsup.png" alt="">
                <h1>দুঃখিত, <br>  কুইজ জমা দেওয়ার সময় শেষ!</h1>
            </main>
        </div>

    </main>

    <div id="error"></div>

    <!-- bootstrap 5 -->
    <script src="{{asset('quiz')}}/js/Bootstrap/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="{{asset('quiz')}}/js/jQuery/jquery-3.6.3.min.js"></script>

    <!-- Thankyou JS -->
    <script src="{{asset('quiz')}}/js/thankyou.js"></script>

    <!-- Custom js -->
    <script src="{{asset('quiz')}}/js/custom.js"></script>

</body>
</html>
