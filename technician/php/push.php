<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="push.min.js"></script>
<script src="serviceWorker.min.js"></script>
<?php 
include('dbconnection.php');
$sql="select * from message where T_Status=0;";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count > 0){
?>
<script>
        Push.create("Hello Technician!", {
    body: "Here New Messages  <?php echo $count;?> from Customer",
    icon: 'logo.png',
    timeout: 3000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
    window.onload = function() {
    var reloading = sessionStorage.getItem("reloading");
    if (reloading) {
        sessionStorage.removeItem("reloading");
        start();
    }
}

function reloadP() {
    sessionStorage.setItem("reloading", "true");
    document.location.reload();
}
</script>

<?php
}
?>

<?php 
include('dbconnection.php');
$sql="select * from tblorder where status=0;";
$result=mysqli_query($con,$sql);
$count1=mysqli_num_rows($result);
if($count1 > 0){
?>
<script>
        Push.create("Hello Technician!", {
    body: "Here New Order  <?php echo $count1;?> from Customer",
    icon: 'logo.png',
    timeout: 3000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
    window.onload = function() {
    var reloading = sessionStorage.getItem("reloading");
    if (reloading) {
        sessionStorage.removeItem("reloading");
        start();
    }
}

function reloadP() {
    sessionStorage.setItem("reloading", "true");
    document.location.reload();
}
</script>

<?php
}
?>