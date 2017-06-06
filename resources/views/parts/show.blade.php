@extends('layouts.app')

@section('content')
@can('view_parts')
    <section class="content-header">
        <h1>
            Parts
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('parts.show_fields')
                    <a href="{!! route('parts.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
