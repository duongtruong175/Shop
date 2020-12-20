    <!-- nội dung trang đăng nhập -->
    <div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="signup-heading">Đăng nhập</h1>
                <form action="<?php echo BASEPATH ?>/admins/login" class="signup-form" autocomplete="off" method="POST">
                    <label for="username" class="signup-label">User name</label>
                    <input type="text" id="username" name="username" class="signup-input" required placeholder="enter your username">
                    <label for="password" class="signup-label">Password</label>
                    <input type="password" id="password" name="password" class="signup-input" required placeholder="enter your password">
                    <?php 
                    if(isset($dangerous)){
                        echo '<p class="dangerous-text">'.$dangerous.'</p>';
                        unset($dangerous);
                    }
                    ?>
                    <button class="signup-submit">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>