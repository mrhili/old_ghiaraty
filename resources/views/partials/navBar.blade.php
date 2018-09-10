
<div id="flipkart-navbar">
    <div class="container-fluid">

        <div class="row row2">
            <div class="col-sm-6 col-md-4">
                <h2 style="margin:0px;"><span class="smallnav menu push-left" onclick="openNav()">☰</span></h2>
                <a href="{{ url('/') }}" class="logo-brand" title="{{ getSetting( 'site-name' ) }}"></a>
            </div>
            <div class="flipkart-navbar-search smallsearch col-xs-11 col-sm-6 col-md-8">


                    {!! Form::open(['route' => 'search', 'role' => 'form', 'class' => 'row' ]) !!}

                        {{ csrf_field() }}


                        <div class="col-xs-11 removeBootstrapMarginAndPadding">

                                {!! Form::text('searcheBar', old('searcheBar'), ['class' => 'flipkart-navbar-input col-xs-12 removeBootstrapMarginAndPadding', 'placeholder' => 'بحث' ]) !!}




                        </div>



                        <button class="flipkart-navbar-button col-xs-1 removeBootstrapMarginAndPadding" name='ok'>
                            <i class="fa fa-search"></i>
                        </button>
                    {!! Form::close() !!}

            </div>

        </div>
        <div class="row row1">

            <ul class="largenav text-center">

                <li class="upper-links {{ currentClass() }}"><a href="{{ route('index') }}">الرئيسية</a></li>

                <li class="upper-links {{ currentClass() }}"><a href="{{ route('home') }}">كل القطع</a></li>

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="نوع الأشهار">
                            نوع الأشهار <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" role="menu">

                            <ul class="{{ currentClass('search') }}" role="menu">
                                @foreach( thingKind( -1 ) as $tkKey => $tK )
                                <li>
                                    <a href="{{ route('search') }}" title="{{ thingKind( $tkKey ) }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('formModel{{ $tkKey }}').submit();">
                                        {{ thingKind( $tkKey ) }}
                                    </a>

                                    <form id="formModel{{ $tkKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}



                                        {!! Form::hidden('thingKind', $tkKey ) !!}


                                    </form>

                                </li>
                                @endforeach
                            </ul>

                        </div>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle buttonClick" data-button="things" data-toggle="dropdown" role="button" aria-expanded="false" title="أنواع القطع">
                        أنواع القطع <span class="caret"></span>
                    </a>

                    {{--

                    <div class="dropdown-menu" role="menu">
                        {!!

                            \App\Thing::customUrl('pieces/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

                        !!}
                    </div>

                    --}}

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle buttonClick" data-button="cars" data-toggle="dropdown" role="button" aria-expanded="false" title="أنواع المركبة">
                        أنواع المركبة <span class="caret"></span>
                    </a>
                    {{--
                    <div id="allCars" class="dropdown-menu image-gallery-list" role="menu">

                            {!!

                                \App\Car::customUrl('cars/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

                            !!}
                    </div>
                    --}}

                </li>

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="موديل العربة">
                            موديل العربة <span class="caret"></span>
                        </a>



                        <div class="dropdown-menu" role="menu">

                            <ul class="{{ currentClass('search') }}" role="menu">
                                @foreach( carModel( -1 ) as $cmKey => $cM )
                                <li>
                                    <a href="{{ route('search') }}" title="{{ carModel( $cmKey ) }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('formModel{{ $cmKey }}').submit();">
                                        {{ carModel( $cmKey ) }}
                                    </a>

                                    <form id="formModel{{ $cmKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}



                                        {!! Form::hidden('carModel', $cmKey ) !!}


                                    </form>

                                </li>
                                @endforeach
                            </ul>

                        </div>
                </li>

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="وقود العربة">
                            وقود العربة <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu drpDwnMenu2Right" role="menu">

                            <ul class="{{ currentClass('search') }}" role="menu">
                                @foreach( carCarb( -1 ) as $ccKey => $cC )
                                  <li>
                                      <a href="{{ route('search') }}" title="{{ carCarb( $ccKey ) }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('formCarb{{ $ccKey }}').submit();">
                                          {{ carCarb( $ccKey ) }}
                                      </a>

                                      <form id="formCarb{{ $ccKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}



                                          {!! Form::hidden('carCarb', $ccKey ) !!}


                                      </form>

                                  </li>
                                @endforeach
                            </ul>

                        </div>
                </li>



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle buttonClick" data-button="areas" data-toggle="dropdown" role="button" aria-expanded="false" title="المناطق">
                        المناطق <span class="caret"></span>
                    </a>

                    {{--

                    <div class="dropdown-menu" role="menu">
                        {!!
                            \App\Area::customUrl('places/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

                        !!}
                    </div>

                    --}}


                </li>



                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="حالة القطع">
                            حالة القطع <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu drpDwnMenu2Right {{ currentClass('search') }}" role="menu">
                            @foreach( thingRent( -1 ) as $trKey => $tR )
                            <li>
                                <a href="{{ route('search') }}" title="{{ thingRent( $trKey ) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('formThing{{ $trKey }}').submit();">
                                    {{ thingRent( $trKey ) }}
                                </a>

                                <form id="formThing{{ $trKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}



                                    {!! Form::hidden('rent', $trKey ) !!}


                                </form>

                            </li>
                            @endforeach
                        </ul>
                </li>




                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle buttonClick" data-button="tags"  data-toggle="dropdown" role="button" aria-expanded="false" title="#هاشتاج">
                            #هاشتاج <span class="caret"></span>
                        </a>


                    </li>





                @if( Auth::check() )

                    @if (ifAdmin( Auth::id() ) == 1 )

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                لوحة التحكم <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu drpDwnMenu2Right" role="menu">
                                <li><a href="{{ route('site-settings.create') }}"><i class="fa fa-circle-o"></i> تعديل الإعدادات</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('buildings.create') }}"><i class="fa fa-circle-o"></i> إضافة عقار</a></li>
                                <li><a href="{{ route('buildings.index') }}"><i class="fa fa-circle-o"></i> كافة العقارات</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('admin-users-panel.create') }}"><i class="fa fa-circle-o"></i> إضافة عضو</a></li>
                                <li><a href="{{ route('admin-users-panel.index') }}"><i class="fa fa-circle-o"></i> كافة الأعضاء</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.response', -1) }}"><i class="fa fa-circle-o"></i> كتابة رسالة</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.index') }}"><i class="fa fa-circle-o"></i> كافة الرسائل م.إ</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.box') }}"><i class="fa fa-circle-o"></i> كافة الرسائل</a></li>
                                <li><a href="{{ route('contact.sent') }}"><i class="fa fa-circle-o"></i> الرسائل المرسلة</a></li>
                                <li><a href="{{ route('contact.draft') }}"><i class="fa fa-circle-o"></i> الرسائل المحتفضة</a></li>
                                <li><a href="{{ route('contact.trash') }}"><i class="fa fa-circle-o"></i> الرسائل المحذوفة</a></li>


                            </ul>
                        </li>



                    @endif

                @endif

                    <li class="upper-links"><a href="{{ route('home.about') }}" title="عن الموقع">عن الموقع</a></li>
                    <li class="upper-links"><a href="{{ route('contactUs') }}" title="راسلنا">راسلنا</a></li>



                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="upper-links"><a href="{{ route('login') }}" title="تسجيل الدخول">تسجيل الدخول</a></li>
                    <li class="upper-links"><a href="{{ route('register') }}" title="تسجيل العضوية">تسجيل العضوية</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="{{ Auth::user()->name }}">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu drpDwnMenu2Right" role="menu">




