<div class="content">
    <div class="container-form">
        <div class="signup">
            <h1 class="change-heading">Thay Đổi Mật Khẩu</h1>
            <?php
            echo '<form action="' . BASEPATH . '/users/updatepassword" class="signup-form" autocomplete="off" method="POST">
                    <label for="password" class="signup-label">Mật Khẩu Hiện Tại</label>
                        <input type="password" id="oldpassword" name="oldpassword" class="signup-input" required placeholder="">';
            ?>
            <?php
            if (isset($dangerOldPassword)) {
                echo '<p class="dangerous-text">' . $dangerOldPassword . '</p>' . '<br>';
            }
            ?>
            <?php
            echo '<label for="password" class="signup-label">Mật Khẩu Mới</label>
                        <input type="password" id="newpassword" name="updatepassword" class="signup-input" required placeholder="">
                        <label for="password" class="signup-label">Xác Nhận Mật Khẩu</label>
                        <input type="password" id="confpassword" name="confpassword" class="signup-input" required placeholder="" ">';
            ?>
            <?php
            if (isset($dangerPassword)) {
                echo '<p class="dangerous-text">' . $dangerPassword . '</p>' . '<br>';
            }
            ?>
            <?php
            echo '<button class="signup-submit">Xác nhận</button>
                </form>';
            ?>
        </div>
    </div>
</div>