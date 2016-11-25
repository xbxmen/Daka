function daka() {
	var arr = {};
	arr['一1'] = "";
	arr['一2'] = "";
	arr['一3'] = "";
	arr['一4'] = "";
	arr['一5'] = "";
	arr['一6'] = "";
	arr['一7'] = "";
	arr['二1'] = "";
	arr['二2'] = "";
	arr['二3'] = "";
	arr['二4'] = "";
	arr['二5'] = "";
	arr['三1'] = "";
	arr['三2'] = "";
	arr['三3'] = "";

	console.log(arr);
	var obj = document.getElementsByName("choice");
	for(var i = 0;i < obj.length;i++){
		if(obj[i].checked){
			arr[obj[i].value] = 1;
		}
	}
	$.ajax({
		url:"./config/daka.php",
		type:"post",
		data:arr,
		success:function (data) {
			console.log(data);
			if(data == 1 ){
				alert("打卡成功～～");
			}else if(data == -2){
				alert("再去完成一个任务再来打卡吧～～");
			}else{
				window.location.href = "index.php"
			}
		},
		error:function (data) {
			console.log(data);
		}
	});
}