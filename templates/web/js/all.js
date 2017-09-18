
$(function(){
	
	if($(".news-pic").length!==0)
	{
		$('.news-pic').smallslider();	
		left_move(50,"link-box","link-box1","link-box2")
	}
	
	if($(".page-r").length!==0)
	{
		$(".list li:nth-child(5n)").after("<div class='spc'></div>")
		
	} 

	if($(".form").length!==0)
	{
		$(".form .need").focus(function(){
			$(this).siblings("samp").hide();
			$(this).css("border-color","#d0d0d0")
		})
	}
	
});

//检查表单
function checkform()
{
	var formdata=true
	$(".form .need").each(function(){	
		if($(this).val()=='')
		{
			$(this).siblings("samp").show();	
			$(this).css("border-color","#f30");
			formdata= false;
		}
		//个别判断
		if($("#psd").length!==0)
		{
			if($("#psd").val()!=$("#psd-c").val())
			{
				$("#psd-c").siblings("samp").show();
				$("#psd-c").css("border-color","#f30");
				formdata= false;
			}
		}
		
	})
	return formdata;
}



//封装无缝左滚动
function left_move(spd,demo_box,demo1,demo2){
var speed=spd; //数字越大速度越慢
var tab=document.getElementById(demo_box);
var tab1=document.getElementById(demo1);
var tab2=document.getElementById(demo2);
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
}