<li class="childesAsBlackColor"> التقديم أو البيع
              <ul>


                        <li class=""> المفعلة
                            <ul class="">
                              <li class="{{ activeClass('user.my-buildings-offer' ) }}"><a href="{{ route( 'user.my-buildings-offer' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>
                              <li class="{{ activeClass('user.my-complete-buildings-offer' ) }}"><a href="{{ route( 'user.my-complete-buildings-offer' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a></li>
                            </ul>

                        </li>

                        <li class=""> التي في الإنتضار
                            <ul>
                              <li class="{{ activeClass('user.my-buildings-in-wait-offer' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-offer' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>
                              <li class="{{ activeClass('user.my-complete-buildings-in-wait-offer' ) }}"><a href="{{ route( 'user.my-complete-buildings-in-wait-offer' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a></li>
                            </ul>

                        </li>

                        <li class=""> المفضلة
                            <ul>
                              <li class="{{ activeClass('user.my-favorites-offer' ) }}"><a href="{{ route( 'user.my-favorites-offer' ) }}" title=" قطعي المفعلة"> قطعي المفضلة</a></li>
                              <li class="{{ activeClass('user.my-complete-favorites-offer' ) }}"><a href="{{ route( 'user.my-complete-favorites-offer' ) }}" title=" قطعي المفعلة"> مركباتي المفضلة</a></li>
                            </ul>

                        </li>


              </ul>
            </li>

            <li> الطلب أو الشراء
              <ul>


                  <li class=""> المفعلة
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-demande' ) }}"><a href="{{ route( 'user.my-buildings-demande' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>
                        <li class="{{ activeClass('user.my-complete-buildings-demande' ) }}"><a href="{{ route( 'user.my-complete-buildings-demande' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a></li>
                      </ul>

                  </li>

                  <li class=""> التي في الإنتضار
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-in-wait-demande' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-demande' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>
                        <li class="{{ activeClass('user.my-complete-buildings-in-wait-demande' ) }}"><a href="{{ route( 'user.my-complete-buildings-in-wait-demande' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a></li>
                      </ul>

                  </li>

                  <li class=""> المفضلة
                      <ul>
                        <li class="{{ activeClass('user.my-favorites-demande' ) }}"><a href="{{ route( 'user.my-favorites-demande' ) }}" title="قطعي المفضلة"> قطعي المفضلة</a></li>
                        <li class="{{ activeClass('user.my-complete-favorites-demande' ) }}"><a href="{{ route( 'user.my-complete-favorites-demande' ) }}" title="مركباتي المفضلة"> مركباتي المفضلة</a></li>
                      </ul>

                  </li>



              </ul>

            </li>




















                            <li role="separator" class="divider"></li>

                            <li>
                                <a href="{{ route('logout') }}" title="خروج"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif


                {{-- notifications--}}

                @if( Auth::check() )

                <notification :userId="{{ Auth::id() }}" :unreads="{{ Auth::user()->unreadNotifications }}"></notification>

                @endif









                <li class="upper-links"><a href="{{ route('buildings.add') }}" class="colorBlack btn yellow-btn">
                إضافة قطعة ميكانيكية أو طلب قطعة مخصصة
                  </a></li>

                <div class="clear"></div>
            </ul>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="myNavGreen container row">
        <span class="sidenav-heading col-xs-10">{{ getSetting( 'site-name' ) }}</span>
        <a href="javascript:void(0)" class="closebtn col-xs-2" onclick="closeNav()" rel="nofollow">×</a>


    </div>
    <ul class="sideNavBar">


                <div class="clear"></div>




            </ul>
</div>
