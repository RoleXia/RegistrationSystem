@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @foreach ($games as $game)
                            <h4>{{$game->lib}}</h4>
                            <p>{{$game->description}}</p>
                            <span>Complexité : {{$game->complexity}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
