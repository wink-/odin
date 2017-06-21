<!-- Discrepant Material Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discrepant_material_id', 'Discrepant Material Id:') !!}
    {{-- Form::select('discrepant_material_id', $dmr, null, ['placeholder' => 'Choose a DMR', 'class' => 'form-control']) --}}
    <select name="discrepant_material_id" id="discrepant_material_id" class="form-control">
        @foreach($dmrs as $key => $value)
            <option value="{{ $value }}">{{ $value}}</option>
         @endforeach
    </select>
</div>

<!-- Description Of Non Conformance Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_of_non_conformance', 'Description Of Non Conformance:') !!}
    {!! Form::textarea('description_of_non_conformance', null, ['class' => 'form-control']) !!}
</div>

<!-- Containment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('containment', 'Containment Action:') !!}
    {!! Form::textarea('containment', null, ['class' => 'form-control']) !!}
</div>

<!-- Interim Action Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('interim_action', 'Interim Action:') !!}
    {!! Form::textarea('interim_action', null, ['class' => 'form-control']) !!}
</div>

<!-- Preventative Action Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('preventative_action', 'Preventative Action:') !!}
    {!! Form::textarea('preventative_action', null, ['class' => 'form-control']) !!}
</div>

<!-- Root Cause Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('root_cause', 'Root Cause:') !!}
    {!! Form::textarea('root_cause', null, ['class' => 'form-control']) !!}
</div>

<!-- Verification Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('verification', 'Verification:') !!}
    {!! Form::textarea('verification', null, ['class' => 'form-control']) !!}
</div>

<!-- Complete Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complete', 'Complete:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('complete', false) !!}
        {!! Form::checkbox('complete', '1', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('correctiveActions.index') !!}" class="btn btn-default">Cancel</a>
</div>
