@extends('layouts.app')
@section('title')
مرحبا بك
@stop


@section('content')


{{-- DISPLAY --}}
{{--
<div class="col-md-3">
    @include('partials.asideWebsite')

</div>
--}}

<div class="banner relative text-center">
    <div class="layer">
      <div class="container">

        <div class="banner-info  divisionIndex">

        <h1 title="{{ getSetting( 'site-name' ) }}">{{ getSetting( 'site-name' ) }}</h1>
        <h3>{{ getSetting( 'description' ) }}</h3>



    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn yellow-btn btn-circle"><i class="fa fa-i-cursor" aria-hidden="true"></i></a>
                <p>الإسم</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle"><i class="fa fa-usd" aria-hidden="true"></i></a>
                <p>الثمن</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle"><i class="fa fa-gear" aria-hidden="true"></i></a>
                <p>نوع القطعة</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle"><i class="fa fa-space-shuttle" aria-hidden="true"></i></a>
                <p>نوع المركبة</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <p>حالة القطعة</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default btn-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                <p>مكان التواجد</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-7" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>معلومات إضافية</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-8" type="button" class="btn btn-default btn-circle"><i class="fa fa-search" aria-hidden="true"></i></a>
                <p>إحداتيات العرض</p>
            </div>

        </div>
    </div>



                {!! Form::open(['route' => 'search', 'role' => 'form', 'class' => '']) !!}

                              {{ csrf_field() }}
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">

                                <h3> الإسم</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">الإسم</label>
                                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'إسم القطعة' ]) !!}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>


                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">

                                <h3> الثمن</h3>



                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">ثمن: إبتداءا من</label>
                                        {!! Form::number('priceFrom', old('priceFrom'), ['class' => 'form-control', 'placeholder' => 'ثمن: إبتداءا من']) !!}
                                        @if ($errors->has('priceFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priceFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">ثمن: أقل من</label>
                                        {!! Form::number('priceTo', old('priceTo'), ['class' => 'form-control', 'placeholder' => 'ثمن: أقل من']) !!}
                                        @if ($errors->has('priceTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priceTo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>

                        </div>
                    </div>

                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">

                                <h3> نوع القطعة الميكانيكية</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label"> نوع القطعة الميكانيكية</label>
                                            {!!
                                            \App\Thing::attr(['name' => 'thing_id', 'id' => 'thing_id', 'class' => 'form-control','size' => 20,'value' => old('thing_id'), 'placeholder' => 'نوع القطعة الميكانيكية'])
                                            ->selected( null )
                                            ->renderAsDropdown()
                                            !!}
                                            @if ($errors->has('thing_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('thing_id') }}</strong>
                                                </span>
                                            @endif


                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>

                    <div class="row setup-content" id="step-4">
                        <div class="col-xs-12">
                                <h3> نوع المركبة المناسبة</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">المركبة المناسبة</label>
                                            {!!
                                            \App\Car::attr(['name' => 'car_id', 'id' => 'car_id', 'class' => 'form-control select2R','size' => 20,'value' => old('car_id'), 'placeholder' => 'hglركبة المناسبة للقطعة'])
                                            ->selected( null )
                                            ->renderAsDropdown() !!}


                                            @if ($errors->has('thing_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('car_id') }}</strong>
                                                </span>
                                            @endif


                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>

                    <div class="row setup-content" id="step-5">
                        <div class="col-xs-12">
                                <h3> حالة القطعة الميكانيكية</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">المركبة المناسبة</label>
                                            {!! Form::select('rent', thingRent( -1 ) , old('rent') , ['class' => 'form-control select2R2', 'placeholder' =>  'حالة القطعة الميكانيكية' ] ) !!}

                                              @if ($errors->has('rent'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('rent') }}</strong>
                                                    </span>
                                              @endif


                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>

                    <div class="row setup-content" id="step-6">
                        <div class="col-xs-12">
                        <h3> مكان تواجد القطعة</h3>

                            <div class="col-md-10">




                                    <div class="form-group">
                                        <label class="control-label"> مكان تواجد القطعة</label>
                                            {!!
                                            \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control select2R','size' => 20,'value' => old('area_id'), 'placeholder' => 'مكان تواجد القطعة الميكانيكية'])
                                            ->selected( null )
                                            ->renderAsDropdown() !!}


                                            @if ($errors->has('area_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('area_id') }}</strong>
                                                </span>
                                            @endif


                                    </div>




                            <div class="divisionIndex col-xs-12">

                                  <br/>

                                    <h3>أو </h3>

                                  <br/>

                            </div>
                                <h3> إحداتيات الطول</h3>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">خط الطول: إبتداءا من</label>

                                        {!! Form::number('langFrom', old('langFrom'), ['class' => 'form-control', 'placeholder' => 'خط الطول: إبتداءا من']) !!}

                                        @if ($errors->has('langFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('langFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">خط الطول: أقل إحداثية</label>

                                        {!! Form::number('langTo', old('langTo'), ['class' => 'form-control', 'placeholder' => 'خط الطول: أقل إحداثية']) !!}

                                        @if ($errors->has('langTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('langTo') }}</strong>
                                            </span>
                                        @endif


                                    </div>
                                </div>


                            <div class="divisionIndex col-xs-12">

                                  <br/>

                                    <h3>أو </h3>

                                  <br/>

                            </div>


                                <h3> إحداتيات العرض</h3>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">خط العرض: إبتداءا من</label>

                                        {!! Form::number('latFrom', old('latFrom'), ['class' => 'form-control', 'placeholder' => 'خط العرض: إبتداءا من']) !!}

                                        @if ($errors->has('latFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('latFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">خط العرض: أقل إحداثية</label>

                                        {!! Form::number('latTo', old('latTo'), ['class' => 'form-control', 'placeholder' => 'خط العرض: أقل إحداثية']) !!}

                                        @if ($errors->has('latTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('latTo') }}</strong>
                                            </span>
                                        @endif


                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                            </div>
                        </div>

                    </div>


                    <div class="row setup-content" id="step-7">
                        <div class="col-xs-12">
                            <div class="col-md-10">

                                <h3> معلومات إضافية عن القطعة و العربة</h3>


                                <div class="form-group">
                                    <label class="control-label">موديل العربة</label>
                                        {!! Form::select('carModel', carModel( -1 ) , old('carModel') , ['class' => 'form-control select2R2', 'placeholder' =>  'موديل العربة' ] ) !!}

                                          @if ($errors->has('carModel'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('carModel') }}</strong>
                                                </span>
                                          @endif


                                </div>


                                <div class="divisionIndex">

                                      <br/>

                                        <h3>و </h3>

                                      <br/>

                                </div>


                                <div class="form-group">
                                    <label class="control-label">وقود العربة</label>
                                        {!! Form::select('carCarb', carCarb( -1 ) , old('carCarb') , ['class' => 'form-control select2R2', 'placeholder' =>  'وقود العربة' ] ) !!}

                                          @if ($errors->has('carCarb'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('carCarb') }}</strong>
                                                </span>
                                          @endif


                                </div>


                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                            </div>
                        </div>
                    </div>





                    <div class="row setup-content" id="step-8">
                        <div class="col-xs-12">
                                <h3> بحت</h3>
                                {!! Form::submit('بحث' , ['class' => 'btn orange-circle-button', 'name' => 'ok']) !!}


                        </div>
                    </div>
                {!! Form::close() !!}


           </div>
      </div>

      <hr class="style18" />
          <div class="divisionIndex">

            <h3>أو </h3>

          <br/>
          <a href="{{ route('buildings.add') }}" class="btn yellow-btn btn-lg" title="إضافة قطعة ميكانيكية">
          إضافة قطعة ميكانيكية
          <br />
          أو طلب قطعة مخصصة
          </a>
      </div>
  </div>

</div>

<div class="col-xs-12">

@if( count($t4) > 0 )

<h2 class="text-center">#هاشتاج</h2>

    <ul class="">

    @foreach($t4 as $tag)



   <!-- from the originale template -->

        <a href="{{ route('buildings.tag', $tag->name ) }}" title="{{ $tag->name }}">

            <li class="label label-primary displayInlineBlock margin0-5 marginBottomX">

                {{ $tag->name }}

            </li> <!-- cd-item -->
        </a>





    @endforeach

    </ul> <!-- cd-items -->

@endif

</div>

<?Php $easyLoop = compact('b4', 'demande', 'completeOffer', 'completeDemande') ;

$titleLoop = array( 'القطع المتوفرة للبيع', 'القطع المطلوبة للشراء', 'المركبات المتوفرة للبيع', 'المركبات المطلوبة للشراء'
    );

$loopCount = 0;
?>

@foreach($easyLoop as $b4 )

    <div class="col-xs-12">


    @if( count($b4) > 0 )

        <h2 class="text-center">{{ $titleLoop[ $loopCount ] }}</h2>


        <ul class="cd-items cd-container">

        @foreach($b4 as $builItem)

            @if( count( $builItem->pics->toarray() ) > 0 )

                <? $theFirstItemInArrayOfPic = 0; ?>

                @foreach(  $builItem->pics as $numberOfPic => $picture )

                    @if( $theFirstItemInArrayOfPic == 0 )


                        <li class="cd-item nonDeco">
                            <img src="{{ ifImg( $picture->name ) }}" class="effectS" alt="{{ $builItem->name }}" title="{{ $builItem->name }}">
                            <a href="#0" class="cd-trigger" data-id="{{ $builItem->id }}" data-img="{{ ifImg( $picture->name ) }}" title="{{ $builItem->name }}">نظرة سريعة</a>
                        </li> <!-- cd-item -->
                    @endif


                <? $theFirstItemInArrayOfPic++ ;?>

                @endforeach

                <? $theFirstItemInArrayOfPic = 0; ?>


            @else

            <li class="cd-item nonDeco">
                <img src="{{ ifImg( '' ) }}" class="effectS" alt="{{ $builItem->name }}" title="{{ $builItem->name }}">
                <a href="#0" class="cd-trigger" data-id="{{ $builItem->id }}" data-img="{{ ifImg( '' ) }}" title="{{ $builItem->name }}">نظرة سريعة</a>
            </li> <!-- cd-item -->

            @endif



            <li class="hide idIs{{ $builItem->id }}">

            <span class="name">{{ $builItem->name }}</span>

            <span class="rent">{{ $builItem->rent }}</span>

            <span class="largDisc">{{ $builItem->largDisc }}</span>

            <span class="price">{{ $builItem->price }}</span>

            <span class="thing_id">{{ getThingName( $builItem->thing_id ) }}</span>

            <span class="car_id">{{ getCarName( $builItem->car_id ) }}</span>

            <span class="carModel">{{ carModel( $builItem->carModel ) }}</span>

            <span class="carCarb">{{ carCarb( $builItem->carCarb ) }}</span>

            <span class="area_id">{{ getAreaName( $builItem->area_id ) }}</span>

            <span class="created_at">{{ $builItem->created_at  }}</span>

            </li>

        @endforeach

        </ul> <!-- cd-items -->
        <div class="text-center">
        @if( $b4 instanceof \Illuminate\Pagination\LengthAwarePaginator )
            {{ $b4->links() }}

        @endif
        </div>

    @endif
    </div>

    <?Php $loopCount++; ?>

@endforeach

    <div class="cd-quick-view row">
        <div class="cd-slider-wrapper col-xs-6">
            <ul class="cd-slider">
                <li class="selected nonDeco"><img src="" class="imgBOX" alt="" title=""></li>


            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">

                <li class="nonDeco"><a class="cd-next" href="#0">السابق</a></li>
                <li class="nonDeco"><a class="cd-prev" href="#0">التالي</a></li>

            </ul> <!-- cd-slider-navigation -->
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info overflow-yScroll col-xs-6">
            <h2 class="nameBOX"></h2>
            <h3 class="price priceBOX"></h3>
            <h3 class="price thingKindBox"></h3>

            <h5 class="price">نوع القطعة: <span class="partBOX"></span></h5>
            <h5 class="price">إسم المركبة المناسبة: <span class="carBOX"></span></h5>
            <h5 class="price">موديل المركبة: <span class="modelBOX"></span></h5>
            <h5 class="price">وقود المركبة: <span class="carbBOX"></span></h5>
            <h5 class="price">مكان تواجدها: <span class="areaBOX"></span></h5>
            <h5 class="price">حالة العقار: <span class="rentBOX"></span></h5>
            <h5 class="price">تاريخ النشر: <span class="created_atBOX"></span></h5>


            <ul class="cd-item-action">
                <li><a href="" class="idBOX"><button class="add-to-cart">نظرة شاملة</button></a></li>

            </ul> <!-- cd-item-action -->
        </div> <!-- cd-item-info -->
        <a href="#0" class="cd-close">إغلاق</a>
    </div> <!-- cd-quick-view -->

@stop






@section('scripting')

<script>
    $(".banner").css("background-image", "url( {{ ifImg( getSetting('slider-img') ) }} )");
</script>





@stop
