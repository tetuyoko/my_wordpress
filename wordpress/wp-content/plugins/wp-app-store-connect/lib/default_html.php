<?php

$stylefull =
'
<table width="95%" class="wpasc_rounded wpasc_shadow" bgcolor="#F5F5F5" cellspacing="10">
<tr>
<td valign="top">
<h2>%APPNAME%</h2>
<br>
by <a href="%DEVELOPERURL%" target="_blank">%DEVELOPERNAME%</a><br>
<br>
<b>%PRICE% %CURRENCY%</b><br>
<br>
%ITUNESLINK%<br>
<br>
%UNIVERSALAPP%<br>
</td>
<td>
<div align="right">%APPICON<175>%</div>
</td>
<tr>
<td colspan=2>
<p>
Customer ratings: %RATING% (%RATINGCOUNT% ratings)<br>
Category: %CATEGORIES%<br>
Languages: %LANGUAGES%<br>
Rated: %CONTENTRATING%
</p>
<p>
Updated: %RELEASEDATE%<br>
Version: %VERSION%<br>
Size: %FILESIZE%<br>
Requirements: %SUPPORTED%
</p>
</td>
</tr>
<tr>
<td colspan=2>
<h3>Description %APPNAME%</h3>
<p>%DESCRIPTION%</p>
<br>
<h3>What\'s new in Version %VERSION%</h3>
<p>%RELEASENOTES%</p>
</td>
</tr>
</table>
<br>
%SCREENSHOTS%
';
					
$styleinfobox = 
'
<table width="95%" class="wpasc_rounded wpasc_shadow" bgcolor="#F5F5F5" cellspacing="10">
<tr>
<td valign="top">
<h2>%APPNAME%</h2>
<br>
by <a href="%DEVELOPERURL%" target="_blank">%DEVELOPERNAME%</a><br>
<br>
<b>%PRICE% %CURRENCY%</b><br>
<br>
%ITUNESLINK%<br>
<br>
%UNIVERSALAPP%<br>
</td>
<td>
<div align="right">%APPICON<175>%</div>
</td>
<tr>
<td colspan=2>
<p>
Customer ratings: %RATING% (%RATINGCOUNT% ratings)<br>
Category: %CATEGORIES%<br>
Languages: %LANGUAGES%<br>
Rated: %CONTENTRATING%
</p>
<p>
Updated: %RELEASEDATE%<br>
Version: %VERSION%<br>
Size: %FILESIZE%<br>
Requirements: %SUPPORTED%
</p>
</td>
</tr>
<tr>
<td colspan=2>
<blockquote>%DESCRIPTION<250>%...</blockquote>
<br>
</td>
</tr>
</table>
<br>
%SCREENSHOTS%
';

$stylesmallbox = 
'
<table class="wpasc_rounded wpasc_shadow" bgcolor="#F5F5F5" cellspacing="10">
<tr>
<td>
%APPICON<90>%
<p><center>%RATING%</center></p>
</td>
<td>
<h2>%APPNAME%</h2>
<p>by <a href="%DEVELOPERURL%" target="_blank">%DEVELOPERNAME%</a></p>
%ITUNESLINK%<br>
%UNIVERSALAPP%<br>
<b>%PRICE% %CURRENCY%</b><br>
</td>
</table>
';

$liststyle1 =
'
<table width="95%" bgcolor="lightgrey" class="wpasc_rounded wpasc_shadow" cellspacing="10">
<tr>
<td colspan=2><h3>%POSITION%. <a href="%ITUNESLINK%"  target="_blank">%APPNAME%</a></h3></td>
</tr>
<tr><td colspan=2>
<table cellspacing="10">
<tr>
<td width="90" style="vertical-align: middle"><a href="%ITUNESLINK%" target="_blank">%APPICON<100>%</a><br><br><center>[appstore id="%APPID%" style="%RATING%"]</center></td>
<td>
%DESCRIPTION<250>% <a href="%ITUNESLINK%" target="_blank">more</a><br>
in %CATEGORY%<br>
by %DEVELOPERNAME%<br>
</td>
</tr>
</table>
</td></tr>
</tr>
<tr>
<td>%PRICE%</td>
<td><div align="right">%RELEASEDATE%</div></td>
</tr>
</table>
<br>
';

$liststyle2 =
'
<table width="95%" cellspacing="10">
<tr>
<td>
<h2>%POSITION%. <a href="%ITUNESLINK%"  target="_blank">%APPNAME%</a></h2>
in %CATEGORY%<br>
by %DEVELOPERNAME%<br>
for %PRICE%<br>
[appstore id="%APPID%" style="%RATING%"]<br>
<p>%DESCRIPTION<250>% <a href="%ITUNESLINK%" target="_blank">more</a></p>
</td>
<td><a href="%ITUNESLINK%"  target="_blank">%APPICON<175>%</a></td>
</tr>
</table>
<br>
';

$liststyle3 =
'
<div style="font-weight:bold;">%POSITION%. <a style="font-weight:bold;" href="%ITUNESLINK%" target="_blank">%APPNAME%</a></div>
<div style="margin:10px;width:255px;">
<div style="float:left;width:50px;">%APPICON<50>%</div>
<div style="margin-left:60px;width:190px;">in: %CATEGORY%<br>from: %RELEASEDATE%<br>for: %PRICE%<br>[appstore id="%APPID%" style="%RATING%"]</div>
</div>
<hr>
';

$liststyle4 =
'
<div style="float:left;"><a href="%ITUNESLINK%" target="_blank">%APPICON<150>%</a></div>
';

$widgetstyle1 =
'
<div style="margin-right:10px;border:1px solid grey;" class="wpasc_rounded wpasc_shadow">
<div style="margin:10px;width:255px;">
<div style="float:left;width:50px;">%APPICON<50>%</div>
<div style="margin-left:60px;width:195px;">%DEVELOPERNAME%<br><a href="%ITUNESLINK%" target="_blank">%APPNAME%</a><br>%PRICE%</div>
</div>
</div>
<br>
';

$widgetstyle2 =
'
<div style="font-weight:bold;">%POSITION%. <a style="font-weight:bold;" href="%ITUNESLINK%" target="_blank">%APPNAME%</a></div>
<div style="margin:10px;width:255px;">
<div style="float:left;width:50px;">%APPICON<50>%</div>
<div style="margin-left:60px;width:190px;">in: %CATEGORY%<br>from: %RELEASEDATE%<br>for: %PRICE%</div>
</div>
<hr>
';

$widgetstyle3 =
'
<div style="font-weight:bold;">%POSITION%. <a style="font-weight:bold;" href="%ITUNESLINK%" target="_blank">%APPNAME%</a></div>
<div style="margin:10px;width:255px;">
<div style="float:left;width:50px;">%APPICON<50>%</div>
<div style="margin-left:60px;width:190px;">in: %CATEGORY%<br>from: %RELEASEDATE%<br>for: %PRICE%<br>[appstore id="%APPID%" style="%RATING%"]</div>
</div>
<hr>
';

$widgetstyle4 =
'
<div style="float:left;"><a href="%ITUNESLINK%" target="_blank">%APPICON<50>%</a></div>
';

?>