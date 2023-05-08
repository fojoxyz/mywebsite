<?php
	 $B1=isset($_REQUEST['BSAVE'])?$_REQUEST['BSAVE']:'';
	 $B2=isset($_REQUEST['BSEARCH'])?$_REQUEST['BSEARCH']:'';
	 $B3=isset($_REQUEST['BDELETE'])?$_REQUEST['BDELETE']:'';
	 $B4=isset($_REQUEST['BCLEAR'])?$_REQUEST['BCLEAR']:'';
	 
	$vID=isset($_REQUEST['TID'])?$_REQUEST['TID']:'';
    $vName=isset($_REQUEST['TNAME'])?$_REQUEST['TNAME']:'';
    $vGender=isset($_REQUEST['TGENDER'])?$_REQUEST['TGENDER']:'';
	$vAge=isset($_REQUEST['TAGE'])?$_REQUEST['TAGE']:'';
    $vBdate=isset($_REQUEST['TBDATE'])?$_REQUEST['TBDATE']:'';
    $vCivilStatus=isset($_REQUEST['TCIVILSTATUS'])?$_REQUEST['TCIVILSTATUS']:'';
    $vAddress=isset($_REQUEST['TADDRESS'])?$_REQUEST['TADDRESS']:'';
    $vContactNumber=isset($_REQUEST['TCONTACTNO'])?$_REQUEST['TCONTACTNO']:'';
    $vEmailAdd=isset($_REQUEST['TEMAIL'])?$_REQUEST['TEMAIL']:'';
    $vMessage="";
	 
	 $host="localhost";
	 $user="root";
	 $pass="";
	 $dbname="poymi";
	 
	 $con=mysqli_connect($host,$user,$pass,$dbname) or die ('Cannot connect the database.');
	 
	 if($B1=="SAVE")
			  {
					$result=mysqli_query($con,"SELECT * FROM tblsample2 WHERE IDNUM='$vID'");
					$row=mysqli_fetch_array($result);
					
					
					if($row>0)
					   
					   {
					   
						  mysqli_query($con,"UPDATE tblsample2 SET FULLNAME='$vName',GENDER='$vGender',AGE='$vAge',BDATE='$vBdate',CIVILSTATUS='$vCivilStatus',FULLADDRESS='$vAddress',CONTACTNUM='$vContactNumber',EMAILADDRESS='$vEmailAdd'WHERE IDNUM='$vID'");
						  $vMessage="Record Has Been Edited!!!";
						  
					   }
					  else
					   {
					     
						  mysqli_query($con,"INSERT INTO tblsample2(IDNUM,FULLNAME,GENDER,AGE,BDATE,CIVILSTATUS,FULLADDRESS,CONTACTNUM,EMAILADDRESS )VALUES('$vID','$vName','$vGender','$vAge','$vBdate','$vCivilStatus','$vAddress','$vContactNumber','$vEmailAdd')");
						  $vMessage="New record save";
						  
					   }


                }
				
	 if($B2=="SEARCH")
	          
			  { 
			     $result=mysqli_query($con,"SELECT * FROM tblsample2 WHERE IDNUM='$vID'");
				 $row=mysqli_fetch_array($result);
  				 
				 if($row>0)
 				    
					{ 
					    $vID=$row['IDNUM'];
						$vName=$row['FULLNAME'];
						$vGender=$row['GENDER'];
                        $vAge=$row['AGE'];
                        $vBdate=$row['BDATE'];
                        $vCivilStatus=$row['CIVILSTATUS'];
                        $vAddress=$row['FULLADDRESS'];
                        $vContactNumber=$row['CONTACTNUM'];
                        $vEmailAdd=$row['EMAILADDRESS'];
						$vMessage="Record found";
						
					}
				 else
				    { 
				       $vName="";
				       $vGender="";
                       $vAge="";
                       $vBdate="";
                       $vCivilStatus="";
                       $vAddress="";
                       $vContactNumber="";
                       $vEmailAdd="";

				       $vMessage="Record not found";
					}	

         }
		 
	if($B3=="DELETE") 
	        {
			 mysqli_query($con,"DELETE FROM tblsample2 WHERE IDNUM='$vID'");
			    $vID="";
				$vName="";
				$vGender="";
            $vAge="";
            $vBdate="";
            $vCivilStatus="";
            $vAddress="";
            $vContactNumber="";
            $vEmailAdd="";
				$vMessage="Record deleted";
				
			}
	if($B4=="CLEAR")
	        {
			$vID="";
			$vName="";
			$vGender="";
            $vAge="";
            $vBdate="";
            $vCivilStatus="";
            $vAddress="";
            $vContactNumber="";
            $vEmailAdd="";
				$vMessage="All fields are clear";
			}
		
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTRATION FOR BSIT 2A</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="webdesign.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="moment.min.js"></script>
<script src="bootstrap-datetimepicker.min.js"></script>
<script>
$(document).ready(function()
{
   $("#DatePicker1").datetimepicker(
   {
      defaultDate: '',
      showClose: true,
      showTodayButton: true,
      format: 'L'
   });
});
</script>
</head>
<body>
<form name ="form1" method="post" action="registration.php">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_Text1" style="position:absolute;left:30px;top:49px;width:459px;height:42px;z-index:1;">
<span style="color:#000000;font-family:Impact;font-size:30px;">REGISTRATION │ BSIT 2A</span></div>
<div id="wb_Text2" style="position:absolute;left:87px;top:167px;width:213px;height:27px;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>ID NO.:</strong></span></div>
<div id="wb_Text3" style="position:absolute;left:89px;top:220px;width:119px;height:27px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>NAME:</strong></span></div>
<div id="wb_Text4" style="position:absolute;left:89px;top:322px;width:119px;height:27px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>AGE:</strong></span></div>
<div id="wb_Text5" style="position:absolute;left:87px;top:266px;width:132px;height:27px;z-index:5;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>GENDER:</strong></span></div>
<div id="wb_Text6" style="position:absolute;left:88px;top:367px;width:130px;height:27px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>B-DATE:</strong></span></div>
<div id="wb_Text7" style="position:absolute;left:87px;top:411px;width:194px;height:27px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>CIVIL STATUS:</strong></span></div>
<div id="wb_Text8" style="position:absolute;left:87px;top:457px;width:143px;height:27px;z-index:8;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>ADDRESS:</strong></span></div>
<div id="wb_Text9" style="position:absolute;left:87px;top:507px;width:289px;height:22px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:20px;"><strong>CONTACT NUMBER:</strong></span></div>
<div id="wb_Text10" style="position:absolute;left:89px;top:553px;width:259px;height:22px;z-index:10;">
<span style="color:#000000;font-family:Arial;font-size:20px;"><strong>EMAIL ADDRESS:</strong></span></div>
<input type="text" id="Editbox1" style="position:absolute;left:291px;top:160px;width:204px;height:31px;z-index:11;" name="TID" value="<?php echo $vID;?>" spellcheck="false">
<input type="text" id="Editbox2" style="position:absolute;left:291px;top:211px;width:345px;height:26px;z-index:12;" name="TNAME" value="<?php echo $vName;?>" spellcheck="false">
<select name="TGENDER" size="1" id="Combobox1" style="position:absolute;left:291px;top:260px;width:172px;height:38px;z-index:13;">
<option value=""><?php echo $vGender;?></option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHERS</option>
</select>
<input type="text" id="Editbox3" style="position:absolute;left:291px;top:310px;width:158px;height:29px;z-index:14;" name="TAGE" value="<?php echo $vAge;?>" spellcheck="false">
<select name="TCIVILSTATUS" size="1" id="Combobox2" style="position:absolute;left:291px;top:407px;width:138px;height:35px;z-index:15;">
<option value=""><?php echo $vCivilStatus;?></option>
<option>SINGLE</option>
<option>MARRIED</option>
<option>WIDOWED</option>
</select>
<input type="text" id="Editbox5" style="position:absolute;left:291px;top:451px;width:301px;height:28px;z-index:16;" name="TADDRESS" value="<?php echo $vAddress;?>" spellcheck="false">
<input type="text" id="Editbox6" style="position:absolute;left:291px;top:499px;width:231px;height:28px;z-index:17;" name="TCONTACTNO" value="<?php echo $vContactNumber;?>" spellcheck="false">
<input type="text" id="Editbox7" style="position:absolute;left:291px;top:546px;width:253px;height:27px;z-index:18;" name="TEMAIL" value="<?php echo $vEmailAdd;?>" spellcheck="false">
<hr id="Line1" style="position:absolute;left:0px;top:106px;width:3585px;z-index:19;">
<div id="wb_DatePicker1" style="position:absolute;left:291px;top:362px;width:203px;height:36px;z-index:20;">
<div class="input-group date" id="DatePicker1">
<input type="text" class="form-control" name="TBDATE" value="<?php echo $vBdate;?>">
<span class="input-group-addon">
<span class="glyphicon glyphicon-date"></span>
</span>
</div>
</div>
</div>
<div id="wb_Text11" style="position:absolute;left:160px;top:609px;width:250px;height:15px;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:13px;">MESSAGE: <?php echo $vMessage;?></span></div>
<input type="submit" id="Button1" name="BSAVE" value="SAVE" style="position:absolute;left:208px;top:645px;width:102px;height:33px;z-index:22;">
<input type="submit" id="Button2" name="BSEARCH" value="SEARCH" style="position:absolute;left:350px;top:645px;width:101px;height:33px;z-index:23;">
<input type="submit" id="Button3" name="BCLEAR" value="CLEAR" style="position:absolute;left:494px;top:645px;width:98px;height:33px;z-index:24;">
<input type="submit" id="Button4" name="BDELETE" value="DELETE" style="position:absolute;left:635px;top:645px;width:96px;height:33px;z-index:25;">
</form>
</body>
</html>