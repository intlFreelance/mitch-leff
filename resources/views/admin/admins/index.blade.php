@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="pull-left">Administrators</h1>
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('admins.create') !!}">Add New</a>
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('admin.admins.table')
                </div>
            </div>
    </div>
</div>
@endsection
