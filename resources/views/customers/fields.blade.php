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

<!-- Physical Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('physical_address', 'Physical Address:') !!}
    {!! Form::text('physical_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Extension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_extension', 'Address Extension:') !!}
    {!! Form::text('address_extension', null, ['class' => 'form-control']) !!}
</div>

<!-- Billing Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('billing_address', 'Billing Address:') !!}
    {!! Form::text('billing_address', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship To Address Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_to_address_id', 'Ship To Address Id:') !!}
    {!! Form::number('ship_to_address_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship To Address Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_to_address_code', 'Ship To Address Code:') !!}
    {!! Form::text('ship_to_address_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Destination Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination_code', 'Destination Code:') !!}
    {!! Form::text('destination_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrier_id', 'Carrier Id:') !!}
    {!! Form::number('carrier_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrier Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrier_code', 'Carrier Code:') !!}
    {!! Form::text('carrier_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTACT1', 'Contact1:') !!}
    {!! Form::text('CONTACT1', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_phone', 'Company Phone:') !!}
    {!! Form::text('company_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EXTENSION1', 'Extension1:') !!}
    {!! Form::text('EXTENSION1', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CONTACT2', 'Contact2:') !!}
    {!! Form::text('CONTACT2', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PHONE2', 'Phone2:') !!}
    {!! Form::text('PHONE2', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EXTENSION2', 'Extension2:') !!}
    {!! Form::text('EXTENSION2', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod', 'Cod:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('cod', false) !!}
        {!! Form::checkbox('cod', '1', null) !!} 1
    </label>
</div>

<!-- Tax Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_id', 'Tax Id:') !!}
    {!! Form::text('tax_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
</div>
