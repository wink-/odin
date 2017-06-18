<!-- Id Field -->
<!-- Workorder Id Field -->
<!-- Customer Code Field -->
<div class="form-group">
    <span class="col-md-3 no-padding">
    {!! Form::label('id', 'DMR Number: ') !!}
    {!! $dmr->id !!}
    </span>
    <span class="col-md-3">
    {!! Form::label('workorder_id', 'Workorder: ') !!}
    {!! $dmr->workorder_id !!}
    </span>
    <span class="col-md-6">
    {!! Form::label('customer_code', 'Customer Code: ') !!}
    {!! $dmr->customer_code !!}      
    </span>
</div>

<!-- Process Code Field -->
<!-- Quantity Rejected Field -->
<div class="form-group">
    <span class="col-md-3 no-padding">
    {!! Form::label('process_code', 'Process Code: ') !!}
    {!! $dmr->process_code !!}
    </span>
    <span class="col-md-9 ">
    {!! Form::label('quantity_rejected', 'Quantity Rejected: ') !!}
    {!! $dmr->quantity_rejected !!}    
    </span>
</div>

<!-- Reason For Rejection Field -->
<div class="form-group">
{!! Form::label('reason_for_rejection', 'Reason for Rejection: ') !!}
    @if ($dmr->form_url)
        <a href="{{ Storage::url("dmr_forms/$dmr->form_url") }}" class="hidden-print" type="application/pdf" target="_blank">Customer Supplied DMR</a>
    @endif
    <p>{!! $dmr->reason_for_rejection !!}</p>

</div>

<!-- Rejection Date Field -->
<!-- Corrective Action Due Date Field -->
<div class="form-group">
    @if ($dmr->rejection_date)
    <span class="col-md-2 no-padding">
    {!! Form::label('rejection_date', 'Rejection Date: ') !!}
    
        {!! $dmr->rejection_date->toDateString() !!}
    </span>
    @endif
    @if ($dmr->corrective_action_due_date)
    <span class="no-padding">
    {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date:') !!}
        {!! $dmr->corrective_action_due_date->toDateString() !!}
    </span>
    @endif
</div>

<!-- Rejection Type Field -->
<div class="form-group">
    {!! Form::label('rejection_type', 'Rejection Type:') !!}
    {!! $dmr->rejection_type !!}
</div>



<!-- Created At Field -->
<!-- Updated At Field -->
<div class="form-group hidden-print">
    <span class="col-md-2 no-padding">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $dmr->created_at !!}
    </span>
    <span class="col-md-2 no-padding">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $dmr->updated_at !!}
    </span>
</div>

<!-- Image Name -->
<div class="form-group">
    {!! Form::label('image_url', 'Image:') !!}
    @if ($dmr->image_url)
        <a href="{{ Storage::url("dmr_images/$dmr->image_url") }}" class="hidden-print" target="_blank">
            <img class="img-responsive" src="<?php echo asset("storage/dmr_images/$dmr->image_url")?>" style="height:480px"></img>
        </a>
        <img class="img-responsive visible-print-block" src="<?php echo asset("storage/dmr_images/$dmr->image_url")?>" style="height:480px"></img>
    @endif
</div>
