<?php
		$file = file_get_contents('data.json');
		$json = json_decode($file, true);
echo '<table cellpadding="5" cellspacing="0" border="1">';
foreach ($json as $key => $value) {
    echo "<tr>";
    foreach ($value as $data)
        echo "<td>".$data."</td>";
    echo "</tr>";
}
echo "</table>";
	?>