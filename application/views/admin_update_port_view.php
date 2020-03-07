<?php
if ($data[1] != null) {
    $mysqli = $data[0];
    $id = $data[1];
    $query = "SELECT * FROM portfolio WHERE id=$id";
    $res = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $year = $row['Year'];
        $site = $row['Site'];
        $description = $row['Description'];
    }
}
?>
<form action="" method="post">
       <label>Год: <input type="text" name="year" value="<?php echo $year ?>" required></label> <br>
       <label>Имя сайта: <input type="text" name="site" value="<?php echo $site ?>" required></label> <br>
       <label>Описание: <br><textarea name="description" cols="30" rows="10"><?php echo $description ?></textarea> <br>
       <input type="submit" name="submit" value="Обновить">
</form>

<?php 
    if(isset($_POST['submit'])){
        $year_upd = $_POST['year'];
        $site_upd = $_POST['site'];
        $description_upd = $_POST['description'];
        
        $query = "UPDATE `portfolio` SET `Year` = '$year_upd', `Site` = '$site_upd', `Description` = '$description_upd' WHERE `portfolio`.`id` = $id";
        $res = mysqli_query($mysqli, $query);
        if ($res) {
            echo "Record updated successfully <br>";
            echo "<a href='/admin'> Назад </a>";
        } else {
            echo "Error updating record";
        }
    }
     