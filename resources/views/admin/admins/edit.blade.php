@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Edit Administrator</h2></div>
                    {!! Form::model($admin, ['route' => ['admins.update', $admin->id], 'method' => 'patch']) !!}
                        @include('admin.admins.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
