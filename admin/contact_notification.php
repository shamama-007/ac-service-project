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
$sql = "SELECT * FROM contact WHERE status = '1' ORDER BY id DESC lIMIT $start_form, $total_num_page";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
?>
<!-- sidebar end -->
<div class="content">
    <div class="detail">
        <div class="detail-top">
            <div class="heading">
                <h2>Contact Users</h2>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['message'] ?></td>
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
    <!-- // Pagination setup -->
    <div class="pagination">
        <?php
        $sql = "SELECT * FROM contact WHERE status = '0'";
        $page_result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($page_result);
        $total_page = ceil($total_record / $total_num_page);
        for ($i = 1; $i <= $total_page; $i++) {
        if ($total_record > 10) {
        echo '<a href="contact_notification.php?page_id=' . $i . '">' . $i . '</a>';
        } else {
        echo '';
        }
        }
        ?>
    </div>
</div>
</body>
</html>