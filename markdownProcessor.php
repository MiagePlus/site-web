<?php
function ConvertMarkdown($file, $mini) {
	$tabOl = ['1.', '2.', '3.', '4.', '5.', '6.', '7.', '8.', '9.'];
	
	$result = array();
	$result['txt'] = '';
	$fileLines = file('actualites/'.$file);
	$nbLines = count($fileLines);
	$lastChar = null;
	$liste = null;
	for ($i = 0; $i < $nbLines; $i++) {
		//Affectation des lignes
		if (isset($fileLines[$i - 1])) {
			$lineBefore = str_replace(array("\r", "\n"), '', $fileLines[$i - 1]);
		} else {
			$lineBefore = null;
		}
	
		$line = str_replace(array("\r", "\n"), '', $fileLines[$i]);
		
		if (isset($fileLines[$i + 1])) {
			$lineAfter = str_replace(array("\r", "\n"), '', $fileLines[$i + 1]);
		} else {
			$lineAfter = null;
		}
	
		//Traitement du texte
		if ($line === '=====' || $line === '---') {
			continue;
		}
	
		/* ===== -> h1 */
		if ($lineAfter === '=====') {
			$result['txt'] .= "<h1>".$line."</h1>";
			continue;
		/* ## -> h2 */
		} elseif (substr($line, 0, 2) === '##') {
			$result['txt'] .= "<h2>".substr($line, 3)."</h2>";
			continue;
		/* --- -> ligne séparatrice */
		} elseif ($lineAfter === '---') {
			$result['txt'] .= "<hr />";
			continue;
		}
	
		if ($lineBefore === '') {
			$result['txt'] .= "<p>";
		}
	
		/* *  -> liste a puce */
		if (substr(trim($line), 0, 2) === '* ') {
			if ($liste !== 'puce') {
				$result['txt'] .= "<ul>";
				$liste = 'puce';
			}
	
			$result['txt'] .= "<li>";
			$line = substr(trim($line), 2);
		/* X. -> liste numérotée */
		} elseif (in_array(substr(trim($line), 0, 2), $tabOl)) {
			if ($liste !== 'numero') {
				$result['txt'] .= "<ol>";
				$liste = 'numero';
			}
	
			$result['txt'] .= "<li>";
			$line = substr(trim($line), 3);
		}
	
		$tagA = null;
		$tagB = null;
		$link = 0;
		if (strpos($line, "$$") !== FALSE) {
			$link = 1;
			$tagA = strpos($line, "$$") + 3;
			$tagB = strpos($line, ")", $tagA);
			$href = substr($line, $tagA, $tagB - $tagA);
			$tmp = explode(';', $href);
			$hrefLink = $tmp[0];
			$hrefAlias = $tmp[1];
		}
	
		$lineChars = str_split($line);
		foreach ($lineChars as $key => $char) {
			if ($key > 0 && $char === '*' && $lineChars[$key - 1] === '*') {
				continue;
			}
	
			if ($key > 0 && $char === '/' && $lineChars[$key - 1] === '/' && $lineChars[$key - 2] !== ':') {
				continue;
			}
	
			if ($link === 1) {
				if ($key === ($tagA - 3)) {
					$result['txt'] .= "<a href=$hrefLink>$hrefAlias";
					continue;
				} elseif ($key === $tagB) {
					$result['txt'] .= "</a>";
					continue;
				} elseif ($key < $tagB && $key > $tagA - 3) {
					continue;
				}
			}
	
			/* /i -> italique */
			if ($char === '/' && $lineChars[$key + 1] === '/' && $lineChars[$key - 1] !== ':') {
				if ($lastChar === $char) {
					$result['txt'] .= "</i>";
				} else {
					$result['txt'] .= "<i>";
					$lastChar = $char;
				}
			/* ** -> gras */
			} elseif ($char === '*' && $lineChars[$key + 1] === '*') {
				if ($lastChar === $char) {
					$result['txt'] .= "</b>";
				} else {
					$result['txt'] .= "<b>";
					$lastChar = $char;
				}
			/* _ -> souligné */
			} elseif ($char === '_') {
				if ($lastChar === $char) {
					$result['txt'] .= "</u>";
				} else {
					$result['txt'] .= "<u>";
					$lastChar = $char;
				}
			/* RESTE */
			} else {
				$result['txt'] .= $char;
			}
		}
	
		if (substr($line, -2) === '  ') {
			$result['txt'] .= "<br/>";
		}
	
		if ($lineAfter === '') {
			if ($line !== null) {
				$result['txt'] .= "</li>";
	
				if ($liste === 'puce') {
					$result['txt'] .= "</ul>";
				} elseif ($liste === 'numero') {
					$result['txt'] .= "</ol>";
				}
				
				$line = null;
			}
			$result['txt'] .= "</p>";
		} else {
			$result['txt'] .= " ";
		}

		if ($mini == 1 && $i > 10) {
			$result['cut'] = 1;
			break;
		}
	}

	return $result;
}

if (isset($_GET['file'])) {
	$res = ConvertMarkdown($_GET['file'], 0);
	echo $res['txt'];
}
?>