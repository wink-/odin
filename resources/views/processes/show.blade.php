@extends('layouts.app')

@section('content')
@can('view_processes')
    <section class="content-header">
        <h1>
            Processes
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('processes.show_fields')
                    <a href="{!! route('processes.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
