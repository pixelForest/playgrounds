@extends('layouts.app-global')
@section('styles')
<style>
.text{
  margin-top: 30px;
  font-size: 13px;
  text-align: center;
  color: rgb(77, 77, 77);
}
.h1 {
  width: 100%;
  margin: auto;
  font-family: ITCAvantGardeStd-Demi;
  font-size: 72px;
  color: rgb(51, 51, 51);
  margin-top: 45vh;
  text-align: center;

}
</style>
@endsection
@section('content')
<div id="pg1-wrapper" class="pg1-wrapper">
  <img id="pg3_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg3_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg3_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg3_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg3_5" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg3_6" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg3_7_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg3_7_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg3_7_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg3_8" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg3_9" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg3_10" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg3_11_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg3_11_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg3_11_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg3_11_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg3_12" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg3_13_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg3_13_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg3_scene_activity" class="playground" src="{{'/images/'.$location.'/'.$responses[2]->age.'/'.$responses[2]->activity.'/'.$responses[2]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="pg2-wrapper" class="pg2-wrapper">
  <img id="pg2_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg2_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg2_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg2_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg2_5" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg2_6" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg2_7_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg2_7_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg2_7_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg2_8" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg2_9" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg2_10" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg2_11_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg2_11_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg2_11_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg2_11_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg2_12" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg2_13_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg2_13_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg2_scene_activity" class="playground" src="{{'/images/'.$location.'/'.$responses[1]->age.'/'.$responses[1]->activity.'/'.$responses[1]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="pg3-wrapper" class="pg3-wrapper">
  <img id="pg1_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/1.png'}}" style="z-index:-14;">
  <img id="pg1_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/2.png'}}" style="z-index:-5;">
  <img id="pg1_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/3.png'}}" style="z-index:-3;">
  <img id="pg1_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/4.png'}}" style="z-index:-8;">
  <img id="pg1_5" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/5.png'}}" style="z-index:-20;">
  <img id="pg1_6" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/6.png'}}" style="z-index:-16;">
  <img id="pg1_7_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_1.png'}}" style="z-index:-2;">
  <img id="pg1_7_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_2.png'}}" style="z-index:-15;">
  <img id="pg1_7_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/7_3.png'}}" style="z-index:-18;">
  <img id="pg1_8" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/8.png'}}" style="z-index:-4;">
  <img id="pg1_9" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/9.png'}}" style="z-index:-9;">
  <img id="pg1_10" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/10.png'}}" style="z-index:-11;">
  <img id="pg1_11_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_1.png'}}" style="z-index:-1;">
  <img id="pg1_11_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_2.png'}}" style="z-index:-6;">
  <img id="pg1_11_3" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_3.png'}}" style="z-index:-13;">
  <img id="pg1_11_4" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/11_4.png'}}" style="z-index:-19;">
  <img id="pg1_12" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/12.png'}}" style="z-index:-17;">
  <img id="pg1_13_1" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/13_1.png'}}" style="z-index:-12;">
  <img id="pg1_13_2" class="playground playground-hidden" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/13_2.png'}}" style="z-index:-7;">
  <img id="pg1_scene_activity" class="playground" src="{{'/images/'.$location.'/'.$responses[0]->age.'/'.$responses[0]->activity.'/'.$responses[0]->company.'/activity.png'}}" style="z-index:-10;">
</div>
<div id="global-wrapper" class="global-wrapper clearfix">
  @if($location == 'clouds' && ($responses[0]->time == 'night' || $responses[0]->time == 'evening'))
  <img id="bg" class="background" src="{{'/images/global/'.$location.'_'.$responses[0]->time.'_bg.png'}}">
  @else
  <img id="bg" class="background" src="{{'/images/global/'.$location.'_bg.png'}}">
  @endif
</div>

<div id="fetching-wrapper" class="fetching-wrapper clearfix fetching-wrapper-show" style="z-index:99">
  <p class="h1" style="z-index:100">fetching more playgrounds...</p>
