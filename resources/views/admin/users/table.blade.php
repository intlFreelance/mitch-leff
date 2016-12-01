<table class="table table-responsive table-striped" id="categories-table">
    <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Business Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th colspan="3" class="text-right">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->id !!}</td>
            <td>{!! $user->firstName !!}</td>
            <td>{!! $user->lastName !!}</td>
            <td>{!! $user->businessName !!}</td>
            <td>{!! $user->phoneNumber !!}</td>
            <td><a href="mailto:{!! $user->email !!}">{!! $user->email !!}</a></td>
            <td class="text-right">
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
