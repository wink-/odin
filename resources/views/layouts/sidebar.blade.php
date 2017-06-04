<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
{{-- no need for user panel
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://surfacefinishtech.com/images/logoWaterBoltLarge.png" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>Odin</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
--}}        
{{-- No need for search bar
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
--}}
<ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{!! route('customers.index') !!}"><i class="fa"></i> <span>Customers</span></a></li>
        <li><a href="{!! route('processes.index') !!}"><i class="fa"></i> <span>Processes</span></a></li>

</ul>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>