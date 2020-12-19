<!-- Nội dung trang home index -->
<div class="content">
    <div class="container-flex">
        <!-- bên trái -->
        <div class="catagories">
            <div class="catagories-header">
                <img src="<?php echo PATH_URL_IMG ?>list.png">
                <span>Tất cả chức năng</span>
            </div>
            <ul class="catagories-list">
                <li>
                    <a href="<?php echo BASEPATH ?>/admins/viewAdmin"><span>Admin</span></a>
                </li>
                <li>
                    <a href="<?php echo BASEPATH ?>/admins/viewUser"><span>User</span></a>
                </li>
                <li>
                    <a href="<?php echo BASEPATH ?>/admins/viewCategory"><span>Categories</span></a>
                </li>
                <li>
                    <a href="<?php echo BASEPATH ?>/admins/viewProduct"><span>Products</span></a>
                </li>
                <li>
                    <a href="<?php echo BASEPATH ?>/admins/viewBill"><span>Bills</span></a>
                </li>
            </ul>
        </div>
        <!-- bên phải -->
        <div class="config">
            <form method="get">
                <button formaction="<?php echo BASEPATH ?>/admins/addAdmin"> <img src="<?php echo PATH_URL_IMG ?>add.png"></button>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Account</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>Coast</th>
                        <th>Order_Time</th>
                        <th>Status</th>
                        <th>Chi tiết</th>
                    </tr>
                    <?php
                    $STT = 1;
                    foreach ($bills as $bill) {
                        // $arr[3] will be updated with each value from $arr...
                        echo "<tr>
                            <td>{$STT}</td>
                            <td>{$bill['username']}</td>
                            <td>{$bill['name']}</td>
                            <td>{$bill['phone']}</td>
                            <td>{$bill['address']}</td>
                            <td>{$bill['payment']}</td>
                            <td>{$bill['cost']}</td>
                            <td>{$bill['order_time']}</td>
                            <td>{$bill['status']}</td>
                            <td> <button formaction='".BASEPATH."/admins/detailBill"."/".$bill['id']."'><img src='".
                            PATH_URL_IMG."viewdetail.png'></button></td>.
                        </tr> ";
                        $STT++;
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
</div>