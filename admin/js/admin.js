function Technician(){
	if(document.getElementById('fname').value == ""){
		alert("Please Enter First Name");
		document.getElementById('fname').style.border="2px solid red";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('lname').value == ""){
		alert("Please Enter Last Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid red";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		alert("Please Enter Last Name");
		return false;
	}
    else if(document.getElementById('address').value == ""){
		alert("Please Enter Address ");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid red";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
        return false;
	}
	else if(document.getElementById('pincode').value == ""){
		alert("Please Enter Pincode ");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid red";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";

		return false;
	}
	else if(document.getElementById('email').value == ""){
		alert("Please Enter Email");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid red";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
        else if(document.getElementById('phone').value == ""){
			alert("Please Enter Phone");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid red";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('photo').value == ""){
			alert("Please Enter photo");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid red";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('username').value == ""){
			alert("Please Enter User Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid red";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('password').value == ""){
			alert("Please Enter Password");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid red";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('cpassword').value == ""){
	    alert("Please Enter Password Again");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid red";
		return false;
	}
		else if(document.getElementById('password').value !== document.getElementById('cpassword').value){
		alert("please enter correct Password");
		return false;
	}
	else{
		alert("Technician Added Successfully");
		return true;
	}
}
function isNumeric(keyCode){

      return ((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || (keyCode >= 96 && keyCode <= 106) ||  keyCode == 9 || keyCode == 190 ||  keyCode == 13);
}


function User(){
	if(document.getElementById('fname').value == ""){
		alert("Please Enter First Name");
		document.getElementById('fname').style.border="2px solid red";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('lname').value == ""){
		alert("Please Enter Last Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid red";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		alert("Please Enter Last Name");
		return false;
	}
    else if(document.getElementById('address').value == ""){
		alert("Please Enter Address ");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid red";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
        return false;
	}
	else if(document.getElementById('pincode').value == ""){
		alert("Please Enter Pincode ");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid red";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";

		return false;
	}
	else if(document.getElementById('email').value == ""){
		alert("Please Enter Email");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid red";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
        else if(document.getElementById('phone').value == ""){
			alert("Please Enter Phone");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid red";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('photo').value == ""){
			alert("Please Enter photo");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid red";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('username').value == ""){
			alert("Please Enter User Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid red";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('password').value == ""){
			alert("Please Enter Password");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid red";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('cpassword').value == ""){
	    alert("Please Enter Password Again");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid red";
		return false;
	}
		else if(document.getElementById('password').value !== document.getElementById('cpassword').value){
		alert("please enter correct Password");
		return false;
	}
	else{
		alert("User Added Successfully");
		return true;
	}
}

function Admin(){
	if(document.getElementById('fname').value == ""){
		alert("Please Enter First Name");
		document.getElementById('fname').style.border="2px solid red";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('lname').value == ""){
		alert("Please Enter Last Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid red";
		document.getElementById('address').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('email').value == ""){
		alert("Please Enter Email");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid red";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
        else if(document.getElementById('phone').value == ""){
			alert("Please Enter Phone");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid red";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('photo').value == ""){
			alert("Please Enter photo");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid red";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('username').value == ""){
			alert("Please Enter User Name");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid red";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('password').value == ""){
			alert("Please Enter Password");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid red";
		document.getElementById('cpassword').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('cpassword').value == ""){
	    alert("Please Enter Password Again");
		document.getElementById('fname').style.border="2px solid black";
		document.getElementById('lname').style.border="2px solid black";
		document.getElementById('username').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('password').style.border="2px solid black";
		document.getElementById('cpassword').style.border="2px solid red";
		return false;
	}
		else if(document.getElementById('password').value !== document.getElementById('cpassword').value){
		alert("please enter correct Password");
		return false;
	}
	else{
		alert("Admin Added Successfully");
		return true;
	}
}
function Order(){
	if(document.getElementById('orderno').value == ""){
		alert("Please Enter Order No.");
		document.getElementById('orderno').style.border="2px solid red";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('pname').value == ""){
		alert("Please Enter Product Name");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid red";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('deliveryaddress').value == ""){
		alert("Please Enter Address ");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid red";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
        return false;
	}
	else if(document.getElementById('pincode').value == ""){
		alert("Please Enter Pincode ");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid red";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('orderdate').value == false){
		alert("Please Enter Date OF Order");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid red";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('email').value == ""){
		alert("Please Enter Email");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid red";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('phone').value == ""){
			alert("Please Enter Phone");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid red";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
	 else if(document.getElementById('customerid').value == ""){
		alert("Please Enter Customer ID");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid red";
		document.getElementById('totalamount').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('totalamount').value == ""){
		alert("Please Enter Phone");
		document.getElementById('orderno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('deliveryaddress').style.border="2px solid black";
		document.getElementById('pincode').style.border="2px solid black";
		document.getElementById('email').style.border="2px solid black";
		document.getElementById('phone').style.border="2px solid black";
		document.getElementById('orderdate').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('totalamount').style.border="2px solid red";
		return false;
	}
	else{
		alert("Order Placed Successfully");
		return true;
	}
}

function Product(){
	if(document.getElementById('productno').value == ""){
		alert("Please Enter Product No.");
		document.getElementById('productno').style.border="2px solid red";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('pname').value == ""){
		alert("Please Enter Product Name");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid red";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('brandid').value == ""){
		alert("Please Enter Address ");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid red";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid black";
        return false;
	}
	else if(document.getElementById('brandname').value == ""){
		alert("Please Enter Brand Name ");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid red";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('photo').value == ""){
		alert("Please Enter Photo Of Product");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid red";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid black";
		return false;
	}
        else if(document.getElementById('doj').value == ""){
			alert("Please Enter Date of Joining");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid red";
		document.getElementById('price').style.border="2px solid black";
		return false;
	}
		else if(document.getElementById('price').value == ""){
			alert("Please Enter Price of the Product");
		document.getElementById('productno').style.border="2px solid black";
		document.getElementById('pname').style.border="2px solid black";
		document.getElementById('brandid').style.border="2px solid black";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('photo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		document.getElementById('price').style.border="2px solid red";
		return false;
	}
	else{
		alert("Product Added Successfully");
		return true;
	}
}

function Problem(){
   if(document.getElementById('problemid').value == ""){
	   alert("Please Enter Problem Id");
	   document.getElementById('problemid').style.border="2px solid red";
	   document.getElementById('problemdesc').style.border="2px solid black";
	   document.getElementById('problemsol').style.border="2px solid black";
	   document.getElementById('technicianid').style.border="2px solid black";
	   document.getElementById('probdate').style.border="2px solid black";
	   document.getElementById('customerid').style.border="2px solid black";
	   return false;
   }
   else if(document.getElementById('problemdesc').value == ""){
	alert("Please Enter Problem Description");
	document.getElementById('problemid').style.border="2px solid black";
	document.getElementById('problemdesc').style.border="2px solid red";
	document.getElementById('problemsol').style.border="2px solid black";
	document.getElementById('technicianid').style.border="2px solid black";
	document.getElementById('probdate').style.border="2px solid black";
	document.getElementById('customerid').style.border="2px solid black";
	return false;
   }
   else if(document.getElementById('problemsol').value == ""){
	alert("Please Enter Problem Solution");
	document.getElementById('problemid').style.border="2px solid black";
	document.getElementById('problemdesc').style.border="2px solid black";
	document.getElementById('problemsol').style.border="2px solid red";
	document.getElementById('technicianid').style.border="2px solid black";
	document.getElementById('probdate').style.border="2px solid black";
	document.getElementById('customerid').style.border="2px solid black";
	return false;
   }
   else if(document.getElementById('technicianid').value == ""){
	alert("Please Enter Technician Id");
	document.getElementById('problemid').style.border="2px solid black";
	document.getElementById('problemdesc').style.border="2px solid black";
	document.getElementById('problemsol').style.border="2px solid black";
	document.getElementById('technicianid').style.border="2px solid red";
	document.getElementById('probdate').style.border="2px solid black";
	document.getElementById('customerid').style.border="2px solid black";
	return false;
   }
   else if(document.getElementById('probdate').value == ""){
	alert("Please Enter Problem Date");
	document.getElementById('problemid').style.border="2px solid black";
	document.getElementById('problemdesc').style.border="2px solid black";
	document.getElementById('problemsol').style.border="2px solid black";
	document.getElementById('technicianid').style.border="2px solid black";
	document.getElementById('probdate').style.border="2px solid red";
	document.getElementById('customerid').style.border="2px solid black";
	return false;
   }
   else if(document.getElementById('customerid').value == ""){
	alert("Please Enter Customer Id");
	document.getElementById('problemid').style.border="2px solid black";
	document.getElementById('problemdesc').style.border="2px solid black";
	document.getElementById('problemsol').style.border="2px solid black";
	document.getElementById('technicianid').style.border="2px solid black";
	document.getElementById('probdate').style.border="2px solid black";
	document.getElementById('customerid').style.border="2px solid red";
	return false;
   }
   else{
	   alert("Problem Entered Successsfully");
	   return true;
   }
}
function Brand(){
	if(document.getElementById('brandid').value == ""){
		alert("Please Enter Brand Id");
		document.getElementById('brandid').style.border="2px solid red";
		document.getElementById('brandname').style.border="2px solid black";
		document.getElementById('brandlogo').style.border="2px solid black";
		document.getElementById('doj').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('brandname').value == ""){
	 alert("Please Enter Brand Name");
	 document.getElementById('brandid').style.border="2px solid black";
	 document.getElementById('brandname').style.border="2px solid red";
	 document.getElementById('brandlogo').style.border="2px solid black";
	 document.getElementById('doj').style.border="2px solid black";
	 return false;
	}
	else if(document.getElementById('brandlogo').value == ""){
	 alert("Please Enter Brand Logo");
	 document.getElementById('brandid').style.border="2px solid black";
	 document.getElementById('brandname').style.border="2px solid black";
	 document.getElementById('brandlogo').style.border="2px solid red";
	 document.getElementById('doj').style.border="2px solid black";
	 return false;
	}
	else if(document.getElementById('doj').value == ""){
	 alert("Please Enter Joining Date");
	 document.getElementById('brandid').style.border="2px solid black";
	 document.getElementById('brandname').style.border="2px solid black";
	 document.getElementById('brandlogo').style.border="2px solid black";
	 document.getElementById('doj').style.border="2px solid red";
	 return false;
	}
	else{
		alert("Brand Entered Successsfully");
		return true;
	}
}

function Category(){
    if(document.getElementById('categoryid').value == ""){
		alert("Please Enter Category Id");
		document.getElementById('categoryid').style.border="2px solid red";
		document.getElementById('categoryname').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('categoryname').value == ""){
	 alert("Please Enter Category Name");
	 document.getElementById('categoryid').style.border="2px solid black";
	 document.getElementById('categoryname').style.border="2px solid red";
	 return false;
	}
	else{
		alert("Category Entered Successsfully");
		return true;
	}
}

function Complaint(){
    if(document.getElementById('complaintid').value == ""){
		alert("Please Enter Complaint Id");
		document.getElementById('complaintid').style.border="2px solid red";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('complaintdesc').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('customerid').value == ""){
	 alert("Please Enter Customer Id");
	 document.getElementById('complaintid').style.border="2px solid black";
	 document.getElementById('customerid').style.border="2px solid red";
	 document.getElementById('complaintdesc').style.border="2px solid black";
	 return false;
	}
	else if(document.getElementById('complaintdesc').value == ""){
		alert("Please Enter Complaint Description");
		document.getElementById('complaintid').style.border="2px solid black";
		document.getElementById('customerid').style.border="2px solid black";
		document.getElementById('complaintdesc').style.border="2px solid red";
		return false;
	}
	else{
		alert("Category Entered Successsfully");
		return true;
	}
}

function WorkReport(){
	if(document.getElementById('workreportid').value == ""){
		alert("Please Enter Work Report Id");
		document.getElementById('workreportid').style.border="2px solid red";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('workhours').style.border="2px solid black";
		document.getElementById('date').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid black";
		document.getElementById('problemsol').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('technicianid').value == ""){
	 alert("Please Enter Technician Id");
	 document.getElementById('workreportid').style.border="2px solid black";
	 document.getElementById('technicianid').style.border="2px solid red";
	 document.getElementById('workhours').style.border="2px solid black";
	 document.getElementById('date').style.border="2px solid black";
	 document.getElementById('problemid').style.border="2px solid black";
	 document.getElementById('problemsol').style.border="2px solid black";
	 return false;
	}
	else if(document.getElementById('workhours').value == ""){
		alert("Please Enter Work Hours");
		document.getElementById('workreportid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('workhours').style.border="2px solid red";
		document.getElementById('date').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid black";
		document.getElementById('problemsol').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('date').value == ""){
		alert("Please Enter Date");
		document.getElementById('workreportid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('workhours').style.border="2px solid black";
		document.getElementById('date').style.border="2px solid red";
		document.getElementById('problemid').style.border="2px solid black";
		document.getElementById('problemsol').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('problemid').value == ""){
		alert("Please Enter Problem Id");
		document.getElementById('workreportid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('workhours').style.border="2px solid black";
		document.getElementById('date').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid red";
		document.getElementById('problemsol').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('problemsol').value == ""){
		alert("Please Enter Problem Solution");
		document.getElementById('workreportid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('workhours').style.border="2px solid black";
		document.getElementById('date').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid black";
		document.getElementById('problemsol').style.border="2px solid red";
		return false;
	}
	else{
		alert("Work Report Entered Successsfully");
		return true;
	}
}


function Advice(){
	if(document.getElementById('technicianid').value == ""){
	 alert("Please Enter Technician Id");
	 document.getElementById('technicianid').style.border="2px solid red";
	 document.getElementById('advice').style.border="2px solid black";
	 return false;
	}
	else if(document.getElementById('advice').value == ""){
		alert("Please Enter Advice!");
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('advice').style.border="2px solid red";
		return false;
	}
	else{
		alert("Advice Given Successfully");
		return true;
	}
}
function Solution(){
	if(document.getElementById('solutionid').value == ""){
		alert("Please Enter Solution Id");
		document.getElementById('solutionid').style.border="2px solid red";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid black";
		return false;
	}
    else if(document.getElementById('technicianid').value == ""){
		alert("Please Enter Technician Id");
		document.getElementById('solutionid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid red";
		document.getElementById('problemid').style.border="2px solid black";
		return false;
	}
	else if(document.getElementById('problemid').value == ""){
		alert("Please Enter Problem Id");
		document.getElementById('solutionid').style.border="2px solid black";
		document.getElementById('technicianid').style.border="2px solid black";
		document.getElementById('problemid').style.border="2px solid red";
		return false;
	}
	else{
		alert("Solution Added Successfully");
		return true;
	}
}
