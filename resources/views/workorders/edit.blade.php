@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workorders
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($workorders, ['route' => ['workorders.update', $workorders->number], 'method' => 'patch']) !!}

                        @include('workorders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection