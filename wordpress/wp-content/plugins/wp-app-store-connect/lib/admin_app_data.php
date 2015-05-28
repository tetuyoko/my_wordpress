					<h2>Usage</h2>
					<p>With WP App Store Connect you can retrieve data from the Apple App Store related to a given app id. The Plugin provides a shortcode to include those data in a post or page. You can select what data to be shown and tweak its appearance.</p>
					<p>You can show a single data item, like price or ratings or multiple data items, like a full description of the iTunes Store item. If you want to show multiple data items at the same time, use the data styles below as every shortcut results in a query for data from Apple servers. One query retrieves all data to the given id.</p>
					<p>You can show a single data item, like price or ratings or multiple data items, like a full description of the iTunes Store item. If you want to show multiple data items at the same time, use the data styles below as every shortcut results in a query for data from Apple servers. One query retrieves all data to the given id.</p>
					<p>Insert this shortcode in your post / page </p>
					<p>[appstore <b>id</b>="appid" <b><i>country</b>="store"</i> <b><i>style</b>="data style or data item"</i>]</p>

					<table>
						<tr>
							<th width=150>parameter</th>
							<th>value</th>
						</tr>
						<tr bgcolor="lightgrey">
							<th>id - required</th>
							<td>
							The app id like in http://itunes.apple.com/us/app/angry-birds/id<b>343200656</b>?mt=8
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
							<th>style - optional</th>
							<td>
							Name of style for data output. The plugin comes with three pre-installed styles to choose from. You can customize them as you like. Set default style and custom styles below.<br>
							e.g. style="full"<br>
							Instead of a style you can use any data items with HTML-Code.<br>
							e.g. style="App is %FILESIZE% MB large and was released on %RELEASEDATE%."
							</td>
						</tr>
					</table>


					</p>

					<p>Examples</p>
					<table>
						<tr>
							<td>[appstore id="123456789"]</td>
							<td>Shows Infos on app '123456789', using default template.</td>
						</tr>
						<tr>
							<td>[appstore id="987654321" style="full"]</td>
							<td>Shows Infos on app '987654321', using 'full' template.</td>
						</tr>
						<tr>
							<td>[appstore id="135791113" style="%APPNAME%: download %FILESIZE%."]</td>
							<td>Shows something like 'SUPERDUPER HD: download 23.19 MB.'.</td>
						</tr>
					</table>
					
					<h2>Settings</h2>

					<table>
					<tr>
					<td>
						<label for="style"> Default data style. Will be used whenever <i>style</i> is omitted.</label>  <br>
					</td>
					<td>
						<select name="style" style="width:150px;">
							<?php
								foreach(array("full","infobox","smallbox","custombox1","custombox2","custombox3","custombox4") as $i)
									{
									if ($i == $style) {$selected=" selected";} else {$selected="";}
									echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
									}	
							?>
						</select>
					</td>
					</tr>
					</table>

					<br>											

					<table cellspacing="10">
					<tr>
						<td>
							<label for="stylefull"> <b>full</b> Shows all data.</label><br>
							<textarea name="stylefull"  rows="10" cols="60"><?php echo stripslashes($stylefull) ?></textarea>
						</td>
						<td>
							<label for="styleinfobox"> <b>infobox</b> Without description and release notes.</label><br>
							<textarea name="styleinfobox"  rows="10" cols="60"><?php echo stripslashes($styleinfobox) ?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label for="stylesmallbox"> <b>smallbox</b> Smaller info box with fewer data.</label><br>
							<textarea name="stylesmallbox"  rows="10" cols="60"><?php echo stripslashes($stylesmallbox) ?></textarea>
						</td>
						<td valign="top">
							<p><input type="checkbox" name="stylefull_reset" value="yes"> reset style full</p>
							<p><input type="checkbox" name="styleinfobox_reset" value="yes"> reset style infobox</p>
							<p><input type="checkbox" name="stylesmallbox_reset" value="yes"> reset style smallbox</p>
						</td>
					</tr>
					<tr>
						<td>
							<label for="stylecustombox1"> <b>custombox1</b> Custom Template #1.</label><br>
							<textarea name="stylecustombox1"  rows="10" cols="60"><?php echo stripslashes($stylecustombox1) ?></textarea>
						</td>
						<td>
							<label for="stylecustombox2"> <b>custombox2</b> Custom Template #2.</label><br>
							<textarea name="stylecustombox2"  rows="10" cols="60"><?php echo stripslashes($stylecustombox2) ?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label for="stylecustombox3"> <b>custombox3</b> Custom Template #3.</label><br>
							<textarea name="stylecustombox3"  rows="10" cols="60"><?php echo stripslashes($stylecustombox3) ?></textarea>
						</td>
						<td>
							<label for="stylecustombox4"> <b>custombox4</b> Custom Template #4.</label><br>
							<textarea name="stylecustombox4"  rows="10" cols="60"><?php echo stripslashes($stylecustombox4) ?></textarea>
						</td>
					</tr>
					</table>

					<div><input type="submit" name="ituneschartswidget_save_options" id="ituneschartswidget_save_options" value=
					"Save Options" class="button-primary"/></div>


					<h2>Variables</h2>
					
					<p>Use the predefined templates to show App Store data for a single App or customize them as you like. Each app store data item is represented by a variable, which you can arrange as you like. The plugin retrieves the following data items:</p>

					<table>
					<tr><td><b>Variable</b></td><td><b>Description</b></td><td><b>Example</b></td></tr>					
					<tr><td>%APPNAME%</td><td>The name of the app.</td><td>Supercool App HD</td></tr>
					<tr><td>%DEVELOPERNAME%</td><td>App developer's name.</td><td>Great company</td></tr>
					<tr><td>%DEVELOPERURL%</td><td>URL to developer's website.</td><td>http://greatcompany.com</a></td></tr>
					<tr><td>%ITUNESURL%</td><td>Url to the app store. This will be a TradeDoubler affiliate link if ID is given.</td><td>http://itunes.apple.com/...</td></tr>
					<tr><td>%ITUNESLINK%</td><td>Link to the app store. This will be a TradeDoubler affiliate link if ID is given.</td><td><a href="#"><img src="<?php echo $myDir ?>img/viewinitunes_en.png"></a></td></tr>
					<tr><td>%APPICON<##>%</td><td>App icon resized to ##x## pixels. With %APPICON<75>% you get a 75x75 icon</td><td><img src="<?php echo $myDir ?>img/admin.jpg"></td></tr>
					<tr><td>%ICONURL%</td><td>URL to App icon. Remember, the original icon size is 512x512.</td><td>http://a3.mzstatic.com/us/r1000/113/Purple/v4/6b/a7/d2/6ba7d2b2-7f9e-c4e9-3224-f5f83e2f6d09/mzl.zqxmszay.png</td></tr>
					<tr><td>%PRICE%</td><td>The price of the app.</td><td>4.99</td></tr>					
					<tr><td>%CURRENCY%</td><td>Currency of the price.</td><td>USD</td></tr>					
					<tr><td>%UNIVERSALAPP%</td><td>Shows. if an app is a universal app for iPhone & iPad. Otherwise stays blank.</td><td><img src="<?php echo $myDir ?>img/universalapp.gif"> This app is designed for both iPhone and iPad</td></tr>
					<tr><td>%CATEGORIES%</td><td>List of categories, the app is associated with.</td><td>Games, Tools, Entertainment</td></tr>
					<tr><td>%SUPPORTED%</td><td>List of iOS devices the app supports</td><td>iPhone 4, iPhone 4S, iPad 2 WiFi</td></tr>
					<tr><td>%LANGUAGES%</td><td>List of languages the app supports</td><td>English, German, Japanese</td></tr>
					<tr><td>%FILESIZE%</td><td>Size of the app in megabytes.</td><td>75.8 MB</td></tr>
					<tr><td>%VERSION%</td><td>App program version.</td><td>1.0</td></tr>
					<tr><td>%RELEASEDATE%</td><td>Release date of the app. This is the last date of the last release.</td><td>2012-01-31</td></tr>
					<tr><td>%CONTENTRATING%</td><td>Is the app safe for small children?</td><td>12+</td></tr>
					<tr><td>%RATING%</td><td>How's the app rated (5 stars image)?</td><td><img src="<?php echo $myDir ?>img/rating_yellow_9.gif"></td></tr>
					<tr><td>%RATINGCOUNT%</td><td>How many ratings for the the app?</td><td>450</td></tr>
					<tr><td>%RATINGVALUE%</td><td>How's the app rated (numeric value)?</td><td>4.5</td></tr>
					<tr><td>%DESCRIPTION<i><##></i>%</td><td>## characters of app's description from the app store. One lengthy marketing gibberish, often in bad english. With %DESCRIPTION<160>% you get the first 160 characters of the app description. Does recognize word boundaries. %DESCRIPTION% (without char-value) displays the full description.</td><td>This is the greatet app ever and now we'll show you the top 100 reasons why our app is great...</td></tr>
					<tr><td>%RELEASENOTES<i><##></i>%</td><td>## characters of the relase notes for the current version. With %RELEASENOTES<160>% you get the first 160 characters of the release notes. Does recognize word boundaries. %RELEASENOTES% (without char-value) displays the full release notes.</td><td>We are proud to present version 1.0.1 which comes with a whole lot of features. Most of them you won't even notice...<td></td></tr>
					<tr><td>%SCREENSHOTS%</td><td>The app's screenshots. Both, iPhone & iPad</td><td><i>[gallery with screenshots]</i></td></tr>
					</table>
