<?php
	$q = $_GET['q'];

	$con = mysqli_connect('localhost', 'root', 'password', 'EventAdvisor');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con, "EventAdvisor");
	$sql="SELECT Evename, EstartDate, EendDate, Eaddress, Ecity, Estate, Ezip, EphoneNumber, Edescription, Etype, Ewebsite FROM Events WHERE UuserName = '" . "ecorral2" . "'";
	$result = mysqli_query($con, $sql);

	echo "<table border='1'>
				<tr>
					<th>Evename     </th>
					<th>EstartDate  </th>
					<th>EendDate    </th>
					<th>Eaddress    </th>
					<th>Ecity       </th>
					<th>Estate      </th>
					<th>Ezip        </th>
					<th>EphoneNumber</th>
					<th>Edescription</th>
					<th>Etype       </th>
					<th>Ewebsite    </th>
					<th>Ehashtage   </th>
					<th>Efacebook   </th>
					<th>Etwitter    </th>
					<th>Egoogle     </th>
					<th>Eflyer      </th>
					<th>Eother      </th>
				</tr>";

			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['Evename'] . "</td>";
				echo "<td>" . $row['EstartDate'] . "</td>";
				echo "<td>" . $row['EendDate'] . "</td>";
				echo "<td>" . $row['Eaddress'] . "</td>";
				echo "<td>" . $row['Ecity'] . "</td>";
				echo "<td>" . $row['Estate'] . "</td>";
				echo "<td>" . $row['Ezip'] . "</td>";
				echo "<td>" . $row['EphoneNumber'] . "</td>";
				echo "<td>" . $row['Edescription'] . "</td>";
				echo "<td>" . $row['Etype'] . "</td>";
				echo "<td>" . $row['Ewebsite'] . "</td>";
				
				echo "</tr>";
			}
		echo "</table>";

	mysqli_close($con);
?>