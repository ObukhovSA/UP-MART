<h1>Портфолио TerraGroup</h1>
<table>

    
    <div class="row"><div class="col">ФИО</div><div class="col-3">Пол</div><div class="row"><div class="col">Возраст</div></div><div class="row"><div class="col-3">Семейное положение</div><div class="row"><div class="col-3">Наличие детей</div><div class="col-4">Должность</div></div><div class="col-4">Ученая степень</div></div>
    <?php
    foreach($data as $row)
    {
        echo '<div class="row"><div class="col">'.$row['FIO'].'</div><div class="col-3">'.$row['pol'].'</div><div class="col-3">'.$row['age'].'</div></div>'. '<div class="row"><div class="col-3">'.$row['family'].'</div><div class="col-3">'.$row['child'].'</div><div class="col-3">'.$row['zvanie'].'</div></div>'.$row['stepen'].'</div></div>';
    }
    ?>
      
  </div>
</table>
  

