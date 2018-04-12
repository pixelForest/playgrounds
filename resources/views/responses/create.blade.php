@extends('layouts.app-front')
@section('styles')
<style>
label input{
  display:none;
}
.q12-option{
  padding-top: 15px;
}
.q8-option{
  padding-top: 15px;
}
</style>
@endsection
@section('content')
<div id="pop-over" class="pop-over clearfix">
  <form action="{{route('responses.store')}}" method="POST" enctype = "multipart/form-data" id="form" class="form">
    {{csrf_field()}}

    <div id="page5" class="page5 clearfix">
      <p class="h1">Get creative!</p>
      <p class="h2">What are playground elements that you would add to your ideal playground of 2030?</p>
      <p class="h2" style="font-size:14px; color:#2c0c6a"> psst... You may select more than one option</p>
      <div class="set5 clearfix">
        <label id="Q12-1" class="q12-option q12-option-1"><input name="equipment[]" type="checkbox" value="1" @change="addEquipment">adult exercise equipment</label>
        <label id="Q12-2" class="q12-option q12-option-2"><input name="equipment[]" type="checkbox" value="2" @change="addEquipment">inclusive equipment</label>
        <label id="Q12-3" class="q12-option q12-option-3"><input name="equipment[]" type="checkbox" value="3" @change="addEquipment">swings</label>
        <label id="Q12-4" class="q12-option q12-option-4"><input name="equipment[]" type="checkbox" value="4" @change="addEquipment">see-saws</label>
        <label id="Q12-5" class="q12-option q12-option-5"><input name="equipment[]" type="checkbox" value="5" @change="addEquipment">digital technology</label>
        <label id="Q12-6" class="q12-option q12-option-6"><input name="equipment[]" type="checkbox" value="6" @change="addEquipment">slides</label>
        <label id="Q12-7" class="q12-option q12-option-7"><input name="equipment[]" type="checkbox" value="7" @change="addEquipment">sculptures</label>
        <label id="Q12-8" class="q12-option q12-option-8"><input name="equipment[]" type="checkbox" value="8" @change="addEquipment">water elements</label>
        <label id="Q12-9" class="q12-option q12-option-9"><input name="equipment[]" type="checkbox" value="9" @change="addEquipment">springers</label>
        <label id="Q12-10" class="q12-option q12-option-10"><input name="equipment[]" type="checkbox" value="10" @change="addEquipment">sandbox</label>
        <label id="Q12-11" class="q12-option q12-option-11"><input name="equipment[]" type="checkbox" value="11" @change="addEquipment">trees</label>
        <label id="Q12-12" class="q12-option q12-option-12"><input name="equipment[]" type="checkbox" value="12" @change="addEquipment">a garden</label>
        <label id="Q12-13" class="q12-option q12-option-13"><input name="equipment[]" type="checkbox" value="13" @change="addEquipment">park benches</label>
      </div>
      <button id="next5" class="next" type="submit" name="action" value="{{route('responses.store')}}">next</button>
    </div>
    <div id="page4" class="page4 clearfix">
      <p class="h1">Imagine!</p>
      <p class="h2">How do you think you would interact with an ideal future playground?</p>
      <div class="set4 clearfix">
        <div id="question9" class="q9 clearfix">
          <p class="text text-1">My ideal future playground will</p>
          <label for="location" class="text text-2">be</label>
          <select id="location" class="_select" name="location" v-model="location" @change="locationChange">
            <option value="0">select a location</option>
            <option value="indoors">indoors.</option>
            <option value="outdoors">outdoors, in nature.</option>
            <option value="urban">in an urban environment.</option>
            <option value="clouds">high up in the clouds.</option>
          </select>
        </div>
        <div id="question10" class="q10 clearfix">
          <label for="time" class="text text-3">I will visit the playground</label>
          <select id="time" class="_select _select-2" name="time" v-model="time" @change="timeChange">
            <option value="0">select time</option>
            <option value="morning">in the morning</option>
            <option value="afternoon">in the afternoon</option>
            <option value="evening">during the evening</option>
            <option value="night">at night</option>
          </select>
          <label for="company" class="text text-4">with</label>
          <select id="company" class="_select _select-3" name="company" v-model="company">
            <option value="0">select companions</option>
            <option value="mychildren">my children.</option>
            <option value="children">the children I care for.</option>
            <option value="grandparents">my grandparents.</option>
            <option value="parents">my parents & siblings.</option>
            <option value="pets">my pets.</option>
            <option value="caregiver">my caregiver.</option>
            <option value="friends">my friends.</option>
          </select>
        </div>
        <div id="question11" class="q11 clearfix">
          <label for="activity" class="text">It will be a place for me to</label>
          <select id="activity" class="_select" name="activity" v-model="activity" @change="activityChange">
            <option value="0">select activity</option>
            <option value="friends">meet my friends.</option>
            <option value="newfriends">make new friends.</option>
            <option value="relax">relax and play by myself.</option>
            <option value="bond">bond with my family.</option>
            <option value="exercise">exercise.</option>
          </select>
        </div>
      </div>
      <button type="button" id="next4" class="next" @click="next4">next</button>
    </div>
    <div id="page3" class="page3 clearfix">
      <p class="h1">That's great!</p>
      <p class="h2">What are some of the things that you value in a playground?</p>
      <div class="set3 clearfix">
        <div id="question7" class="q7 clearfix">
          <label for="element" class="text">To me, the most important element of a playground is that</label>
          <select id="element" class="_select" name="element">
            <option value="0">select an option</option>
            <option value="safe">it is safe.</option>
            <option value="fun">it is adventurous and fun.</option>
            <option value="community">we built it together.</option>
            <option value="bond">it helps me bond with loved ones.</option>
            <option value="teach">it has educational value.</option>
          </select>
        </div>
        <div id="question8" class="q8 clearfix">
          <p class="text">The look of a playground is uniquely attractive when it is...</p>
          <p class="text" style="font-size:14px; color:#2c0c6a"> psst... You may select more than one option</p>
          <label id="Q8-1" class="q8-option q8-option-1"><input name="uniques[]" type="checkbox" value="1" @change="addUnique">aesthetically pleasing</label>
          <label id="Q8-2" class="q8-option q8-option-2"><input name="uniques[]" type="checkbox" value="2" @change="addUnique">inspired by local heritage</label>
          <label id="Q8-3" class="q8-option q8-option-3"><input name="uniques[]" type="checkbox" value="3" @change="addUnique">inspired by the character of its neighbourhood</label>
          <label id="Q8-4" class="q8-option q8-option-4"><input name="uniques[]" type="checkbox" value="4" @change="addUnique">based on children's stories or imaginary landscapes</label>
        </div>
      </div>
      <button type="button" id="next3" class="next" @click="next3">next</button>
    </div>
    <div id="page2" class="page2 clearfix">
      <p class="h1">Awesome!</p>
      <p class="h2">It has been said the Singapore has the most number of playgrounds for a country of it's size. What are your views on Singapore's playgrounds?</p>
      <div class="set2 clearfix">
        <div id="question5" class="q5 clearfix">
          <label for="inclusive" class="text text-8">I</label>
          <select id="inclusive" class="_select" name="inclusive">
            <option value="0">select an option</option>
            <option value="strongly agree">strongly agree that</option>
            <option value="agree">agree that</option>
            <option value="am neutral">have no opinion on whether</option>
            <option value="disagree">disagree that</option>
            <option value="strongly disagree">strongly disagree that</option>
          </select>
          <p class="text text-10">playgrounds in Singapore are shared spaces for all.</p>
        </div>
        <div id="question6" class="q6 clearfix">
          <label for="belonging" class="text text-11">I</label>
          <select id="belonging" class="_select" name="belonging">
            <option value="0">select an option</option>
            <option value="strongly agree">strongly agree that</option>
            <option value="agree">agree that</option>
            <option value="am neutral">have no opinion on whether</option>
            <option value="disagree">disagree that</option>
            <option value="strongly disagree">strongly disagree that</option>
          </select>
          <p class="text text-13">shared spaces like playgrounds contribute towards a stronger sense of belonging in Singapore.</p>
        </div>
      </div>
      <button type="button" id="next2" class="next" @click="next2">next</button>
    </div>
    <div id="page1" class="page1 clearfix">
      <div class="h1">Hello there!</div>
      @if(count($errors)>0)
        <p class="h2"  style="color:#ff5959">
      		Whoops, you have to select an option for each field!
      	</p>
      @else
        <p class="h2">Let's get to know one another. Please tell me about yourself.</p>
      @endif
      <div class="set1 clearfix">
        <div id="question1" class="q1 clearfix">
          <label for="age" class="text">I am</label>
          <select id="age" class="_select" name="age" v-model="age">
            <option value="default">select age</option>
            <option value="12">under the age of 12</option>
            <option value="13">between 13–18 years old</option>
            <option value="19">between 19–29 years old</option>
            <option value="30">between 30–50 years old</option>
            <option value="50">above 50 years old</option>
          </select>
        </div>
        <div id="question2" class="q2 clearfix">
          <label for="sex" class="text">and I'm</label>
          <select id="sex" class="_select" name="sex">
            <option value="0">select gender</option>
            <option value="male">male.</option>
            <option value="female">female.</option>
          </select>
        </div>
        <div id="question3" class="q3 clearfix">
          <label for="children" class="text">I have</label>
          <select id="children" class="_select" name="children">
            <option value="0">select children</option>
            <option value="yes">children</option>
            <option value="no">no children</option>
          </select>
        </div>
        <div id="question4" class="q4 clearfix">
          <label for="housing" class="text">and I live in a</label>
          <select id="housing" class="_select" name="housing">
            <option value="0">select housing</option>
            <option value="HDB flat">HDB flat.</option>
            <option value="condominium">condominium.</option>
            <option value="landed property">landed property.</option>
          </select>
        </div>
      </div>
      <button type="button" id="next1" class="next" @click="next1">next</button>
    </div>
  </form>
  <div id="pagination" class="pagination clearfix">
    <div id="pageInd1" class="page_indicator page_indicator_current"></div>
    <div id="pageInd2" class="page_indicator page_indicator-1"></div>
    <div id="pageInd3" class="page_indicator page_indicator-2"></div>
    <div id="pageInd4" class="page_indicator page_indicator-3"></div>
    <div id="pageInd5" class="page_indicator page_indicator-4"></div>
  </div>
