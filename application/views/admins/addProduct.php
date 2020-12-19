   <!-- nội dung trang đăng nhập -->
   <div class="content">
       <div class="container-form">
           <div class="signup">
               <h1 class="signup-heading">Add Product</h1>
               <form action="<?php echo BASEPATH ?>/admins/addProduct" class="signup-form" autocomplete="off" method="POST" enctype="multipart/form-data">
                   <label for="name" class="signup-label">Name</label>
                   <input type="text" id="name" name="name" class="signup-input" required placeholder="enter your name of the product">
                   <label for="category" class="signup-label">Category</label>
                   <select name="category" id="category">
                       <?php foreach($catpro as $item){
                            echo "<option value='{$item['id']}'>{$item['name']}</option>";
                       } ?>
                       
                   </select>
                   <label for="price" class="signup-label">price</label>
                   <input type="number" id="price" name="price" class="signup-input" required placeholder="enter your price">
                   <label for="detail" class="signup-label">Detail</label>
                   <input type="detail" id="detail" name="detail" class="signup-input" required placeholder="enter your detail">
                   <label for="image" class="signup-label">Image</label>
                   <input type="file" name="image" id="image">
                   <?php
                    if (isset($dangerous)) {
                        echo '<p class="dangerous-text">' . $dangerous . '</p>';
                    }
                    ?>
                   <button class="signup-submit">Submit</button>
               </form>
           </div>
       </div>
   </div>