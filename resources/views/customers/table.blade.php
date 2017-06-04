<table class="table table-responsive" id="customers-table">
    <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Physical Address</th>
        <th>City, State, Zip</th>
        <th>Company Phone</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customers)
        <tr>
            <td>{!! $customers->code !!}</td>
            <td>{!! $customers->name !!}</td>
            <td>{!! $customers->physical_address !!}</td>
            <td>{!! $customers->city . ', '  . $customers->state . ' ' . $customers->zip!!}</td>
            <td>{!! $customers->company_phone !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>