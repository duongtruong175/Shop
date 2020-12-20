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
                <button formaction="<?php echo BASEPATH ?>/admins/addUser"> <img src="<?php echo PATH_URL_IMG ?>add.png"></button>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Edit</th>
                    </tr>
                    <?php
                    $STT = 1;
                    foreach ($users as $user): ?>
                         <tr>
                            <td><?php echo $STT ?></td>
                            <td><?php echo $user['username']?></td>
                            <td><?php echo $user['date']?></td>
                            <td><?php echo $user['phone']?></td>
                            <td><?php echo $user['address']?></td>
                            <td> <button formaction="<?php echo BASEPATH."/admins/editUser/". $user['id'];?>"><img src="<?php echo  PATH_URL_IMG;?>edit.png"></button></td>
                        </tr>
                    <?php $STT++;endforeach;?>
                </table>
            </form>
        </div>
    </div>
</div>