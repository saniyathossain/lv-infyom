@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institutes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($institutes, ['route' => ['institutes.update', $institutes->id], 'method' => 'patch']) !!}

                        @include('institutes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection