@extends('layouts.admin')

@section('content')
<h1>Utenti</h1>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
</thead> 
  <tbody>
    @if($users)
    @foreach ($users as $user )
        
    
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
    </tr>
    
    
    @endforeach
    
    @endif

</tbody>  
    </table>
@stop