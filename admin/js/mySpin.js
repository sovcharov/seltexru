"use strict"
var myCanvas = (function(){	
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	var width = document.getElementById('myCanvas').offsetWidth;
	var height = document.getElementById('myCanvas').offsetHeight;
	if(width<24) width = 24;
	if(height<24) height = 24;
	var x=0;
	var radius = 12;
	ctx.lineWidth = 8;
	var x=0;
	var spinArc = function () {	
		ctx.clearRect(0,0,width,height);
		ctx.beginPath();		
		ctx.arc(width/2,height/2,radius,x,x+0.8);		
		ctx.strokeStyle="#EBEBEB";
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(20,25,radius,x+1,x+1.8);
		ctx.strokeStyle="#D1D1D1";
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(20,25,radius,x+2,x+2.8);
		ctx.strokeStyle="#999999";
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(20,25,radius,x+3,x+3.8);
		ctx.strokeStyle="#666666";
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(20,25,radius,x+4,x+4.8);
		ctx.strokeStyle="#2A2A2A";
		ctx.stroke();
		x++;
	};
	return function (){spinArc()};
})();
var mySpin = (function (){
	var myIntsClass = {};
	myIntsClass.interval = 0;
	myIntsClass.start = function () {
		myIntsClass.interval = setInterval(function (){myCanvas()},50);
	};
	myIntsClass.stop = function () {
		clearInterval(myIntsClass.interval);
	};
	return myIntsClass;
})();