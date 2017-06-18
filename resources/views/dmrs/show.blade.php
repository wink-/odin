@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            DISCREPANT MATERIAL REPORT
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('dmrs.show_fields')
                    <a href="{!! route('dmrs.index') !!}" class="btn btn-default hidden-print">Index</a>
                    @can('edit_dmrs')
                    <a href="{{ route('dmrs.edit', $dmr->id) }}" class='btn btn-default hidden-print'>
                        <i class="glyphicon glyphicon-edit"></i>Edit
                    </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
