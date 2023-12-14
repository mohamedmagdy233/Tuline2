<header>
    <div class="container">
        <div class="main-header d-flex align-items-center justify-content-center gap-5 position-relative ">
            <img src="assets/images/Vector.png" class="wow fadeIn" data-wow-delay=".1s" alt="">
            <div class="mt-5">
                <h1 class="text-white d-inline-block mt-5 pt-5 wow fadeIn " style="font-size: 45px!important">{{__("index.maintitle")}}

                </h1>
                <p class="text-beige fs-2 mb-5 wow bounceIn">{{__("index.wetuline")}}</p>
                <div class="header-btns d-flex justify-content-center gap-5">
             
                    <a href="{{ LaravelLocalization::localizeUrl('/services') }}" class="border-btn fs-7 rounded-2 wow fadeIn" data-wow-delay=".2s">{{__("index.ourservice")}}</a>
                </div>
            </div>
        </div>
        <div class=" header-icons d-flex justify-content-center  mt-2">
            <span class=" text-center wow fadeIn" data-wow-delay=".2s">
                    <i class="fa-solid fa-laptop-code mb-2 text-green"></i>
                    <p class="text-blue">{{__("index.webdev")}}</p>
                </span>
            <span class="mt-5 text-center wow fadeIn" data-wow-delay=".2s">
                    <i class="fa-solid fa-mobile-screen-button mb-2 text-green"></i>
                    <p class="text-blue">{{__("index.mobileapp")}}</p>
                </span>
            <span class="mt-5 text-center wow fadeIn" data-wow-delay=".2s">
                    <i class="fa-solid fa-code mb-2 text-green"></i>
                    <p class="text-blue">{{__("index.programing")}}</p>
                </span>
            <span class="mt-5 text-center wow fadeIn" data-wow-delay=".2s">
                    <i class="fa-solid fa-desktop mb-2 text-green"></i>
                    <p class="text-blue">{{__("index.webdesign")}}</p>
                </span>
            <span class="mt-5 text-center wow fadeIn" data-wow-delay=".2s">
                    <i class="fa-regular fa-pen-to-square mb-2 text-green"></i>
                    <p class="text-blue">{{__("index.maps")}}</p>
                </span>
        </div>
    </div>
</header>