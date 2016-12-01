@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="pull-left">Users</h1>
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Add New</a>
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('admin.users.table')
                </div>
            </div>
    </div>
</div>
@endsection