</div>
<div id="pgWrapper" class="playground_wrapper clearfix">
  <img id="scene_bg" class="scene" :src="locationUrl" style="z-index:-21;">
  <img id="1" class="scene scene-hidden" :src="equip1Url" style="z-index:-14;">
  <img id="2" class="scene scene-hidden" :src="equip2Url" style="z-index:-5;">
  <img id="3" class="scene scene-hidden" :src="equip3Url" style="z-index:-3;">
  <img id="4" class="scene scene-hidden" :src="equip4Url" style="z-index:-8;">
  <img id="5" class="scene scene-hidden" :src="equip5Url" style="z-index:-20;">
  <img id="6" class="scene scene-hidden" :src="equip6Url" style="z-index:-16;">
  <img id="7_1" class="scene scene-hidden" :src="equip7_1Url" style="z-index:-2;">
  <img id="7_2" class="scene scene-hidden" :src="equip7_2Url" style="z-index:-15;">
  <img id="7_3" class="scene scene-hidden" :src="equip7_3Url" style="z-index:-18;">
  <img id="8" class="scene scene-hidden" :src="equip8Url" style="z-index:-4;">
  <img id="9" class="scene scene-hidden" :src="equip9Url" style="z-index:-9;">
  <img id="10" class="scene scene-hidden" :src="equip10Url" style="z-index:-11;">
  <img id="11_1" class="scene scene-hidden" :src="equip11_1Url" style="z-index:-1;">
  <img id="11_2" class="scene scene-hidden" :src="equip11_2Url" style="z-index:-6;">
  <img id="11_3" class="scene scene-hidden" :src="equip11_3Url" style="z-index:-13;">
  <img id="11_4" class="scene scene-hidden" :src="equip11_4Url" style="z-index:-19;">
  <img id="12" class="scene scene-hidden" :src="equip12Url" style="z-index:-17;">
  <img id="13_1" class="scene scene-hidden" :src="equip13_1Url" style="z-index:-12;">
  <img id="13_2" class="scene scene-hidden" :src="equip13_2Url" style="z-index:-7;">
  <img id="scene_activity" class="scene" :src="activityUrl" style="z-index:-10;">