</div>

<div id="stats-page-1" class="stats-wrapper stats-wrapper-1 clearfix stats-hide">
  <p class="stats-title stats-title-1">Quick Maths</p>
  <p id="stat5" class="stats-copy">The ideal playgrounds of individuals between 20-30 years old are mostly situated <font color="#ff6143">@{{this.stats.q1}}</font>.</p>
  <p id="stat10" class="stats-copy">The ideal playgrounds of individuals between  31-50 years old  are mostly situated&nbsp;<strong>@{{this.stats.q2}}</strong>.</p>
  <p id="stat15" class="stats-copy">Women tend to visit playgrounds with <strong>@{{this.stats.q3}}</strong>.</p>
  <p id="stat20" class="stats-copy">The ideal playgrounds of men  are mostly situated&nbsp;<font color="#ff6143">@{{this.stats.q4}}</font>.</p>
  <p id="stat25" class="stats-copy">Individuals over 50 years old mostly tend to visit the playground with&nbsp;<font color="#ff6143">@{{this.stats.q5}}</font>.</p>
</div>
<div id="stats-page-4" class="stats-wrapper stats-wrapper-2 clearfix stats-hide">
  <p class="stats-title stats-title-2">Quick Maths</p>
  <p id="stat4" class="stats-copy">Most people prefer that playgrounds have <strong>@{{this.stats.q6}}</strong>.</p>
  <p id="stat9" class="stats-copy">Individuals between 31-50 years old mostly visit the playground to <strong>@{{this.stats.q7}}</strong>.</p>
  <p id="stat14" class="stats-copy">Men prefer that playgrounds have <strong>@{{this.stats.q8}}</strong>.</p>
  <p id="stat19" class="stats-copy">The ideal playgrounds of women are mostly situated <font color="#ff6143">@{{this.stats.q9}}</font>.</p>
  <p id="stat24" class="stats-copy">Individuals over 50 years old mostly tend to visit the playground to&nbsp;<font color="#ff6143">@{{this.stats.q10}}</font>.</p>
</div>
<div id="stats-page-3" class="stats-wrapper stats-wrapper-3 clearfix stats-hide">
  <p class="stats-title stats-title-3">Quick Maths</p>
  <p id="stat3" class="stats-copy"><strong>@{{this.stats.q11_1}}%</strong> of all respondents, envision their ideal playground being situated <strong>@{{this.stats.q11_2}}</strong>.</p>
  <p id="stat8" class="stats-copy">Individuals between 20-30 years old prefer that playgrounds have <strong>@{{this.stats.q12}}</strong>.</p>
  <p id="stat13" class="stats-copy">Women prefer that playgrounds have <font color="#ff6143">@{{this.stats.q13}}</font>.</p>
  <p id="stat18" class="stats-copy">Men mostly visit the playground to <font color="#ff6143">@{{this.stats.q14}}</font>.</p>
  <p id="stat23" class="stats-copy">Individuals over 50 years old mostly prefer that playgrounds  have&nbsp;<font color="#ff6143">@{{this.stats.q15}}</font>.</p>
</div>
<div id="stats-page-2" class="stats-wrapper stats-wrapper-4 clearfix stats-hide">
  <p class="stats-title stats-title-4">Quick Maths</p>
  <p id="stat2" class="stats-copy"><strong>@{{this.stats.q16_1}}%</strong> of all respondents believe that the most important element of a playground is that <strong>@{{this.stats.q16_2}}</strong>.</p>
  <p id="stat7" class="stats-copy">Individuals between 20-30 years old mostly believe that the most important aspect of a playground is that <strong>@{{this.stats.q17}}</strong>.</p>
  <p id="stat12" class="stats-copy">Individuals between 31-50 years old prefer that playgrounds have <font color="#ff6143">@{{this.stats.q18}}</font>.</p>
  <p id="stat17" class="stats-copy">Women mostly visit the playground to <font color="#ff6143">@{{this.stats.q19}}</font>.</p>
  <p id="stat22" class="stats-copy">People with children mostly believe that the most important element of a playground is that&nbsp;<font color="#ff6143">@{{this.stats.q20}}</font>.</p>
