	<h2>Usage</h2>
	<p>With WP App Store Connect you can retrieve various chart lists from the App Store. The Plugin provides a shortcode to include those data in a post or page. You can select what data to be shown and tweak its appearance.</p>
	<p>Insert this shortcode in your post / page </p>
	<p>[apptoplist <b>list</b>="chartlist" <b><i>genre</b>="category"</i> <b><i>limit</b>="limit"</i> <b><i>country</b>="US"</i> <b><i>style</b>="liststyle1"</i>]</p>

	<table>
		<tr>
			<th width=150>parameter</th>
			<th>value</th>
		</tr>
		<tr bgcolor="lightgrey">
			<th>list - required</th>
			<td>
			<i>Look up valid values for this parameter on tab 'App Store Charts (Widget)'. Choose a chart section and type and see the corresponding parameter right next to the dropdown box.</i><br>
			e.g. 'topfreeapplications' or 'topmovies'
			</td>
		</tr>
		<tr>
			<th>genre - optional</th>
			<td>
			<i>Look up valid values for this parameter on tab 'App Store Charts (Widget)'. Choose a chart section and category and see the corresponding parameter right next to the dropdown box.</i><br>
			If ommited, all categories will be shown. Genre code is numeric, like '6001'
			</td>
		</tr>
		<tr bgcolor="lightgrey">
			<th>limit - optional</th>
			<td>
			Number of items to be displayed. Maximum is 25.<br>
			If ommited, default value will be used.
			</td>
		</tr>
		<tr>
			<th>store - optional</th>
			<td>
			ISO country code for the app store. US for USA, DE for Germany, GB for United Kingdom, FR for france etc.<br>
			If ommited, default value on tab 'Default Values' will be used.
			</td>
		</tr>
		<tr bgcolor="lightgrey">
			<th>liststyle - optional</th>
			<td>
			Choose list style (listsytle1 - liststyle4).<br>
			If ommited, default list style (below) will be used.
			</td>
		</tr>
		<tr>
			<th>internal paramters<br><i>use with caution</i></th>
			<td>
			<p>You might probably want to keep your hands from these parameters, as they are for internal use and you probabaly won't need them anyway. They are all optional.</p>
			<ul>
				<li>printtemplate -> "yes" prints the template itself instead of using it.</li>
				<li>liststart -> Sets the offset for chart lists. Chart list always list the first <i>n</i> items. liststart="25" lets the chart list start with item #25. If you want to show positions 291 - 300, use [apptoplist list="toppaidapplications" liststart="291" limit="10"].</li>
				<li>templateoverride -> "yes" lets you use your own template specified in the post or page. Quotes are escaped with %H%. Example: [apptoplist list="toppaidapplications" templateoverride="yes" style="&lt;p&gt;&lt;a href=%H%%ITUNESLINK%%H% target=%H%_blank%H%&gt;%POSITION% %APPNAME&lt;/a&gt;&lt;/p&gt;"]</li>
			</ul>
			</td>
		</tr>
	</table>
	
	<p>Examples</p>
	<table>
		<tr>
			<td>[apptoplist list="toppaidapplications"]</td>
			<td>Chart list for Top Paid Apps for all categories. Template and store are default values from admin panel settings.</td>
		</tr>
		<tr>
			<td>[apptoplist list="topfreeipadapplications" genre="6014" style="liststyle2"]</td>
			<td>Chart list for Top Free iPad games, using template 'liststyle2'.</td>
		</tr>
	</table>

	<h2>Settings</h2>
   
	<table>
	<tr>
	<td>
		<label for="listitemdisplay">Items to display</label>
	</td>
	<td>
		<select name="listitemdisplay" style="width:150px;">
			<?php
				foreach(array("5","10","15","20","25") as $i)
					{
					if ($i == $listitemdisplay) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	</tr>
	<tr>
	<td>
		<label for="liststyle">List style</label>
	</td>
	<td>
		<select name="liststyle" style="width:150px;">
			<?php
				foreach(array("liststyle1","liststyle2","liststyle3","liststyle4") as $i)
					{
					if ($i == $liststyle) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	</tr>
	</table>
	
	<table cellspacing="10">
	<tr>
	<td valign="top">
		<label for="liststyle1"> <b>liststyle1</b> Custom Template #1.</label><br>
		<textarea name="liststyle1"  rows="20" cols="60"><?php echo stripslashes($liststyle1) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_list1.png"></td>
	<td valign="top"><p><input type="checkbox" name="style1_reset" value="yes"> reset template style 1</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="liststyle2"> <b>liststyle2</b> Custom Template #2.</label><br>
		<textarea name="liststyle2"  rows="20" cols="60"><?php echo stripslashes($liststyle2) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_list2.png"></td>
	<td valign="top"><p><input type="checkbox" name="style2_reset" value="yes"> reset template style 2</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="liststyle3"> <b>liststyle3</b> Custom Template #3.</label><br>
		<textarea name="liststyle3"  rows="20" cols="60"><?php echo stripslashes($liststyle3) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_list3.png"></td>
	<td valign="top"><p><input type="checkbox" name="style3_reset" value="yes"> reset template style 3</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="liststyle4"> <b>liststyle4</b> Custom Template #4.</label><br>
		<textarea name="liststyle4"  rows="20" cols="60"><?php echo stripslashes($liststyle4) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_list4.png"></td>
	<td valign="top"><p><input type="checkbox" name="style4_reset" value="yes"> reset template style 4</p></td>
	</tr>
	</table>

	<p><strong>Note</strong>: These previews are from the pre-installed templates and do <strong>not</strong> reflect any changes you might have made. Upgrading this plugin does <strong>not</strong> override any installed templates, so you might want to <a href="http://appdamit.de/wp-app-store-connect-templates/" target="_blank">check out the latest templates</a>.</p>
	
   	<div><input type="submit" name="ituneschartswidget_save_options" id="ituneschartswidget_save_options" value="Save Options" class="button-primary"/></div>


		<h2>Variables</h2>
		
		<p>Use the predefined templates to show App Store Charts or customize them as you like. The App Store Charts list can display the following app data:</p>
		
		<table>
		<tr><td><b>Variable</b></td><td><b>Description</b></td><td><b>Example</b></td></tr>					
		<tr><td>%APPID%</td><td>The App Store ID of the app.</td><td>1</td></tr>
		<tr><td>%POSITION%</td><td>Chartposition of the app.</td><td>1</td></tr>
		<tr><td>%APPNAME%</td><td>The name of the app.</td><td>Supercool App HD</td></tr>
		<tr><td>%DEVELOPERNAME%</td><td>App developer's name.</td><td>Great company</td></tr>
		<tr><td>%ITUNESLINK%</td><td>Link to the app store. This will be a TradeDoubler affiliate link if ID is given.<br>ITUNESLINK will just put out the URL, so use in a link contect,<br>like &lt;a href="ITUNESLINK"&gt;</td><td><a href="#">Supercool App HD</a></td></tr>
		<tr><td>%APPICON<##>%</td><td>App icon resized to ##x## pixels. With %APPICON<50>% you get a 50x50 icon.</td><td><img src="<?php echo $myDir ?>img/admin.jpg" width="50" height="50"></td></tr>
		<tr><td>%ICONURL%</td><td>URL to App icon. Remember, the original icon size is 512x512.</td><td>http://a3.mzstatic.com/us/r1000/113/Purple/v4/6b/a7/d2/6ba7d2b2-7f9e-c4e9-3224-f5f83e2f6d09/mzl.zqxmszay.png</td></tr>
		<tr><td>%PRICE%</td><td>The price of the app including Currency depending on the App Store.</td><td>4.99 USD</td></tr>					
		<tr><td>%CATEGORIE%</td><td>Main category, the app is associated with.</td><td>Games</td></tr>
		<tr><td>%RELEASEDATE%</td><td>Release date of the app.</td><td>2012-01-31</td></tr>
		<tr><td>%DESCRIPTION<##>%</td><td>## characters of the app's description. With %DESCRIPTION<160>% you get the first 160 characters of the app description. Does recognize word boundaries.</td><td>2012-01-31</td></tr>
		</table>
