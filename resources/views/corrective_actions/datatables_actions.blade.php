{!! Form::open(['route' => ['correctiveActions.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('view_correctiveactions')
    <a href="{{ route('correctiveActions.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    @endcan
    @can('edit_correctiveactions')
    <a href="{{ route('correctiveActions.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan
    @can('delete_correctiveactions')
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
