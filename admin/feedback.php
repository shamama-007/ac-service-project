<?php
require 'partially/db.php';
include 'top.php';
// Pagination setup
$total_num_page = 10;
if (isset($_GET['page_id'])) {
$page_id = $_GET['page_id'];
} else {
$page_id = 1;
}
$start_form = ($page_id - 1) * 5;
// Fetch Feedback Table With Status (1)
$sql = "SELECT * FROM feedback WHERE status = '0' ORDER BY id DESC lIMIT $start_form, $total_num_page";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
?>
<div class="content">
    <!-- Table Data -->
    <div class="detail">
        <div class="detail-top">
            <div class="heading">
                <h2>Feedback Users Notification</h2>
            </div>
            <div>
                <a class="notification-btn" href="feedback_notification.php">Feedback History</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>Comment</td>
                    <td>Operation</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $msg = '';
                if ($check > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['comment'] ?></td>
                    <td>
                        <a class="status return" href="partially/feedback_handle.php?id=<?php echo $row['id'] ?>">Unread</a>
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
        $sql = "SELECT * FROM feedback WHERE status = '1'";
        $page_result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($page_result);
        $total_page = ceil($total_record / $total_num_page);
        for ($i = 1; $i <= $total_page; $i++) {
        if ($total_record > 10) {
        echo '<a href="feedback.php?page_id=' . $i . '">' . $i . '</a>';
        } else {
        echo '';
        }
        }
        ?>
    </div>
</div>
</body>
</html>