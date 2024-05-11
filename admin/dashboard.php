<?php
require 'partially/db.php';
include 'top.php';
// Fetch Book_order Table
$sql_book = "SELECT * FROM book_order";
$result_book = mysqli_query($con, $sql_book);
$row_book = mysqli_num_rows($result_book);
// Fetch Feedback Table
$sql_feedback = "SELECT * FROM feedback";
$result_feedback = mysqli_query($con, $sql_feedback);
$row_feedback = mysqli_num_rows($result_feedback);
// Fetch Contact Table
$sql_contact = "SELECT * FROM contact";
$result_contact = mysqli_query($con, $sql_contact);
$row_contact = mysqli_num_rows($result_contact);
// Pagination setup
$total_num_page = 10;
if (isset($_GET['page_id'])) {
$page_id = $_GET['page_id'];
} else {
$page_id = 1;
}
$start_form = ($page_id - 1) * 5;
// Fetch Book_order Table With Status
$sql1 = "SELECT * FROM book_order WHERE status = '0' ORDER BY id DESC lIMIT $start_form, $total_num_page";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_num_rows($result1);
// Fetch Visitor Table
$sql2 = "SELECT * FROM visitor";
$result2 = mysqli_query($con, $sql2);
$row = mysqli_fetch_assoc($result2);
?>
<div class="content">
    <!-- Multi Card  -->
    <div class="main">
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $row['visitor'] ?></div>
                    <div class="cardName">Total Views</div>
                </div>
                <div class="iconBx">
                    <i class="far fa-eye eye-xx"></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $row1 ?></div>
                    <div class="cardName">Completed Order</div>
                </div>
                <div class="iconBx">
                    <i class="fas fa-handshake chat-xx"></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $row_notification_order ?></div>
                    <div class="cardName">Order Notification</div>
                </div>
                <div class="iconBx">
                    <i class="fas fa-bell chat-xx"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart Analyzer -->
    <div class="chart-main">
        <div class="chart-left">
            <canvas id="myChart" aria-label="chart" role="img"></canvas>
        </div>
        <div class="chart-right">
            <canvas id="myChart2" aria-label="chart" role="img"></canvas>
        </div>
    </div>
    <!-- Table Data -->
    <div class="detail detail_2">
        <div class="detail-top">
            <div class="heading">
                <h2>Users Order Pending</h2>
            </div>
            <div>
                <a class="notification-btn" href="dashboard_notification.php">Order History</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Type Service</td>
                    <td>Mobile</td>
                    <td>City</td>
                    <td>Operation</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $msg = '';
                if ($row1 > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['type_service'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td>
                        <a class="status delivered" href="book_order_address.php?id=<?php echo $row['id'] ?>">Detail</a>
                        <a class="status return" href="partially/dashboard_handle.php?id=<?php echo $row['id'] ?>">Unread</a>
                        <a class="status pending" href="">Pending</a>

                    </td>
                </tr>
                <?php
                }
                } else {
                $msg = 'No data found';
                }
                ?>
            </tbody>
        </table>
        <div class="no_data_found">
            <h2><?php echo $msg?></h2>
        </div>
    </div>
    <!-- Pagination setup -->
    <div class="pagination">
        <?php
        $sql = "SELECT * FROM book_order WHERE status = '1'";
        $page_result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($page_result);
        $total_page = ceil($total_record / $total_num_page);
        for ($i = 1; $i <= $total_page; $i++) {
        if ($total_record > 10) {
        echo '<a href="dashboard.php?page_id=' . $i . '">' . $i . '</a>';
        } else {
        echo '';
        }
        }
        ?>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext("2d");
var myChart = new Chart(ctx, {
type: 'doughnut',
data: {
labels: [
'Order',
'Feedback',
'Contact'
],
datasets: [{
data: [<?php echo $row_book ?>, <?php echo $row_feedback ?>, <?php echo $row_contact ?>],
backgroundColor: [
'rgb(255, 141, 0)',
'rgb(54, 162, 255)',
'rgb(255, 99, 152)',
],
hoverOffset: 4
}]
}
})
// ============================================ //
var ctxw = document.getElementById('myChart2').getContext("2d");
var myChart = new Chart(ctxw, {
type: 'polarArea',
data: {
labels: [
'Order',
'Feedback',
'Contact'
],
datasets: [{
data: [<?php echo $row_book ?>, <?php echo $row_feedback ?>, <?php echo $row_contact ?>],
backgroundColor: [
'rgb(255, 141, 0)',
'rgb(54, 162, 255)',
'rgb(255, 99, 152)',
]
}]
},
})
</script>
</html>