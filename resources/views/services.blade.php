@extends("master")
 @section("content")
<section id="ser-header" class="overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center position-relative m-0">
            <div class="col-12 col-md-6">
                <h2 class="bold fs-1 text-white mb-2 wow fadeInRight" data-wow-delay-.2s>{{__("services.best")}}</h2>
                <h2 class="bold fs-1 light-blue mb-4 wow fadeInRight" data-wow-delay-.2s>{{__("services.programing")}}</h2>
                <p class="text-white fs-5 wow fadeInRight" data-wow-delay=".3s">
                    {{__("services.description")}}
                </p>
            </div>
            <div class="col-12 col-md-6 text-end wow fadeInLeft" data-wow-delay=".2s">
                <img src="{{asset("images/header.jpg")}}" width="350px" alt="">
                <img src="{{asset("images/ser-pos.png")}}" width="350px" class="position-absolute ser-pos" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end header -->
<!-- start light blue sec -->
<section id="light-blue" class="m-0">
    <div class="container">
        <div class="all d-flex justify-content-between gap-3 py-4 flex-wrap">

            <div class="box d-flex gap-2 align-items-center wow fadeInUp" data-wow-delay=".2s">
                <img src="{{asset("images/b1.png")}}" alt="">
                <div class="text">
                    <h4 class="bold mb-1">100%</h4>
                    <span>{{__("services.best1")}}</span>
                </div>
            </div>

            <div class="box d-flex gap-2 align-items-center wow fadeInUp" data-wow-delay=".3s">
                <img src="{{asset("images/b2.png")}}" alt="">
                <div class="text">
                    <h4 class="bold mb-1">100%</h4>
                    <span>{{__("services.best2")}} </span>
                </div>
            </div>
            <div class="box d-flex gap-2 align-items-center wow fadeInUp" data-wow-delay=".4s">
                <img src="{{asset("images/b3.png")}}" alt="">
                <div class="text">
                    <h4 class="bold mb-1">100%</h4>
                    <span>{{__("services.best3")}} </span>
                </div>
            </div>
            <div class="box d-flex gap-2 align-items-center wow fadeInUp" data-wow-delay=".5s">
                <img src="{{asset("images/b4.png")}}" alt="">
                <div class="text">
                    <h4 class="bold mb-1">100%</h4>
                    <span>{{__("services.best4")}}</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- end assignment sec -->
<!-- start dark blue -->
<section id="dark-blue" class="pt-5 pb-3 px-4">
    <div class="container">
        <div class="d-flex align-items-center flex-wrap">
            <div class="text">
                <h3 class="text-white bold mb-3 lh-lg wow fadeInDown" data-wow-delay=".2s">{{__("services.whytuline")}}
                </h3>
                <p class="text-white mb-4 wow fadeInDown" data-wow-delay=".2s">
                    {{__("services.whytuline_desc")}}
                </p>

            </div>
            <div class="img">
                <img src="{{asset("images/hire1 1.png")}}" width="100%" class="object-fit-cover wow fadeInUp" data-wow-delay=".5s" alt="">
            </div>
        </div>


        <div class="all-2 d-flex justify-content-between align-items-center flex-wrap pt-5 gap-3">


            @foreach ($downOptions as $option )
            @if(app()->getLocale()=="en")

                <div class="boxes p-3 rounded-3 wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{asset("images/write 1.png")}}" width="60px" class="mb-2" alt="">
                    <h5 class="bold mb-3">{{$option->en_title}}
                    </h5>
                    <p class="text-blue">{{$option->en_description}}
                    </p>
                    <button class="btn btn-warning btn-sm d-block"><i class="fa fa-pencil"></i></button>

                </div>
                @else
                <div class="boxes p-3 rounded-3 wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{asset("images/write 1.png")}}" width="60px" class="mb-2" alt="">
                    <h5 class="bold mb-3">{{$option->ar_title}}
                    </h5>
                    <p class="text-blue">{{$option->ar_description}}
                    </p>
                    <button class="btn btn-warning btn-sm d-block"><i class="fa fa-pencil"></i></button>

                </div>
                @endif


                <div class="modal fade" id="exampleModal{{$option->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$option->ar_title}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach



        </div>
    </div>
</section>
<!-- end dark blue -->

<!-- start last sec -->
<section id="last-sec">
    <div class="container">
        <div class="row gap-4 align-items-start m-0">
            <div class="col-12 col-lg-5 img wow fadeInRight" data-wow-delay=".2s">
                <img src="{{asset("images/people.png")}}" height="570px" class="object-fit-cover" alt="">
            </div>
            <div class="col-12 col-lg-6 text mt-5">
                <h2 class="bold fs-1 mb-3 wow fadeInDown" data-wow-delay=".2s">
                   {{__("services.techServices")}}
                </h2>
                <p class="mb-5 wow fadeInDown" data-wow-delay=".2s">
                    {{__("services.techServices_desc")}}
                </p>
                <div class="d-flex justify-content-between flex-wrap">
                    <ul class="p-0 d-flex flex-column gap-3 " style=" @if(app()->getLocale()=="en") font-size:13px @else font-size:18px  @endif">
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".2s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj1")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".3s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj2")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".4s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj3")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".5s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj4")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".6s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj5")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".7s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj6")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".8s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj7")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".9s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj8")}}</span>
                        </li>
                    </ul>
                    <ul class="p-0 d-flex flex-column gap-3 " style=" @if(app()->getLocale()=="en") font-size:13px @else @endif">
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".2s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj9")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".3s">
                            <i class="fa-regular fa-circle-check"></i>
                            <span> {{__("services.tech_obj10")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".4s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj11")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".5s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj12")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".6s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj13")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".7s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj14")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".8s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj15")}}</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 wow fadeInUp" data-wow-delay=".9s">
                            <i class="fa-regular fa-circle-check fs-5"></i>
                            <span> {{__("services.tech_obj16")}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
