<!DOCTYPE html>
<html>
   <style>
    	body
    	{
    		background-color: rgb(16,32,51);
    		margin:0;
    	 	font-size: 18px;
    		color:white;
    	}
    	.middle
   	    {
    		display: flex;
    		flex-direction: row;
    	}
    	.user
    	{
    		width:1100px;
    		height:auto;
    		background-color: rgb(16,32,51);
    		display: flex;
    		justify-content: center;
    		align-items: top;
    	}
    	
 
    	thead
    	{
    		background-color: black;
    	}
   	    tbody
    	{
    		background-color: rgb(16,32,51);
    		font-size: 20px;
    		color: white;
     	}
    	.delete
    	{
    		text-decoration: none;
    		background-color: red;
    		padding: 10px;
    		color:white;
    	}
    </style>
<body>
	<div class="admin_home">
		<?php include 'header.php'; ?>
		<div class="middle">
			<?php include 'sidebar.php'; ?>
			<div class="user">
				<div class="view_users">
					<table border="1" cellpadding='15'>
						<thead>
							<th>id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone_no</th>
							<th>password</th>
							<th></th>
						</thead>
					<tbody>
					<?php
	                    include "config.php";
	                    $query = "SELECT * FROM user";
                     	$select = mysqli_query($conn,$query);
                     	while($row=mysqli_fetch_array($select))
                     	{
                     		echo "
                     		<tr>
                     		<td>$row[id]</td>
                     		<td>$row[name]</td>
                     		<td>$row[email]</td>
                     		<td>$row[phone_no]</td>
                     		<td>$row[password]</td>
                     		<td><a class='delete' href='./delete_user.php?id=$row[id]'>delete</a></td>
                     		</tr>
                             	";
                     	}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</body>
</html>