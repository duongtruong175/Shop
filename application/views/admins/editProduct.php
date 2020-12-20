   <!-- nội dung trang đăng nhập -->
   <div class="content">
       <div class="container-form">
           <div class="signup">
               <h1 class="signup-heading">Edit Product</h1>
               <form action="<?php echo BASEPATH ?>/admins/editProduct/<?php echo $eProduct['id']; ?>" class="signup-form" autocomplete="off" method="POST" enctype="multipart/form-data">
                   <label for="name" class="signup-label">Name</label>
                   <input type="text" id="name" name="name" class="signup-input" required value="<?php echo $eProduct['name']; ?>">
                   <?php
                    if (isset($dangerous)) {
                        echo '<p class="dangerous-text" style="width:100%;">'.$dangerous.'</p>';
                    }
                    ?>
                   <label for="category" class="signup-label">Category</label>
                   <select name="category" id="category">
                       <?php foreach($catpro as $item){
                            echo "<option value='{$item['id']}'>{$item['name']}</option>";
                       } ?>
                       
                   </select>
                   <label for="price" class="signup-label">price</label>
                   <input type="number" id="price" name="price" class="signup-input" value="<?php echo $eProduct['price']; ?>"required>
                   <label for="detail" class="signup-label">Detail</label>
                   <input type="text" id="detail" name="detail" class="signup-input">
                   <label for="image" class="signup-label">Image</label>
                   <input type="file" name="image" id="image">
                   
                   <button class="signup-submit">Submit</button>
               </form>
           </div>
       </div>
   </div>