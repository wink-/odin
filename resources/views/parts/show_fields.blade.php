<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $parts->id !!}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{!! $parts->number !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $parts->description !!}</p>
</div>

<!-- Customer Code Field -->
<div class="form-group">
    {!! Form::label('customer_code', 'Customer Code:') !!}
    <p><a href="{!! route('customers.show', ['id' => $parts->customers->id]) !!}">{!! $parts->customer_code !!}</a></p>
</div>

<!-- Process Code Field -->
<div class="form-group">
    {!! Form::label('process_code', 'Process Code:') !!}
    <p>{!! $parts->process_code !!}</p>
</div>

<!-- Method Code Field -->
<div class="form-group">
    {!! Form::label('method_code', 'Method Code:') !!}
    <p>{!! $parts->method_code !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $parts->price !!}</p>
</div>

<!-- Price Code Field -->
<div class="form-group">
    {!! Form::label('price_code', 'Price Code:') !!}
    <p>{!! $parts->price_code !!}</p>
</div>

<!-- Certify Field -->
<div class="form-group">
    {!! Form::label('certify', 'Certify:') !!}
    <p>{!! $parts->certify !!}</p>
</div>

<!-- Specification Field -->
<div class="form-group">
    {!! Form::label('specification', 'Specification:') !!}
    <p>{!! $parts->specification !!}</p>
</div>

<!-- Bake Field -->
<div class="form-group">
    {!! Form::label('bake', 'Bake:') !!}
    <p>{!! $parts->bake !!}</p>
</div>

<!-- Pre Bake Temperature Field -->
<div class="form-group">
    {!! Form::label('pre_bake_temperature', 'Pre Bake Temperature:') !!}
    <p>{!! $parts->pre_bake_temperature !!}</p>
</div>

<!-- Pre Bake Time Field -->
<div class="form-group">
    {!! Form::label('pre_bake_time', 'Pre Bake Time:') !!}
    <p>{!! $parts->pre_bake_time !!}</p>
</div>

<!-- Post Bake Temperature Field -->
<div class="form-group">
    {!! Form::label('post_bake_temperature', 'Post Bake Temperature:') !!}
    <p>{!! $parts->post_bake_temperature !!}</p>
</div>

<!-- Post Bake Time Field -->
<div class="form-group">
    {!! Form::label('post_bake_time', 'Post Bake Time:') !!}
    <p>{!! $parts->post_bake_time !!}</p>
</div>

<!-- Adhesion Bake Temperature Field -->
<div class="form-group">
    {!! Form::label('adhesion_bake_temperature', 'Adhesion Bake Temperature:') !!}
    <p>{!! $parts->adhesion_bake_temperature !!}</p>
</div>

<!-- Adhesion Bake Time Field -->
<div class="form-group">
    {!! Form::label('adhesion_bake_time', 'Adhesion Bake Time:') !!}
    <p>{!! $parts->adhesion_bake_time !!}</p>
</div>

<!-- Hardness Bake Temperature Field -->
<div class="form-group">
    {!! Form::label('hardness_bake_temperature', 'Hardness Bake Temperature:') !!}
    <p>{!! $parts->hardness_bake_temperature !!}</p>
</div>

<!-- Hardness Bake Time Field -->
<div class="form-group">
    {!! Form::label('hardness_bake_time', 'Hardness Bake Time:') !!}
    <p>{!! $parts->hardness_bake_time !!}</p>
</div>

<!-- Procedure Code Field -->
<div class="form-group">
    {!! Form::label('procedure_code', 'Procedure Code:') !!}
    <p>{!! $parts->procedure_code !!}</p>
</div>

<!-- Material Field -->
<div class="form-group">
    {!! Form::label('material', 'Material:') !!}
    <p>{!! $parts->material !!}</p>
</div>

<!-- Material Name Field -->
<div class="form-group">
    {!! Form::label('material_name', 'Material Name:') !!}
    <p>{!! $parts->material_name !!}</p>
</div>

<!-- Material Condition Field -->
<div class="form-group">
    {!! Form::label('material_condition', 'Material Condition:') !!}
    <p>{!! $parts->material_condition !!}</p>
</div>

<!-- Thickness Minimum Field -->
<div class="form-group">
    {!! Form::label('thickness_minimum', 'Thickness Minimum:') !!}
    <p>{!! $parts->thickness_minimum !!}</p>
</div>

<!-- Thickness Maximum Field -->
<div class="form-group">
    {!! Form::label('thickness_maximum', 'Thickness Maximum:') !!}
    <p>{!! $parts->thickness_maximum !!}</p>
</div>

<!-- Surface Area Field -->
<div class="form-group">
    {!! Form::label('surface_area', 'Surface Area:') !!}
    <p>{!! $parts->surface_area !!}</p>
</div>

<!-- Weight Field -->
<div class="form-group">
    {!! Form::label('weight', 'Weight:') !!}
    <p>{!! $parts->weight !!}</p>
</div>

<!-- Length Field -->
<div class="form-group">
    {!! Form::label('length', 'Length:') !!}
    <p>{!! $parts->length !!}</p>
</div>

<!-- Width Field -->
<div class="form-group">
    {!! Form::label('width', 'Width:') !!}
    <p>{!! $parts->width !!}</p>
</div>

<!-- Height Field -->
<div class="form-group">
    {!! Form::label('height', 'Height:') !!}
    <p>{!! $parts->height !!}</p>
</div>

<!-- Material Thickness Field -->
<div class="form-group">
    {!! Form::label('material_thickness', 'Material Thickness:') !!}
    <p>{!! $parts->material_thickness !!}</p>
</div>

<!-- Special Requirement Field -->
<div class="form-group">
    {!! Form::label('special_requirement', 'Special Requirement:') !!}
    <p>{!! $parts->special_requirement !!}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{!! $parts->note !!}</p>
</div>

<!-- Operator Note Field -->
<div class="form-group">
    {!! Form::label('operator_note', 'Operator Note:') !!}
    <p>{!! $parts->operator_note !!}</p>
</div>

<!-- Quality Check 1 Field -->
<div class="form-group">
    {!! Form::label('quality_check_1', 'Quality Check 1:') !!}
    <p>{!! $parts->quality_check_1 !!}</p>
</div>

<!-- Quality Check 2 Field -->
<div class="form-group">
    {!! Form::label('quality_check_2', 'Quality Check 2:') !!}
    <p>{!! $parts->quality_check_2 !!}</p>
</div>

<!-- Quality Check 3 Field -->
<div class="form-group">
    {!! Form::label('quality_check_3', 'Quality Check 3:') !!}
    <p>{!! $parts->quality_check_3 !!}</p>
</div>

<!-- Quality Check 4 Field -->
<div class="form-group">
    {!! Form::label('quality_check_4', 'Quality Check 4:') !!}
    <p>{!! $parts->quality_check_4 !!}</p>
</div>

<!-- Quality Check 5 Field -->
<div class="form-group">
    {!! Form::label('quality_check_5', 'Quality Check 5:') !!}
    <p>{!! $parts->quality_check_5 !!}</p>
</div>

<!-- Quality Check 6 Field -->
<div class="form-group">
    {!! Form::label('quality_check_6', 'Quality Check 6:') !!}
    <p>{!! $parts->quality_check_6 !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $parts->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $parts->updated_at !!}</p>
</div>

