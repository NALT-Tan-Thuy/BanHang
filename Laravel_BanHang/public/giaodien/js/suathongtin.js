function LuuMatKhau() {
    var mkcu = document.getElementById('mkcu').value;
    var mkmoi = document.getElementById('mkmoi').value;
    var nhaplaimk = document.getElementById('nhaplaimk').value;
    if (mkmoi === "" || nhaplaimk === "") {
        document.getElementById('loikhongtrung').innerHTML = "Bạn cần nhập đầy đủ thông tin";
    }
    else {
        if (document.getElementById('mkmoi').textLength < 3 || document.getElementById('nhaplaimk').textLength < 3) {
            document.getElementById('loikhongtrung').innerHTML = "Mật khẩu quá ngắn";
        }
        else {
            if (nhaplaimk != mkmoi) {
                document.getElementById('loikhongtrung').innerHTML = "Chưa khớp mật khẩu mới";
            }
            else {
                if (window.XMLHttpRequest) {
                    var xhttp = new XMLHttpRequest();
                }
                else {
                    var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('loikhongtrung').innerHTML = "";
                        if (this.responseText === "false") {
                            document.getElementById("ketquamk").hidden = true;
                            document.getElementById("ketquamksai").hidden = false;
                            document.getElementById("ketquamksai").innerHTML = "Sai mật khẩu, vui lòng kiểm tra lại";
                        }
                        else {
                            document.getElementById("ketquamksai").hidden = true;
                            document.getElementById("ketquamk").hidden = false;
                            document.getElementById("ketquamk").innerHTML = "Mật khẩu của bạn đã được thay đổi thành: " + this.responseText;
                            XoaNhapMK();
                        }

                    }
                };
                var matkhau = [mkcu, mkmoi];
                xhttp.open("GET", "suamatkhau/" + matkhau, true);
                xhttp.send();
            }
        }
    }
}
// xóa nhập cho mật khẩu
function XoaNhapMK() {
    document.getElementById('mkcu').value = "";
    document.getElementById('mkmoi').value = "";
    document.getElementById('nhaplaimk').value = "";
}
// Ajax cho nút huyện - xã
function ChonQuanHuyen(id){
    if(window.XMLHttpRequest){
		var xhttp = new XMLHttpRequest();
	}
	else{
		var xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('luuquanhuyen').innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "chonquanhuyen/"+id, true);
	xhttp.send();
}
// chọn xã phường
function ChonXaPhuong(id){
    document.getElementById('luuxaphuong');
    if(window.XMLHttpRequest){
		var xhttp = new XMLHttpRequest();
	}
	else{
		var xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('luuxaphuong').innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "chonxaphuong/"+id, true);
	xhttp.send();
}