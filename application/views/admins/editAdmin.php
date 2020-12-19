   <!-- nội dung trang đăng nhập -->
   <div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="signup-heading">Add Admin Account</h1>
                <form action="<?php echo BASEPATH ?>/admins/editAdmin/<?php echo $eAdmin['id'] ?>" class="signup-form" autocomplete="off" method="POST">
                    <label for="username" class="signup-label">User name</label>
                    <input type="text" id="username" name="username" class="signup-input" value="<?php echo $eAdmin['username'] ?>">
                    <label for="password" class="signup-label">Password</label>
                    <input type="password" id="password" name="password" class="signup-input" value="<?php echo $eAdmin['password'] ?>">
                    <label for="name" class="signup-label">Name</label>
                    <input type="text" id="name" name="name" class="signup-input" value="<?php echo $eAdmin['name'] ?>">
                    <label for="date" class="signup-label">Date</label>
                    <input type="date" id="date" name="date" class="signup-input" value="<?php echo $eAdmin['date'] ?>">
                    <label for="phone" class="signup-label">Phone</label>
                    <input type="text" id="phone" name="phone" class="signup-input" value="<?php echo $eAdmin['phone'] ?>">
                    <label for="address" class="signup-label">Address</label>
                    <input type="text" id="address" name="address" class="signup-input" value="<?php echo $eAdmin['address'] ?>">
                    <?php 
                    if(isset($dangerous)){
                        echo '<p class="dangerous-text">'.$dangerous.'</p>';
                    }
                    ?>
                    <button class="signup-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>