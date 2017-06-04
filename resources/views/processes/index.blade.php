@extends('layouts.app')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
@section('content')
    <section class="content-header">
        <h1 class="pull-left">Processes</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('processes.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('processes.table')
            </div>
        </div>
    </div>
@endsection

