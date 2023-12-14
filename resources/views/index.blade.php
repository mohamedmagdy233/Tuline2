@extends("master")
@section("content")

@include("inc.header")



<!-- end 2nd sec -->
<!-- start team sec -->
<section id="team">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center team-swiper">
            <div class="title w-50 wow fadeInRight" data-wow-delay=".2s">
                <h2 class="bold text-blue fs-1 mb-2">{{__("home.team")}}</h2>
                <h5 class="bold text-green fs-2">{{__("home.prob")}}</h5>
                <p class text-dark>
                    {{__("home.prob_desc")}}
                </p>
            </div>
            <div class="swiper index-swiper w-50 wow fadeInLeft" data-wow-delay=".2s">
                <div class="swiper-wrapper" style="border-radius: 15px;">
                    <div class="swiper-slide">
                        <img src="{{asset("images/image-one.jpg")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset("images/image 3.png")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset("images/image 3.png")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset("images/image 3.png")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset("images/image 3.png")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset("images/image 3.png")}}" class="object-fit-cover" width="100%" height="" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5" dir="ltr">
    <div class="title text-center my-4">
        <h2>{{trans('index.team')}}</h2>
    </div>
    <div class="owl-carousel">
        <div>
            <div class="card" style="width: 100%;">
                <img src="{{asset("images/per1.jpg")}}" class="card-img-top" alt="..." style="height:350px;object-fit:cover">
                <div class="card-body">
                  <h5 class="card-title">
                      {{trans('index.Saud')}}

                  </h5>
                  <p class="card-text badge bg-warning text-dark"> <i class="fa fa-star"></i> {{trans('index.manager')}}</p>
                </div>
              </div>
        </div>

        <div>
            <div class="card" style="width: 100%;">
                <img src="{{asset("images/per3.jpg")}}" class="card-img-top" alt="..." style="height:350px;object-fit:cover">
                <div class="card-body">
                    <h5 class="card-title">
                        {{trans('index.mohammed')}}
                        </h5>
                    <p class="card-text badge bg-warning text-dark"> <i class="fa fa-star"></i>
                        {{trans('index.programmer')}}
                        </p>

                </div>
              </div>
        </div>

        <div>
            <div class="card" style="width: 100%;">
                <img src="{{asset("images/per4.jpg")}}" class="card-img-top" alt="..." style="height:350px;object-fit:cover">
                <div class="card-body">
                  <h5 class="card-title">
                      {{trans('index.Aziz')}}
                      </h5>
                  <p class="card-text badge bg-warning text-dark"> <i class="fa fa-star"></i>
                      {{trans('index.officer')}}
                      </p>

                </div>
              </div>
        </div>

        <div>
            <div class="card" style="width: 100%;">
                <img src="{{asset("images/per2.jpg")}}" class="card-img-top" alt="..." style="height:350px;object-fit:cover">
                <div class="card-body">
                  <h5 class="card-title">
                      {{trans('index.magdy')}}
                          </h5>
                  <p class="card-text badge bg-warning text-dark"> <i class="fa fa-star"></i>
                      {{trans('index.services')}}
                  </p>



                </div>
              </div>
        </div>





    </div>
      </div>
<!-- end team sec -->
<!-- start servises section -->
<section id="servises" class="my-0 mx-3 mx-sm-0">
    <div class="container">
        <div class="title text-center mb-5 pb-3 wow fadeInDown" data-wow-delay=".2s">
            <h2 class="text-green bold fs-1">{{__("home.ouroffers")}}</h2>
            <p class="fs-5">{{__("home.ouroffers_desc")}}</p>
        </div>
        @foreach($services as $service) )


        <div class="container">
            @foreach($services as $service)
                @if($loop->index % 2 == 0)
                    <div class="row gap-5">
                        @endif

                        <div class="wow fadeInUp box col-6 col-md-5 col-lg-3 text-center position-relative rounded-4 px-3 pt-4 pb-2 pb-md-2 pt-lg-5 mb-3">
                            <img src="{{ asset('images/s3.png') }}" class="position-absolute" width="90px" height="90px" alt="">
                            <h3 class="bold text-beige">{{ $service->title }}</h3>
                            <p class="text-white mb-0">
                                {{ $service->description }}
                            </p>
                        </div>

                        @if($loop->index % 2 == 1 || $loop->last)
                    </div>
                @endif
            @endforeach
        </div>

        @endforeach








        </div>
    </div>
</section>


