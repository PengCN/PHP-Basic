<?PHP 
/* PHP源码部分 */
/* 作者:Peng */

//获取文本框中的值,并确保文本框不为空

$num1=true;
$num2=true;
$message="";

if(isset($_GET["sub"])){

	if(($_GET["num1"])==""){
		$num1=false;
		$message.="第一个数不能为空";
	}
	if(($_GET["num2"])==""){
		$num1=false;
		$message.="第二个数不能为空";
	}
       
	if($num1 && $num2){
      $sum = 0;
        switch($_GET["ys"]){
              
	case "+":
		$sum=$_GET["num1"]+$_GET["num2"];
		break;
	case "-":
		$sum=$_GET["num1"]-$_GET["num2"];
		break;
	case "*":
		$sum=$_GET["num1"]*$_GET["num2"];
		break;
	case "/":
		$sum=$_GET["num1"]/$_GET["num2"];
		break;
	case "%":
	        $sum=$_GET["num1"]%$_GET["num2"];
		break;
	}
	 }
}
?>
	












<!--HTML源码部分-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP简易计算器</title>
<style type="text/css">
body { margin:0;padding:0;background:#f0f0f0;font-family:"arial","微软雅黑","黑体","宋体";}
#Container { width:800px;height:200px;background:#fff;margin:150px auto 0;border:1px solid #d6d6d6;}
h3 { background:#f0f0f0;margin-top:10px;padding:8px;text-align:center;}

#Main { width:750px;height:120px;margin:15px 25px 10px;}
.calculate table { width:750px;height:100px;font-size:12px;}
.calculate input { width:80px;}
.calculate .yunsuan { width:50px;}
.calculate .w { width:100px;text-align:right;}
.calculate .c { font-weight:700;color:red;}
span.fs { color:red;font-weight:700;}
</style>
</head>
<body>
<form action="" method="GET">
<div id="Container">
<h3>PHP简易计算器</h3>

<div id="Main">
<div class="calculate">
<table align="center">
<tr>
  <td class="w">请输入第1个数：</td>
  <td><input type="text" class="shuru" name="num1" value="<?php echo $_GET["num1"];?>"></td>
  <td class="w">请选择运算符号：</td>
  <td>
   <select class="yunsuan" name="ys">
   <option value="+">+</option>
   <option value="-">-</option>
   <option value="*">x</option>
   <option value="/">/</option>
   <option value="%">%</option>
   </select>
  </td>
  <td class="w">请输入第2个数：</td>
  <td><input type="text"   name="num2" value="<?php echo $_GET["num2"];?>"></td>
  <td><input type="submit" name="sub" value="计算" ></td>
  <td><input type="reset"  name="reset" value="重置" ></td>
</tr>

<?php
 if(isset($_GET["sub"])){
                                 if($num1 && $num2){
	                         echo '<tr>
		                <td colspan="4">该计算结果为：'.$_GET["num1"].''.$_GET["ys"].''.$_GET["num2"].'='.$sum.'</td>
				</tr>';
				 } else {
				   echo '<tr>
		                <td colspan="4">提示信息：'.$message.'</td>
				</tr>';
				 }
	                             }


 
?>

</table>
</div>
</div>

</div>
</form>
</body>
</html>

