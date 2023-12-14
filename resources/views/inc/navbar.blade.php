<nav class="nav">
    <div class="container d-flex justify-content-between align-items-center nav-bar ">
        <div class="d-flex align-items-center gap-3">
            <a href="index.html" class="logo">
                <img src="{{asset('images/WhatsApp_Image_2023-09-16_at_11.00 2.png')}}" width="95" height="65" alt="">
            </a>
            <ul class="nav-ul d-flex p-0">
                <li><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-beige fs-5">{{__("nav.main")}}</a></li>
                <li><a href="{{ LaravelLocalization::localizeUrl('/services') }}"
                    class=" fs-5 {{ request()->is('ar/contact') ||request()->is('en/contact')? ' text-dark' : 'text-white' }}">{{__("nav.services")}}</a></li>
                <li><a href="{{ LaravelLocalization::localizeUrl('/projects') }}"
                    class=" fs-5 {{ request()->is('ar/contact') ||request()->is('en/contact')? ' text-dark' : 'text-white' }}">{{__("nav.project")}}</a></li>
                <a href="/contact" class="gradient-btn fs-5 res-nav-btn">{{__("nav.contactus")}}</a>
            </ul>
        </div>
        <div class=" d-flex align-items-center justify-content-end gap-2">
            <span class="nav-icon"><i class="fa-solid fa-bars fs-3 text-beige d-block"></i></span>
            <a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="gradient-btn fs-5 lg-nav-btn">{{__("nav.contactus")}}</a>
            @auth
            @if(Auth::user()->role==1)
                <a href="/admin-page" class="btn btn-success "> <i class="fa fa-lock"></i> الادمن</a>
            @endif
            @endauth
            @php
    $currentLocale = LaravelLocalization::getCurrentLocale();
@endphp
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ LaravelLocalization::getCurrentLocaleName() }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if($localeCode != $currentLocale)
                            <li>
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" hreflang="{{ $localeCode }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
