/*
* 打卡功能*/
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
	arr['time'] = $("#myDate").val();

	var kong = true;
	var obj = document.getElementsByName("choice");
	for(var i = 0;i < obj.length;i++){
		if(obj[i].checked){
			kong = false;
			arr[obj[i].value] = 1;
		}
	}

	console.log(arr);
	if(kong){
		alert("至少要完成一个任务呦～～");
		return false;
	}
	$.ajax({
		url:"./config/daka.php",
		type:"post",
		data:arr,
		success:function (data) {
			if(data == 1 ){
				alert("打卡成功～～");
				getDaka();
			}else if(data == -2){
				alert("再去完成一个任务再来打卡吧～～");
			}else if(data == -1){
				window.location.href = "index.php"
			}
		},
		error:function (data) {
			console.log(data);
		}
	});
}

/*
* 显示打卡情况
* */

function getDaka() {
    var time = $("#myDate").val();
    $.ajax({
        url:"./config/getDaka.php",
        type:"post",
        data:{'time':time},
		dataType:"json",
        success:function (data) {
        	clear();
            var obj = document.getElementsByName("choice");
        	console.log(data);
        	if(data['statue'] != -3){
                var index = 0;
                for(var i = 1;i<=7;i++){
                    var str = "一"+i;
                    if(data[str] != ""){
                        obj[index].checked = true;
                    }
                    index++;
                }
                for(var i = 1;i<=5;i++){
                    var str = "二"+i;
                    if(data[str] != ""){
                        obj[index].checked = true;
                    }
                    index++;
                }
                for(var i = 1;i<=3;i++){
                    var str = "三"+i;
                    if(data[str] != ""){
                        obj[index].checked = true;
                    }
                    index++;
                }
			}else if(data == -3){
                for(var i = 0;i < obj.length;i++){
                    obj[i].checked = false;
                }
			}
        },
        error:function (data) {
            console.log(data);
        }
    });
}
getDaka();

function clear() {
    var obj = document.getElementsByName("choice");
    for(var i = 0;i < obj.length;i++){
        obj[i].checked = false;
    }
}