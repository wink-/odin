<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $workorders->id !!}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{!! $workorders->number !!}</p>
</div>

<!-- Customer Code Field -->
<div class="form-group">
    {!! Form::label('customer_code', 'Customer Code:') !!}
    <p>{!! $workorders->customer_code !!}</p>
</div>

<!-- Part Id Field -->
<div class="form-group">
    {!! Form::label('part_id', 'Part Id:') !!}
    <p>{!! $workorders->part_id !!}</p>
</div>

<!-- Part Number Field -->
<div class="form-group">
    {!! Form::label('part_number', 'Part Number:') !!}
    <p>{!! $workorders->part_number !!}</p>
</div>

<!-- Process Code Field -->
<div class="form-group">
    {!! Form::label('process_code', 'Process Code:') !!}
    <p>{!! $workorders->process_code !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $workorders->price !!}</p>
</div>

<!-- Price Code Field -->
<div class="form-group">
    {!! Form::label('price_code', 'Price Code:') !!}
    <p>{!! $workorders->price_code !!}</p>
</div>

<!-- Date Received Field -->
<div class="form-group">
    {!! Form::label('date_received', 'Date Received:') !!}
    <p>{!! $workorders->date_received->format("Y-m-d") !!}</p>
</div>

<!-- Date Required Field -->
<div class="form-group">
    {!! Form::label('date_required', 'Date Required:') !!}
    <p>{!! $workorders->date_required->format("Y-m-d") !!}</p>
</div>

<!-- Customer Purchase Order Field -->
<div class="form-group">
    {!! Form::label('customer_purchase_order', 'Customer Purchase Order:') !!}
    <p>{!! $workorders->customer_purchase_order !!}</p>
</div>

<!-- Customer Packing List Field -->
<div class="form-group">
    {!! Form::label('customer_packing_list', 'Customer Packing List:') !!}
    <p>{!! $workorders->customer_packing_list !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $workorders->quantity !!}</p>
</div>

<!-- Unit Code Field -->
<div class="form-group">
    {!! Form::label('unit_code', 'Unit Code:') !!}
    <p>{!! $workorders->unit_code !!}</p>
</div>

<!-- Quantity Shipped Field -->
<div class="form-group">
    {!! Form::label('quantity_shipped', 'Quantity Shipped:') !!}
    <p>{!! $workorders->quantity_shipped !!}</p>
</div>

<!-- Our Last Packing List Field -->
<div class="form-group">
    {!! Form::label('our_last_packing_list', 'Our Last Packing List:') !!}
    <p>{!! $workorders->our_last_packing_list !!}</p>
</div>

<!-- Destination Code Field -->
<div class="form-group">
    {!! Form::label('destination_code', 'Destination Code:') !!}
    <p>{!! $workorders->destination_code !!}</p>
</div>

<!-- Carrier Code Field -->
<div class="form-group">
    {!! Form::label('carrier_code', 'Carrier Code:') !!}
    <p>{!! $workorders->carrier_code !!}</p>
</div>

<!-- Freight Code Field -->
<div class="form-group">
    {!! Form::label('freight_code', 'Freight Code:') !!}
    <p>{!! $workorders->freight_code !!}</p>
</div>

<!-- Date Shipped Field -->
<div class="form-group">
    {!! Form::label('date_shipped', 'Date Shipped:') !!}
    <p>{!! $workorders->date_shipped !!}</p>
</div>

<!-- Invoice Number Field -->
<div class="form-group">
    {!! Form::label('invoice_number', 'Invoice Number:') !!}
    <p>{!! $workorders->invoice_number !!}</p>
</div>

<!-- Invoice Date Field -->
<div class="form-group">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    <p>{!! $workorders->invoice_date !!}</p>
</div>

<!-- Invoice Amount Field -->
<div class="form-group">
    {!! Form::label('invoice_amount', 'Invoice Amount:') !!}
    <p>{!! $workorders->invoice_amount !!}</p>
</div>

<!-- Priority Field -->
<div class="form-group">
    {!! Form::label('priority', 'Priority:') !!}
    <p>{!! $workorders->priority !!}</p>
</div>

<!-- Rework Field -->
<div class="form-group">
    {!! Form::label('rework', 'Rework:') !!}
    <p>{!! $workorders->rework !!}</p>
</div>

<!-- Hot Field -->
<div class="form-group">
    {!! Form::label('hot', 'Hot:') !!}
    <p>{!! $workorders->hot !!}</p>
</div>

<!-- Started Field -->
<div class="form-group">
    {!! Form::label('started', 'Started:') !!}
    <p>{!! $workorders->started !!}</p>
</div>

<!-- Completed Field -->
<div class="form-group">
    {!! Form::label('completed', 'Completed:') !!}
    <p>{!! $workorders->completed !!}</p>
</div>

<!-- Shipped Field -->
<div class="form-group">
    {!! Form::label('shipped', 'Shipped:') !!}
    <p>{!! $workorders->shipped !!}</p>
</div>

<!-- Cod Field -->
<div class="form-group">
    {!! Form::label('cod', 'Cod:') !!}
    <p>{!! $workorders->cod !!}</p>
</div>

<!-- Invoiced Field -->
<div class="form-group">
    {!! Form::label('invoiced', 'Invoiced:') !!}
    <p>{!! $workorders->invoiced !!}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{!! $workorders->note !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $workorders->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $workorders->updated_at !!}</p>
</div>

<!-- Createdat Field -->
<div class="form-group">
    {!! Form::label('createdAt', 'Createdat:') !!}
    <p>{!! $workorders->createdAt !!}</p>
</div>

<!-- Updatedat Field -->
<div class="form-group">
    {!! Form::label('updatedAt', 'Updatedat:') !!}
    <p>{!! $workorders->updatedAt !!}</p>
</div>

