<div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="change-heading">Thay đổi thông tin tài khoản</h1>
                <?php
                echo '<form action="'. BASEPATH .'/users/updateinfor" class="signup-form" autocomplete="off" method="POST">
                        <label for="name" class="signup-label">Name</label>
                        <input type="text" id="name" name="updatename" class="signup-input" placeholder="">
                        <label for="date" class="signup-label">Date</label>
                        <input type="date" id="date" name="updatedate" class="signup-input" placeholder="">
                        <label for="phone" class="signup-label">Phone</label>
                        <input type="tel" id="phone" name="updatephone" class="signup-input" placeholder="" pattern="[0-9]{10}">';
                ?>
                <?php 
                    if(isset($dangerPhones)){
                    echo '<p class="dangerous-text">'.$dangerPhones.'</p>'.'<br>';
                        }
                ?>
                <?php
                    echo '<label for="address" class="signup-label">Address</label>
                        <input type="text" id="address" name="updateaddress" class="signup-input" placeholder="">
                        <button class="signup-submit">Lưu thông tin</button>
                </form>';
                ?>
            </div>
        </div>
    </div>