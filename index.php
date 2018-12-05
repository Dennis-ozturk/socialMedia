<?php include 'includes/header.php'; ?>

<?php
if(isset($_SESSION['email'])){
    header("location: home.php");
}
?>
<div id="formLogin">
    <form action="" method="POST" class="formLogin">
        
        <h6>E-post</h6>
        <input type="email" name="email" id="email" >
        
        <h6>Lösenord</h6>
        <input type="password" name="password" id="password">

        <input type="submit" name="submitLogin" value="Logga in" id="submit">

    </form>

    <?php include 'login.php'; ?>
</div>
<?php include 'includes/footer.php'; ?>
 