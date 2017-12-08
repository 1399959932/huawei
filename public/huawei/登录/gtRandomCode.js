/**
 * 极验图片验证码的实现
 */

/**
 * captcha对象，目前仅用于标识本脚本是否已经被加载了；如果captchaObj对象存在，说明本脚本已经被加载了；如果不存在，说明本脚本还没有被加载
 */
window.captchaObj = {};

/**
 * 极验图片验证码的实现类
 */
window.gtRamdonCodeObj = {
	register: function()
	{
		var captchaInfo = $("#captchaInfo");
		var captchaUrl = captchaInfo.attr("captchaUrl");
		
		var captchaWidth = captchaInfo.attr("captchaWidth");
		if (!captchaWidth)
		{
			captchaWidth = "100%";
		}
		
		var captchaProduct = captchaInfo.attr("captchaProduct");
		if (!captchaProduct)
		{
			captchaProduct = "float";
		}
		//找不到对应语种的时候显示英文控件
		var captchaLang = (captchaInfo.attr("captchaLang") == "zh-cn")?"zh-cn":"en-us";
		
	    $.ajax({
	        url: captchaUrl + "/chkPreprocess", // captcha的URL
	        type: "post",
	        dataType: "json",
	        
	        data: {
				captchaType: "1",//
				//width: "100%",
		        //top: "top",
		        //lang: "zh-cn",//
		        //showType: "float", // 
		        clientType: "cas",
		        respType: "1"	//     	
	        },

	        
	        
	        success: function (data) {
	            // 调用 initGeetest 初始化参数
	            // 参数1：配置参数
	            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它调用相应的接口
	            initGeetest({
	                gt: data.gt,// 字符串类型。验证 id，极验后台申请得到
	                challenge: data.challenge,// 符串类型。验证流水号，后服务端 SDK
												// 向极验服务器申请得到
	                offline: !data.success, // 表示用户后台检测极验服务器是否宕机，一般不需要关注
	                new_captcha: data.new_captcha, // 用于宕机时表示是新验证码的宕机
													// 布尔类型。宕机情况下使用，表示验证是
													// 3.0 还是 2.0，3.0 的 sdk
													// 该字段为 true
	                
	                width: captchaWidth,// 字符串类型。设置按钮的长度，单位可以是 px，%，em，rem，pt
									// 等。默认值 300px
	                product: captchaProduct, // 字符串类型。设置下一步验证的展现形式，值可以是
										// float、popup、custom、bind（custom、bind的使用有些注意事项，请参照下面的详细说明）。默认值
										// popup
	                lang: captchaLang // 字符串类型。设置验证界面文字的语言，值可以是 zh-cn，en（其它语言会陆续增加）。默认值 zh-cn。
	                // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
	            }, gtRamdonCodeObj.initHandler);
	        }
	    });	
	},
	

	initHandler: function(captchaObj)
	{
	    // 将验证码加到id为captcha的元素里，同时会有三个input的值用于表单提交
	    captchaObj.appendTo("#captcha1");
	    captchaObj.onReady(function () {
	        $("#wait1").hide();
	    });
	    $(document).on('click','#captcha1',function(){
			$("#msg_randowCode").html("").removeClass('rancode-error-tips-EMUI5');
		})
	    this.captchaObj = captchaObj;
	    
	    // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html

	},

	getRandomCode: function()
	{
		if (!captchaObj)
		{
			return;
		}
		
		var result = captchaObj.getValidate();
	    if (!result) {
			return;
	    }
		
		// 上一次的结果
	    if (result == this.lastResult) {
			captchaObj.reset();
	    	return;
		}
			
		var jsonObj = {
		    "challenge": result.geetest_challenge,
		    "validate": result.geetest_validate,
		    "seccode": result.geetest_seccode
		};
			
		var randomCode = JSON.stringify(jsonObj);

		return randomCode;
	},
	
	resetRandomCode: function()
	{
		if (!captchaObj)
		{
			return;
		}

		captchaObj.reset();
		var result = captchaObj.getValidate();
	    if (!result) {
			return;
	    }
		this.lastResult = result;
	},
	
	getAndResetRandomCode: function()
	{
		if (!captchaObj)
		{
			return;
		}
		
		var result = captchaObj.getValidate();
	    if (!result) {
			return;
	    }

	    // 上一次的结果
	    if (result == this.lastResult) {
			captchaObj.reset();
	    	return;
	    }
	    
		var jsonObj = {
		    "challenge": result.geetest_challenge,
		    "validate": result.geetest_validate,
		    "seccode": result.geetest_seccode
		};
			
		var randomCode = JSON.stringify(jsonObj);
		
		captchaObj.reset();
		this.lastResult = result;
		
		return randomCode;
	}		
}

/**
 * 完成验证码的注册
 * @returns
 */
function registerRandomCode()
{
	gtRamdonCodeObj.register();	
}

/**
 * 获取验证码的值
 * @returns
 */
function getRandomCode()
{
	return gtRamdonCodeObj.getRandomCode();
}

/**
 * 重置图片验证码
 * @returns
 */
function resetRandomCode()
{
	return gtRamdonCodeObj.resetRandomCode();
}


/**
 * 获取验证码的值，同时重置图片验证码
 * @returns
 */
function getAndResetRandomCode()
{
	return gtRamdonCodeObj.getAndResetRandomCode();
}

/**
 * CAS对接极验图片验证码
 * 说明，这个方法一定要放到脚本的最后，因为动态显示验证码场景，动态加载本js时，document已经是ready了的
 */
$(function() {
	registerRandomCode();
});