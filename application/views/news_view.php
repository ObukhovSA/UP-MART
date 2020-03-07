<h1>Новости</h1>
<?php
foreach($data as $row)
{   
    $id = $row['id'];
    echo "<article>";
    echo "<a href='/news/watch/$id'><h3>".$row['title']."</h3></a>";
    echo "<p >".substr($row['text'], 0, 50)."..."."</h3><br>";
    echo "<a href='/news/watch/$id' class = 'more'>Читать далее</a>";
    echo "</article>";
}