<?php 
	include 'inc/header.php';
	include 'lib/User.php';
	$user = new User();

	$loginmsg = Session::get("loginmsg");
	if (isset($loginmsg)) 
	{
		echo $loginmsg;
	}
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User List
					<span class="pull-right"><strong>Welcome!</strong>
						<?php
							$name = Session::get("name");
							if (isset($name)) 
							{
								echo $name;
							}
						?>
					</span>
				</h2>
				
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<tr>
						<th width="20%">Serial</th>
						<th width="20%">Name</th>
						<th width="20%">Username</th>
						<th width="20%">Email Address</th>
						<th width="20%">Action</th>
					</tr>
					<tr>
						<td>01</td>
						<td>Delowar j Imran</td>
						<td>imran</td>
						<td>imran@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>
					<tr>
						<td>02</td>
						<td>Syed Zaman Mostafiz.</td>
						<td>Zaman</td>
						<td>zamancsediue44@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=2">View</a>
						</td>
					</tr>
					<tr>
						<td>03</td>
						<td>Mohammad kewsar</td>
						<td>kewsar</td>
						<td>kewsar@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=3">View</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
<?php include 'inc/footer.php'; ?>