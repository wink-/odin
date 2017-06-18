@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dmr
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'dmrs.store', 'files' => true]) !!}

                        @include('dmrs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
