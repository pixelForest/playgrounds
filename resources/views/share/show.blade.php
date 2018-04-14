@extends('layouts.app-mobile')
@section('styles')
<style>
html, body {
	width: 100%;
	height: 100%;
	margin: 0px;
	border: 0;
	overflow: hidden; /*  Disable scrollbars */
	display: block;  /* No floating content on sides */
}
.orientation-wrapper {
	opacity: 1;
	display: block;
	z-index: 999;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
	margin: auto;
	background-color: #00aab8;
	-webkit-transition: all .4s;
	-moz-transition: all .4s;
	-o-transition: all .4s;
	-ms-transition: all .4s;
	transition: all .4s;

}

.orientation-wrapper .rotate {
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: auto;
	margin: auto;
}

.button-wrapper{
	background-color: #fff;
	width:31%;
	height:100%;
	position:absolute;
	left:0px;
	top:0px;
	z-index: 10;
	padding:0.5em;
	padding-top: 2em;
}

.dwnld {
  display: block;
  width: 50%;
	padding-bottom: 10px;
  margin: 50px auto 0;
  border-radius: 10px;
  background-color: rgb(255, 97, 67);
  font-size: 2vw;
  text-align: center;
  color: white;
  -webkit-transition: all .3s;
  -moz-transition: all .3s;
  -o-transition: all .3s;
  -ms-transition: all .3s;
  transition: all .3s;
}

.fb-button{
	margin: 50px auto 0;
	text-align: center;
	transform: scale(1.2);
}

@media screen and (orientation: landscape) {
	.orientation-wrapper {
		opacity: 0;
		z-index: -999;
	}
}
.h1{
	font-size: 2vw;
}
.h2{
	font-size:1.5vw;
}
</style>
@endsection
@section('content')
<canvas id='c' style = 'position: absolute; left: 0px; top: 0px;' >
</canvas>
<div class="button-wrapper">
	<p class="h1">This is a playground.</p>
	<br>
	<p class="h1"> There are many like it.</p>
	<p class="h2">But this one's mine.</p>
	<a href="#" class="dwnld" style="padding-top:20px" id="btn-download" download="playgrounds2030.png">Download</a>
	<div>
		<div class="fb-button">
			<div class="fb-share-button" data-href="{{url('/share/'.$response->id)}}"
				data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank"
				href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F{{url('/share/'.$response->id)}}%2F&amp;src=sdkpreparse"
				class="fb-xfbml-parse-ignore">Share</a></div>
			</div>
		</div>
	</div>

	<div id="orientation-warning" class="orientation-wrapper">
		<img id="rotate" class="rotate" src="/images/rotate.svg">
	</div>
	@endsection
	@section('scripts')
	<script>
	(function() {
		var htmlCanvas = document.getElementById('c'),
		ctx = htmlCanvas.getContext('2d'),
		location = "{{$response->location}}",
		time = "{{$response->time}}",
		equipment = {!!$response->equipment!!},
		equArr = [];

		for(var i=0; i<equipment.length;i++)
		{
			equArr.push(equipment[i].id);
		}

		// Start listening to resize events and
		// draw canvas.
		initialize();

		function initialize() {
			// Register an event listener to
			// call the resizeCanvas() function each time
			// the window is resized.
			window.addEventListener('resize', resizeCanvas, false);

			// Draw canvas border for the first time.
			resizeCanvas();
		}

		function loadImages(){
			scene_bg = new Image();
			scene_1 = new Image();
			scene_2 = new Image();
			scene_3 = new Image();
			scene_4 = new Image();
			scene_5 = new Image();
			scene_6 = new Image();
			scene_7_1 = new Image();
			scene_7_2 = new Image();
			scene_7_3 = new Image();
			scene_8 = new Image();
			scene_9 = new Image();
			scene_10 = new Image();
			scene_11_1 = new Image();
			scene_11_2 = new Image();
			scene_11_3 = new Image();
			scene_11_4 = new Image();
			scene_12 = new Image();
			scene_13_1 = new Image();
			scene_13_2 = new Image();
			scene_activity = new Image();
			scene_time = new Image();
			scene_lights = new Image();

			if(location == "clouds" && (time == "evening" || time == "night"))
			{
				scene_bg.src ="{{'/images/'.$response->location.'/bg_'.$response->time.'.png'}}";
			}
			else {
				scene_bg.src = "{{'/images/'.$response->location.'/bg.png'}}";
			};
			scene_1.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/1.png'}}";
			scene_2.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/2.png'}}";
			scene_3.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/3.png'}}";
			scene_4.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/4.png'}}";
			scene_5.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/5.png'}}";
			scene_6.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/6.png'}}";
			scene_7_1.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_1.png'}}";
			scene_7_2.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_2.png'}}";
			scene_7_3.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/7_3.png'}}";
			scene_8.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/8.png'}}";
			scene_9.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/9.png'}}";
			scene_10.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/10.png'}}";
			scene_11_1.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_1.png'}}";
			scene_11_2.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_2.png'}}";
			scene_11_3.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_3.png'}}";
			scene_11_4.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/11_4.png'}}";
			scene_12.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/12.png'}}";
			scene_13_1.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/13_1.png'}}";
			scene_13_2.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/13_2.png'}}";
			scene_activity.src = "{{'/images/'.$response->location.'/'.$response->age.'/'.$response->activity.'/'.$response->company.'/activity.png'}}";
			//scene_time.src = "{{'/images/'.$response->location.'/time/'.$response->time.'_filter.png'}}";
			//scene_lights.src = "{{'/images/'.$response->location.'/time/'.$response->time.'_lights.png'}}";

			scene_bg.onload =
			scene_1.onload =
			scene_2.onload =
			scene_3.onload =
			scene_4.onload =
			scene_5.onload =
			scene_6.onload =
			scene_7_1.onload =
			scene_7_2.onload =
			scene_7_3.onload =
			scene_8.onload =
			scene_9.onload =
			scene_10.onload =
			scene_11_1.onload =
			scene_11_2.onload =
			scene_11_3.onload =
			scene_11_4.onload =
			scene_12.onload =
			scene_13_1.onload =
			scene_13_2.onload =
			scene_activity.onload = redraw;
			//scene_time.onload =
			//scene_lights.onload =

		}
		function redraw() {

			ctx.drawImage(scene_bg,0,0,window.innerWidth,window.innerHeight);
			if(equArr.includes(5)){
				ctx.drawImage(scene_5,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(11)){
				ctx.drawImage(scene_11_4,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(7)){
				ctx.drawImage(scene_7_3,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(12)){
				ctx.drawImage(scene_12,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(6)){
				ctx.drawImage(scene_6,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(7)){
				ctx.drawImage(scene_7_2,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(1))
			{
				ctx.drawImage(scene_1,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(11)){
				ctx.drawImage(scene_11_3,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(13)){
				ctx.drawImage(scene_13_1,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(10)){
				ctx.drawImage(scene_10,0,0,window.innerWidth,window.innerHeight);
			}
			ctx.drawImage(scene_activity,0,0,window.innerWidth,window.innerHeight);
			if(equArr.includes(9)){
				ctx.drawImage(scene_9,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(4)){
				ctx.drawImage(scene_4,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(13)){
				ctx.drawImage(scene_13_2,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(11)){
				ctx.drawImage(scene_11_2,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(2))
			{
				ctx.drawImage(scene_2,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(8)){
				ctx.drawImage(scene_8,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(3)){
				ctx.drawImage(scene_3,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(7)){
				ctx.drawImage(scene_7_1,0,0,window.innerWidth,window.innerHeight);
			}
			if(equArr.includes(11)){
				ctx.drawImage(scene_11_1,0,0,window.innerWidth,window.innerHeight);
			}
			//ctx.drawImage(scene_time,0,0,window.innerWidth,window.innerHeight);
			//ctx.drawImage(scene_lights,0,0,window.innerWidth,window.innerHeight);

		}

		// Runs each time the DOM window resize event fires.
		// Resets the canvas dimensions to match window,
		// then draws the new borders accordingly.
		function resizeCanvas() {
			htmlCanvas.width = window.innerWidth;
			htmlCanvas.height = window.innerHeight;
			loadImages();
		};


	})();

	var button = document.getElementById('btn-download');
	button.addEventListener('click', function (e) {
		var htmlCanvas = document.getElementById('c');
		var cropWidth = window.innerWidth *0.7;
		var hidden_canv = document.createElement('canvas');
		var startX = window.innerWidth *0.3;
		hidden_canv.style.display = 'none';
		document.body.appendChild(hidden_canv);
		hidden_canv.width = cropWidth;
		hidden_canv.height = window.innerHeight;

		var hidden_ctx = hidden_canv.getContext('2d');
		hidden_ctx.drawImage(
			htmlCanvas,
			startX,//Start Clipping
			0,//Start Clipping
			cropWidth,//Clipping Width
			window.innerHeight,//Clipping Height
			0,//Place X
			0,//Place Y
			hidden_canv.width,//Place Width
			hidden_canv.height//Place Height
		);
		var dataURL = hidden_canv.toDataURL('image/png');
		button.href = dataURL;
	});

</script>
@endsection
