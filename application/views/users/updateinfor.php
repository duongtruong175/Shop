<div class="content">
    <div class="container-form">
        <div class="signup">
            <h1 class="change-heading">Thay đổi thông tin tài khoản</h1>
            <form action="<?php echo BASEPATH ?>/users/updateinfor" class="signup-form" autocomplete="off" method="POST">
                <label for="name" class="signup-label">Name</label>
                <input type="text" id="name" name="updatename" value="<?php echo $user['name'] ?>" class="signup-input">
                <label for="date" class="signup-label">Date</label>
                <input type="date" id="date" name="updatedate" value="<?php echo $user['date'] ?>" class="signup-input">
                <label for="phone" class="signup-label">Phone</label>
                <input type="tel" id="phone" name="updatephone" value="<?php echo $user['phone'] ?>" class="signup-input" maxlength="10" pattern="[0-9]{10}">

                <?php
                if (isset($dangerPhones)) {
                    echo '<p class="dangerous-text">' . $dangerPhones . '</p>' . '<br>';
                }
                ?>
                <label for="address" class="signup-label">Address</label>
                <input type="text" id="address" name="updateaddress" value="<?php echo $user['address'] ?>" class="signup-input">
                <button class="signup-submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>