@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Employee Data</h1>
    <ul>
      <li>{{$employee -> name}}</li>
      <li>{{$employee -> surname}}</li>
      <li>{{$employee -> location -> city}}
            ({{$employee -> location -> address}})
      </li>
    </ul>
    @auth
      <a href="#">EDIT</a> <a href="{{route('emp-delete', $employee -> id)}}">DELETE</a>
    @endauth
  </div>
@endsection
