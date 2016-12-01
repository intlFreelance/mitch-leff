<div class="panel-body">
    <div class="row">
        <!-- First Name Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('firstName', 'First Name:') !!}
            {!! Form::text('firstName', null, ['class' => 'form-control', 'required'=>'required']) !!}
            @if ($errors->has('firstName'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstName') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('lastName', 'Last Name:') !!}
            {!! Form::text('lastName', null, ['class' => 'form-control', 'required'=>'required']) !!}
            @if ($errors->has('lastName'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastName') }}</strong>
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
            {!! Form::label('phoneNumber', 'Phone Number:') !!}
            {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
            @if ($errors->has('phoneNumber'))
                <span class="help-block">
                    <strong>{{ $errors->first('phoneNumber') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-sm-8">
            {!! Form::label('businessName', 'Business Name:') !!}
            {!! Form::text('businessName', null, ['class' => 'form-control']) !!}
            @if ($errors->has('businessName'))
                <span class="help-block">
                    <strong>{{ $errors->first('businessName') }}</strong>
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
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                    <div class="row">
                         <div class="form-group col-sm-6">
                            {!! Form::label("address[line1]", 'Line 1:') !!}
                            {!! Form::text("address[line1]", null,  ['class' => 'form-control', 'required'=>'required']) !!}
                            @if ($errors->has('address.line1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address.line1') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6">
                            {!! Form::label("address[line2]", 'Line 2:') !!}
                            {!! Form::text("address[line2]", null,  ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            {!! Form::label("address[city]", 'City:') !!}
                            {!! Form::text("address[city]", null,  ['class' => 'form-control', 'required'=>'required']) !!}
                            @if ($errors->has('address.city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address.city') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label("address[state]", 'State:') !!}
                            {!! Form::text("address[state]", null,  ['class' => 'form-control', 'required'=>'required']) !!}
                            @if ($errors->has('address.state'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address.state') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label("address[zip]", 'Zip Code:') !!}
                            {!! Form::text("address[zip]", null,  ['class' => 'form-control', 'required'=>'required']) !!}
                            @if ($errors->has('address.zip'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address.zip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel-footer">
        <!-- Submit Field -->
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id'=>'btn_submit']) !!}
        <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>