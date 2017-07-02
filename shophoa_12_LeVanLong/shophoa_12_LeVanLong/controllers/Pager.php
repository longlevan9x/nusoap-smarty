<?php
/**
* 
*/

class Pager
{
	private  function __findStart($currentPage, $limit)
	{
		$start = ($currentPage - 1) * $limit;
		return $start;
	}

	public  function createLink($uri, $filter = array())
	{
		$string = '';
		foreach ($filter as $k => $item) {
			$string .= (empty($string)) ? "?{$k}={$item}" : "&{$k}={$item}";
		}

		return $uri . $string;
	}

	public  function paging($link, $totalRecord, $currentPage, $limit, $keyword = '')
	{
		$totalPage = ceil($totalRecord / $limit);

		if ($currentPage > $totalRecord) {
			$currentPage = $totalPage;
		}
		elseif($currentPage < 1){
			$currentPage = 1;
		}

		$start = $this->__findStart($currentPage, $limit);

		$html = $this->__nextPrev($currentPage, $totalPage, $link);

		return array(
			'start'   => $start,
			'limit'   => $limit,
			'html'    => $html,
			'keyword' => $keyword,
		);
	}

	private  function __nextPrev($currentPage, $totalPage, $link)
	{
		$html = '<ul class="pagination">';
		if ($currentPage > 1 && $totalPage > 1) {
			$html .= "<li><a href='".str_replace("{page}", 1 , $link)."'>"."<<"."</a></li>";
			$html .= "<li><a href='".str_replace("{page}", $currentPage - 1 , $link)."'>"."<"."</a></li>";
		}
		for ($i=1; $i <= $totalPage; $i++) {
			if ($i == $currentPage) {
				$html .= '<li class="active"><a href="'.str_replace("{page}", $i , $link).'">'.$i.'</a></li>';
			}
			else{
				$html .= "<li><a href='".str_replace("{page}", $i , $link)."'>".$i."</a></li>";
			}
		}
		if ($currentPage < $totalPage && $totalPage > 1) {
			$html .= "<li><a href='".str_replace("{page}", $currentPage + 1, $link)."'>".">"."</a></li>";
			$html .= "<li><a href='".str_replace("{page}", $totalPage, $link)."'>".">>"."</a></li>";
		}
		$html .= "</ul>";
		return $html;
	}
}
?>