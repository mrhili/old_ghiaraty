<div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        @if( Auth::check() )
        <div class="profile-userpic">
          <img src="{{ 

                        route('identicon::main', [
                            getUserEmail( Auth::id() )
                        ])

           }}" class="img-responsive" alt="صورة المستعمل">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            {{ getUser( Auth::id() ) }}
          </div>

          <div class="profile-usertitle-job">
            {{ getUserEmail( Auth::id() ) }}
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        
        <div class="profile-userbuttons">
          {{--<button type="button" class="btn btn-danger btn-sm">Follow</button>--}}
          <a href="{{ route( 'user.my-page' ) }}" class="btn btn-success btn-sm" title=" صفحتي"> صفحتي</a>
        </div>
        @else

         <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            زائر
          </div>

        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        
        <div class="profile-userbuttons">
          <a href="{{ route('login') }}" class="btn yellow-btn btn-sm" title="تسجيل"> دخول</a>
          <a href="{{ route('register') }}" class="btn btn-success btn-sm" title="تسجيل"> تسجيل</a>
        </div>


        @endif
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">

          @if( Auth::check() )

          <ul class="inDeco">

            <li class="{{ activeClass('buildings.add') }}"><a href="{{ route( 'buildings.add' ) }}" title=" إضافة قطعة جديدية"> إضافة قطعة جديدية</a></li>

            <li> التقديم أو البيع
              <ul>


                        <li class=""> المفعلة
                            <ul>
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
            <li class="{{ activeClass('user.my-settings') }}"><a href="{{ route( 'user.my-settings' ) }}" title=" تعديل المعلومات الشخصية"> تعديل المعلومات الشخصية</a></li>




          </ul>

          @endif




