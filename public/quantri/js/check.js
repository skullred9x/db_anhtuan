// JavaScript Document
//Check Delete
function checkdelete()
{
	
	var xn= window.confirm("Bạn chắc chắn muốn xóa ?");
	if(xn)
	{
	return true;
	}
	return false;
	
}
function checkFormadduser()
	{
		
		matkhau = document.frmadd.txt_password;
		rematkhau = document.frmadd.txt_repassword;
		email=document.frmadd.txt_email;
		sodt=document.frmadd.txt_dienthoai;
		reg=/^\w(\.?[\w-])*@\w(\.?[-\w])*\.[a-z]{2,4}$/i;
		testmail=reg.test(email.value);
		reg1=/^0[0-9]{9,10}$/;
		testphone=reg1.test(sodt.value);
		if(matkhau.value != rematkhau.value)
		{
			alert("Nhập lại mật khẩu không trùng khớp");	
			rematkhau.focus();
			return false;
		}
		if(matkhau.value.length <6)
		{
			alert("Mật khẩu từ 6 kí tự trở lên");	
			matkhau.focus();
			
			return false;
		}
		if(!testmail)		
		{
			alert("Email không hợp lệ");	
			email.focus();
			return false;
		}
		if(sodt.value != "")
		{
			if(isNaN(sodt.value))
			{
				alert("Số điện thoại sai định dạng, phải là giá trị số  ");
				sodt.focus();
				return false;
			}
			else 
			if(!testphone)	
			{
				alert("Số điện thoại không hợp lệ");	
				sodt.focus();
				return false;
			}
		}
		submit();
		return true;
	}
	
	
	
	
	
function showlogo(str) 
{ 
if (str.length==0) 
{ 
document.getElementById("show").innerHTML=""; 
return; 
} 
if (window.XMLHttpRequest) 
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest(); 
} 
else 
{// code for IE6, IE5 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
} 
xmlhttp.onreadystatechange=function() 
{ 
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{ 
document.getElementById("show").innerHTML=xmlhttp.responseText;
} 
} 
xmlhttp.open("GET","../admin/includes/logo/getlogo.php?q="+str,true); 
xmlhttp.send(); 
} 


//Function showlist
function showlist(str) 
{ 
if (str.length==0) 
{ 
document.getElementById("showlist").innerHTML=""; 
return; 
} 
if (window.XMLHttpRequest) 
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest(); 
} 
else 
{// code for IE6, IE5 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
} 
xmlhttp.onreadystatechange=function() 
{ 
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{ 
document.getElementById("showlist").innerHTML=xmlhttp.responseText;
} 
} 
xmlhttp.open("GET","../admin/includes/menu/getlist.php?q="+str,true); 
xmlhttp.send(); 
}

//Show kieu tai nguyen
function showtainguyen(str) 
{ 
if (str.length==0) 
{ 
document.getElementById("show").innerHTML=""; 
return; 
} 
if (window.XMLHttpRequest) 
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest(); 
} 
else 
{// code for IE6, IE5 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
} 
xmlhttp.onreadystatechange=function() 
{ 
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{ 
document.getElementById("show").innerHTML=xmlhttp.responseText;
} 
} 
xmlhttp.open("GET","../admin/includes/tainguyen/gettainguyen.php?q="+str,true); 
xmlhttp.send(); 
} 


