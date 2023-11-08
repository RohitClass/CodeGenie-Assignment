<?php
include "config.php";

if(isset($_POST["from"]) && isset($_POST["to"])){

    $startDate = $_POST["from"];
    $endDate = $_POST["to"];
    
    $query = "
        SELECT user_id, 
               SUM(CASE WHEN servicetype = 'AEPS' THEN transamt ELSE 0 END) AS sum_service1,
               SUM(CASE WHEN servicetype = 'PREPAID' THEN transamt ELSE 0 END) AS sum_service2,
               SUM(CASE WHEN servicetype = 'ELECTRICITY' THEN transamt ELSE 0 END) AS sum_service3,
               SUM(CASE WHEN servicetype = 'REMITTANCE' THEN transamt ELSE 0 END) AS sum_service4,
               SUM(CASE WHEN servicetype = 'DTH' THEN transamt ELSE 0 END) AS sum_service5,
               SUM(CASE WHEN servicetype = 'GAS' THEN transamt ELSE 0 END) AS sum_service6,
               SUM(CASE WHEN servicetype = 'WATER' THEN transamt ELSE 0 END) AS sum_service7,
               SUM(CASE WHEN servicetype = 'POSTPAID' THEN transamt ELSE 0 END) AS sum_service8
        FROM assdt_service_consumption_table
        WHERE req_dt BETWEEN '$startDate' AND '$endDate'
        GROUP BY user_id
    ";

    $result = $conn->query($query);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

} else {
    $query = "
        SELECT user_id, 
        SUM(CASE WHEN servicetype = 'AEPS' THEN transamt ELSE 0 END) AS sum_service1,
        SUM(CASE WHEN servicetype = 'PREPAID' THEN transamt ELSE 0 END) AS sum_service2,
        SUM(CASE WHEN servicetype = 'ELECTRICITY' THEN transamt ELSE 0 END) AS sum_service3,
        SUM(CASE WHEN servicetype = 'REMITTANCE' THEN transamt ELSE 0 END) AS sum_service4,
        SUM(CASE WHEN servicetype = 'DTH' THEN transamt ELSE 0 END) AS sum_service5,
        SUM(CASE WHEN servicetype = 'GAS' THEN transamt ELSE 0 END) AS sum_service6,
        SUM(CASE WHEN servicetype = 'WATER' THEN transamt ELSE 0 END) AS sum_service7,
        SUM(CASE WHEN servicetype = 'POSTPAID' THEN transamt ELSE 0 END) AS sum_service8
        FROM assdt_service_consumption_table
        GROUP BY user_id
    ";
    $result = $conn->query($query);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
}


?>