</div>

@endsection

@section('scripts')
<script>
setInterval(function(){

},7000);
</script>
<script>
var app = new Vue({
  el: '#app',
  data:{
    age : 'default',
    time : '0',
    location: '0',
    activity: '0',
    company: '0',
    equipment:[],
    stats:'',
    locationUrl:'',
    activityUrl:'',
    equip1Url:'',
    equip2Url:'',
    equip3Url:'',
    equip4Url:'',
    equip5Url:'',
    equip6Url:'',
    equip7_1Url:'',
    equip7_2Url:'',
    equip7_3Url:'',
    equip8Url:'',
    equip9Url:'',
    equip10Url:'',
    equip11_1Url:'',
    equip11_2Url:'',
    equip11_3Url:'',
    equip11_4Url:'',
    equip12Url:'',
    equip13_1Url:'',
    equip13_2Url:'',

  },
  methods:{
    addEquipment(e){
      var val = e.srcElement.value;
      if(val == 7)
      {
        var t1 = document.getElementById("7_1");
        var t2 = document.getElementById("7_2");
        var t3 = document.getElementById("7_3");

        t1.classList.toggle("scene-hidden");
        t2.classList.toggle("scene-hidden");
        t3.classList.toggle("scene-hidden");
      }
      else if(val == 11)
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
      else if(val == 13)
      {
        var t1 = document.getElementById("13_1");
        var t2 = document.getElementById("13_2");

        t1.classList.toggle("scene-hidden");
        t2.classList.toggle("scene-hidden");
      }
      else
      {
        var t1 = document.getElementById(val);
        t1.classList.toggle("scene-hidden");
      }

      if(e.srcElement.checked)
      {
        this.equipment.push(val);
        e.srcElement.parentElement.classList.toggle("selected-option");
      }
      else
      {
        var index = this.equipment.indexOf(val);
        this.equipment.splice(index,1);
        e.srcElement.parentElement.classList.toggle("selected-option");
      }
    },
    addUnique(e){
        e.srcElement.parentElement.classList.toggle("selected-option");
    },
    next1(){
      var page1 = document.getElementById("page1");
      var page2 = document.getElementById("page2");

      var pg1 = document.getElementById("pageInd1");
      var pg2 = document.getElementById("pageInd2");

      page1.style.left = "-580px";
      page2.style.left = "0";
      pg1.classList.toggle("page_indicator_current");
      pg2.classList.toggle("page_indicator_current");
    },
    next2(){
      var page2 = document.getElementById("page2");
      var page3 = document.getElementById("page3");

      var pg2 = document.getElementById("pageInd2");
      var pg3 = document.getElementById("pageInd3");

      page2.style.left = "-580px";
      page3.style.left = "0";
      pg2.classList.toggle("page_indicator_current");
      pg3.classList.toggle("page_indicator_current");
    },
    next3(){
      var page3 = document.getElementById("page3");
      var page4 = document.getElementById("page4");

      var pg3 = document.getElementById("pageInd3");
      var pg4 = document.getElementById("pageInd4");

      page3.style.left = "-580px";
      page4.style.left = "0";
      pg3.classList.toggle("page_indicator_current");
      pg4.classList.toggle("page_indicator_current");
    },
    next4(){
      var page4 = document.getElementById("page4");
      var page5 = document.getElementById("page5");

      var pg4 = document.getElementById("pageInd4");
      var pg5 = document.getElementById("pageInd5");

      page4.style.left = "-580px";
      page5.style.left = "0";
      pg4.classList.toggle("page_indicator_current");
      pg5.classList.toggle("page_indicator_current");
    },
    fetchStats(){
      axios.get('/api/getStats').then( (response) => {
        this.stats = response.data
        console.log(this.stats)
      });
    },
    locationChange(){
      this.locationUrl = '/images/'+this.location+'/bg.png';
    },
    timeChange(){
      //this.locationUrl = '/images/'+this.location+'/'+this.time+'.png';
    },
    activityChange(){
      this.activityUrl = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'activity.png';
      this.equip1Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'1.png';
      this.equip2Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'2.png';
      this.equip3Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'3.png';
      this.equip4Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'4.png';
      this.equip5Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'5.png';
      this.equip6Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'6.png';
      this.equip7_1Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'7_1.png';
      this.equip7_2Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'7_2.png';
      this.equip7_3Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'7_3.png';
      this.equip8Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'8.png';
      this.equip9Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'9.png';
      this.equip10Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'10.png';
      this.equip11_1Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'11_1.png';
      this.equip11_2Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'11_2.png';
      this.equip11_3Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'11_3.png';
      this.equip11_4Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'11_4.png';
      this.equip12Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'12.png';
      this.equip13_1Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'13_1.png';
      this.equip13_2Url = '/images/'+this.location+'/'+this.age+'/'+this.activity+'/'+this.company+'/'+'13_2.png';
    },

  },
  mounted(){
    this.locationUrl = '/images/_sketch.png';
    console.log(this.locationUrl);
  }
});
</script>
@endsection
