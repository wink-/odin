@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Corrective Actions</h1>
        <h1 class="pull-right">
        @can('add_correctiveactions')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('correctiveActions.create') !!}">Add New</a>
        @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('corrective_actions.table')
            </div>
        </div>
    </div>
@endsection

