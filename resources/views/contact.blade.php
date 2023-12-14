

@extends("master")
@section("content")

    <section id="contact" class="wow fadeIn">
        <div class="container">
            <div class="row shadow rounded-4 justify-content-center align-items-center w-75 mx-auto">
                <div class="col-12 col-lg-6">
                    <h1 class="bold fs-1 mb-3 wow fadeInDown" data-wow-delay=".2s">{{__("contact.staycontact")}} <span class="text-beige">{{__("contact.touch")}}</span></h1>
                    <h5 class="bold fs-5 text-blue mb-5 wow fadeInDown" data-wow-delay=".2s">{{__("contact.staycontact_desc")}}</h5>
                    <form action="{{route("savecontact")}}" method="post">
                        @csrf
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                       @enderror
                        <input type="text" name="username"
                         placeholder="{{__("contact.username")}}*" class="form-control shadow-none rounded-0 mb-3 py-2 wow fadeInRight" data-wow-delay=".2s">
                       
                        @error('mobile')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                        <input type="email" name="email" placeholder="*{{__("contact.email")}}" class="form-control shadow-none rounded-0 mb-3 py-2 wow fadeInRight" data-wow-delay=".3s">
                        
                      @error('mobile')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                        <input type="text" name="mobile" placeholder="{{__("contact.mobile")}}*"
                            class="form-control shadow-none rounded-0 mb-3 py-2 wow fadeInRight" data-wow-delay=".4s">
                         
                           @error('area_id')
                           <div class="text-danger">{{ $message }}</div>
                          @enderror
                        <select class="form-select shadow-none rounded-0 py-2 mb-3 wow fadeInRight" name="area_id" data-wow-delay=".5s">
                            <option selected disabled>{{__("contact.found")}}*</option>
                            @foreach ($areas as $area )
                                <option value="{{$area->id}}">{{$area->ar_area}}</option>
                            @endforeach
                        </select>
                     
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                       @enderror
                        <textarea name="description" class="form-control"
                        placeholder="{{__("contact.message")}}*"
                        id="" cols="15" rows="5" style="border:1px solid #999"></textarea>
                       

                        <button class="btn d-block w-100 rounded-0 mb-5 mt-2 wow fadeInRight" data-wow-delay=".6s">SEND</button>
                    </form>



                    <div class="d-flex justify-content-between flex-wrap gap-3 cont">
                        <div class="d-flex gap-3 align-items-center wow fadeInUp" data-wow-delay=".2s">
                            <div class="text-end">
                                <p class="mb-0">EMAIL</p>
                                <p class="m-0 text-green">info@tuline.tech</p>
                            </div>
                            <img src="{{asset("images/email.png")}}" alt="">
                        </div>
                        <div class="d-flex gap-3 align-items-center wow fadeInUp" data-wow-delay=".3s">
                            <div class="text-end">
                                <p class="mb-0">FAX</p>
                                <p class="m-0 text-green">03 5432 1234</p>
                            </div>
                            <img src="{{asset("images/fax.png")}}" alt="">
                        </div>
                        <div class="d-flex gap-3 align-items-center wow fadeInUp" data-wow-delay=".4s">
                            <div class="text-end">
                                <p class="mb-0">PHONE</p>
                                <p clas s="m-0 text-green">+90 501 244 48 88</p>
                            </div>
                            <img src="{{asset("images/tele.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 map wow fadeInLeft" data-wow-delay=".2s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108848.83361269848!2d34.4522752!3d31.5097088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1696078043925!5m2!1sar!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    @endsection

