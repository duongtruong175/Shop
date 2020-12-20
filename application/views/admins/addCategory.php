   <!-- nội dung trang đăng nhập -->
   <div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="signup-heading">Add Category</h1>
                <form action="<?php echo BASEPATH ?>/admins/addCategory" class="signup-form" autocomplete="off" method="POST">
                    <label for="category" class="signup-label">Category</label>
                    <input type="text" id="category" name="category" class="signup-input" required placeholder="enter your category">
                    <?php 
                    if(isset($dangerous)){
                        echo '<p class="dangerous-text" style="width:100%;">'.$dangerous.'</p>';
                    }
                    ?>
                    <button class="signup-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>