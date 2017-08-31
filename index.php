<?php

/**
 * @Author: SirG
 * @Date:   2017-08-30 11:14:08
 * @Last Modified by:   SirG
 * @Last Modified time: 2017-08-31 14:58:35
 */

require 'config.php';

try {
	 $conn = new PDO('mysql:host=localhost;dbname=HNG;', $config[username], $config[password]);
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	 $result = $conn->query('SELECT * FROM interns');
	 echo "<table><tr><th>id</th><th>Name</th><th>Slack Username</th</tr>";
	 foreach ($result as $key) {
	 	echo '<tr><td>' . $key['id'] . '</td>'; 
        echo '<td>' . $key['Name'] . '</td>'; 
        echo '<td>' . $key['Slack_username'] . '</td></tr>';
	 }
	 echo "<table>";
} catch (PDOException $e) {
	echo "Error - " . $e->getMessage();
}
