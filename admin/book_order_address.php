<?php
require 'partially/db.php';
include 'top.php';
if (!isset($_GET['id'])) {
header('location: dashboard.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM book_order WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$latitude = $row['latitude'];
$longitude = $row['longitude'];
?>
<div class="content">
    <div class="detail">
        <div class="heading">
            <h2>Book Users Detail</h2>
        </div>
        <!--  -->
        <div class="User-detail-record">
            <div class="user_detail">
                <div class="side left_user_detail">
                    <li>Name:</li>
                    <li>Email:</li>
                    <li>Mobile:</li>
                    <li>Type Service:</li>
                    <li>City:</li>
                    <li>Address:</li>
                </div>
                <div class="side right_user_detail">
                    <li><?php echo $row['name'] ?></li>
                    <li><?php echo $row['email'] ?></li>
                    <li><?php echo $row['mobile'] ?></li>
                    <li><?php echo $row['type_service'] ?></li>
                    <li><?php echo $row['city'] ?></li>
                    <li><?php echo $row['address'] ?></li>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <!-- Map Heading -->
        <h2 class="map_heading" class="">User Location</h1>
        <!-- Add map -->
        <div id="map"></div>
    </div>
</div>
</body>
</html>
<script>
// Add the Map
function initMap() {
const map = new google.maps.Map(document.getElementById("map"), {
zoom: 15,
center: {lat: <?php echo $latitude ?>, lng: <?php echo $longitude ?>},
});
// Add Marker
const marker = new google.maps.Marker({
position: {lat: <?php echo $latitude ?>, lng: <?php echo $longitude ?>},
map: map,
});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLLTbUNP5Zv5gDzUkFc2tAKRwJarnKli8&callback=initMap&libraries=&v=weekly" async></script>