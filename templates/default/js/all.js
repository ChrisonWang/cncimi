
function a1(){
		Date.prototype.pattern=function(fmt) {           
			var o = {           
			"M+" : this.getMonth()+1, //           
			"d+" : this.getDate(), //          
			"h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //Сʱ           
			"H+" : this.getHours(), //         
			"m+" : this.getMinutes(), //          
			"s+" : this.getSeconds(), //          
			"q+" : Math.floor((this.getMonth()+3)/3), //����           
			"S" : this.getMilliseconds() //          
			};           
			var week = {           
			"0" : "星期日",           
			"1" : "星期一",           
			"2" : "星期二",           
			"3" : "星期三",           
			"4" : "星期四",           
			"5" : "星期五",           
			"6" : "星期六"          
			};           
			if(/(y+)/.test(fmt)){           
				fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));           
			}           
			if(/(E+)/.test(fmt)){           
				fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? "" : "")+week[this.getDay()+""]);           
			}           
			for(var k in o){           
				if(new RegExp("("+ k +")").test(fmt)){           
					fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));           
				}           
			}           
			return fmt;       
		}   
		
	
	
	             
		var date = new Date();  
		
		var nowStr = date.pattern("yyyy-MM-dd EEE HH:mm:ss"); 
		document.getElementById("a").innerHTML = nowStr;
		
		setTimeout(a1,1000);
	}
$(function(){
	
	a1();//时间开始


	
	$(".menu ul").children("li").mouseenter(function(){
		$(this).addClass("current")
		$(this).find(".s").show()	
	}).mouseleave(function(){
		$(this).removeClass("current")
		$(this).find(".s").hide()	
	})
	
	$(".s").mouseleave(function(){
		$(this).hide()
	})
	
	if($(".news-pic").length!==0)
	{
		$('.news-pic').smallslider();	
		$('.yd li').last().css("border","none");
		$('.center-l-box2 li').last().css("border","none");
		$('.center-a').click(function(){
			var d_link=$(this).attr("date");
			$(this).siblings(".more2").attr("href",d_link)
		})
		clickTab(".ct1",".center-a",".cc1","div");
		clickTab(".ct2",".center-a",".cc2","div")
	}
	
	if($(".page-r").length!==0)
	{
		$(".list li:nth-child(5n)").after("<div class='spc'></div>")
		var pHei=$(".page-l").height();
		$(".page-r").css("min-height",pHei+1)
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


//封装移动切换
function moveTab(MenuBox,MenuItem,SubBox,SubItem)
{
	$(SubBox).children(SubItem).css("display","none");
	$(SubBox).children(SubItem+":eq(0)").css("display","block");
	
	$(MenuBox).children(MenuItem).mouseover(
	function(){	
		$(MenuBox).children(MenuItem+".current").removeClass("current")
		$(this).addClass("current");
		var index=$(MenuBox).children(MenuItem).index(this);
		$(SubBox).children(SubItem).css("display","none");
		$(SubBox).children(SubItem+":eq("+index+")").css("display","block");
		
	});
}

//封装点击切换
function clickTab(MenuBox,MenuItem,SubBox,SubItem)
{
	$(SubBox).children(SubItem).css("display","none");
	$(SubBox).children(SubItem+":eq(0)").css("display","block");
	
	$(MenuBox).children(MenuItem).click(
	function(){	
		$(MenuBox).children(MenuItem+".current").removeClass("current")
		$(this).addClass("current");
		var index=$(MenuBox).children(MenuItem).index(this);
		$(SubBox).children(SubItem).css("display","none");
		$(SubBox).children(SubItem+":eq("+index+")").css("display","block");
		
	});
}

function mbar(sobj) {
var docurl =sobj.options[sobj.selectedIndex].value;
if (docurl != "") {
   open(docurl,'_blank');
   sobj.selectedIndex=0;
   sobj.blur();
}
}

