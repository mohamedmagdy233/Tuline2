@extends("master")
@section("content")
<section id="projects-header" class="m-0 py-5">
    <div class="container">
        <div class="row justify-content-between mt-5 pt-5 gap-4">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
                <h1 class="bold fs-1 text-white mb-lg-5 mb-3 wow fadeInDown" data-wow-delay=".2s">{{__("projects.lastprojects")}}
                </h1>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 px-4 mb-4 mb-md-0 wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{asset("images/pro.jpg")}}" class="object-fit-cover w-100" alt="">
                    </div>
                    <div class="col-12 col-md-6 px-4 wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{asset("images/pro.jpg")}}" class="object-fit-cover w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 wow fadeInLeft" data-wow-delay=".2s">
                <img src="{{asset("images/pro.jpg")}}" class="object-fit-cover w-100" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end projects header -->
<!-- start light sec -->
<section id="light-pro">
    <div class="">
        <ul class="nav nav-tabs pt-5 d-flex justify-content-center gap-4" id="myTab" role="tablist">



                @if(app()->getLocale() == 'en')
                <li class="" data-wow-delay=".2s" role="presentation">
                    <button class="btn btn-bg-js all-item-button px-5 py-1 " style="background: #fff; border: 0">all</button>
                </li>


                @else
                <li class="" data-wow-delay=".2s" role="presentation">
                    <button class="btn btn-bg-js all-item-button px-5 py-1 " style="background: #fff; border: 0">الكل</button>
                </li>


                @endif
            @foreach ($categories as $category)


                 @if(app()->getLocale() == 'en')
                        <li class="" data-wow-delay=".2s" role="presentation">
                            <button class="btn btn-bg-js nav-item-buttons px-5 py-1 " style="font-size:13px;background: #fff; border: 0"
                             data-info="cat{{$category->id}}">{{$category->en_name}}</button>
                        </li>

                        @else
                        <li class="" data-wow-delay=".2s" role="presentation">
                            <button class="btn btn-bg-js nav-item-buttons px-5 py-1 " style="background: #fff; border: 0"
                             data-info="cat{{$category->id}}">{{$category->ar_name}}</button>
                        </li>

                        @endif





            @endforeach

        </ul>




        <div class="  py-5" data-wow-delay=".2s" id="" style="background: #fff">
            <div class="container">
            <div class="row">

                @foreach ($categories as $category)
                @foreach ($category->posts as $post)

                <div class="col-6 col-md-3 all-cards-project cat{{$category->id}} my-3" style="cursor: pointer">

                    <div class="card bg-light shadow card-projects cursor "
                    onclick="openLink('{{$post->link}}')"
                    style="border-radius: 25px 0 25px 0; overflow: hidden; border: 0; position: relative">
                        <div class="card-projects-info">
                        @if(app()->getLocale() == 'en')
                            <h6 class="text-info">{{$category->en_name}}</h6>
                            <h4>{{$post->en_title}}</h4>
                            <small class="h6 text-light d-block">{{$post->en_description}}</small>
                            <button class="btn btn-info">more</button>

                        @else
                            <h6 class="text-info">{{$category->ar_name}}</h6>
                            <h4>{{$post->ar_title}}</h4>
                            <small class="h6 text-light d-block">{{$post->ar_description}}</small>
                            <button class="btn btn-info">المزيد</button>

                        @endif



                        </div>
                        <div class="overlays"></div>
                        <img src="/storage/uploads/{{$post->img}}" class="card-img-top" alt="..." style="width: 100%; height: 200px; object-fit: fill;">
                    </div>
                    @auth
                    @if(Auth::user()->role==1)
                    <div class="mt-4">

                    <form action="{{route("deletePost",$post->id)}}" class="d-inline-block" method="post">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('انت على وشك حذف هذا العنصر')">حذف</button>
                    </form>
                    <button class="btn btn-warning" onclick="window.location.href='{{route('editPost',$post->id)}}'">تعديل</button>

                </div>
                @endif
                @endauth
                </div>

                @endforeach
                @endforeach
        </div>

        </div>
    </div>
</div>
</section>
<!-- end light sec -->
<!-- start question sec -->
<section id="question" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
    <div class="container">
        <div class="question rounded-4 d-flex flex-column justify-content-between align-items-center p-5 position-relative bg-gradient" style="background-color: #37355D;">

            <h3 class="bold text-white fs-1 mb-2 text-center">{{__("projects.contact")}}</h3>
            <p class="text-white fs-5 mb-5 text-center">{{__("projects.contact_desc")}}</p>
            <a href="#" class="d-inline-block px-5 py-2 text-blue rounded-5 bg-white fs-5 text-center" style="width: fit-content;">{{__("projects.contactus")}}
                </a>
            <div class="box">
                <div class="position-absolute opacity-50"><i class="fa-regular fa-star text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-asterisk text-white fs-4"></i></div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-bahai text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-regular fa-star text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-asterisk text-white fs-4"></i></div>
                <div class="position-absolute opacity-50"><i class="fa-regular fa-snowflake text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-regular fa-star text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-plus text-white fs-4"></i>
                </div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-asterisk text-white fs-4"></i></div>
                <div class="position-absolute opacity-50"><i class="fa-solid fa-bahai text-white fs-4"></i>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
