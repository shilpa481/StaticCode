<?php
if ( ! function_exists('truncate_2_word') ) {
	function truncate_2_word ($phrase, $max_words) {
		$phrase_array = explode(' ',$phrase);
		if(count($phrase_array) > $max_words && $max_words > 0){
			$phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
		}
		return $phrase;
	}
}
?>
