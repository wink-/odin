@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Processes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($processes, ['route' => ['processes.update', $processes->id], 'method' => 'patch']) !!}

                        @include('processes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection