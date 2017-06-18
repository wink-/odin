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

<li class="{{ Request::is('dmrs*') ? 'active' : '' }}">
    <a href="{!! route('dmrs.index') !!}"></i><span>Dmrs</span></a>
</li>

