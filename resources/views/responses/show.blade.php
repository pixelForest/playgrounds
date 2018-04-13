@extends('layouts.app-front')
@section('styles')
<style>
.text{
  width:400px;
  margin-top: 30px;
  font-size: 13px;
  margin-left: -80px;
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
      <img src="https://api.qrserver.com/v1/create-qr-code/?data={{url('/share/'.$response->id)}}&color=00aab8&bgcolor=ffffff" alt="{{url('/response/$response->id')}}">
      <p class="text">{{url('/share/'.$response->id)}}</p>
    </div>
    <button id="done" class="done"><a href="{{route('responses.create')}}" style="text-decoration:none; color:inherit">done</a></button>
  </div>
</div>
<div id="pgWrapper" class="playground_wrapper clearfix">
  <img id="scene_bg" class="scene" src="{{'/images/'.$response->location.'/bg.png'}}" style="z-index:-21;">
  <img id="1" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/1.png'}}" style="z-index:-14;">
  <img id="2" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/2.png'}}" style="z-index:-5;">
  <img id="3" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/3.png'}}" style="z-index:-3;">
  <img id="4" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/4.png'}}" style="z-index:-8;">
  <img id="5" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/5.png'}}" style="z-index:-20;">
  <img id="6" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/6.png'}}" style="z-index:-16;">
  <img id="7_1" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="7_2" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="7_3" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="8" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/8.png'}}" style="z-index:-4;">
  <img id="9" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/9.png'}}" style="z-index:-9;">
  <img id="10" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/10.png'}}" style="z-index:-11;">
  <img id="11_1" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="11_2" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="11_3" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="11_4" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="12" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/12.png'}}" style="z-index:-17;">
  <img id="13_1" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="13_2" class="scene scene-hidden" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="scene_activity" class="scene" src="{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/activity.png'}}" style="z-index:-10;">
  <div id="scene_time" class="scene-time"  style="z-index:0; background:url('{{'/images/'.$response->location.'/time/'.$response->time.'_filter.png'}}')"></div>
  <img id="scene_lights" class="scene" src="{{'/images/'.$response->location.'/time/'.$response->time.'_lights.png'}}" style="z-index:1;">
</div>

@endsection

@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data:{
    equipment:{!!$response->equipment!!},
    location:"{{$response->location}}",
  },
  mounted(){
    console.log(this.location);
    if(this.location == 'clouds')
    {
      var digi = document.getElementById('5');
      var tree = document.getElementById('11_3');
      digi.style.zIndex = "1";
      tree.style.zIndex = "1";
    }

    for(var i=0; i<this.equipment.length;i++)
    {
      var id = this.equipment[i].id;
      if(id == 7)
      {
        var t1 = document.getElementById("7_1");
        var t2 = document.getElementById("7_2");
        var t3 = document.getElementById("7_3");

        t1.classList.toggle("scene-hidden");
        t2.classList.toggle("scene-hidden");
        t3.classList.toggle("scene-hidden");
      }
      else if(id == 11)
      {
        var t1 = document.getElementById("11_1");
        var t2 = document.getElementById("11_2");
        var t3 = document.getElementById("11_3");
        var t4 = document.getElementById("11_4");

        t1.classList.toggle("scene-hidden");
        t2.classList.toggle("scene-hidden");
        t3.classList.toggle("scene-hidden");
        t4.classList.toggle("scene-hidden");
      }
      else if(id == 13)
      {
        var t1 = document.getElementById("13_1");
        var t2 = document.getElementById("13_2");

        t1.classList.toggle("scene-hidden");
        t2.classList.toggle("scene-hidden");
      }
      else
      {
        var equ = document.getElementById(id);
        equ.classList.toggle("scene-hidden");
      }

    }


  }
});
</script>
@endsection
