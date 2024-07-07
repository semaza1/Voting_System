<?php
// Include database connection file
include('adminConn.php');
// Check if userId is set and not empty
if(isset($_GET['CandidateId']) && !empty($_GET['CandidateId'])) {
    // Sanitize input
    $CandidateId = mysqli_real_escape_string($conn, $_GET['CandidateId']);

    // Fetch record from database based on CandidateId
    $query = "SELECT Name,Bio, Manifesto,candimages FROM candidate WHERE CandidateId = '$CandidateId'";
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if($result) {
        // Fetch data
        $row = mysqli_fetch_assoc($result);
        // Return data as JSON
        echo json_encode($row);
    } else {
        echo json_encode(array('error' => 'Error fetching data from database'));
    }
} else {
    echo json_encode(array('error' => 'Invalid userId parameter'));
}

// Close database connection
mysqli_close($conn);
?>