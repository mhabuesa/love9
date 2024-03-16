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
        <header>
            <div class="container no-div">
                <div class="step-count">
                    <div class="step-count-bar active">
                        <div class="step-number">
                            <div class="number-inner info">তথ্য</div>
                        </div>
                    </div>

                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">১</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">২</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৩</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৪</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৫</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৬</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৭</div>
                        </div>
                    </div>
                    <div class="step-count-bar">
                        <div class="step-number">
                            <div class="number-inner">৮</div>
                        </div>
                    </div>
                    <div class="step-count-bar no-line">
                        <div class="step-number">
                            <div class="number-inner">৯</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timer">
                <div class="timer-inner">
                    <div class="timer-count">
                        <span id="countdown-timer">সমাপ্ত</span>
                    </div>
                </div>
            </div>
            {{-- <div id="countdown" class="mt-5">সমাপ্ত</div> --}}
        </header>
        <form method="POST" action="{{route('quiz.store')}}">
            @csrf
            <div class="quiz-main">
                <div class="container show-section">

                    <!-- step Info -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                           আহলাও ওয়া সাহলান
                        </h2>
                        <h4 class="quiz-welcome">মুহতারাম, আপনার নাম ও মোবাইল নাম্বার দিয়ে বরকতময় প্রশ্নোত্তর পর্বে এগিয়ে যান!</h4>

                        <!-- form -->
                        <fieldset id="step0" >
                            <div class="row m-auto d-flex justify-content-center">
                                <div class="col-md-5 tab-100 mob-100">
                                    <div class="info">
                                        <label>আপনার নাম লিখুন</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-5 tab-100 mob-100">
                                    <div class="info">
                                        <label>মোবাইল নাম্বার দিন</label>
                                        <input class="form-control" type="tel" name="phone">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" id="step0btn" class="next">এগিয়ে যান <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>


                    <!-- step 1 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            'খ্বলীফাতুল উমাম' লক্বব মুবারকের অর্থ কি?
                        </h2>

                        <!-- form -->
                        <fieldset id="step1">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs1" value="সবার খলীফা">
                                        <label>সবার খলীফা</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs1" value="উম্মতের খলীফা">
                                        <label>উম্মতের খলীফা</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs1" value="উম্মতসমূহের খ্বলীফা">
                                        <label>উম্মতসমূহের খ্বলীফা</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs1" value="আখেরী উম্মতের খলীফা">
                                        <label>আখেরী উম্মতের খলীফা</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>তথ্য ‍দিন</button>
                            <button type="button" id="step1btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>

                    <!-- step 2 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার বিলাদত শরীফ-
                        </h2>

                        <!-- form -->
                        <fieldset id="step2">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs2" value="ইয়াওমুল ইছনাইনিল আযীম">
                                        <label>ইয়াওমুল ইছনাইনিল আযীম</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs2" value="ইছনাইনিল আযীম শরীফ">
                                        <label>ইছনাইনিল আযীম শরীফ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs2" value="ইয়াওমুল ইছনাইনিল আযীম শরীফ">
                                        <label>ইয়াওমুল ইছনাইনিল আযীম শরীফ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs2" value="লাইলাতুল ইছনাইনিল আযীম শরীফ">
                                        <label>লাইলাতুল ইছনাইনিল আযীম শরীফ</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step2btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>

                    <!-- step 3 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি প্রথম কালো পাগড়ী পরিধান করেন-
                        </h2>

                        <!-- form -->
                        <fieldset id="step3">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs3" value="১৪৩৮ হিজরী">
                                        <label>১৪৩৮ হিজরী</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs3" value="১৪৩৯ হিজরী">
                                        <label>১৪৩৯ হিজরী</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs3" value="১৪৪০ হিজরী">
                                        <label>১৪৪০ হিজরী</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs3" value="১৪৪১ হিজরী">
                                        <label>১৪৪১ হিজরী</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step3btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>

                    <!-- step 4 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি প্রথম জানাজা পড়ান-
                        </h2>

                        <!-- form -->
                        <fieldset id="step4">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs4" value="১৬ মুহররম শরীফ">
                                        <label>১৬ মুহররম শরীফ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs4" value="২২ মুহররম শরীফ">
                                        <label>২২ মুহররম শরীফ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs4" value="২৫ মুহররম শরীফ">
                                        <label>২৫ মুহররম শরীফ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs4" value="২৭ মুহররম শরীফ">
                                        <label>২৭ মুহররম শরীফ</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step4btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>
                    <!-- step 5 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি এখন পর্যন্ত জানাজা পড়িয়েছেন -
                        </h2>

                        <!-- form -->
                        <fieldset id="step5">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs5" value="২টি">
                                        <label>২টি</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs5" value="৩টি">
                                        <label>৩টি</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs5" value="৪টি">
                                        <label>৪টি</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs5" value="৫টি">
                                        <label>৫টি</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step5btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>
                    <!-- step 6 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি বছরে কতদিন আমভাবে সাক্ষাৎ দেন-
                        </h2>

                        <!-- form -->
                        <fieldset id="step6">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs6" value="১দিন">
                                        <label>১দিন</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs6" value="২দিন">
                                        <label>২দিন</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs6" value="৩দিন">
                                        <label>৩দিন</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs6" value="৪দিন">
                                        <label>৪দিন</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step6btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>
                    <!-- step 7 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            তাক্বউইমুশ শামসীতে তারিখ পরিবর্তন হয়-
                        </h2>

                        <!-- form -->
                        <fieldset id="step7">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs7" value="মাগরিবের সময়">
                                        <label>মাগরিবের সময়</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs7" value="রাত ১২টায়">
                                        <label>রাত ১২টায়</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs7" value="সুবহে সাদিকের সময়">
                                        <label>সুবহে সাদিকের সময়</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs7" value="সূর্যোদয়ের সময়">
                                        <label>সূর্যোদয়ের সময়</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step7btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>
                    <!-- step 8 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            তাক্বউইমুশ শামসীতে লিপ ইয়ার হয় কোন মাসে-
                        </h2>

                        <!-- form -->
                        <fieldset id="step8">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs8" value="ছানী">
                                        <label>ছানী</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs8" value="সাদিস">
                                        <label>সাদিস</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs8" value="তাসি">
                                        <label>তাসি</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs8" value="ছানী আশার">
                                        <label>ছানী আশার</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="button" id="step8btn" class="next">পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>

                    <!-- step 9 -->
                    <section class="steps">

                        <!-- question -->
                        <h2 class="quiz-question">
                            খ্বলীফাতুল উমাম আলাইহিস সালাম সপ্তাহে আগামীকালের কর্মসূচী-
                        </h2>

                        <!-- form -->
                        <fieldset id="step9">
                            <div class="row">
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left">
                                        <input class="op1" type="radio" name="qs9" value="মুবারক দীদার">
                                        <label>মুবারক দীদার</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-100">
                                        <input class="op2" type="radio" name="qs9" value="মাশুকি কার্ড প্রেরণ">
                                        <label>মাশুকি কার্ড প্রেরণ</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-200">
                                        <input class="op3" type="radio" name="qs9" value="সামা' শরীফ মাহফিল">
                                        <label>সামা' শরীফ মাহফিল</label>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-50 mob-100">
                                    <div class="radio-btn bounce-left delay-300">
                                        <input class="op4" type="radio" name="qs9" value="মীলাদ শরীফ পাঠ">
                                        <label>মীলাদ শরীফ পাঠ</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- next previous button -->
                        <div class="next-prev">
                            <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন</button>
                            <button type="submit" id="sub" class="next">জমা করুন<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </section>

                </div>

            </div>
        </form>
        <img class="question" src="{{asset('quiz')}}/images/labbaik.png" width="200" alt="">


        <!-- result -->
        <div class="loadingresult">
            <img src="{{asset('quiz')}}/images/loading.gif" alt="loading">
        </div>


        <!-- result -->
        <div class="loadingresult">
            <img src="{{asset('quiz')}}/images/loading.gif" alt="loading">
        </div>

        {{-- <div class="thankyou-page thankyou_show">
            <header class="thankyouheader">
                <h2>
                    Quiz has been taken
                </h2>
            </header>
            <main class="thankyou-page-inner">
                <img src="{{asset('quiz')}}/images/thankyou-check.png" alt="">
                <span>Your answer has been submitted</span>
                <h1>Thankyou for taking Quiz</h1>
                <div class="subscribe">
                    <input type="text" placeholder="Your Email">
                    <button type="button">subscribe now</button>
                </div>
            </main>
        </div> --}}


        <p id="date">{{$dateTime->end_date}} {{$dateTime->end_time}} </p>

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
