@extends('templates.default')
@section('content')
<h1> All Users</h1>

    
    <table>
        <thead>
        <th>Username</th>
        <th>Editlink</th> 
        <th>DeleteLink</th>
        </thead>
        <tbody>
            
            @foreach ($users as $user)
            <tr>
                 <td>{{ link_to("/users/{$user->username}", $user->username) }}  </td>
                 <td>{{ link_to("/users/{$user->username}/edit", $user->username) }}    </td>
                 <td>{{ $user->username }} DELETE   </td>
            </tr>
            @endforeach
            
        </tbody> 
    </table>

    
    
    
@stop

@section('footer')
    
     
  <?php echo 'This is echoed into the footer!'; ?>
@stop