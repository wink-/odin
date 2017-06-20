@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workorder History
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($workorderHistory, ['route' => ['workorderHistories.update', $workorderHistory->id], 'method' => 'patch']) !!}

                        @include('workorder_histories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection