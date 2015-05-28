    <h2>Settings</h2>
   
	<table>
	<tr>
	<td>
		<label for="widgettitle"> Widget Title</label>
	</td>
	<td>
		<input type="text" name="widgettitle" style="width:150px;" value="<?php echo $widgettitle ?>" />
	</td>
	</tr>
	<tr>
	<td>
		<label for="itemdisplay">Items to display</label>
	</td>
	<td>
		<select name="itemdisplay" style="width:150px;">
			<?php
				foreach(array("1", "3","5","8","10","15","20","25") as $i)
					{
					if ($i == $itemdisplay) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	</tr>
	<tr>
		<td>
			<label for="appstoreconnect_chart_section">Chart Section</label>
			<input type="hidden" id="appstoreconnect_chart_section_hidden" value="<?php echo $appstoreconnect_chart_section; ?>" />
		</td>
		<td>
			<select name="appstoreconnect_chart_section" id="appstoreconnect_chart_section"  style="width:150px;"></select>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label for="appstoreconnect_chart_type">Chart Type</label>
			<input type="hidden" id="appstoreconnect_chart_type_hidden" value="<?php echo $appstoreconnect_chart_type; ?>" />
		</td>
		<td>
			<select id="appstoreconnect_chart_type" name="appstoreconnect_chart_type" style="width:150px;"></select>
			<i>'list' value in App Store Charts: </i><input type="text" id="appstoreconnect_chart_type_value" disabled />
		</td>
	</tr>	
	
	<tr>
		<td>
			<label for="appstoreconnect_chart_category">Chart Category</label>
			<input type="hidden" id="appstoreconnect_chart_category_hidden" value="<?php echo $appstoreconnect_chart_category; ?>" />
		</td>
		<td>
			<select id="appstoreconnect_chart_category" name="appstoreconnect_chart_category" style="width:150px;"></select>
			<i>'genre' value in App Store Charts: </i><input type="text" id="appstoreconnect_chart_category_value" disabled />
		</td>
	</tr>	
	<tr>
	<td>
		<label for="widgetstyle">Widget style</label>
	</td>
	<td>
		<select name="widgetstyle" style="width:150px;">
			<?php
				foreach(array("style1","style2","style3","style4","style5") as $i)
					{
					if ($i == $widgetstyle) {$selected=" selected";} else {$selected="";}
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
		<label for="widgetstyle1"> <b>style1</b> Custom Template #1.</label><br>
		<textarea name="widgetstyle1"  rows="20" cols="60"><?php echo stripslashes($widgetstyle1) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_widget1.png"></td>
	<td valign="top"><p><input type="checkbox" name="widgetstyle1_reset" value="yes"> reset template style 1</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="widgetstyle2"> <b>style2</b> Custom Template #2.</label><br>
		<textarea name="widgetstyle2"  rows="20" cols="60"><?php echo stripslashes($widgetstyle2) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_widget2.png"></td>
	<td valign="top"><p><input type="checkbox" name="widgetstyle2_reset" value="yes"> reset template style 2</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="widgetstyle3"> <b>style3</b> Custom Template #3.</label><br>
		<textarea name="widgetstyle3"  rows="20" cols="60"><?php echo stripslashes($widgetstyle3) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_widget3.png"></td>
	<td valign="top"><p><input type="checkbox" name="widgetstyle3_reset" value="yes"> reset template style 3</p></td>
	</tr>
	<tr>
	<td valign="top">
		<label for="widgetstyle4"> <b>style4</b> Custom Template #4.</label><br>
		<textarea name="widgetstyle4"  rows="20" cols="60"><?php echo stripslashes($widgetstyle4) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_widget4.png"></td>
	<td valign="top"><p><input type="checkbox" name="widgetstyle4_reset" value="yes"> reset template style 4</p></td>
	</tr>

	<tr>
	<td valign="top">
		<label for="widgetstyle5"> <b>style5</b> Custom Template #5.</label><br>
		<textarea name="widgetstyle5"  rows="20" cols="60"><?php echo stripslashes($widgetstyle5) ?></textarea>
	</td>
	<td><img src="<?php echo $myDir ?>img/styles_widget5.png"></td>
	<td valign="top"><p><input type="checkbox" name="widgetstyle5_reset" value="yes"> reset template style 5</p></td>
	</tr>


	</table>

	<p><strong>Note</strong>: These previews are from the pre-installed templates and do <strong>not</strong> reflect any changes you might have made. Upgrading this plugin does <strong>not</strong> override any installed templates, so you might want to <a href="http://appdamit.de/wp-app-store-connect-templates/" target="_blank">check out the latest templates</a>.</p>
	
		<div><input type="submit" name="ituneschartswidget_save_options" id="ituneschartswidget_save_options" value="Save Options" class="button-primary"/></div>


		<h2>Variables</h2>
		
		<p>Use the predefined templates to show App Store Charts or customize them as you like. The Widget can display the following app data:</p>
		
		<table>
		<tr><td><b>Variable</b></td><td><b>Description</b></td><td><b>Example</b></td></tr>					
		<tr><td>%APPID%</td><td>The App Store ID of the app.</td><td>1</td></tr>
		<tr><td>%POSITION%</td><td>Chartposition of the app.</td><td>1</td></tr>
		<tr><td>%APPNAME%</td><td>The name of the app.</td><td>Supercool App HD</td></tr>
		<tr><td>%DEVELOPERNAME%</td><td>App developer's name.</td><td>Great company</td></tr>
		<tr><td>%ITUNESLINK%</td><td>Link to the app store. This will be a TradeDoubler affiliate link if ID is given.<br>ITUNESLINK will just put out the URL, so use in a link contect,<br>like &lt;a href="ITUNESLINK"&gt;</td><td><a href="#">Supercool App HD</a></td></tr>
		<tr><td>%APPICON<##>%</td><td>App icon resized to ##x## pixels. With APPICON<50> you get a 50x50 icon.</td><td><img src="<?php echo $myDir ?>img/admin.jpg" width="50" height="50"></td></tr>
		<tr><td>%ICONURL%</td><td>URL to App icon. Remember, the original icon size is 512x512.</td><td>http://a3.mzstatic.com/us/r1000/113/Purple/v4/6b/a7/d2/6ba7d2b2-7f9e-c4e9-3224-f5f83e2f6d09/mzl.zqxmszay.png</td></tr>
		<tr><td>%PRICE%</td><td>The price of the app including Currency depending on the App Store.</td><td>4.99 USD</td></tr>					
		<tr><td>%CATEGORY%</td><td>Main category, the app is associated with.</td><td>Games</td></tr>
		<tr><td>%RELEASEDATE%</td><td>Release date of the app.</td><td>2012-01-31</td></tr>
		</table>
		
		<h2>If you want to use more than one widget at the same time</h2>
		
		<p>This plugin comes with one widget. If you want to have more charts in your sidebar, simply create a new text widget, put your widget title in the title field and an apptoplist shortcode in the body field. See tab 'App Store Charts (Post)' for more details. Don't forget to use a widget style!.</p>
		
		<p>Example: [apptoplist limit="5" list="toptvepisodes" style="style1"]</p>
		
		Normally, Wordpress doesn't execute shortcodes in widgets. The widget will just show the shortcode rather than the chart list. If this is the case, please install and activate the author's plugin <a href="http://www.softcontent.eu/use-shortcodes-in-sidebar-widgets.html" target="_blank">Use Shortcodes in Sidebar Widgets</a>. It's very light-weight, just 1.2 KB, and doesn't need any settings. Just install and activate.</p>
