<?php
	function wordAnalyser($word){
		$matchWord = array("connection", "no", "slow", "signal", "call", "calls", "internet", "functioning", "not", "available", "low", "bad", "unavailable", "allowed", "interrupted", "disconnected", "disconnecting", "disconnection", "working", "poor", "proper", "sucks", "line", "cut", "tower", "problematic", "reception", "problem", "network", "connect", "available", "breaking", "breakage", "non", "functional", "do", "dont", "dropping", "dropped", "drop", "failed", "failure", "fails", "received", "receive");
		for($i = 0; $i<sizeof($matchWord); $i++){
			if($word == $matchWord[$i]){
				return $i+1;
			}
		}
		return "notavail";
	}

	function getPattern($words){
		$pattern = array();
		for($i = 0; $i < sizeof($words); $i++){
			$val = wordAnalyser($words[$i]);
			if(($val != "notavail") ){
				array_push($pattern, $val);
			}
		}
		return $pattern;
	}
?>