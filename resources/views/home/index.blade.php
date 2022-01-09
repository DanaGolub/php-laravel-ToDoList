@extends('layouts.app')
@section('content')
<h1>{{$listname}}</h1>

<p>
    <a href='/home/create'>Create New Todo Item</a>
</p>

@if (count($todos) > 0)
<table>
    <!-- Iterate through tasks. -->
    @foreach ($todos as $todo)
    <tr>
        <td>
            <div>{{ $todo->id }}</div>
        </td>
        <td>
            <div>{{ $todo->description }}</div>
        </td>
        <td>
            <a href="/home/detail/{{ $todo->id }}">detail</a>
        </td>
        <td>
            <form action="/home/delete" method="POST">
                <input type="hidden" name="id" value="{{$todo->id}}" />
                <!-- For safety, the csrf token ensures the post request is 
            from the current application and not a 3rd party -->
                {{ csrf_field() }}
                <input type="submit" value="Delete" />
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif
@endsection