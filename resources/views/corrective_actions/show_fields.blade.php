<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $correctiveAction->id !!}</p>
</div>

<!-- Discrepant Material Id Field -->
<div class="form-group">
    {!! Form::label('discrepant_material_id', 'Discrepant Material Id:') !!}
    <p>{!! $correctiveAction->discrepant_material_id !!}</p>
</div>

<!-- Description Of Non Conformance Field -->
<div class="form-group">
    {!! Form::label('description_of_non_conformance', 'Description Of Non Conformance:') !!}
    <p>{!! $correctiveAction->description_of_non_conformance !!}</p>
</div>

<!-- Containment Field -->
<div class="form-group">
    {!! Form::label('containment', 'Containment Action:') !!}
    <p>{!! $correctiveAction->containment !!}</p>
</div>

<!-- Interim Action Field -->
<div class="form-group">
    {!! Form::label('interim_action', 'Interim Action:') !!}
    <p>{!! $correctiveAction->interim_action !!}</p>
</div>

<!-- Preventative Action Field -->
<div class="form-group">
    {!! Form::label('preventative_action', 'Preventative Action:') !!}
    <p>{!! $correctiveAction->preventative_action !!}</p>
</div>

<!-- Root Cause Field -->
<div class="form-group">
    {!! Form::label('root_cause', 'Root Cause:') !!}
    <p>{!! $correctiveAction->root_cause !!}</p>
</div>

<!-- Verification Field -->
<div class="form-group">
    {!! Form::label('verification', 'Verification:') !!}
    <p>{!! $correctiveAction->verification !!}</p>
</div>

<!-- Complete Field -->
<div class="form-group">
    {!! Form::label('complete', 'Complete:') !!}
    <p>{!! $correctiveAction->complete !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $correctiveAction->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $correctiveAction->updated_at !!}</p>
</div>