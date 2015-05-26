<?php
namespace Leita\Resl;
	require_once "resl.php";
	
	function document($params){
		return tags(
			doctype("html"),
			html($params)
		);
	}
	
	function pagehead($charset, $title){
		return head(
			meta("charset=$charset"),
			title("$title")
		);
	}
	
	function pages($pages, $cond){
		foreach($pages as &$page){
			if ($page == $cond){
				$page = span(i($page), "align=right", "_fontWeight=bold");
			}
		}
		return body($pages);
	}

	function homePage($params){
		return document(
			pagehead('utf-8', $params['title']),
			pages(
				$params['pages'], 
				$params['currentPage']
			)
		);
	}
 