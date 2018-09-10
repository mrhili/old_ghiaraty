
<h1 style="text-center">إضافة قطعة جديدة</h1>

{{ csrf_field() }}


{!! Form::hidden('from', $from) !!}

{!! Form::hidden('imagesArrayHolder' , '' , ['id' => 'imagesArrayHolder']) !!}



<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    

    
    {!! Form::label('name', 'إسم القطعة الميكانيكية', ['class' => 'col-md-4 control-label', 'placeholder' => 'إسم القطعة الميكانيكية']) !!}
    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => true, 'placeholder' => 'إسم القطعة الميكانيكية', 'autofocus' => true ]) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    

    
    {!! Form::label('price', 'ثمن القطعة الميكانيكية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('price', old('price'), ['class' => 'form-control', 'required' => true ,  'step' => 'any']) !!}

        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
</div>

    
@if( Route::currentRouteName() == 'buildings.edit' || Route::currentRouteName() == 'user.update-buildings-in-wait' )



    <?php

    $thing_id_Selected = getSelectedItemInThing( $idHelper );
    
    $car_id_Selected = getSelectedItemInCar( $idHelper );
    
    $area_id_Selected = getSelectedItemInArea( $idHelper );
    
    ?>

@endif



<div  id="thing_idSide" class="form-group{{ $errors->has('thing_id') ? ' has-error' : '' }}">
    

    
    {!! Form::label('thing_id', 'نوع القطعة الميكانيكية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        @if ($errors->has('thing_id'))

        <?php $car_id_Selected =  old('thing_id') ?>
        
            <span class="help-block">
                <strong>{{ $errors->first('thing_id') }}</strong>
            </span>
        @endif

        {!! 
        \App\Thing::attr(['name' => 'thing_id', 'id' => 'thing_id', 'class' => 'form-control select2R', 'style' => 'width: 100%', 'placeholder' => 'نوع القطعة الميكانيكية'])
        ->selected( $thing_id_Selected )
        ->renderAsDropdown() 
        !!}



       
    </div>
    
</div>

<a id="addIfNotThing" class="text-center">إضغط هنا إن لم تجد نوع القطعة في القائمة</a>

<div id="ifNotThingSide" class="form-group{{ $errors->has('ifNotThing') ? ' has-error' : '' }}">

    {!! Form::label('ifNotThing', 'نوع القطعة الميكانيكية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::text('ifNotThing', null, ['class' => 'form-control', 'placeholder' => 'نوع القطعة', 'id' => 'ifNotThing' ]) !!}

        @if ($errors->has('ifNotThing'))
            <span class="help-block">
                <strong>{{ $errors->first('ifNotThing') }}</strong>
            </span>
        @endif
    </div>

    <a id="returnIfThing" class="text-center">رجوع</a>
    
</div>

<div id="car_idSide" class="form-group{{ $errors->has('car_id') ? ' has-error' : '' }}">
    

    
    {!! Form::label('car_id', 'نوع المركبة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        @if ($errors->has('car_id'))

        <?php $car_id_Selected =  old('car_id') ?>

            <span class="help-block">
                <strong>{{ $errors->first('car_id') }}</strong>
            </span>
        @endif

        {!! 
        \App\Car::attr(['name' => 'car_id', 'id' => 'car_id', 'class' => 'form-control select2R', 'style' => 'width: 100%', 'placeholder' => 'نوع المركبة'])
        ->selected( $car_id_Selected )
        ->renderAsDropdown() 
        !!}

        
    </div>
    
</div>


<a id="addIfNotCar" class="text-center">إضغط هنا إن لم تجد نوع المركبة في القائمة</a>
<div id="ifNotCarSide" class="form-group{{ $errors->has('ifNotCar') ? ' has-error' : '' }}">
    

    
    {!! Form::label('ifNotCar', 'نوع المركبة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::text('ifNotCar', null, ['class' => 'form-control', 'placeholder' => 'نوع المركبة', 'id' => 'ifNotCar' ]) !!}

        @if ($errors->has('ifNotCar'))
            <span class="help-block">
                <strong>{{ $errors->first('ifNotCar') }}</strong>
            </span>
        @endif
    </div>

    <a id="returnIfCar" class="text-center">رجوع</a>
    
</div>

<div class="form-group{{ $errors->has('carModel') ? ' has-error' : '' }}">
    

    
    {!! Form::label('carModel', 'موديل المركبة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('carModel', carModel( -1 ) , old('carModel') , ['class' => 'form-control select2R', 'placeholder' => 'موديل المركبة'] ) !!}

        @if ($errors->has('carModel'))
            <span class="help-block">
                <strong>{{ $errors->first('carModel') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('carCarb') ? ' has-error' : '' }}">
    

    
    {!! Form::label('carCarb', 'وقود المركبة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('carCarb', carCarb( -1 ) , old('carCarb') , ['class' => 'form-control select2R', 'placeholder' => 'وقود المركبة'] ) !!}

        @if ($errors->has('carCarb'))
            <span class="help-block">
                <strong>{{ $errors->first('carCarb') }}</strong>
            </span>
        @endif
    </div>
</div>

<div  id="area_idSide" class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
    

    
    {!! Form::label('area_id', 'مكان تواجد القطعة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        @if ($errors->has('area_id'))

        <?php $car_id_Selected =  old('area_id') ?>
        
            <span class="help-block">
                <strong>{{ $errors->first('area_id') }}</strong>
            </span>
        @endif

        {!! 
        \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control select2R', 'style' => 'width: 100%', 'placeholder' => 'مكان تواجد القطعة'])
        ->selected( $area_id_Selected )
        ->renderAsDropdown() 
        !!}

    </div>
    
</div>

<a id="addIfNotArea" class="text-center">إضغط هنا إن لم تجد مكان تواجدك في القائمة</a>
<div id="ifNotAreaSide" class="form-group{{ $errors->has('ifNotArea') ? ' has-error' : '' }}">
    

    
    {!! Form::label('ifNotArea', 'مكان تواجد القطعة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::text('ifNotArea', null, ['class' => 'form-control', 'placeholder' => 'المكان', 'id' => 'ifNotArea' ]) !!}

        @if ($errors->has('ifNotArea'))
            <span class="help-block">
                <strong>{{ $errors->first('ifNotArea') }}</strong>
            </span>
        @endif
    </div>

    <a id="returnIfArea" class="text-center">رجوع</a>
    
</div>

<div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
    

    
    {!! Form::label('rent', 'حالة لاقطعة الميكانيكية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('rent', thingRent( -1 ) , old('rent') , ['class' => 'form-control select2R', 'placeholder' => 'حالة لاقطعة الميكانيكية', 'required' => true] ) !!}

        @if ($errors->has('rent'))
            <span class="help-block">
                <strong>{{ $errors->first('rent') }}</strong>
            </span>
        @endif
    </div>
</div>






<div class="form-group{{ $errors->has('largDisc') ? ' has-error' : '' }}">
    

    
    {!! Form::label('largDisc', 'عن العقار', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('largDisc', old('largDisc'), ['class' => 'form-control', 'placeholder' => 'عن العقار', 'required' => true]) !!}

        @if ($errors->has('largDisc'))
            <span class="help-block">
                <strong>{{ $errors->first('largDisc') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tag_list') ? ' has-error' : '' }}">
    

    
    {!! Form::label('tag_list', 'كلمات دلالية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tag_list[]', $allTags, null, ['id' => 'tag_list', 'class' => 'form-control','multiple' => 'multiple']) !!}

        @if ($errors->has('tags'))
            <span class="help-block">
                <strong>{{ $errors->first('tags') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
    

    
    {!! Form::label('lang', 'خط الطول', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('lang', old('lang'), ['class' => 'form-control', 'step' => 'any']) !!}

        @if ($errors->has('lang'))
            <span class="help-block">
                <strong>{{ $errors->first('lang') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
    

    
    {!! Form::label('lat', 'خط العرض', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('lat', old('lat'), ['class' => 'form-control', 'step' => 'any']) !!}

        @if ($errors->has('lat'))
            <span class="help-block">
                <strong>{{ $errors->first('lat') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
    {!! Form::label('tel', ' رقم الهاتف', ['class' => 'col-md-4 control-label']) !!}


    <div class="col-md-6">

    <?Php $var4daRightTelNum = "";  if( old('tel') ){ $var4daRightTelNum =  old('tel'); }else{ if( Auth::check() ){ $var4daRightTelNum = Auth::user()->tel; } } ?>

        {!! Form::tel('tel', $var4daRightTelNum , ['class' => 'form-control', 'required' => true]) !!}
        @if ($errors->has('tel'))
            <span class="help-block">
                <strong>{{ $errors->first('tel') }}</strong>
            </span>
        @endif
    </div>

</div>

<div class="form-group{{ $errors->has('thingKind') ? ' has-error' : '' }}">
    

    
    {!! Form::label('thingKind', ' تقديم أو طلب ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('thingKind', thingKind( -1 ) , old('thingKind') , ['class' => 'form-control select2R', 'placeholder' => ' تقديم أو طلب ', 'required' => true] ) !!}

        @if ($errors->has('thingKind'))
            <span class="help-block">
                <strong>{{ $errors->first('thingKind') }}</strong>
            </span>
        @endif
    </div>
</div>

@unless( $from == 'website' )
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    

    
    {!! Form::label('status', 'تفعيل', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('status', thingStatu( -1 ) , old('status') , ['class' => 'form-control select2R', 'required' => true] ) !!}

        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>

@endunless










<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit( $button , ['class' => 'btn btn-primary btn-block']) !!}

    </div>
</div>