<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_code', 'Customer Code:') !!}
    {!! Form::text('customer_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Part Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('part_id', 'Part Id:') !!}
    {!! Form::number('part_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Part Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('part_number', 'Part Number:') !!}
    {!! Form::text('part_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Process Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('process_code', 'Process Code:') !!}
    {!! Form::text('process_code', null, ['class' => 'form-control']) !!}
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

<!-- Date Received Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_received', 'Date Received:') !!}
    {!! Form::date('date_received', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Required Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_required', 'Date Required:') !!}
    {!! Form::date('date_required', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Purchase Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_purchase_order', 'Customer Purchase Order:') !!}
    {!! Form::text('customer_purchase_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Packing List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_packing_list', 'Customer Packing List:') !!}
    {!! Form::text('customer_packing_list', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Unit Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_code', 'Unit Code:') !!}
    {!! Form::text('unit_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Shipped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_shipped', 'Quantity Shipped:') !!}
    {!! Form::number('quantity_shipped', null, ['class' => 'form-control']) !!}
</div>

<!-- Our Last Packing List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('our_last_packing_list', 'Our Last Packing List:') !!}
    {!! Form::number('our_last_packing_list', null, ['class' => 'form-control']) !!}
</div>

<!-- Destination Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination_code', 'Destination Code:') !!}
    {!! Form::text('destination_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrier Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrier_code', 'Carrier Code:') !!}
    {!! Form::text('carrier_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Freight Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('freight_code', 'Freight Code:') !!}
    {!! Form::text('freight_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Shipped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_shipped', 'Date Shipped:') !!}
    {!! Form::date('date_shipped', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_number', 'Invoice Number:') !!}
    {!! Form::number('invoice_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    {!! Form::date('invoice_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_amount', 'Invoice Amount:') !!}
    {!! Form::number('invoice_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', 'Priority:') !!}
    {!! Form::number('priority', null, ['class' => 'form-control']) !!}
</div>

<!-- Rework Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rework', 'Rework:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('rework', false) !!}
        {!! Form::checkbox('rework', '1', null) !!} 1
    </label>
</div>

<!-- Hot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hot', 'Hot:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('hot', false) !!}
        {!! Form::checkbox('hot', '1', null) !!} 1
    </label>
</div>

<!-- Started Field -->
<div class="form-group col-sm-6">
    {!! Form::label('started', 'Started:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('started', false) !!}
        {!! Form::checkbox('started', '1', null) !!} 1
    </label>
</div>

<!-- Completed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('completed', 'Completed:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('completed', false) !!}
        {!! Form::checkbox('completed', '1', null) !!} 1
    </label>
</div>

<!-- Shipped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipped', 'Shipped:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('shipped', false) !!}
        {!! Form::checkbox('shipped', '1', null) !!} 1
    </label>
</div>

<!-- Cod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod', 'Cod:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('cod', false) !!}
        {!! Form::checkbox('cod', '1', null) !!} 1
    </label>
</div>

<!-- Invoiced Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiced', 'Invoiced:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('invoiced', false) !!}
        {!! Form::checkbox('invoiced', '1', null) !!} 1
    </label>
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Stepname1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STEPNAME1', 'Stepname1:') !!}
    {!! Form::text('STEPNAME1', null, ['class' => 'form-control']) !!}
</div>

<!-- Tmanhrs1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TMANHRS1', 'Tmanhrs1:') !!}
    {!! Form::number('TMANHRS1', null, ['class' => 'form-control']) !!}
</div>

<!-- Tothours1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TOTHOURS1', 'Tothours1:') !!}
    {!! Form::number('TOTHOURS1', null, ['class' => 'form-control']) !!}
</div>

<!-- Stepname2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STEPNAME2', 'Stepname2:') !!}
    {!! Form::text('STEPNAME2', null, ['class' => 'form-control']) !!}
</div>

<!-- Tmanhrs2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TMANHRS2', 'Tmanhrs2:') !!}
    {!! Form::number('TMANHRS2', null, ['class' => 'form-control']) !!}
</div>

<!-- Tothours2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TOTHOURS2', 'Tothours2:') !!}
    {!! Form::number('TOTHOURS2', null, ['class' => 'form-control']) !!}
</div>

<!-- Stepname3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STEPNAME3', 'Stepname3:') !!}
    {!! Form::text('STEPNAME3', null, ['class' => 'form-control']) !!}
</div>

<!-- Tmanhrs3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TMANHRS3', 'Tmanhrs3:') !!}
    {!! Form::number('TMANHRS3', null, ['class' => 'form-control']) !!}
</div>

<!-- Tothours3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TOTHOURS3', 'Tothours3:') !!}
    {!! Form::number('TOTHOURS3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('workorderHistories.index') !!}" class="btn btn-default">Cancel</a>
</div>
