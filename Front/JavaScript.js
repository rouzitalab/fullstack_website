var fs=400;
var t=500;
var timeout;
var slide_time = 5000;

var flag_1 = 1;
var flag_2 = 1;
var flag_3 = 1;
var flag_4 = 1;
var flag_5 = 1;
var flag_6 = 0;
var flag_r = 0;
var m=0;
var mdow = 0;

function times(){
timeout = setTimeout(times_1,slide_time);


}
function mdown(){

mdow--;

}


function times_1(){

if(mdow==0 || mdow==2){
if(flag_r ==1){img_6();flag_r=0;}
if(flag_6==0){
img_5();}
if(flag_5==0){
img_4();}
if(flag_4==0){
img_3();}
if(flag_4==0){
img_3();}
if(flag_3==0){
img_2();}
if(flag_2==0){
img_1();}

}
times();
}
function img_5(){

if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text")
$(".text-slider_0").fadeIn(fs);


$(".img1").attr("id","tint");
$(".img2").attr("id","tint");
$(".img3").attr("id","tint");
$(".img4").attr("id","tint");
$(".img5").attr("id","");
$(".img6").attr("id","tint");

$(".img6").animate({left:'590px' }
			,t,'easeOutBack');
			
			
$(".img5").animate({left:'300px' }
			,t,'easeOutBack');
			
$(".img4").animate({left:'225px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'150px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'75px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
			
	flag_5=0;
	flag_1 = 1;
	flag_2 = 1;
	flag_3 = 1;
	flag_4 = 1;
	flag_6 = 1;

	}
	m=1;
	
				}
				
function img_6(){

if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text	<br><br>");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text")
$(".text-slider_0").fadeIn(fs);


$(".img1").attr("id","tint");
$(".img2").attr("id","tint");
$(".img3").attr("id","tint");
$(".img4").attr("id","tint");
$(".img5").attr("id","tint");
$(".img6").attr("id","");
$(".img6").animate({left:'375px' }
			,t,'easeOutBack');
			
$(".img5").animate({left:'300px' }
			,t,'easeOutBack');
			
$(".img4").animate({left:'225px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'150px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'75px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
			
		
			flag_5=1;
	flag_1 = 1;
	flag_2 = 1;
	flag_3 = 1;
	flag_4 = 1;
	flag_6 = 0;
			}
			m=1;
				}
				
function img_4(){
if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text<br>");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text")
$(".text-slider_0").fadeIn(fs);

$(".img1").attr("id","tint");
$(".img2").attr("id","tint");
$(".img3").attr("id","tint");
$(".img4").attr("id","");
$(".img5").attr("id","tint");
$(".img6").attr("id","tint");


$(".img6").animate({left:'590px' }
			,t,'easeOutBack');
			
$(".img5").animate({left:'515px' }
			,t,'easeOutBack');
			
$(".img4").animate({left:'225px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'150px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'75px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
			flag_5=1;
	flag_1 = 1;
	flag_2 = 1;
	flag_3 = 1;
	flag_4 = 0;
	flag_6 = 1;
				}
				m=1;
				}
function img_3(){
if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text<br>");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text")
$(".text-slider_0").fadeIn(fs);

$(".img1").attr("id","tint");
$(".img2").attr("id","tint");
$(".img3").attr("id","");
$(".img4").attr("id","tint");
$(".img5").attr("id","tint");
$(".img6").attr("id","tint");


$(".img6").animate({left:'590px' }
			,t,'easeOutBack');
			
$(".img5").animate({left:'515px' }
			,t,'easeOutBack');
			
$(".img4").animate({left:'440px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'150px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'75px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
			flag_5=1;
	flag_1 = 1;
	flag_2 = 1;
	flag_3 = 0;
	flag_4 = 1;
	flag_6 = 1;
				}
				m=1;
				}
				
				
				
function img_2(){
if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text<br>");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text")
$(".text-slider_0").fadeIn(fs);

$(".img1").attr("id","tint");
$(".img2").attr("id","");
$(".img3").attr("id","tint");
$(".img4").attr("id","tint");
$(".img5").attr("id","tint");
$(".img6").attr("id","tint");





$(".img6").animate({left:'590px' }
			,t,'easeOutBack');
			
$(".img5").animate({left:'515px' }
			,t,'easeOutBack');
			
$(".img4").animate({left:'440px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'365px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'75px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
			flag_5=1;
	flag_1 = 1;
	flag_2 = 0;
	flag_3 = 1;
	flag_4 = 1;
	flag_6 = 1;
				}
				m=1;
				}
				
function img_1(){

if(m==0){
mdow=2;
$(".text-slider_0").fadeOut(fs);
$(".name-1").html("Text");
$("#text-mid-1").html("<br>Text<br>");
$("#bot-text").html("Text");
$("#bot-text-1").html("Text");
$(".text-slider_0").fadeIn(fs);

$(".img1").attr("id","");
$(".img2").attr("id","tint");
$(".img3").attr("id","tint");
$(".img4").attr("id","tint");
$(".img5").attr("id","tint");
$(".img6").attr("id","tint");

$(".img6").animate({left:'590px' }
			,t,'easeOutBack');
			
$(".img5").animate({left:'515px'}
			,t,'easeOutBack');
			
$(".img4").animate({left:'440px' }
			,t,'easeOutBack');
			
$(".img3").animate({left:'365px' }
			,t,'easeOutBack');
			
$(".img2").animate({left:'290px' }
			,t,'easeOutBack');
			
$(".img1").animate({left:'0px' }
			,t,'easeOutBack',function(){m=0;});
				flag_5=1;
				flag_1 = 0;
				flag_2 = 1;
				flag_3 = 1;
				flag_4 = 1;
				flag_6 = 1;
				flag_r=1;
				}
				m=1;
			
			
				}
window.onload = times;
