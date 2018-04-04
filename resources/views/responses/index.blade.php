@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<div class="container" style="padding-top:50px">
<table class="table is-narrow is-fullwidth">
        <thead>
          <tr>
            <th>id</th>
            <th>age</th>
            <th>gender</th>
            <th>children</th>
            <th>housing</th>
            <th>belonging</th>
            <th>inclusive</th>
            <th>time</th>
            <th>company</th>
            <th>element</th>
            <th>location</th>
            <th>activity</th>
            <th>uniques</th>
            <th>equipment</th>
          </tr>
        </thead>
        <tbody>
          @foreach($responses as $response)
          <tr>
            <th>{{$response->id}}</th>
            <td>{{$response->age}}</td>
            <td>{{$response->sex}}</td>
            <td>{{$response->children}}</td>
            <td>{{$response->housing}}</td>
            <td>{{$response->belonging}}</td>
            <td>{{$response->inclusive}}</td>
            <td>{{$response->time}}</td>
            <td>{{$response->company}}</td>
            <td>{{$response->element}}</td>
            <td>{{$response->location}}</td>
            <td>{{$response->activity}}</td>
            <td>
              @foreach($response->uniques as $unique)
              <span>{{$unique->answer}}<span><br>
              @endforeach
            </td>
            <td>
              @foreach($response->equipment as $equ)
              <span>{{$equ->answer}}<span><br>
              @endforeach
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
@section('scripts')
@endsection
