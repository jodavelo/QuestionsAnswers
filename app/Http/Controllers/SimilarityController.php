<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimilarityController extends Controller
{
    public function primerMetodo(){
    	$str_a = "Como estas hoy?";
    	$str_b = "Como te sientes hoy?";

    	$length = strlen($str_a);
	    $length_b = strlen($str_b);

	    $i = 0;
	    $segmentcount = 0;
	    $segmentsinfo = array();
	    $segment = '';
	    while ($i < $length) {
	        $char = substr($str_a, $i, 1);
	        if (strpos($str_b, $char) !== FALSE) {               
	            $segment = $segment.$char;
	            if (strpos($str_b, $segment) !== FALSE) {
	                $segmentpos_a = $i - strlen($segment) + 1;
	                $segmentpos_b = strpos($str_b, $segment);
	                $positiondiff = abs($segmentpos_a - $segmentpos_b);
	                $posfactor = ($length - $positiondiff) / $length_b; // <-- ?
	                $lengthfactor = strlen($segment)/$length;
	                $segmentsinfo[$segmentcount] = array( 'segment' => $segment, 'score' => ($posfactor * $lengthfactor));
	            } 
	            else  {
	                $segment = '';
	                $i--;
	                $segmentcount++;
	            } 
	        } else  {
	            $segment = '';
	            $segmentcount++;
	        }
	        $i++;
	    }   

	    // PHP 5.3 lambda in array_map      
	    $totalscore = array_sum(array_map(function($v) { return $v['score'];  }, $segmentsinfo));
	    return $totalscore;
    }

    // -------------------------------------------------------
    // Metodo que implementa el algoritmo de levenshtein
    // -------------------------------------------------------
    public function segundoMetodo(){
    	// input misspelled word
		$input = 'Como estas hoy';

		// array of words to check against
		$words  = array('apple','pineapple','banana','orange',
		                'radish','carrot','pea','bean','potato', 'Que dia es hoy', 'Como te sientes hoy');

		// no shortest distance found, yet
		$shortest = -1;

		// loop through words to find the closest
		foreach ($words as $word) {

		    // calculate the distance between the input word,
		    // and the current word
		    $lev = levenshtein($input, $word);

		    // check for an exact match
		    if ($lev == 0) {

		        // closest word is this one (exact match)
		        $closest = $word;
		        $shortest = 0;

		        // break out of the loop; we've found an exact match
		        break;
		    }

		    // if this distance is less than the next found shortest
		    // distance, OR if a next shortest word has not yet been found
		    if ($lev <= $shortest || $shortest < 0) {
		        // set the closest match, and shortest distance
		        $closest  = $word;
		        $shortest = $lev;
		    }
		}

		echo "Input word: $input\n";
		if ($shortest == 0) {
		    echo "Exact match found: $closest\n";
		} else {
		    echo "Did you mean: $closest?\n";
		}
    }
}