</div>
<div id="stats-page-5" class="stats-wrapper stats-wrapper-5 clearfix stats-hide">
  <p class="stats-title stats-title-5">Quick Maths</p>
  <p id="stat1" class="stats-copy"><strong>@{{this.stats.q21_1}}%</strong> of all respondents visit the playground to <strong>@{{this.stats.q21_2}}</strong>.</p>
  <p id="stat6" class="stats-copy">Individuals between 20-30 years old mostly visit playgrounds with <strong>@{{this.stats.q22}}</strong>.</p>
  <p id="stat11" class="stats-copy">Individuals between 31-50 years old mostly believe that the most important aspect of a playground is that <strong>@{{this.stats.q23}}</strong>.</p>
  <p id="stat16" class="stats-copy">Men tend to visit playgrounds with <font color="#ff6143">@{{this.stats.q24}}</font>.</p>
  <p id="stat21" class="stats-copy">People with children mostly prefer their playgrounds to have&nbsp;<font color="#ff6143">@{{this.stats.q25}}</font>.</p>
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
    stats:{!!$stats!!},
    myAudio:null,
  },
  methods:{
    showFetch(){
      var fetch = document.getElementById("fetching-wrapper");
      fetch.classList.toggle("fetching-wrapper-show");
    },
    stats1(){
      var s = document.getElementById("stats-page-1");
      s.classList.toggle("stats-hide");
    },
    stats2(){
      var s = document.getElementById("stats-page-2");
      s.classList.toggle("stats-hide");
    },
    stats3(){
      var s = document.getElementById("stats-page-3");
      s.classList.toggle("stats-hide");
    },
    stats4(){
      var s = document.getElementById("stats-page-4");
      s.classList.toggle("stats-hide");
    },
    stats5(){
      var s = document.getElementById("stats-page-5");
      s.classList.toggle("stats-hide");
    },
    reload(){
      window.location.reload();
    },
    fadeOut(){
        var p_audio = this.myAudio;
        var actualVolume = p_audio.volume;
        var fadeOutInterval = setInterval(function(){
            actualVolume = (parseFloat(actualVolume) - 0.03).toFixed(2);
            if(actualVolume >= 0){
                p_audio.volume = actualVolume;
            } else {
                p_audio.pause();
                clearInterval(fadeOutInterval);
            }
        }, 100);
    },
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

  },
  created(){
    this.myAudio = new Audio("{{'/OGG/'.$location.'.ogg'}}");
    this.myAudio.play();
    setTimeout(this.showFetch,5000);
    setTimeout(this.stats1,10000);
    setTimeout(this.stats1,130000);
    setTimeout(this.stats2,130500);
    setTimeout(this.stats2,250000);
    setTimeout(this.stats3,250500);
    setTimeout(this.stats3,370000);
    setTimeout(this.stats4,370500);
    setTimeout(this.stats4,490000);
    setTimeout(this.stats5,490500);
    setTimeout(this.showFetch,610000);
    setTimeout(this.fadeOut,610000);
    setTimeout(this.reload,615000);
    /*Test timeouts
    setTimeout(this.showFetch,5000);
    setTimeout(this.stats1,10000);
    setTimeout(this.stats1,11000);
    setTimeout(this.stats2,11000);
    setTimeout(this.stats2,12000);
    setTimeout(this.stats3,12000);
    setTimeout(this.stats3,13000);
    setTimeout(this.stats4,13000);
    setTimeout(this.stats4,14000);
    setTimeout(this.stats5,14000);
    setTimeout(this.showFetch,15000);
    setTimeout(this.fadeOut,15000);
    setTimeout(this.reload,18000);*/
  }
});
</script>
@endsection
