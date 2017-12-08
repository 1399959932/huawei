var preg_user = /^[a-z][a-zA-Z0-9]{5,11}$/;
var preg_pass = /^.{6,18}$/;
var preg_tel = /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;


//####################用户用户名用名#########################
//####################用户用户名用名#########################
//####################用户用户名用名#########################

function keyup_user()
{
	var uval = document.getElementById("user")
	if(uval.value == "")
	{
		document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>用户名不能少于6位</span>";
	}
	else
	{
		if(preg_user.test(uval.value))
		{
			document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;margin-left:-200px;'>可用</span>";
		}
		else
		{
			document.getElementById("user").style.cssText="border:1px solid red;background-color:#fff;";
			document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>用户名不能少于6位</span>";
		}
	}
}


function show_user()
{
	var uval = document.getElementById("user")
	if(uval.value == "")
	{
		document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入6～12字母数字组成的用户名</span>";
		document.getElementById("user").style.cssText="border:1px solid red;background-color:#fff;";
	}
	else
	{
		if(preg_user.test(uval.value))
		{
			document.getElementById("user").style.cssText="border:1px solid red;background-color:#fff;";
		}
		else
		{
			document.getElementById("user").style.cssText="border:1px solid red;background-color:#fff;";
		}
	}
}

function hide_user()
{
	var uval = document.getElementById("user")
	if(uval.value == "")
	{
		document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'></span>";
		document.getElementById("user").style.cssText="border:1px solid #ccc;background-color:#fff;";
	}
	else
	{
		if(preg_user.test(uval.value))
		{
			document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'></span>";
			document.getElementById("user").style.cssText="border:1px solid #ccc;background-color:#fff;";
		}
		else
		{
			document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入正确的用户名</span>";
			document.getElementById("user").style.cssText="border:1px solid red;background-color:#fff;";
		}
	}
}

//####################密码密码密码密码#########################
//####################密码密码密码密码#########################
//####################密码密码密码密码#########################

function keyup_pass()
{
	var pass = document.getElementById("pass")
	if(pass.value == "")
	{
		document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>密码不能少于6位</span>";
	}
	else
	{
		if(preg_pass.test(pass.value))
		{
			document.getElementById("p_span").innerHTML = "<span style='color:green;font-size:12px;margin-left:-200px;'>可用</span>";
		}
		else
		{
			document.getElementById("pass").style.cssText="border:1px solid red;background-color:#fff;";
			document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>密码不能少于6位</span>";
		}
	}
}


function show_pass()
{
	var pass = document.getElementById("pass")
	if(pass.value == "")
	{
		document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入6～18字母数字组成的密码</span>";
		document.getElementById("pass").style.cssText="border:1px solid red;background-color:#fff;";
	}
	else
	{
		if(preg_pass.test(pass.value))
		{
			document.getElementById("pass").style.cssText="border:1px solid red;background-color:#fff;";
		}
		else
		{
			document.getElementById("pass").style.cssText="border:1px solid red;background-color:#fff;";
		}
	}
}

function hide_pass()
{
	var pass = document.getElementById("pass")
	if(pass.value == "")
	{
		document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'></span>";
		document.getElementById("pass").style.cssText="border:1px solid #ccc;background-color:#fff;";
	}
	else
	{
		if(preg_pass.test(pass.value))
		{
			document.getElementById("p_span").innerHTML = "<span style='color:green;font-size:12px;'></span>";
			document.getElementById("pass").style.cssText="border:1px solid #ccc;background-color:#fff;";
		}
		else
		{
			document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入正确格式的密码</span>";
			document.getElementById("pass").style.cssText="border:1px solid red;background-color:#fff;";
		}
	}
}

//####################确认密码#########################
//####################确认密码#########################
//####################确认密码#########################





function keyup_rpass()
{
	var pass = document.getElementById("pass");
	var rpass = document.getElementById("rpass");
	if(pass.value != rpass.value)
	{
		document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'>两次密码不一致</span>";
		document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
	}
	else
	{
		if(pass.value == rpass.value)
		{
			document.getElementById("rp_span").innerHTML = "<span style='color:green;font-size:12px;margin-left:-200px;'>OK</span>";
			document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
		}
	
	}
}

function show_rpass()
{
	var pass = document.getElementById("pass");
	var rpass = document.getElementById("rpass");
	
	
	if(rpass.value == "")
	{
		document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
		document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请确认密码</span>";
	}
	
	
	if(rpass.value != rpass.value)
	{
		document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请确认密码</span>";
		document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
	}
	else
	{

			document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'></span>";
			document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
	
	}
	
}

function hide_rpass()
{
	var pass = document.getElementById("pass");
	var rpass = document.getElementById("rpass");
	
	if(rpass.value == "")
	{
		document.getElementById("rpass").style.cssText="border:1px solid #ccc;background-color:#fff;";
	}
	
	if(pass.value != rpass.value)
	{
		document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'>俩次密码不一致</span>";
		document.getElementById("rpass").style.cssText="border:1px solid red;background-color:#fff;";
	}
	else
	{		
			document.getElementById("rp_span").innerHTML = "<span style='color:green;font-size:12px;'></span>";
			document.getElementById("rpass").style.cssText="border:1px solid #ccc;background-color:#fff;";
		
		
	}
}


//##############################手机号#####################
//##############################手机号#####################
//##############################手机号#####################
function se_show()	
{
	document.getElementById("teldiqu").style.cssText="border:1px solid red;background-color:#fff;border-right:none;";
	
}

function keyup_tel()
{
	var tel = document.getElementById("tels");
	if(tel.value == "")
	{
		document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
		document.getElementById("tel_span").innerHTML = "<span style='color:green;font-size:12px;'>请填写手机号码</span>";
	}
	else
	{
		if(preg_tel.test(tel.value))
		{
			document.getElementById("tel_span").innerHTML = "<span style='color:green;font-size:12px;'>可用</span>";
		}
		else
		{
			document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
			document.getElementById("tel_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请填写完整</span>";
		}
	}
}


	
function show_tel()
{
	var tel = document.getElementById("tels");
	if(tel.value == "")
	{
		document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>请输入正确的手机号</span>";
		document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
		document.getElementById("teldiqu").style.cssText="border:1px solid red;background-color:#fff;border-right:none;";
	}
	else
	{
		if(preg_tel.test(tel.value))
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:green;'></span>";
			document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
			
		}
		else
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>手机号格式不对</span>";
			document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
		}
	}
}

function hide_tel(){
	var tel = document.getElementById("tels");
	if(tel.value == "")
	{
		document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>手机号不能为空</span>";
	}
	else
	{
		if(preg_tel.test(tel.value))
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:green;'></span>";
			document.getElementById("tels").style.cssText="border:1px solid #ccc;background-color:#fff;";
		document.getElementById("teldiqu").style.cssText="border:1px solid #ccc;background-color:#fff;border-right:none;";
		}
		else
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>手机号输入有误</span>";
			document.getElementById("tels").style.cssText="border:1px solid red;background-color:#fff;";
		document.getElementById("teldiqu").style.cssText="border:1px solid red;background-color:#fff;border-right:none;";
			
		}
	}
}