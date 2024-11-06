<?php
// เชื่อมต่อฐานข้อมูล
include '../model/DB.php';

// SQL query เพื่อดึงข้อมูลจากตาราง room
$sql = "SELECT room_id, room_build, room_floor, room_no, status FROM room";
$result = $conn->query($sql);

// ตัวแปรสำหรับเก็บข้อมูลตึก
$towers = [];

if ($result->num_rows > 0) {
    // วนลูปผ่านผลลัพธ์และจัดเก็บใน array
    while($row = $result->fetch_assoc()) {
        $building_id = $row["room_build"];
        $floor_number = $row["room_floor"];
        $room_number = $row["room_no"];
        $claws = $row["status"];

        // เช็คว่าตึกนี้มีข้อมูลใน array หรือยัง
        if (!isset($towers[$building_id])) {
            $towers[$building_id] = [];
        }
        
        // เช็คว่าชั้นนี้มีข้อมูลใน array หรือยัง
        if (!isset($towers[$building_id][$floor_number])) {
            $towers[$building_id][$floor_number] = [];
        }
        
        // เพิ่มข้อมูลห้องลงในชั้นนั้นๆ
        $towers[$building_id][$floor_number][$room_number] = $claws;
    }
} else {
    echo "0 results";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>

    <title>ตึกและห้องพัก</title>
    <style>
       
    /* General body styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .building {
        margin: 40px auto;
        padding: 30px;  /* Added padding for top, left, right */
        max-width: 1200px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2, h3 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 15px;  /* Set padding inside cells */
        text-align: center;
        background-color: #fff;
        font-size: 14px;
    }

    th {
        background-color: #333;
        color: #fff;
        font-weight: bold;
    }

    td {
        font-weight: normal;
    }

    .status-occupied {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    .status-vacant {
        background-color: #f44336;
        color: white;
        font-weight: bold;
    }

    .next-building-button {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .next-building-button:hover {
        background-color: #0056b3;
    }

    .building-container {
        display: none; /* Hide all buildings initially */
    }

    .building-container.active {
        display: block; /* Show the selected building */
    }

    .building-button {
        padding: 5px 10px;
        background-color: #28a745;
        color: white;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
    }

    .building-button:hover {
        background-color: #218838;
    }

    /* Make the table responsive */
    @media (max-width: 768px) {
        table {
            font-size: 12px;
        }

        th, td {
            padding: 10px;  /* Reduce padding for smaller screens */
        }

        /* Adjust table headers and data cell width for mobile */
        th {
            font-size: 12px;
        }

        td {
            font-size: 12px;
        }

        .building {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width: 480px) {
        table {
            font-size: 10px;
        }

        th, td {
            padding: 8px;  /* Reduce padding further for very small screens */
        }

        /* Stacked table layout for small screens */
        th, td {
            display: block;
            text-align: left;
        }

        td {
            padding-left: 50%;
        }
    }

    </style>
</head>
<body>

<h2>ตึกและห้องพัก</h2>



<?php
// แสดงข้อมูลในรูปแบบของ HTML Table สำหรับแต่ละตึก
foreach ($towers as $building_id => $floors) {
    // สร้าง div สำหรับแต่ละตึก
    echo "<div id='building-$building_id' class='building building-container'>";
    echo "<h3>ตึกที่ $building_id</h3>";

    // เริ่มตารางสำหรับแสดงข้อมูล
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ชั้น</th>
                <th>ห้อง 1</th>
                <th>ห้อง 2</th>
                <th>ห้อง 3</th>
                <th>ห้อง 4</th>
                <th>ห้อง 5</th>
                <th>ห้อง 6</th>
                <th>ห้อง 7</th>
                <th>ห้อง 8</th>
                <th>ห้อง 9</th>
                <th>ห้อง 10</th>
            </tr>
          </thead>";
    echo "<tbody>";

    // วนลูปแสดงข้อมูลแต่ละชั้น
    foreach ($floors as $floor_number => $rooms) {
        echo "<tr>";
        echo "<td>ชั้นที่ $floor_number</td>";

        // วนลูปแสดงข้อมูลห้องแต่ละห้อง
        for ($room_number = 1; $room_number <= 10; $room_number++) {
            $room_status = isset($rooms[$room_number]) ? $rooms[$room_number] : "0";  // หากไม่มีข้อมูลห้องให้แสดง "ไม่ระบุ"
            $status_class = "";

              // กำหนด class ตามสถานะห้อง
              if ($room_status == "1") {
                $status_class = "status-occupied";  // ห้องที่มีสถานะ 1 ใช้สีเขียว
            } elseif ($room_status == "0") {
                $status_class = "status-vacant";  // ห้องที่มีสถานะ 0 ใช้สีแดง
            }
              // แสดงสถานะห้อง (1 หรือ 0) ในช่อง//$room_status
             echo "<td class='$status_class'></td>";
        }

        echo "</tr>";
    }

    echo "</tbody></table>";
    echo "</div>";
}
?>



<!-- แสดงปุ่มสำหรับเลือกตึก -->
<div style="text-align: center;">
    <?php
    // แสดงปุ่มสำหรับแต่ละตึก
    foreach ($towers as $building_id => $floors) {
        echo "<button class='building-button' onclick='showBuilding($building_id)'>ตึกที่ $building_id</button>";
    }
    ?>
</div>
<script>
    // ฟังก์ชันในการแสดงหรือซ่อนตึก
    function showBuilding(building_id) {
        // ซ่อนตึกทั้งหมด
        var allBuildings = document.querySelectorAll('.building-container');
        allBuildings.forEach(function(building) {
            building.classList.remove('active');
        });

        // แสดงตึกที่ถูกเลือก
        var building = document.getElementById('building-' + building_id);
        building.classList.add('active');
    }
    // ฟังก์ชันในการโหลดหน้าเว็บให้แสดงตึก 1 โดยอัตโนมัติ
    window.onload = function() {
        showBuilding(1); // เริ่มต้นแสดงตึกที่ 1 เมื่อโหลดหน้า
    };
</script>
