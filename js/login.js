/*获取 ip地址*/
var ip = '211.87.236.185';
var bool = (ip.substring(0,6) == "211.87");
// 登录处理 
function login() {
	// 1.登录表单处理
	$("#topmess").hide();
	var userLoginUrl = "./config/login.php";
	var username = $("#username").val();
	var password = $("#password").val();
	if(username == "" || username.length != 12){
		$("#topmess").html("请填写正确的学号~~");
		$("#topmess").show();
		$("#username").focus();
		return;
	}else if(password == ""){
		$("#topmess").html("密码格式好像不对哦~~");
		$("#topmess").show();
		return;
	}else if(!bool){
		$("#topmess").show();
		return;
	}
//	alert(ip);
	// 2.异步请求
	$.ajax({
		type:"post",
		url: userLoginUrl,
		async:true,
		data:{
			"username":username,
			"password":password,
			"ip":ip
		},
		success:function(data){
			console.log(data);
			if (data == 1) {
				window.location.href="main.php";
			} else if(data == "-2") {
				$("#topmess").html("账号密码错误～～");
				$("#topmess").show();
			}else{
				$("#topmess").html(data);
				$("#topmess").show();
			}
		}
	});
}
