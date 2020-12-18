   <!-- nội dung trang thanh toán -->
   <div class="content">
       <div class="container-form">
           <div class="signup">
               <h1 class="signup-heading">Thông tin để thanh toán</h1>
               <form action="<?php echo BASEPATH ?>/bills/add" class="signup-form" autocomplete="off">
                   <label for="name" class="signup-label">Name</label>
                   <input type="text" id="name" name="name" class="signup-input" required placeholder="enter your receiver">
                   <label for="phone" class="signup-label">Phone</label>
                   <input type="tel" id="phone" name="phone" class="signup-input" required placeholder="ex: 0123456789" pattern="[0-9]{10}">
                   <label for="province" class="signup-label">Province</label>
                   <select class="select-info" id="province" name="province">
                       <option value="0">Vui lòng chọn Thành phố/Tỉnh</option>
                       <?php
                        foreach ($provinces as $province) {
                            echo '<option value="' . $province['name'] . '">' . $province['name'] . '</option>';
                        }
                        ?>
                   </select>
                   <label for="district" class="signup-label">District</label>
                   <select class="select-info" id="district" name="district">

                   </select>
                   <label for="ward" class="signup-label">Ward</label>
                   <select class="select-info" id="ward" name="ward">

                   </select>
                   <label for="street" class="signup-label">Street</label>
                   <input type="text" id="street" name="street" class="signup-input" required placeholder="enter your street">
                   <label for="payment" class="signup-label">Payment Method</label>
                   <select class="select-info" id="payment" name="payment">
                       <option value="Thanh toan khi nhan hang">Thanh toán khi nhận hàng</option>
                   </select>
                   <button class="signup-submit">Đặt hàng</button>
               </form>
           </div>
       </div>
   </div>

   <!-- Hàm cập nhập danh sách quận/huyện theo thành phố/tỉnh đã chọn -->
   <script type="text/javascript">
       document.getElementById("province").addEventListener("change", function() {
           document.getElementById("district").innerHTML = "";
           var province_name = document.getElementById("province").value;
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("district").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET", "district/" + province_name, true);
           xmlhttp.send();
       });
   </script>

   <!-- Hàm cập nhập danh sách phường/xã theo quận/huyện đã chọn -->
   <script type="text/javascript">
       document.getElementById("district").addEventListener("change", function() {
           document.getElementById("ward").innerHTML = "";
           var district_name = document.getElementById("district").value;
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("ward").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET", "ward/" + district_name, true);
           xmlhttp.send();
       });
   </script>