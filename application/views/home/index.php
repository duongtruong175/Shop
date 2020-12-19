<?php
if (isset($_SESSION['access_bill'])) {
    echo "<script type='text/javascript'>alert('" . $_SESSION['access_bill'] . "');</script>";
}
if (isset($_SESSION['empty_bill'])) {
    echo "<script type='text/javascript'>alert('" . $_SESSION['empty_bill'] . "');</script>";
}
?>

<div class="content">
    <p>Đây là trang home</p>
    <h2>Xem tất cả danh mục</h2>
    <a href="<?php echo BASEPATH ?>/categories/viewall">Danh mục</a>
</div>

<?php
unset($_SESSION['access_bill']);
unset($_SESSION['empty_bill']);
?>