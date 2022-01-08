@extends('layouts.app')
@section('content')
    <h1>{{$listname}}</h1>
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
        </tr>
        @endforeach
    </table>
    @endif
@endsection
