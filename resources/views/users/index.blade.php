<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @forelse ($users as $u)
               <tr>
                   <td>{{ $u->name }}</td>
                   <td>{{ $u->email }}</td>
                   <td>
                       <a href="{{ route('users.show', ['user' => $u->id]) }}">view User Data</a>
                       &nbsp; 
                       <form style="display: inline" action="{{ route('users.destroy', ['user' => $u->id]) }}" method="POST">
                           @method('DELETE')
                           @csrf
                          <input type="submit" value="delete">
                       </form>
                       
                    </td>
               </tr>
           @empty
               <tr>
                   <td colspan="3">no record Found</td>
               </tr>
           @endforelse
        </tbody>
    </table>
</body>
</html>