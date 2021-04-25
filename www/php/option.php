<?php
	$y = 1940;
	for ($i = 0; $i <= 80; $i++)
	{
		$next_y = $y + $i;
		echo '<option value='.$next_y.'>'.$next_y.'</option>';
	}