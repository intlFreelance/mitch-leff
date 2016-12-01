<table class="table table-responsive table-striped" id="categories-table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3" class="text-right">Action</th>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        <tr>
            <td>{!! $admin->id !!}</td>
            <td>{!! $admin->name !!}</td>
            <td><a href="mailto:{!! $admin->email !!}">{!! $admin->email !!}</a></td>
            <td class="text-right">
                {!! Form::open(['route' => ['admins.destroy', $admin->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admins.show', [$admin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admins.edit', [$admin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
