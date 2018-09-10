@extends('admin.layouts.layout')

@section('title')

  إضاقة إعدادات للموقع
@stop


@section('styling')


@stop

@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        إضافة إعدادات للموقع
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تسجيل إعدادات للموقع</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            	


            


              <?php

                $button = 'تسجيل';

              ?>


                {!! Form::open([
                	'files' => true,
                    'route' => 'site-settings.store',
                    'class'=> 'form-horizontal',
                    'role' => 'form',
                    'method' => 'POST',
                    
                ]) !!}





            @include('admin.partials.formSiteSetting', compact('button'))



            {!! Form::close() !!}




                













            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop

@section('usefullJS')



@stop

@section('scripting')



<script>

$('.select2R').select2({
  dir: 'rtl'
});
</script>




@stop