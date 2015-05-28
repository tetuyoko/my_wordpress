	<h2>Usage</h2>
   
    <p>With <strong>WP App Store Connect</strong> you can retrieve data from the Apple App Store. This plugin lets you</p>
	<p>Retrieve Data to a given App ID for <b>full or short description of an app</b>. This is used via shortcut wihtin a post or page. See tab <a href="#tab1">App Data (Post)</a>.</p>
	<p>Retrieve various <b>App Store Charts to show within a post or a page</b>. See tab <a href="#tab2">App Store Charts (Post)</a>.</p>
	<p>Retrieve various <b>App Store Charts to show in a Sidebar Widget</b>. See tab <a href="#tab3">App Store Charts (Widget)</a>.</p>
	<p>The plugin will use these values if you don't specify otherwise in the shortcode. With a given Tradedoubler Affiliate ID, the plugin generates valid affilate links to the app store.</p>

	<h2>Default Settings</h2>
	
	<table>

	<tr>
		<td width="180">&nbsp;</td>
		<td width="180">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr><td colspan="3"><h2>Overall</h2></td></tr>

	<tr>
	<td>
		<label for="storecountry"> App Store's default country code</label><br>
	</td>
	<td colspan="2">
		<select name="storecountry" style="width:150px;">
			<?php
				foreach (array_keys($country_codes) as $i)
					{
					if ($i == $storecountry) {$selected=" selected";} else {$selected="";}
					if ($country_codes[$i]['country']) {echo '<option value="'.$i.'"'.$selected.'>'.$country_codes[$i]['country'].'</option>';}
					}
			?>
		</select>
	</td>
	</tr>

	<tr>
	<td>
		<label for="dateformat"> Date format</label>  <br>
	</td>
	<td colspan="2">
		<select name="dateformat" style="width:150px;">
			<?php
				foreach(array("YYYY-MM-DD","YYYY/MM/DD","DD.MM.YYYY","DD-MM-YYYY") as $i)
					{
					if ($i == $dateformat) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	</tr>

	<tr>
	<td valign="top">
		<label for="starrate_color"> Star rating color</label>  <br>
	</td>
	<td valign="top">
		<select name="starrate_color" style="width:150px;">
			<?php
				foreach(array("yellow", "red", "orange", "blue", "green") as $i)
					{
					if ($i == $starrate_color) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	<td>
		<img src="<?php echo $myDir ?>img/rating_yellow_8.gif"><br>
		<img src="<?php echo $myDir ?>img/rating_red_8.gif"><br>
		<img src="<?php echo $myDir ?>img/rating_orange_8.gif"><br>
		<img src="<?php echo $myDir ?>img/rating_blue_8.gif"><br>
		<img src="<?php echo $myDir ?>img/rating_green_8.gif">
	</td>
	</tr>

	<tr>
	<td>
		<label for="txtisuniversalapp"> Universal App</label>  <br>
	</td>
	<td>
		<input type="text" name="txtisuniversalapp" style="width:350px;" value="<?php echo $txtisuniversalapp ?>" />
	</td>
	<td>Custom text for universal app.</td>
	</tr>

	<tr>
	<td valign="top">
		<label for="txtfreeprize"> Free Prize</label>  <br>
	</td>
	<td valign="top">
		<input type="text" name="txtfreeprize" style="width:350px;" value="<?php echo $txtfreeprize ?>" />
	</td>
	<td>
		Custom text for 'free' apps. App Data contains a numeric value for the prize, like 0.99 USD or 0 USD. Instead of "0 USD" you could have a custom text, like 'free'. If left blank, original data will be used ("0 USD"). This applys only to app data in a single post or page and only if the prize is nil.
	</td>
	</tr>

	<tr>
	<td valign="top">
		<label for="imgitunesbutton"> iTunes Button</label>  <br>
	</td>
	<td valign="top">
		<input type="text" name="imgitunesbutton" style="width:350px;" value="<?php echo $imgitunesbutton ?>" />
	</td>
	<td>
		Link to "View in iTunes" - button. Link to your custom button or use one of these<br>
		<ul>
			<li>viewinitunes_en.png <img src="<?php echo $myDir ?>img/viewinitunes_en.png"></li>
			<li>viewinitunes_de.png <img src="<?php echo $myDir ?>img/viewinitunes_de.png"></li>
			<li>viewinitunes_es.png <img src="<?php echo $myDir ?>img/viewinitunes_es.png"></li>
			<li>viewinitunes_fr.png <img src="<?php echo $myDir ?>img/viewinitunes_fr.png"></li>
			<li>viewinitunes_it.png <img src="<?php echo $myDir ?>img/viewinitunes_it.png"></li>
			<li>viewinitunes_nl.png <img src="<?php echo $myDir ?>img/viewinitunes_nl.png"></li>
			<li>viewinitunes_jp.png <img src="<?php echo $myDir ?>img/viewinitunes_jp.png"></li>
		</ul>
		<p><strong>Rember to change the url matching to you blog's domain.</strong></p>
	</td>
	</tr>
	
	<tr><td colspan="3"><h2>Affiliate</h2></td></tr>

	<tr>
	<td>
		<label for="affiliateprogram"> Affiliate Network</label>  <br>
	</td>
	<td colspan="2">
	<select name="affiliateprogram" style="width:150px;">
		<?php
			if ($affiliateprogram != 'US' && $affiliateprogram != 'CA' && $affiliateprogram != '') {$affiliateprogram = "PHG";}
			foreach (array_keys($affiliate_programs) as $i)
				{
				if ($i == $affiliateprogram) {$selected=" selected";} else {$selected="";}
				if ($i == 'US' || $i == 'CA') {$affprogramname = 'iTunes @ Linkshare ';} else {$affprogramname = 'iTunes @ PHG ';}
				if ($i == '') {$affprogramname = 'no affiliate program';}
				echo '<option value="'.$i.'"'.$selected.'>'.$affprogramname.$country_codes[$i]['country'].'</option>';
				}
		?>
	</select>
	</td>
	</tr>

	<tr>
	<td>
		<label for="affiliateid"> Affiliate ID (website ID)</label>  <br>
	</td>
	<td colspan="2">
		<input type="text" name="affiliateid" style="width:150px;" value="<?php echo $affiliateid ?>" />
	</td>
	</tr>

	<tr><td colspan="3"><h2>Screenshot gallery</h2></td></tr>

	<tr>
	<td>
		<label for="gallerytype"> Gallery type</label>  <br>
	</td>
	<td colspan="2">
		<select name="gallerytype" style="width:150px;">
			<?php
				foreach(array("stacked horizontally","with Thumbnails","plain Image List","custom HTML") as $i)
					{
					if ($i == $gallerytype) {$selected=" selected";} else {$selected="";}
					echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
					}	
			?>
		</select>
	</td>
	</tr>

	<tr>
	<td>
		<label for="screenshotsubheadline"> Screenshot Headline<br>Screenshot Headline iPad</label>  <br>
	</td>
	<td>
		<input type="text" name="screenshotsubheadline" style="width:150px;" value="<?php echo $screenshotsubheadline ?>" /><br>
		<input type="text" name="screenshotsubheadlineipad" style="width:150px;" value="<?php echo $screenshotsubheadlineipad ?>" />
	</td>
	<td>Set a subheadline for the screenshot gallery, like 'Screenshots iPhone'. HTML is allowed as well as the variable %IMAGETITLE%.</td>
	</tr>

	<tr>
	<td>
		<label for="resizemaxwidth"> Resize (max width x height)</label>  <br>
	</td>
	<td>
		<input type="text" name="resizemaxwidth" style="width:70px;" value="<?php echo $resizemaxwidth ?>" />
		x
		<input type="text" name="resizemaxheight" style="width:70px;" value="<?php echo $resizemaxheight ?>" />
	</td>
	<td>Resize screenshots to max width and height. Does not apply to the "stacked horizontally" gallery, as this comes with fixed image sizes. Image will keep it proportions (aspect ratio). Depending on your template, good size would be around 400 to 500 pixels.</td>
	</tr>

	<tr>
	<td>
		<label for="maxscreenshots"> Max number of screenshots</label>  <br>
	</td>
	<td>
		<input type="text" name="maxscreenshots" style="width:150px;" value="<?php echo $maxscreenshots ?>" />
	</td>
	<td>Maximum number of screenshots to be displayed. Leave blank for all available screenshots.</td>
	</tr>

	<tr>
		<td valign="top">
			<label for="customhtmlscreenshotsbefore"> Custom HTML - before</label>
		</td>
		<td>
			<textarea name="customhtmlscreenshotsbefore" rows="5" cols="60"><?php echo stripslashes($customhtmlscreenshotsbefore) ?></textarea>
		</td>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td valign="top">
			<label for="customhtmlscreenshots"> Custom HTML - individual image</label>
		</td>
		<td valign="top">
			<textarea name="customhtmlscreenshots"  rows="10" cols="60"><?php echo stripslashes($customhtmlscreenshots) ?></textarea>
		</td>
		<td>
		<h3>Variables</h3>
		<table>
			<tr>
				<td>%IMAGE%</td>
				<td>Image URL</td>
			</tr>
			<tr>
				<td>%IMAGETITLE%</td>
				<td>Image Title</td>
			</tr>
			<tr>
				<td>%RESIZE%</td>
				<td>Code for image resize option, an OnLoad-JavaScript trigger. You need to put this in an IMG-tag if you want the screenshot images to be resized.</td>
			</tr>
			<tr>
				<td>%IMAGECOUNT%</td>
				<td>Number of the current screenshot. Something for '%%IMAGECOUNT%. screenshot of %IMAGETITLE%'</td>
			</tr>
		</table>
		<h3>Example</h3>
		<p><strong>custom code:</strong> &lt;li&gt;&lt;img %RESIZE% src="%IMAGE%" title="%IMAGETITLE%"&gt;&lt;/li&gt;</p>
		<p><strong>output code:</strong> &lt;li&gt;&lt;img onload="wpasc_ResizeImage(this,400,400)" src="http://app-url.jpg" title="App Name"&gt;&lt;/li&gt;</p>
		</td>
	</tr>

	<tr>
		<td valign="top">4
			<label for="customhtmlscreenshotsafter"> Custom HTML - after</label>
		</td>
		<td>
			<textarea name="customhtmlscreenshotsafter"  rows="5" cols="60"><?php echo stripslashes($customhtmlscreenshotsafter) ?></textarea>
		</td>
		<td>The preinstalled custom HTML code shows thumbnail screenshots in a single row. Each thumbnail links to the full size image in a new browser tab. Rember to resize to 100x100 or smaller!</td>
	</tr>
	
	</table>
	
	<div><input type="submit" name="ituneschartswidget_save_options" id="ituneschartswidget_save_options" value="Save Options" class="button-primary"/></div>

	<h2>other iTunes store items</h2>
	
	<p>This plugin has been developed to display data and charts for</p>
	
	<ul>
		<li>iOS apps</li>
		<li>Mac apps</li>
	</ul>
	
	<p>It does retrieve data for other iTunes store items like books, movies, music etc. However, currently I highly recommend to only use the charts widget for other items than apps as not all of the data items are supported. For example, customers ratings for other items than apps currently doesn't work.</p>