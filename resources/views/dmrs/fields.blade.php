<!-- Workorder Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('workorder_id', 'Workorder:') !!}
    {!! Form::number('workorder_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Rejected Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_rejected', 'Quantity Rejected:') !!}
    {!! Form::number('quantity_rejected', null, ['class' => 'form-control']) !!}
</div>

<!-- Reason For Rejection Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reason_for_rejection', 'Reason For Rejection:') !!}
    {!! Form::textarea('reason_for_rejection', null, ['class' => 'form-control']) !!}
</div>

<!-- Rejection Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rejection_date', 'Rejection Date:') !!}
    {!! Form::date('rejection_date', $dmr->rejection_date, ['class' => 'form-control']) !!}
</div>

<!-- Rejection Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rejection_type', 'Rejection Type:') !!}
    {!! Form::select('rejection_type', ['internal' => 'Internal', 'external' => 'External'], 'internal'); !!}
</div>

<!-- Corrective Action Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date:') !!}
    {!! Form::date('corrective_action_due_date', $dmr->corrective_action_due_date , ['class' => 'form-control']) !!}
</div>

<!-- Image of Discrepant Material -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Picture of Discrepant Material:') !!}
    {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
</div>

<!-- Customer Supplied DMR  -->
<div class="form-group col-sm-6">
    {!! Form::label('dmr_form', 'Customer Supplied DMR:') !!}
    {!! Form::file('dmr_form', ['class' => 'form-control', 'accept' => 'application/pdf']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dmrs.index') !!}" class="btn btn-default">Cancel</a>
</div>
