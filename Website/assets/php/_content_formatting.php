<?php
    /*  BBCodeHTML($bbtext)
    *   Turns BBCode into it's respective HTML
    *
    *     $bbtext (STRING)
    */
	function BBCodeHTML($bbtext)
	{
		preg_replace_callback("/\[ul](.*?)\[\/ul]/i", function($matches)
		{
			return preg_replace('/\s+/', '', trim($matches[0]));
		}, $bbtext);

		$bbtags = array
		(
			'[left]' => '<div style="text-align:left">','[/left]' => '</div>',
			'[right]' => '<div style="text-align:right;">','[/right]' => '</div>',
			'[center]' => '<div style="text-align:center;">','[/center]' => '</div>',
			'[justify]' => '<div style="text-align:justify;">','[/justify]' => '</div>',

			'[b]' => '<b>','[/b]' => '</b>',
			'[i]' => '<i>','[/i]' => '</i>',
			'[u]' => '<u>','[/u]' => '</u>',
			'[s]' => '<s>','[/s]' => '</s>',
			'[sub]' => '<sub>','[/sub]' => '</sub>',
			'[sup]' => '<sup>','[/sup]' => '</sup>',
			'[/color]' => '</font>',
			'[/size]' => '</font>',
			'[/font]' => '</font>',

			'[br]' => '<br />',
			"\r\n" => '</div><div>',
			"\n" => '</div><div>',

			'[ul]' => '<ul>','[/ul]' => '</ul>',
			'[ol]' => '<ol>','[/ol]' => '</ol>',
			'[li]' => '<li>','[/li]' => '</li>',
			'[table]' => '<table>','[/table]' => '</table>',
			'[tr]' => '<tr>','[/tr]' => '</tr>',
			'[td]' => '<td>','[/td]' => '</td>',
			'[hr]' => '<hr>',

			'[quote]' => '<blockquote><div>','[/quote]' => '</div></blockquote>',
			'[code]' => '<code>','[/code]' => '</code>',
		);

		$bbtext = str_ireplace(array_keys($bbtags), array_values($bbtags), $bbtext);
		$bbtext = str_ireplace('</div><div></ul>', '</ul>', $bbtext);
		$bbtext = str_ireplace('</div><div></ol>', '</ol>', $bbtext);
		$bbtext = str_ireplace("</div><div><li>", '<li>', $bbtext);
		$bbtext = str_ireplace('</div><div></li>', '</li>', $bbtext);
		$bbtext = str_ireplace('<div></div>', '<div>&nbsp;</div>', $bbtext);

		$bbextended = array
		(
			"/\[url](.*?)\[\/url]/i" => "<a href=\"http://$1\" title=\"$1\">$1</a>",
			"/\[url=(.*?)\](.*?)\[\/url\]/i" => "<a href=\"$1\" title=\"$1\">$2</a>",
			"/\[img\]([^[]*)\[\/img\]/i" => "<img src=\"$1\" alt=\" \" />",
			"/\[youtube\]([^[]*)\[\/youtube\]/i" => "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$1?wmode=opaque\" data-youtube-id=\"$1\" frameborder=\"0\" allowfullscreen=\"\"></iframe>",
			"/\[color=(.*?)\]/i" => "<font color=\"$1\">",
			"/\[size=(.*?)\]/i" => "<font size=\"$1\">",
			"/\[font=(.*?)\]/i" => "<font face=\"$1\">",
		);

		foreach($bbextended as $match=>$replacement)
		{
			$bbtext = preg_replace($match, $replacement, $bbtext);
		}

		return $bbtext;
	}
?>
