@extends('layouts.app')

@section('title', 'Edit User ' . $user->first_name)

@section('content')
    <section class="content-header">
        <h1>
            EDIT USER
        </h1>
       
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                        {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ] ]) !!}
                            @include('user._form')
                            
                        {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>

@endsection