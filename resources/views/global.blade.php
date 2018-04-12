@extends('layouts.app-global')
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
<div id="pg3-wrapper" class="pg3-wrapper">
  <img id="pg3_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg3_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg3_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg3_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg3_5" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg3_6" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg3_7_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg3_7_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg3_7_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg3_8" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg3_9" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg3_10" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg3_11_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg3_11_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg3_11_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg3_11_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg3_12" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg3_13_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg3_13_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg3_scene_activity" class="playground" src="{{'/images/'.$responses[0]->location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="pg2-wrapper" class="pg2-wrapper">
  <img id="pg2_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg2_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg2_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg2_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg2_5" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg2_6" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg2_7_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg2_7_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg2_7_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg2_8" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg2_9" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg2_10" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg2_11_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg2_11_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg2_11_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg2_11_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg2_12" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg2_13_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg2_13_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg2_scene_activity" class="playground" src="{{'/images/'.$responses[0]->location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="pg1-wrapper" class="pg1-wrapper">
  <img id="pg1_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg1_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg1_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg1_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg1_5" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg1_6" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg1_7_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg1_7_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg1_7_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg1_8" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg1_9" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg1_10" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg1_11_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg1_11_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg1_11_3" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg1_11_4" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg1_12" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg1_13_1" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg1_13_2" class="playground playground-hidden" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg1_scene_activity" class="playground" src="{{'/images/'.$responses[0]->location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="global-wrapper" class="global-wrapper clearfix">
  <img id="bg" class="background" src="{{'/images/global/'.$responses[0]->location.'_bg.png'}}">
</div>


@endsection

@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data:{
    equipment1:{!!$responses[0]->equipment!!},
    equipment2:{!!$responses[1]->equipment!!},
    equipment3:{!!$responses[2]->equipment!!},
  },
  mounted(){

    for(var i=0; i<this.equipment1.length;i++)
    {
      var id = this.equipment1[i].id;
      if(id == 7)
      {
        var t1 = document.getElementById("pg1_7_1");
        var t2 = document.getElementById("pg1_7_2");
        var t3 = document.getElementById("pg1_7_3");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
      }
      else if(id == 11)
      {
        var t1 = document.getElementById("pg1_11_1");
        var t2 = document.getElementById("pg1_11_2");
        var t3 = document.getElementById("pg1_11_3");
        var t4 = document.getElementById("pg1_11_4");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
        t4.classList.toggle("playground-hidden");
      }
      else if(id == 13)
      {
        var t1 = document.getElementById("pg1_13_1");
        var t2 = document.getElementById("pg1_13_2");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
      }
      else
      {
        var pgId = 'pg1_'+id;
        var equ = document.getElementById(pgId);
        equ.classList.toggle("playground-hidden");
      }

    }

    for(var i=0; i<this.equipment2.length;i++)
    {
      var id = this.equipment2[i].id;
      if(id == 7)
      {
        var t1 = document.getElementById("pg2_7_1");
        var t2 = document.getElementById("pg2_7_2");
        var t3 = document.getElementById("pg2_7_3");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
      }
      else if(id == 11)
      {
        var t1 = document.getElementById("pg2_11_1");
        var t2 = document.getElementById("pg2_11_2");
        var t3 = document.getElementById("pg2_11_3");
        var t4 = document.getElementById("pg2_11_4");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
        t4.classList.toggle("playground-hidden");
      }
      else if(id == 13)
      {
        var t1 = document.getElementById("pg2_13_1");
        var t2 = document.getElementById("pg2_13_2");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
      }
      else
      {
        var pgId = 'pg2_'+id;
        var equ = document.getElementById(pgId);
        equ.classList.toggle("playground-hidden");
      }

    }

    for(var i=0; i<this.equipment3.length;i++)
    {
      var id = this.equipment3[i].id;
      if(id == 7)
      {
        var t1 = document.getElementById("pg3_7_1");
        var t2 = document.getElementById("pg3_7_2");
        var t3 = document.getElementById("pg3_7_3");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
      }
      else if(id == 11)
      {
        var t1 = document.getElementById("pg3_11_1");
        var t2 = document.getElementById("pg3_11_2");
        var t3 = document.getElementById("pg3_11_3");
        var t4 = document.getElementById("pg3_11_4");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
        t3.classList.toggle("playground-hidden");
        t4.classList.toggle("playground-hidden");
      }
      else if(id == 13)
      {
        var t1 = document.getElementById("pg3_13_1");
        var t2 = document.getElementById("pg3_13_2");

        t1.classList.toggle("playground-hidden");
        t2.classList.toggle("playground-hidden");
      }
      else
      {
        var pgId = 'pg3_'+id;
        var equ = document.getElementById(pgId);
        equ.classList.toggle("playground-hidden");
      }

    }


  }
});
</script>
@endsection
