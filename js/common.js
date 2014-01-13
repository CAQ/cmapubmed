var offline = true; // only change this line

var versionINFO = (offline ? "v1.0f 离线版 20140112" : "v1.0 在线版 20140112");

var sendAjaxQuery = function(page, paramUrl, statechangefunc) {
  if (offline) {
    ajaxQuery('http://eutils.ncbi.nlm.nih.gov/entrez/eutils/' + page + '.fcgi?' + paramUrl, statechangefunc);
  } else {
    ajaxQuery('getxml.php?pagename=' + page + '&' + paramUrl, statechangefunc);
  }
};
