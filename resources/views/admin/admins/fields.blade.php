<div class="panel-body">
    <div class="row">
        <!-- First Name Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required'=>'required']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <!-- Email Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required'=>'required']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('password_confirmation', 'Confirm Password:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="panel-footer">
        <!-- Submit Field -->
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id'=>'btn_submit']) !!}
        <a href="{!! route('admins.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>