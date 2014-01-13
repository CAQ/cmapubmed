<?php
	header("Content-type: text/xml");
	include_once('../simplehtmldom/simple_html_dom.php');
	$url = "";
	if ($_GET["pagename"] == "esummary") {
		$url = "http://eutils.ncbi.nlm.nih.gov/entrez/eutils/esummary.fcgi?db=pubmed&id=".$_GET["id"]."&retmode=xml&sid=".$_GET["sid"];
	} else {
		$url = "http://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?db=pubmed&term=".rawurlencode($_GET["term"])."&retmax=10&sid=".$_GET["sid"];
	}
	$html = file_get_html($url);
	echo $html->outertext;
?>