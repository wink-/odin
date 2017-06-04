<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{!! $processes->code !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $processes->name !!}</p>
</div>

<!-- Minimum Lot Charge Field -->
<div class="form-group">
    {!! Form::label('minimum_lot_charge', 'Minimum Lot Charge:') !!}
    <p>{!! $processes->minimum_lot_charge !!}</p>
</div>
