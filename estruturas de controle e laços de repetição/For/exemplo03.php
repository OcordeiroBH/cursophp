<?php 

for ($i = date("Y"); $i > date("Y") - 100; $i--) {
	echo $i."<br>";
}

echo "<select>" ; 

// php em conjunto com HTML 
for ($i = date("Y"); $i > date("Y") - 100; $i--) {
	echo '<option value = '.$i.'>'.$i.'</option>';
}

echo "</select>" ;





?>