<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- wow -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <!-- hover css -->
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('images/WhatsApp_Image_2023-09-16_at_11.00 4.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <title>Tuline</title>
</head>
<body style="@if(app()->getLocale()=='en') font-family:Comfortaa!important @endif">
    @if(Session::has('success'))
    <div class="alert alert-success session-msg">
        <p class="m-0">{{ Session::get('success') }}</p>
    </div>
  @endif
    @include("inc.navbar")
    @yield("content")


    <footer>
        <div class="container">
            <div class="footer d-flex flex-wrap justify-content-between gap-4">
                <div class="footer-logo pt-5">
                    <img src="{{asset('images/WhatsApp_Image_2023-09-16_at_11.00 2.png')}}" width="170" height="130" alt="">
                </div>
                <div class="text-white pt-5 d-1">
                    <p class="fs-5">{{__("footer.contactus")}}</p>
                    <p>+90 501 244 48 88</p>
                    <p>info@tuline.tech</p>
                </div>
                <div class="text-white pt-5 d-2">
                    <p class="fs-5">{{__("footer.area")}}</p>
                    <p class="lh-lg">KARAGÜMRÜK MAH. SOFALI ÇEŞME CADDESI, ARPA EMINI KÒPRUSU SOKAK, 4A, Istanbul,
                        Turkey</p>
                </div>
                <div class="d-flex flex-column justify-content-between gap-4 align-items-center d-3">
                    <a href="#" class="wats hvr-grow"><i class="fa-brands fa-whatsapp me-2 fs-4"></i>{{__("footer.contactus")}}</a>
                    <div class="d-flex gap-2 icons">
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-behance fs-4"></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-facebook-f fs-4"></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-instagram fs-4"></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-whatsapp fs-4"></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-twitter fs-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- jquery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- font awesome -->
    <script src="{{asset('js/all.min.js')}}"></script>
    <!-- wow -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- swiper js -->
    <!-- bootstrap -->
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset("js/owl.carousel.min.js")}}"></script>

    <script src="{{asset('js/style.js')}}"></script>
    <script>
    $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true, // الدوران المستمر
        margin: 10, // هامش بين العناصر
        
        responsiveClass: true,
        responsive: {
            0: {
                items: 1, // عدد العناصر عند عرض الشاشات الصغيرة
            },
            600: {
                items: 3, // عدد العناصر عند عرض الشاشات المتوسطة
            },
            1000: {
                nav: true,

                items: 4, // عدد العناصر عند عرض الشاشات الكبيرة
            }
        }
    });
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>