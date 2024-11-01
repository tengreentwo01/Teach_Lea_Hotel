<?php
session_start();

// Check if 'username' and 'status' are set in $_SESSION before echoing
if (isset($_SESSION['username'], $_SESSION['status'])) {
    // Check if 'status' is not empty
    if (!empty($_SESSION['status'])) {
        echo "Username: " . $_SESSION['username'];
    } else {
        // ทำลายเซสชัน
        session_destroy();
        // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
        header("Location: ../admin.php");
        // จบการทำงานของสคริปต์
        die();
    }
} else {
    echo "Username or status not set in session.";
    // ทำลายเซสชัน
    session_destroy();
    // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
    header("Location: ../admin.php");
    // จบการทำงานของสคริปต์
    die();
}
?>


<html>
<head>
<title>ร้องเรียน Administration Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<style type="text/css">
/*
a:link { color: #005CA2; text-decoration: none}
a:visited { color: #005CA2; text-decoration: none}
a:active { color: #0099FF; text-decoration: underline}
a:hover { color: #0099FF; text-decoration: underline}
*/
</style>
</head>
<body bgcolor="#99ffcc">

<?php
$mname = array(1 => 'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน',
     'พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน',
     'ตุลาคม','พฤศจิกายน','ธันวาคม');
$dname = array(1 => 'อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์');
$abmname = array(1 => 'ม.ค.','ก.พ.','มี.ค.','เม.ย.',
     'พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.',
     'ต.ค.','พ.ย.','ธ.ค.');
$abdname = array(1 => 'อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.');

  include "connectdb1.php";
 // $query1="SELECT username,passing FROM rongtookadm WHERE username='".$_POST['usrname']."' and passing='".$_POST['passing']."' and status=0";
  $query1 = "SELECT username, passing, name, status
            FROM rongtookadm
            WHERE username = ?
            AND passing = ?
            AND status = 0";
  //echo $query1;
  $result1=mysqli_query($con,$query1);
  $nrow=mysqli_num_rows($result1);
  if ($nrow==1)
  {
    //session_start();
    //session_register("usrname");
    //session_register("passing");
	
  //include "connectdb1.php";
  $query="select * from rongtook order by id desc";	
  $result=mysqli_query($con,$query);
	echo "<p align=center><font size=5>รายการร้องเรียนทั้งหมด</font></p>";
  echo "<div align=center><b><a href='./57822.php'>รายการร้องเรียน</a> | <a href='./solvepreview.php'>รายการตอบเรื่องร้องเรียน</a> | <a href='./solve.php'>ตอบเรื่องร้องเรียน</a> | <a href='./adminlogoff.php'>Log Off</b></a></div><br>";
	echo "<table align=center border=1 bordercolor='#ff0033'>";
	echo "<tr align=center bgcolor='#ffcc99'><td>เลขอ้างอิง</td><td>เรื่อง</td><td>จาก</td><td>ส่งเมื่อ</td><td>สถานะ</td></tr>";
  while ($row=mysqli_fetch_row($result))
  {
	  echo "<tr bgcolor='";
		if ($row[15]==1) {echo "#00ff00";}
		else {echo "#ffccff";}		
		echo "'><td align=right>$row[0]</td>";
	  echo "<td><a href='./rtitem.php?id=$row[0]' target='_blank'><b>$row[10]</b></a></td>";
	  echo "<td>$row[2]</td>";
    $tt = strtotime($row[13]);
    echo "<td align=center>".date("Hi, ",$tt).$abdname[(date("w",$tt)+1)].date("j ",$tt).$abmname[(date("n",$tt))].((543+date("Y",$tt))%100)."</td>";
		echo "<td align=center>";
		if ($row[15]==1) {echo "ยืนยันการส่งแล้ว";}
		else {echo "ยังไม่ยืนยันการส่ง";}
		echo "</td></tr>";
	}
	echo "</table>";
}
else
{
  include "admin.php";
}
?>

</body>
</html>