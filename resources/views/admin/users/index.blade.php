<!DOCTYPE html>
<html>
<head>
    <title>Users Management</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <h1>Users Management</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->getRoleNames() as $role)
                            {{ $role }}@if (!$loop->last), @endif
                        @endforeach
                    </td>
                    <td>
                        <!-- Add action buttons like Edit, Delete -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
