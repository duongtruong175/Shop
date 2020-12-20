    <!-- Nội dung trang home index -->
    <div class="content">
        <div class="container-flex">
            <!-- bên trái -->
            <div class="user">
                <?php
                echo '<div class="user-name">
                            <h4>Hồ sơ của tôi</h4>
                        </div>
                        <div class="change-infor">
                            <a style="text-decoration: none; cursor: pointer; font-size: 1.1rem;" href="' . BASEPATH . '/users/updateinfor">Thay đổi thông tin tài khoản</a>
                        </div>
                        <div class="change-password">
                            <a style="text-decoration: none; cursor: pointer; font-size: 1.1rem;" href="' . BASEPATH . '/users/updatepassword">Thay đổi mật khẩu</a>
                        </div>';
                ?>

            </div>
            <!-- bên phải -->
            <div class="userinfor">
                <?php
                echo '   <div class="user-content">
                            <div class="user-label">
                                <label>Tên người dùng</label>
                            </div>
                            <div class="user-infor">
                                <p>' . $_SESSION['user_name'] . '</p>
                            </div>
                        </div>
                        <div class="user-content">
                            <div class="user-label">
                                <label>Tên đăng nhập</label>
                            </div>
                            <div class="user-infor">
                                <p>' . $username . '</p>
                            </div>
                        </div>
                        <div class="user-content">
                            <div class="user-label">
                                <label>Ngày sinh</label>
                            </div>
                            <div class="user-infor">
                                <p>' . $date . '</p>
                            </div>
                        </div>
                        <div class="user-content">
                            <div class="user-label">
                                <label>Số điện thoại</label>
                            </div>
                            <div class="user-infor">
                                <p>' . $phone . '</p>
                            </div>
                        </div>
                        <div class="user-content">
                            <div class="user-label">
                                <label>Địa chỉ</label>
                            </div>
                            <div class="user-infor">
                                <p>' . $address . '</p>
                            </div>
                        </div>';

                ?>

            </div>
        </div>
    </div>