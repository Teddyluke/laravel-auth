@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista Impiegati') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                      @foreach ($employees as $employee)
                        <li><a href="#">{{$employee -> name}} {{$employee -> surname}} </a></li>
                      @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
