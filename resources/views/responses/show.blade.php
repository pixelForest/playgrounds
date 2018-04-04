@extends('layouts.app-front')
@section('styles')
<style>
.text{
  margin-top: 30px;
  font-size: 13px;
  text-align: center;
  color: rgb(77, 77, 77);
}
</style>
@endsection
@section('content')
<div id="pop-over" class="pop-over clearfix">
  <div id="share-panel" class="share-panel clearfix">
    <p class="h1">Nice work!</p>
    <p class="h2">Thank you for taking the time to build your dream playground with us. If you would like to share or save your work, scan the QR Code or visit the link!</p>
    <div id="QR-container" class="qr-container">
      <img src="https://api.qrserver.com/v1/create-qr-code/?data={{url('/response/'.$response->id)}}&color=00aab8&bgcolor=ffffff" alt="{{url('/response/$response->id')}}">
      <p class="text">{{url('/response/'.$response->id)}}</p>
    </div>
    <button id="done" class="done"><a href="{{route('responses.create')}}" style="text-decoration:none; color:inherit">done</a></button>
  </div>
</div>
<div id="pgWrapper" class="playground_wrapper clearfix">
  <img id="scene" class="scene" src="{{asset('images/Background_Local_Park.png')}}">
</div>

@endsection

@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data:{
  },
});
</script>
@endsection
