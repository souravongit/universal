<?php 
$home="";
$product="";
$photo_gallery="";
$about_us="";
$contact_us="active";
$history=""; 
$universal_sales="";
$universal_energy_solutions="";
$universal_sales_projects="";
include("includes/header.php");
?>

<?php 
if(isset($_REQUEST["action"]) && $_REQUEST["action"]=="submit")
{
$subject=$_REQUEST["subject"];
$detail=$_REQUEST["detail"];
$name=$_REQUEST["name"];
$customer_mail=$_REQUEST["customer_mail"];
$action=$_REQUEST["action"];
$mail_to="mail@universalgroupindia.org";
$message = 
	"Hello \n
	Here is the contact details \n
	Name:$name\n
	User email id: $customer_mail \n
	subject: $subject \n
	message: $detail \n
	
	
	Thank You\n\n
	From:$user_from\n
	
	
	______________________________________________________
	THIS IS AN AUTOMATED RESPONSE. 
	***DO NOT RESPOND TO THIS EMAIL****
	";
	
		if(mail($mail_to, "User Contact Details", $message,
		"From: ".$customer_mail."\r\n" .
		 "X-Mailer: PHP/" . phpversion()))
		 {
		 ?>
		 <script type="text/javascript">
		 alert("Contact Successfully Mailed..");
		 </script>
		 <?php
		 }
		 
}		 
?>
<script type="text/javascript">
function check_form()
{

var subject=$("#subject").val();
var detail=$("#detail").val();
var name=$("#name").val();
var customer_mail=$("#customer_mail").val();
	if(subject=="")
	{
	alert("Please enter a subject.");
	$("input#subject").focus();
	return false;
	}
	else if(detail=="")
	{
	alert("Please enter detail.");
	$("#detail").focus();
	return false;
	}
	
	else if(name=="")
	{
	alert("Please inser your name.");
	$("input#name").focus();
	return false;
	}
	else if(customer_mail=="")
	{
	alert("Please inser your email id.");
	$("input#email").focus();
	return false;
	}
	else 
	{
	$("#action").val("submit");
	document.form1.submit();
	}
}
</script>
<style>
.matter{ width:860px; height:400px; margin:0 0 0 40px; padding:0 0 0 0;}
.map{width:560px; height:460px; float:left; margin:0 0 0 0; padding:0 0 0 0;}
.contact_form{width:300px; float:left; height:400px; margin:0 0 0 0; padding:0 0 0 0;}
</style>
<div class="wrapper col3">
	<div id="container">
		<div class="matter">
			<div class="map">
			<img src="images/4de8795fa2cd0 copy.jpg" width="560px" height="460px"  />
			<!--<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/?ie=UTF8&amp;ll=22.556952,88.36853&amp;spn=0.772345,0.883026&amp;t=m&amp;z=10&amp;output=embed"></iframe>
			<br />-->
			</div>
			<div class="contact_form">
					<table align="center" width="100%">
					<tr>
					<td valign="top">
					<table  align="center" cellpadding="0" cellspacing="0">
					<tr>
					<td><strong><h1>Contact Form </h1></strong></td>
					</tr>
					</table>
					</td>
					</tr>
					<tr>
					<td valign="top">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
					<td><form name="form1" method="post" action="contact_us.php" onsubmit="return check_form();">
					<table width="100%" border="0" cellspacing="1" cellpadding="3">
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					<tr>
					<input type="hidden" name="action" id="action" />
					<td width="51">Subject</td>
					<td width="21">:</td>
					<td width="198"><input name="subject" type="text" id="subject" size="25"/></td>
					</tr>
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					<tr>
					<td>Detail</td>
					<td>:</td>
					<td><textarea name="detail" cols="22" rows="4" id="detail"></textarea></td>
					</tr>
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					<tr>
					<td>Name</td>
					<td>:</td>
					<td><input name="name" type="text" id="name" size="25"/></td>
					</tr>
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					<tr>
					<td>Email</td>
					<td>:</td>
					<td><input name="customer_mail" type="text" id="customer_mail" size="25"/></td>
					</tr>
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset"/></td>
					</tr>
					<tr>
					<td valign="top" width="51" height="4"></td>
					</tr>
					</table>
					</form>
					</td>
					</tr>
					</table>
					</td>
					</tr>
					</table>
					<iframe width="250" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newtown,+Kolkata,+West+Bengal,+India,Siddha+Pines&amp;aq=&amp;sll=22.58591,88.481558&amp;sspn=0.178149,0.336113&amp;g=Newtown,+Kolkata,+West+Bengal,+India&amp;ie=UTF8&amp;hq=,Siddha+Pines&amp;hnear=Newtown,+Rajarhat,+Kolkata,+West+Bengal,+India&amp;ll=22.585801,88.481483&amp;spn=0.108022,0.048279&amp;t=m&amp;output=embed"></iframe>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/>
		<div style="height:200px;">
		<h2>Our Contact Details !</h2>
		<div style="float:left;width:300px;">
		 
     	Head office:<br/>
        Universal Energy Solutions Pvt. Ltd.<br/>
        P-41 &nbsp; Princep Street<br/>
        6th Floor,<br/>
        Kolkata-700072<br/>
        Tele: 033-40033031/40033182<br/>
        FAX: 033-22157893<br/>
        Email: universal.energysolutions@gmail.com<br/>
		</div>
		<div style="float:left;width:300px;">
		 
		Universal Sales:<br/>
		P-41, Princep Street<br/>
		5th Floor,<br/>
		Kolkata-700072<br/>
		Tele: 033-40033031 / 40033182<br/>
		FAX: 033-22157893<br/>
		</div>
		<div style="float:left;width:300px;">
		 Corporate office: <br/>
			UNIVERSAL HOUSE<br/>
			Jgordanga<br/>
			p.o-Rajarhat,Gopalpur<br/>
			Kolkata-700136<br/>
			(From Chinner Park-
			Derozio College-Next <br/>
			Stop To College 
			On Left Hand Side)<br/>
			Phone:25195074<br/>
		</div>
        
      </div>
	</div>
</div>
<?php include("includes/footer.php"); ?>