@isset( $fRequest['name'] )

    @if( array_key_exists ( 'name' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $nm = $fRequest['name']; ?>

    @else

      <?Php $nm = old('name'); ?>

    @endif

@else

<?Php $nm = old('name'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $nm = old('name'); ?>

@endempty  



@isset( $fRequest['priceFrom'] )

    @if( array_key_exists ( 'priceFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $pF = $fRequest['priceFrom']; ?>

    @else

      <?Php $pF = old('priceFrom'); ?>

    @endif

@else

<?Php $pF = old('priceFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $pF = old('priceFrom'); ?>

@endempty  

@isset( $fRequest['priceTo'] )


    @if( array_key_exists ( 'priceTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $pT = $fRequest['priceTo']; ?>

    @else

      <?Php $pT = old('priceTo'); ?>

    @endif

@else

<?Php $pT = old('priceTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $pT = old('priceTo'); ?>

@endempty  


@isset( $fRequest['thing_id'] )

    @if( array_key_exists ( 'thing_id' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $tS = $fRequest['thing_id']; ?>

    @else

      <?Php $tS = null; ?>

    @endif

@else

<?Php $tS = old('thing_id'); ?>



@endisset

@empty( $fRequest  )
    
    <?Php $tS = null; ?>

@endempty  

@isset( $fRequest['car_id'] )

    @if( array_key_exists ( 'car_id' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $cS = $fRequest['car_id']; ?>

    @else

      <?Php $cS = null; ?>

    @endif

@else

<?Php $cS = old('car_id'); ?>


@endisset

@empty( $fRequest  )
    
    <?Php $cS = null; ?>

@endempty  

@isset( $fRequest['carModel'] )

    @if( array_key_exists ( 'carModel' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $cM = $fRequest['carModel']; ?>

    @else

      <?Php $cM = old('carModel'); ?>

    @endif

@else

<?Php $cM = old('carModel'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $cM = old('carModel'); ?>

@endempty  

@isset( $fRequest['carCarb'] )

    @if( array_key_exists ( 'carCarb' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $cC = $fRequest['carCarb']; ?>

    @else

      <?Php $cC = old('carCarb'); ?>

    @endif

@else

<?Php $cC = old('carCarb'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $cC = old('carCarb'); ?>

@endempty  

@isset( $fRequest['rent'] )

    @if( array_key_exists ( 'rent' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $r = $fRequest['rent']; ?>

    @else

      <?Php $r = old('rent'); ?>

    @endif

@else

<?Php $r = old('rent'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $r = old('rent'); ?>

@endempty  

@isset( $fRequest['area_id'] )

    @if( array_key_exists ( 'area_id' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $aS = $fRequest['area_id']; ?>

    @else

      <?Php $aS = null; ?>

    @endif


@else

<?Php $aS = old('area_id'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $aS = null; ?>

@endempty  

@isset( $fRequest['langFrom'] )

    @if( array_key_exists ( 'langFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lF = $fRequest['langFrom']; ?>

    @else

      <?Php $lF = old('langFrom'); ?>

    @endif

@else

<?Php $lF = old('langFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lF = old('langFrom'); ?>

@endempty  

@isset( $fRequest['langTo'] )


    @if( array_key_exists ( 'langTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lT = $fRequest['langTo']; ?>

    @else

      <?Php $lT = old('langTo'); ?>

    @endif

@else

<?Php $lT = old('langTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lT = old('langTo'); ?>

@endempty  

@isset( $fRequest['latFrom'] )


    @if( array_key_exists ( 'latFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lF = $fRequest['latFrom']; ?>

    @else

      <?Php $lF = old('latFrom'); ?>

    @endif

@else

<?Php $lF = old('latFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lF = old('latFrom'); ?>

@endempty  

@isset( $fRequest['latTo'] )

    @if( array_key_exists ( 'latTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lT = $fRequest['latTo']; ?>

    @else

      <?Php $lT = old('latTo'); ?>

    @endif

@else

<?Php $lT = old('latTo'); ?>


@endisset

@empty( $fRequest  )
    
    <?Php $lT = old('latTo'); ?>

@endempty  

@isset( $fRequest['thingKind'] )

    @if( array_key_exists ( 'thingKind' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $tK = $fRequest['thingKind']; ?>

    @else

      <?Php $tK = old('thingKind'); ?>

    @endif

@else

<?Php $tK = old('thingKind'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $tK = old('thingKind'); ?>

@endempty



          {!! Form::open(['route' => 'search']) !!}

          {{ csrf_field() }}
          

            <ul class="inDeco" id="buttonDisplay">
              <li id="plusButton"><i class="fa fa-plus"></i></li>
              <li id="minusButton"><i class="fa fa-minus"></i></li>
            </ul>

            <ul id="displayed" class="inDeco">
              
              <li class="">
                {!! Form::text('name', $nm, ['class' => 'form-control', 'placeholder' => 'إسم القطعة' ]) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </li>



              <li class="">
                {!! Form::number('priceFrom', $pF, ['class' => 'form-control', 'placeholder' => 'ثمن: إبتداءا من']) !!}
                {!! Form::number('priceTo', $pT, ['class' => 'form-control', 'placeholder' => 'ثمن: أقل من']) !!}

                @if ($errors->has('priceFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priceFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('priceTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priceTo') }}</strong>
                    </span>
                @endif
              </li>

              <li class="">
                {!!
                \App\Thing::attr(['name' => 'thing_id', 'id' => 'thing_id', 'class' => 'form-control thingForm select2R', 'style' => 'width: 100%','size' => 20,'value' => old('thing_id'), 'placeholder' => 'نوع القطعة الميكانيكية'])
                ->selected( $tS )
                ->renderAsDropdown() !!}


                @if ($errors->has('thing_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('thing_id') }}</strong>
                    </span>
                @endif

              </li>

              <li class="">
                {!!
                \App\Car::attr(['name' => 'car_id', 'id' => 'car_id', 'class' => 'form-control carForm select2R', 'style' => 'width: 100%','size' => 20,'value' => old('car_id'), 'placeholder' => 'hglركبة المناسبة للقطعة'])
                ->selected( $cS )
                ->renderAsDropdown() !!}


                @if ($errors->has('car_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('car_id') }}</strong>
                    </span>
                @endif

              </li>

              <li class="">
                {!! Form::select('carModel', carModel( -1 ) , $cM , ['class' => 'form-control select2R2', 'placeholder' =>  'موديل العربة' ] ) !!}

                @if ($errors->has('carModel'))
                      <span class="help-block">
                          <strong>{{ $errors->first('carModel') }}</strong>
                      </span>
                @endif

              </li>

              <li class="">
                {!! Form::select('carCarb', carCarb( -1 ) , $cC , ['class' => 'form-control select2R2', 'placeholder' =>  'وقود العربة' ] ) !!}

                @if ($errors->has('carCarb'))
                      <span class="help-block">
                          <strong>{{ $errors->first('carCarb') }}</strong>
                      </span>
                @endif

              </li>

              <li class="">

              
              {!! Form::select('rent', thingRent( -1 ) , $r , ['class' => 'form-control select2R2', 'placeholder' =>  'حالة القطعة الميكانيكية' ] ) !!}

              @if ($errors->has('rent'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rent') }}</strong>
                    </span>
              @endif

              </li>



              <li class="">
                {!!
                \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control areaForm select2R', 'style' => 'width: 100%','size' => 20,'value' => old('area_id'), 'placeholder' => 'مكان تواجد القطعة الميكانيكية'])
                ->selected( $aS )
                ->renderAsDropdown() !!}


                @if ($errors->has('area_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('area_id') }}</strong>
                    </span>
                @endif

              </li>

              <li class="active">
                {!! Form::number('langFrom', $lF, ['class' => 'form-control', 'placeholder' => 'خط الطول: إبتداءا من']) !!}
                {!! Form::number('langTo', $lT, ['class' => 'form-control', 'placeholder' => 'خط الطول: أقل إحداثية']) !!}

                @if ($errors->has('langFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('langFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('langTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('langTo') }}</strong>
                    </span>
                @endif
              </li>
              <li class="active">
                {!! Form::number('latFrom', $lF, ['class' => 'form-control', 'placeholder' => 'خط العرض: إبتداءا من']) !!}
                {!! Form::number('latTo', $lT , ['class' => 'form-control', 'placeholder' => 'خط العرض: أقل إحداثية']) !!}

                @if ($errors->has('latFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('latFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('latTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('latTo') }}</strong>
                    </span>
                @endif
              </li>

              <li class="">

              
              {!! Form::select('thingKind', thingKind( -1 ) , $tK , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع الإشهار' ] ) !!}

              @if ($errors->has('thingKind'))
                    <span class="help-block">
                        <strong>{{ $errors->first('thingKind') }}</strong>
                    </span>
              @endif

              </li>


              <li>
              {!! Form::submit('إبحث' , ['class' => 'btn btn-primary btn-block', 'name' => 'ok', 'title' => 'إبحث']) !!}
              </li>


          </ul>

          {!! Form::close() !!}

        </div>
        <!-- END MENU -->
      </div>