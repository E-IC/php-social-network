<?php 
	$login = $_SESSION['login'];
	$user = get_user($login);
    $users = get_friends($login);
?>
<div class="container" >
	<div class="row">

	
		<section class="col s1">
	
		</section>

		<section class="col s10">
			<table>
			<tr>
				<th>ID</th>
				<th>Friend</th>
				<th>Online</th>
				<th>Haba	</th>
				<th>number</th>
			</tr>
			<?php
				foreach($users as $key => $value){
			?>
			<tr>
				<td><?php echo $key; ?></td>
				<td>
					<?php 
						if($user['haba'] == 1)
							echo '<a href="./pages/haba.php?user='.$value['login'].'">'.$value['login'].'</a>'; 
						else 
							echo $value['login'];
					?>
				</td>
				<td><?php echo $value['online'] ? '<div class="online"></div>' : '<div class="offline"></div>'; ?></td>
				<td><?php echo $value['haba'] ? '<img src="img/team.svg"></div>' : ''; ?></td>
				<td><?php echo $value['haba_num']; ?></td>
			</tr>
				<?php } ?>
			</table>
		</section>
	</div>
</div>
