
<div class="wrap" style="max-width:950px !important;">

<?php
	$myDir = plugins_url('/', __FILE__);
?>

<h1><img src="<?php echo $myDir ?>img/wpappstoreconnect.png"> WP App Store Connect</h1>

<form name="WPAppStoreConnect" action="<?php echo $action_url ?>" method="post">

<input type="hidden" name="submitted" value="1" /> 

<?php
	wp_nonce_field('wp-app-store-connect', 'wp-app-store-connect-nonce');
?>

<ul id="wpasctabs">
    <li><a href="#tab1">Default Values</a></li>
    <li><a href="#tab2">App Data (Post)</a></li>
    <li><a href="#tab3">App Store Charts (Post)</a></li>
    <li><a href="#tab4">App Store Charts (Widget)</a></li>
</ul>

<ul id="wpasctabscontent" style="margin-top:-20px;">
    <li id="tab1"><div class="wpasctabssubli">
		
		<?php require_once("lib/admin_default_values.php"); ?>
		
		</div></li>
    
    <li id="tab2"><div class="wpasctabssubli">

		<?php require_once("lib/admin_app_data.php"); ?>
		
		</div></li>
    
    <li id="tab3"><div class="wpasctabssubli">

		<?php require_once("lib/admin_charts_post.php"); ?>
		
		</div></li>
    
    <li id="tab4"><div class="wpasctabssubli">

		<?php require_once("lib/admin_charts_widget.php"); ?>
		
		</div></li>

</ul>

</form>


			<table>
			<tr>
			<td>If you like this plugin, please donate to ensure it's further development...</td>
			<td>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="H849NNDJ5R5JS">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			</td>
			</tr>
			<tr>
			<td>... or you might want to put up a link to this iOS related website:</td>
			<td>
			<a href="http://www.appdamit.de" target="_blank">http://www.appdamit.de</a><br>
			<a href="http://appdamit.de/top-app/" target="_blank">http://appdamit.de/top-app/</a><br>
			<a href="http://appdamit.de/top-cydia-apps/" target="_blank">http://appdamit.de/top-cydia-apps/</a><br>
			<a href="http://appdamit.de/category/iphone-apps/" target="_blank">http://appdamit.de/category/iphone-apps/</a><br>
			<a href="http://appdamit.de/category/ipad-apps/" target="_blank">http://appdamit.de/category/ipad-apps/</a>
			</td>
			</tr>
			</table>

			<h2>Support: <a href="mailto:mail@softcontent.eu">Email</a></h2>
			
			<p>(c) Kai Fenner - <a href="http://www.softcontent.eu/wp-app-store-connect.html">WP App Store Connect Support Site</a> | <a href="http://appdamit.de/wp-app-store-connect-templates/" target="_blank">Plugin's HTML templates (code & output)</a></p>
			
</div>