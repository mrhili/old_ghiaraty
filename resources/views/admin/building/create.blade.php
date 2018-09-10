@extends('admin.layouts.layout')

@section('title')

  إضاقة عقار
@stop


@section('styling')


@stop

@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        إضافة عقار
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
              <h3 class="box-title">تسجيل عقارات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            	


            


              <?php

                $button = 'تسجيل';

                $from = 'dashboard';
                
                $thing_id_Selected = null;
                
                $car_id_Selected = null; 
    
                $area_id_Selected = null; 

              ?>


            {!! Form::open([
                'files' => true,
                'route' => 'buildings.store',
                'class'=> 'form-horizontal',
                'role' => 'form',
                'method' => 'post',
            ]) !!}





              @include('admin.partials.formBuilding', compact('button', 'from', 'thing_id_Selected', 'car_id_Selected'))



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
$('div.alert').delay(2000).fadeOut(3500);
</script>




<script>
  
  $('.select2R').select2({
        dir: 'rtl',
        theme: "classic"
      });

    $('#tag_list').select2({
      dir: 'rtl',
      tags: true,
      tokenSeparators: [",", " "],

      createTag: function(newTag) {
           return {
               id: newTag.term,
               text: newTag.term 
           };
       }

    });


    $('.oneLenght').select2({
      maximumSelectionLength: 1
    });
</script>



@stop