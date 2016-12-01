@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>New User</h2></div>
                        {!! Form::open(['route' => 'users.store']) !!}
                            @include('admin.users.fields')
                        {!! Form::close() !!}
            </div>
        </div>
                        
    </div>
  </div>
@endsection
