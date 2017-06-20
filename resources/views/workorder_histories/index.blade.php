@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Workorder Histories</h1>
        <h1 class="pull-right">
        @can('add_workorder')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('workorderHistories.create') !!}">Add New</a>
        @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('workorder_histories.table')
            </div>
        </div>
    </div>
@endsection

