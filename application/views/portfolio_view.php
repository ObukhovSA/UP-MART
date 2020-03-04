
<div class="container col-10">
	<div class="row">
		<h1>Портфолио</h1>
		<h4>Список передовых лекарственных препаратов корпорации TERRAGROUP</h4><p>
		<table class="table table-bordered">
		<tr><td>Год синтеза</td><td>Проект</td><td>Описание</td></tr>
		<?php

			foreach($data as $row)
			{
				echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Project'].'</td><td>'.$row['Description'].'</td></tr>';
			}
			
		?>
		</table>
		</p>
	</div>
</div>