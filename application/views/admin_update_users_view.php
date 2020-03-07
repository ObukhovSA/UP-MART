
<?php
if ($data[1] != null) {
    $mysqli = $data[0];
    $id = $data[1];
    $query = "SELECT * FROM auth WHERE id=$id";
    $res = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $login = $row['login'];
        $password = $row['password'];
    }
}
?>
<h3>Пользователь <?php echo $login; ?> </h3>
<form action="" method="post">
       <label>Логин: <input type="text" name="login" value="<?php echo $login ?>" required></label> <br>
       <label>Пароль: <input type="text" name="password" value="<?php echo $password ?>" required></label> <br>
       <input type="submit" name="submit" value="Обновить">
</form>

<?php 
    if(isset($_POST['submit'])){
        $login_upd = $_POST['login'];
        $password_upd = $_POST['password'];
        
        $query = "UPDATE `auth` SET `login` = '$login_upd', `password` = '$password_upd' WHERE `auth`.`id` = $id";
        $res = mysqli_query($mysqli, $query);
        if ($res) {
            echo "Record updated successfully <br>";
            echo "<a href='/users'> Назад </a>";
        } else {
            echo "Error updating record";
        }
    }