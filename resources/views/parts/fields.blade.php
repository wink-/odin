<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_code', 'Customer Code:') !!}
    {!! Form::text('customer_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Process Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('process_code', 'Process Code:') !!}
    {!! Form::text('process_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Method Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('method_code', 'Method Code:') !!}
    {!! Form::text('method_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_code', 'Price Code:') !!}
    {!! Form::text('price_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Certify Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certify', 'Certify:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('certify', false) !!}
        {!! Form::checkbox('certify', '1', null) !!} 1
    </label>
</div>

<!-- Specification Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specification', 'Specification:') !!}
    {!! Form::text('specification', null, ['class' => 'form-control']) !!}
</div>

<!-- Bake Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bake', 'Bake:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('bake', false) !!}
        {!! Form::checkbox('bake', '1', null) !!} 1
    </label>
</div>

<!-- Pre Bake Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pre_bake_temperature', 'Pre Bake Temperature:') !!}
    {!! Form::text('pre_bake_temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Pre Bake Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pre_bake_time', 'Pre Bake Time:') !!}
    {!! Form::text('pre_bake_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Bake Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_bake_temperature', 'Post Bake Temperature:') !!}
    {!! Form::text('post_bake_temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Bake Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_bake_time', 'Post Bake Time:') !!}
    {!! Form::text('post_bake_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Adhesion Bake Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adhesion_bake_temperature', 'Adhesion Bake Temperature:') !!}
    {!! Form::text('adhesion_bake_temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Adhesion Bake Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adhesion_bake_time', 'Adhesion Bake Time:') !!}
    {!! Form::text('adhesion_bake_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Hardness Bake Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hardness_bake_temperature', 'Hardness Bake Temperature:') !!}
    {!! Form::text('hardness_bake_temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Hardness Bake Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hardness_bake_time', 'Hardness Bake Time:') !!}
    {!! Form::text('hardness_bake_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedure Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_code', 'Procedure Code:') !!}
    {!! Form::text('procedure_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::text('material', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material_name', 'Material Name:') !!}
    {!! Form::text('material_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material_condition', 'Material Condition:') !!}
    {!! Form::text('material_condition', null, ['class' => 'form-control']) !!}
</div>

<!-- Thickness Minimum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thickness_minimum', 'Thickness Minimum:') !!}
    {!! Form::number('thickness_minimum', null, ['class' => 'form-control']) !!}
</div>

<!-- Thickness Maximum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thickness_maximum', 'Thickness Maximum:') !!}
    {!! Form::number('thickness_maximum', null, ['class' => 'form-control']) !!}
</div>

<!-- Surface Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surface_area', 'Surface Area:') !!}
    {!! Form::number('surface_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::number('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length', 'Length:') !!}
    {!! Form::number('length', null, ['class' => 'form-control']) !!}
</div>

<!-- Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('width', 'Width:') !!}
    {!! Form::number('width', null, ['class' => 'form-control']) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::number('height', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Thickness Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material_thickness', 'Material Thickness:') !!}
    {!! Form::number('material_thickness', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Requirement Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('special_requirement', 'Special Requirement:') !!}
    {!! Form::textarea('special_requirement', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Operator Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('operator_note', 'Operator Note:') !!}
    {!! Form::textarea('operator_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_1', 'Quality Check 1:') !!}
    {!! Form::number('quality_check_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_2', 'Quality Check 2:') !!}
    {!! Form::number('quality_check_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_3', 'Quality Check 3:') !!}
    {!! Form::number('quality_check_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_4', 'Quality Check 4:') !!}
    {!! Form::number('quality_check_4', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_5', 'Quality Check 5:') !!}
    {!! Form::number('quality_check_5', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Check 6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_check_6', 'Quality Check 6:') !!}
    {!! Form::number('quality_check_6', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('parts.index') !!}" class="btn btn-default">Cancel</a>
</div>