<section id="choose" class="mt-0 py-5">
    <div class="container">
        <div class="row justify-content-center gap-5">
            <div class="col-12 col-lg-6 text">
                <h2 class="fs-1 bold text-blue mb-5 wow fadeInDown">{{__("home.why")}}</h2>
                <ul class="p-0 d-flex flex-column gap-4">
                    <li class="d-flex align-items-center gap-3 wow fadeInUp" data-wow-delay=".2s">
                        <i class="fa-regular fa-square-check text-green fs-2"></i>
                        <div>
                            <p class="mb-1 bold fs-5">{{__("home.why_obj1_title")}}</p>
                            <span>
                                {{__("home.why_obj1_desc")}}
                                </span>
                        </div>
                    </li>

                    <li class="d-flex align-items-center gap-3 wow fadeInUp" data-wow-delay=".3s">
                        <i class="fa-regular fa-square-check text-green fs-2"></i>
                        <div>
                            <p class="mb-1 bold fs-5">{{__("home.why_obj2_title")}}</p>
                            <span>

                                {{__("home.why_obj2_desc")}}
                                </span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3 wow fadeInUp" data-wow-delay=".4s">
                        <i class="fa-regular fa-square-check text-green fs-2"></i>
                        <div>
                            <p class="mb-1 bold fs-5">{{__("home.why_obj3_title")}}</p>
                            <span>
                                {{__("home.why_obj3_desc")}}
                                </span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-3 wow fadeInUp" data-wow-delay=".5s">
                        <i class="fa-regular fa-square-check text-green fs-2"></i>
                        <div>
                            <p class="mb-1 bold fs-5">{{__("home.why_obj4_title")}}</p>
                            <span>
                                {{__("home.why_obj4_desc")}}
                                </span>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-12 col-lg-5 imgs d-flex flex-column gap-4 justify-content-center">
                <img src="{{asset("images/choose.jpg")}}" class="wow fadeInLeft" data-wow-delay=".2s" width="350px" alt="">
                <img src="{{asset("images/choose.jpg")}}" class="wow fadeInLeft" data-wow-delay=".3s" width="350px" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end choose sec -->
<!-- start new sec -->
<section id="new">
    <div class="container">
        <h2 class="fs-1 bold text-blue text-center mb-5 wow fadeInDown">{{__("home.recently")}}</h2>
        <div class="row justify-content-between gap-5">
            <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay=".2s">
                <h2 class="fs-1 text-blue bold text-center mb-4"> {{__("home.recently_desc")}}</h2>
                <a href="#" class="beige-btn mx-auto rounded-2 d-block">{{__("home.allproj")}} </a>
            </div>
            <div class="col-12 col-lg-6 img-slider position-relative wow fadeInLeft" data-wow-delay=".2s">
                <div class="swiper desk-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-100">
                            <img src="{{asset("images/desk-img.png")}}" height="100%" width="100%" alt="">
                        </div>
                        <div class="swiper-slide w-100">
                            <img src="{{asset("images/desk-img.png")}}" height="100%" width="100%" alt="">
                        </div>
                        <div class="swiper-slide w-100">
                            <img src="{{asset("images/desk-img.png")}}" height="100%" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"><i class="fa-solid fa-angles-right"></i></div>
                <div class="position-absolute play-icon d-flex justify-content-center align-items-center"><i class="fa-solid fa-play"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-angles-left"></i></div>
            </div>
        </div>
    </div>
</section>
<!-- end new sec -->
<!-- start Technique sec -->
<section id="technique">
    <div class="container">
        <div class="row justify-content-center gap-4 align-items-center">
            <div class="col-12 col-lg-5 text wow fadeInRight" data-wow-delay=".2s">
                <h1 class="bold fs-1 text-blue mb-3 mt-0 mt-lg-5">{{__("home.tech")}}</h1>
                <p class="bold fs-4 text-secondary">{{__("home.tech_desc")}}</p>
            </div>
            <div class="col-12 col-lg-6 imgs text-end wow fadeInLeft" data-wow-delay=".2s">
                <div class="position-relative cir-pos">
                    <img src="{{asset("images/langs.png")}}" class="bg  shadow" style="width:100%" alt="">
                    <span class="circles">
                            <img src="assets/images/fegma.png" alt="">
                            <img src="assets/images/node.png" alt="">
                            <img src="assets/images/blue.png" alt="">
                            <img src="assets/images/atom.png" alt="">
                            <img src="assets/images/js.png" alt="">
                            <img src="assets/images/jq.png" alt="">
                        </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Technique sec -->
<!-- start cards sec -->

@endsection
