// 下拉菜单
$(function(){
	$(".nav_title > .nav_cen > .active").hover(function(){
		$(this).find(".center").stop().slideDown();
	},function(){
		$(".nav_title > .nav_cen > .active").find(".center").stop().slideUp();
	})
})

// 固定滚动条
$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>950){
			$(".dingwei").stop().show();
		}else{
			$(".dingwei").stop().hide();
		}
	})
})


// 点击加减数量
$(function(){
	$("#right_up").click(function(){
		var num='';
	    num=$('.jia_left').val();
	    var a=parseInt(num);
	    a+=1;
	    $('.jia_left').val(a);

	})
	$("#right_bot").click(function(){
		var num='';
	    num=$('.jia_left').val();
	    var a=parseInt(num);
	    if(a>1){
           a--;
	    }
	    
	    $('.jia_left').val(a);
	    
	})
	
})


//绑定单击事件
$(function(){

    	$('#dianji li').click(function(){
    		//获取当前元素的href属性
    		var href = $(this).find('a').attr('href');
    		//获取右侧对应的li元素
    		var li = $(href);
    		//获取当前li元素距离文档顶部的偏移量
    		var t = li.offset().top;
    		//窗口滚动到该位置
    		$('body').animate({scrollTop: t}, 1000);

    		return false;
    	})

})


// 点击回到顶部
$(function(){
    $(window).scroll(function(){
                if($(this).scrollTop()>350){
                    $(".back").css("display","block");
                }else{
                    $(".back").css("display","none");
                }
            })
	$(".back_fh").click(function(){
                var dj=$(window).scrollTop();
                var timer=null;
                timer=setInterval(function(){
                    if(dj<=0){
                        clearInterval(timer);
                    }else{
                        dj-=10;
                        $(window).scrollTop(dj);
                    }
                })
            })
	
})

