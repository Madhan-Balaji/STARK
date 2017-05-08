<?php
	$matchWord = array("connection", "no", "slow", "signal", "call", "calls", "internet", "functioning", "not", "available", "low", "bad", "unavailable", "allowed", "interrupted", "disconnected", "disconnecting", "disconnection", "working", "poor", "proper", "sucks", "line", "cut", "tower", "problematic", "reception", "problem", "network", "connect", "available", "breaking", "breakage", "non", "functional", "do", "dont", "dropping", "dropped", "drop", "failed", "failure", "fails", "received", "receive");
	$j =0;
	for($i=0; $i<sizeof($matchWord); $i++){
		$j++;
		echo $matchWord[$i].' > '.$j.'<br>';
	}
?>