@extends('admin.layouts.layout')

@section('title')

  كافة الأعضاء
@stop

@section('styling')

  {!! Html::style('dashboard/plugins/datatables/dataTables.bootstrap.css') !!}
@stop

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        كافة القطع الميكانيكية
        <small>كافة القطع الميكانيكية</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin-panel.index') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="{{ route('buildings.index') }}"> كافة القطع الميكانيكية</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

      
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">كافة القطع الميكانيكية</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{--CHANGING FROM EXAMPLETABLE TO DATA TABLE<table id="example2" class="table table-bordered table-hover">--}}
              <table id="data" class="table table-bordered table-hover">
              <meta name="csrf-token" content="{{ csrf_token() }}">
                



              <thead>

                  <tr>
                    <th>#</th>
                    <th>صورة العقار</th>
                    <th>تفعيل القطعة</th>
                    <th>إسم القطعة الميكانيكية</th>
                    <th>نوع الإشهار</th>
                    <th>ثمن القطعة الميكانيكية</th>
                    <th>نوع القطعة الميكانيكية</th>
                    <th>حالة العقار</th>
                    <th>نوع المركبة</th>
                    <th>وقود المركبة</th>
                    <th>موديل المركبة المركبة</th>
                    <th>عن القطعة</th>
                    <th>هاتف الناشر</th>
                    <th>كلمات دلالية</th>
                    <th>خط الطول</th>
                    <th>خط العرض</th>
                    <th>منطقة التواجد</th>
                    <th>نشر في</th>
                    <th>حدث في</th>
                    <th>تحديث العقار</th>
                    <th>حذف العفار</th>
                  </tr>
              </thead>
                <tbody>




                </tbody>
              <tfoot>
                  <tr>
                    <th>#</th>
                    <th>صورة العقار</th>
                    <th>تفعيل القطعة</th>
                    <th>إسم القطعة الميكانيكية</th>
                    <th>نوع الإشهار</th>
                    <th>ثمن القطعة الميكانيكية</th>
                    <th>نوع القطعة الميكانيكية</th>
                    <th>حالة العقار</th>
                    <th>نوع المركبة</th>
                    <th>وقود المركبة</th>
                    <th>موديل المركبة المركبة</th>
                    <th>عن القطعة</th>
                    <th>هاتف الناشر</th>
                    <th>كلمات دلالية</th>
                    <th>خط الطول</th>
                    <th>خط العرض</th>
                    <th>منطقة العقار</th>
                    <th>نشر في</th>
                    <th>حدث في</th>
                    <th>تحديث العقار</th>
                    <th>حذف العفار</th>
                  </tr>
              </tfoot>




              </table>
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

  {!! Html::script('dashboard/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('dashboard/plugins/datatables/dataTables.bootstrap.min.js') !!}

@stop

@section('scripting')


  <script>
  /*DATATABLES CODE*/
        var lastIdx = null;


        


        $('#data thead th').each( function () {

          if( $(this).index() == 0 ){

            $(this).html( '<input type="number" data-value="'+ $(this).index() +'" placeholder=" بحث في أرقام القطع" />' );
          }

          else if( $(this).index() == 2 ){
            $(this).html( '<select>' +
              @foreach( thingStatu(-1) as $t_statuK => $t_statu )

                '<option value="{{ $t_statuK }}">{{ $t_statu }}</option>' +

              @endforeach
              
              '</select>' );
          }

          else if( $(this).index() == 4 ){
            $(this).html( '<select>' +
              @foreach( thingKind(-1) as $t_kindK => $t_kind )

                '<option value="{{ $t_kindK }}">{{ $t_kind }}</option>' +

              @endforeach
              
              '</select>' );
          }

          else if( $(this).index() == 5 || $(this).index() == 14 || $(this).index() == 15 ){
            var title = $(this).html();
            $(this).html( '<input type="number" data-value="'+ $(this).index() +'" placeholder=" بحث في '+ title +'" />' );
          }

          else if( $(this).index() == 7 ){
            $(this).html( '<select>' +
              @foreach( thingRent(-1) as $t_rentK => $t_rent )

                '<option value="{{ $t_rentK }}">{{ $t_rent }}</option>' +

              @endforeach
              
              '</select>' );
          }

          else if( $(this).index() == 9 ){
            $(this).html( '<select>' +
              @foreach( carCarb(-1) as $c_carbK => $c_carb )

                '<option value="{{ $c_carbK }}">{{ $c_carb }}</option>' +

              @endforeach
              
              '</select>' );
          }

          else if( $(this).index() == 10 ){
            $(this).html( '<select>' +
              @foreach( carModel(-1) as $c_modelK => $c_model )

                '<option value="{{ $c_modelK }}">{{ $c_model }}</option>' +

              @endforeach
              
              '</select>' );
          }

          else if( $(this).index() < 19 && $(this).index() != 1 ){

                var classname = $(this).index() == 17 || 18   ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" بحث في '+title+'" />' );
          }
          


        } );




        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/buildings/data') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'img', name: 'img'},
                {data: 'status', name: 'status'},
                {data: 'name', name: 'name'},
                {data: 'thingKind', name: 'thingKind'},
                {data: 'price', name: 'price'},
                {data: 'thing_id', name: 'thing_id'},
                {data: 'rent', name: 'rent'},
                {data: 'car_id', name: 'car_id'},
                {data: 'carCarb', name: 'carCarb'},
                {data: 'carModel', name: 'carModel'},
                {data: 'largDisc', name: 'largDisc'},
                {data: 'tel', name: 'tel'},
                {data: 'tag_list', name: 'tag_list'},
                {data: 'lang', name: 'lang'},
                {data: 'lat', name: 'lat'},
                {data: 'area_id', name: 'area_id'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'edit', name: ''},
                {data: 'delete', name: ''}
            ],

            "language": {
                "url": "{{ Request::root()  }}/admin/cust/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'asc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "ملف إكسل",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "نسخ المعلومات",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "طباعة",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );

        

















    $(function () {

      /*
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
      });

*/

      //CONFIRM DELETING
      
      $("#delete").on("click", function(event) {
          if( !confirm('تأكيد الحذف') ) 
              event.preventDefault();
      });


    });


function helperInterval(){

  if ( $( "#initializeAnImageToGallery" ).length ){

    clearInterval(ifExist);
    $('#data tbody td').each( function () {

          if( $(this).index() == 1 ){

            $(this).attr('id', 'links');

            var temporay = $(this).html();
            //alert(temporay);

            var anATag = $('<a href="'+ $(this).find('img').attr('src') +'" title="'+ $(this).find('img').attr('data-title') +'"></a>');

            anATag.append(temporay);

            $(this).html('');

            $(this).append(anATag);

          }


        } );

    document.getElementById('links').onclick = function (event) {
          event = event || window.event;
          var target = event.target || event.srcElement,
              link = target.src ? target.parentNode : target,
              options = {index: link, event: event},
              links = this.getElementsByTagName('a');
          blueimp.Gallery(links, options);
      };

    
  }

};
var ifExist = setInterval(helperInterval, 100);

$("input").on('change', function(){
  console.log('track');
  ifExist = setInterval(helperInterval, 100);
          
});



      


          




  </script>



    
<script>
$('div.alert').delay(2000).fadeOut(3500);
</script>

<script>




</script>
  


@stop













