@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Parts
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($parts, ['route' => ['parts.update', $parts->id], 'method' => 'patch']) !!}

                        @include('parts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection