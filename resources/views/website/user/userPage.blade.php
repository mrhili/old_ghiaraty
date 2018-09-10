@extends('layouts.app')
@section('title')
مرحبا بك
@stop

@section('styling')

<style type="text/css">
/****** Searchable container */

.title{
 margin-left:20px
}

.fa-user{
 font-size:80px   
}

.searchable-container{
    margin-top:40px;
}

.glyphicon-lg{
    font-size:4em
}
.info-block{
    border-right:5px solid #E6E6E6;margin-bottom:25px
}
.info-block .square-box {
    width:120px;
    min-height:120px;
    margin-right:22px;
    text-align:center!important;
    background-color:#676767;
    padding:20px 0
}
.info-block:hover .info-block.block-info {
    border-color:#20819e
}

.info-block.block-info .square-box {
    background-color:#5bc0de;
    color:#FFF
}






/*   */


.btn-compose-email {
    padding: 10px 0px;
    margin-bottom: 20px;
}

.btn-danger {
    background-color: #E9573F;
    border-color: #E9573F;
    color: white;
}

.panel-teal .panel-heading {
    background-color: #37BC9B;
    border: 1px solid #36b898;
    color: white;
}

.panel .panel-heading {
    padding: 5px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    border-bottom: 1px solid #DDD;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}

.panel .panel-heading .panel-title {
    padding: 10px;
    font-size: 17px;
}

form .form-group {
    position: relative;
    margin-left: 0px !important;
    margin-right: 0px !important;
}

.inner-all {
    padding: 10px;
}



/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

</style>
@stop


@section('content')


{{-- DISPLAY --}}


<div class="container-fluid">
    <div class="row">

    
      <div class="col-md-3">
          @include('partials.asideWebsite')
      
      </div>

      <div class="profile-content">
      <div class="col-md-9">

      <?php $varForTitle = ""; ?>

      <?php $notice = ""; ?>

          @if( $display == 'myBuildingsOffer' )

            <?php $varForTitle = "قطعي المقدمة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! ) "; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle') )

          @elseif( $display == 'myCompleteBuildingsOffer' )

            <?php $varForTitle = "مركباتي الكاملة المقدمة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! ) "; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle') )

          @elseif( $display == 'myBuildingsWOffer' )

            <?php $varForTitle = "قطعي المقدمة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! )"; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myCompleteBuildingsWOffer' )

            <?php $varForTitle = "مركباتي الكاملة المقدمة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! )"; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myFavoritesOffer' )

            <?php $varForTitle = "القطع المفضلة و المقدمة ."; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myCompleteFavoritesOffer' )

            <?php $varForTitle = "المركبات الكاملة المفضلة و المقدمة ."; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )





          @elseif( $display == 'myBuildingsDemande' )

            <?php $varForTitle = "قطعي المطلوبة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! ) "; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle') )

          @elseif( $display == 'myCompleteBuildingsDemande' )

            <?php $varForTitle = "مركباتي الكاملة المطلوبة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! ) "; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle') )

          @elseif( $display == 'myBuildingsWDemande' )

            <?php $varForTitle = "قطعي المطلوبة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! )"; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myCompleteBuildingsWDemande' )

            <?php $varForTitle = "مركباتي الكاملة المطلوبة و المفعلة ( عند التحديت المرجوا إنتضار التفعيل ! )"; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myFavoritesDemande' )

            <?php $varForTitle = "القطع المفضلة و المطلوبة ."; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )

          @elseif( $display == 'myCompleteFavoritesDemande' )

            <?php $varForTitle = "المركبات الكاملة المفضلة و المطلوبة ."; ?>

            @include('partials.profile', compact('userInstance', 'b4', 'varForTitle', 'notice') )


          @elseif( $display == 'mySettings' )

            @include('partials.updateSettings', compact('userInstance') )


          @else

            @include('partials.profile', compact('userInstance', 'b4') )

          @endif

          
          



      </div>
      </div>

    </div>


</div>


@stop

@section('scripting')

  <script>
    
    $('.select2R').select2({
      dir: 'rtl'
    });
  </script>

  <script>

    
  </script>

@stop
