<?php
    require "blocks/header.php"
?>
<h1>About me</h1>
<div class="container">
<form action="send_info.php" method="post">
    <input type="text" name="username" placeholder="Enter Name" class="form-control"><br>
    <input type="email" name="email" placeholder="Enter Email" class="form-control"><br>
    <input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
    <textarea name="message" placeholder="Enter message" class="form-control"></textarea><br>
    <input type="submit" value="Send" class="btn btn-success">
</form>
</div>





<?php
    require "blocks/footer.php"
?>




