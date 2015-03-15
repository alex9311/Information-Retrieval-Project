<?php
function print_ideas_table(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Sparked";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }

	$sql = "Select * from Idea";
        if ($result = $conn->query($sql)){
                if(!(mysqli_num_rows($result) > 0)){
                        echo "Sorry, your query returned no rows.";
                        $conn->close();
                        exit();
                }
        }else{
                echo "Sorry, your query has no results";
                $conn->close();
                exit();
        }

	echo '
        <table>
        <tr><td>Description</td><td>Image</td><tr>
	';
	while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo '<td>'.$row["text_description"]."</td>";
 		echo '<td><img src="'.substr($row['image'],13).'" style="width:304px;height:228px"></td>';
		echo '</tr>';
	}
	echo '</table>';
}
?>
