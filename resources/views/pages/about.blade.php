@extends('layouts.app')

@section('content')

  <h1>{{$wew}}</h1>
  @if(count($durhaka) > 0)
    <ul class="list-group">
      @foreach($durhaka as $anak)
        <li class="list-group-item">{{@$anak}}</li>
      @endforeach
    </ul>
  @endif

@endsection
