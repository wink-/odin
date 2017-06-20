{!! Form::open(['route' => ['workorderHistories.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('view_workorders')
    <a href="{{ route('workorderHistories.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    @endcan
    @can('edit_workorders')
    <a href="{{ route('workorderHistories.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan
    @can('delete_workorders')
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
