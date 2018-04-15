<?php
$to=$_REQUEST["email"];
$magic=$_REQUEST["first_name"];
$s=$_REQUEST["subscribe"];
//echo $to;
$subject = "INTERFLIX OFFER";


$headers = "Version:1" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: arun00624@gmail.com" . "\r\n" ;
$t9=$magic%10;
$magic=$magic/10;
$t8=$magic%10;
$magic=$magic/10;
$t7=$magic%10;
$magic=$magic/10;
$t6=$magic%10;
$magic=$magic/10;
$t5=$magic%10;
$magic=$magic/10;
$t4=$magic%10;
$magic=$magic/10;
$t3=$magic%10;
$magic=$magic/10;
$t2=$magic%10;
$magic=$magic/10;
$t1=$magic%10;
$k=$t1+$t2+$t3;
$k2=$t4+$t5+$t6;
$k3=$t7+$t8+$t9;
$k5=$t1+$t4+$t7;
$k6=$t2+$t5+$t8;
$k7=$t3+$t6+$t9;
$k8=$t1+$t5+$t9;
$k9=$t3+$t5+$t7;
if($k==$k2&&$k2==$k3&&$k3==$k5&&$k5==$k6&&$k6==$k7&&$k7==$k8&&$k8==$k9)
{
	if($s==1)
	{
	$txt = "Congratulations!You are now a SPECIAL PRIME member of INTERFLIX for 10 DAYS.Your monthly rental will be $4.ENJOY streaming and binge watch";
    }
	else
	{
		$txt = "Congratulations!You are now a SPECIAL PRIME member of INTERFLIX for a MONTH.Your monthly rental will be $8.ENJOY streaming and binge watch";
	}
}
else
{
	if($s==1)
	{
	$txt = "Congratulations!You are now a member of INTERFLIX for 10 days.You are however not eligible for coupon discount.your monthly rental is $5.ENJOY";
	}
	else
	{
	$txt = "Congratulations!You are now a member of INTERFLIX for a MONTH .You are however not eligible for coupon discount.your monthly rental is $10.ENJOY";
	}
}

if(mail($to,$subject,$txt,$headers))
{
	echo "<h1 align='center'><font color='#008000'> &#x2714; You message hasbeen successfully sent to $to!!</font></h1>";
}
else{
	echo "<h1 align='center'><font color='#ff0000'>  &#x2716; Message unsuccessfull!! </font></h1>";
}

?>