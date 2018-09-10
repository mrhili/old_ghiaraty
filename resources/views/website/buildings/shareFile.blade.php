

<h1 class="text-center">القطع الميكانيكية</h1>


@if( count($b4) > 0 )

	@foreach($b4 as $builItem)


	<div class="col-md-4">

          <div class="productbox relative effectS">

            <div class="producttitle text-center"><a href="{{ route('buildings.show', $builItem->id ) }}" class="colorBlack" title="{{ $builItem->name }}" alt="{{ $builItem->name }}">{{ $builItem->name }}</a></div>

            <div>


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="hover" data-wrap=true>

            {{--

                <ol class="carousel-indicators">

                @forelse(  $builItem->pics as $numberOfPic => $picture )

                    <li data-target="#carousel-example-generic" data-slide-to="{{ $numberOfPic }}" class="carousel-li {{ $numberOfPic == 0 ? 'active' : '' }}"></li>

                @empty

                    <li data-target="#carousel-example-generic" data-slide-to="0" class="carousel-li active"></li>
                

                @endforelse

                </ol>
            --}}
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    @forelse(  $builItem->pics as $numberOfPic => $picture )

                        <div class="item {{ $numberOfPic == 0 ? 'active' : '' }}">
                          <img src="{{ ifImg( $picture->name ) }}" class="img-responsive" alt="{{ $builItem->name }}" title="{{ $builItem->name }}" />
                          <div class="carousel-caption">
                            <h3><a href="{{ route('buildings.show', $builItem->id ) }}" class="colorBlack whiteShadow" title="{{ $builItem->name }}" alt="{{ $builItem->name }}">{{ $builItem->name }}</a></h3>
                          </div>
                        </div>


                    @empty

                        <div class="item active">
                          <img src="{{ asset('/images/'.getSetting( 'no-image' ) ) }}" class="img-responsive" alt="{{ $builItem->name }}" title="{{ $builItem->name }}" />
                          <div class="carousel-caption">
                            <h3><a href="{{ route('buildings.show', $builItem->id ) }}" class="colorBlack whiteShadow" title="{{ $builItem->name }}" alt="{{ $builItem->name }}">{{ $builItem->name }}</a></h3>
                          </div>
                        </div>


                    @endforelse

                </div>
                 
                  <!-- Controls -->
                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span><i class="fa fa-chevron-left"></i></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span><i class="fa fa-chevron-right"></i></span>
                  </a>
            </div> <!-- Carousel -->

            <div class="clearfix" ></div>

            </div>



            

            <div class="overflow-yScroll">
                <p class="text-center">الثمن : <span class="redColor">{{ $builItem->price }}</span><br />
                    المنطقة : <span class="redColor">{{ getAreaName( $builItem->area_id  ) }}</span><br />
                    مطابقة ل : <span class="redColor">{{ getCarName( $builItem->car_id ) }}</span><br />
                    موديل المركبة : <span class="redColor">{{ carModel( $builItem->carModel ) }}</span><br />
                    وقود المركبة : <span class="redColor">{{ carCarb( $builItem->carCarb ) }}</span><br />
                    الحالة : <span class="redColor">{{  thingRent( $builItem->rent )  }}</span><br />
                </p>
                <p class="text-center overflow-yScroll maxXL">
                    @if( strlen( $builItem->largDisc ) > 160 )
                                  
                        {{ mb_substr( $builItem->largDisc ,0,160,'utf-8') . ' ... ' }}
                                  
                    @else
                                    
                        {{ $builItem->largDisc }}
                                  
                    @endif
                </p>
                <div class="clearfix"></div>
            
          </div>


            <div class="absolute bottom0 right0 left0">
            	            <hr />
            	@if( 
              Route::currentRouteNamed( 'user.my-buildings-offer' ) || Route::currentRouteNamed( 'user.my-complete-buildings-offer' ) || 
              Route::currentRouteNamed( 'user.my-buildings-in-wait-offer' ) || 
              Route::currentRouteNamed( 'user.my-complete-buildings-in-wait-offer' ) || 
              Route::currentRouteNamed( 'user.my-buildings-complete' ) || Route::currentRouteNamed( 'user.my-complete-buildings-complete' ) || 
              Route::currentRouteNamed( 'user.my-buildings-in-wait-complete' ) || 
              Route::currentRouteNamed( 'user.my-complete-buildings-in-wait-complete' )
               )

					<a href="{{ route('user.update-buildings-in-wait', $builItem->id ) }}" class="btn btn-sm col-xs-6"> تحديث</a>
                    <a href="{{ route('user.destroy-buildings-in-wait', $builItem->id ) }}" class="btn btn-sm col-xs-6"> حذف</a>

            	@endif
            </div>
          </div>
    </div>



	@endforeach
<div class="col-xs-12 text-center">
    @if( $b4 instanceof \Illuminate\Pagination\LengthAwarePaginator )
        {{ $b4->links() }}

    @endif
</div>
	

@else

	<p class="alert alert-danger">
		لا توجد قطعة ميكانيكية
	</p>

@endif