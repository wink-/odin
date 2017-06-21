<li class="header">MAIN NAVIGATION</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('customers.index') !!}"></i><span>Customers</span></a>
</li>

<li class="{{ Request::is('parts*') ? 'active' : '' }}">
    <a href="{!! route('parts.index') !!}"><span>Parts</span></a>
</li>

<li class="{{ Request::is('processes*') ? 'active' : '' }}">
    <a href="{!! route('processes.index') !!}"></i><span>Processes</span></a>

</li><li class="{{ Request::is('workorders*') ? 'active' : '' }}">
    <a href="{!! route('workorders.index') !!}"><span>Workorders</span></a>
</li>

<li class="{{ Request::is('workorderHistories*') ? 'active' : '' }}">
    <a href="{!! route('workorderHistories.index') !!}"><span>Workorder History</span></a>
</li>
<li class="header">QUALITY</li>

<li class="{{ Request::is('dmrs*') ? 'active' : '' }}">
    <a href="{!! route('dmrs.index') !!}"></i><span>Discrepant Material</span></a>
</li>
<li class="{{ Request::is('correctiveActions*') ? 'active' : '' }}">
    <a href="{!! route('correctiveActions.index') !!}"><span>Corrective Actions</span></a>
</li>

@role('Admin')
<li class="header">ADMINISTRATION</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"></i><span>Roles</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"></i><span>Users</span></a>
</li>
@endrole



