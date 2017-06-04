<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimum Lot Charge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimum_lot_charge', 'Minimum Lot Charge:') !!}
    {!! Form::number('minimum_lot_charge', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('processes.index') !!}" class="btn btn-default">Cancel</a>
</div>
