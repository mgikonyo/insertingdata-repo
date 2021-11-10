 <?php
$conn = mysqli_connect("localhost", "pharmacy", "velexing2%", "COSF_CAT_1");
$info = json_decode(file_get_contents("php://input")); 
{
    $Patient_id = mysqli_real_escape_string($conn, $info->Patient_id);
    $Patient_name = mysqli_real_escape_string($conn, $info->Patient_name);
    $Drug_name = mysqli_real_escape_string($conn, $info->Drug_name);
    $Number_issued = mysqli_real_escape_string($conn, $info->Number_issued);
    $Cost_per_item = mysqli_real_escape_string($conn, $info->Cost_per_item);
    $query = "INSERT INTO pharmacy(Patient_id,Patient_name,Drug_name,Number_issued,Cost_per_item) VALUES ('$Patient_id', '$Patient_name', '$Drug_name','$Number_issued','$Cost_per_item')";
    if (mysqli_query($conn, $query)) {
        echo "Data Inserted Successfully";
    }
    else {
        echo "Operation Failed";
    }
}
?>