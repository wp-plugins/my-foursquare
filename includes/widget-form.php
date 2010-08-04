<?php
$option = get_option("foursquare_option");
$title = isset($option['title']) ? $option['title'] : "My Foursquare";
?>
<table>
	<!-- 
	<tr>
		<td>
			Title : 
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="foursquare[title]" value="<?php echo $title;?>" class="widefat">
		</td>
	</tr>
	-->
	<tr>
		<td>
			<br><b>Foursquare login information </b><br> 
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			Foursquare Username : 
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="foursquare[user]" value="<?php echo $option['user'];?>" class="widefat">
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			Foursquare Password : 
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="foursquare[pass]" value="<?php echo $option['pass'];?>" class="widefat">
		</td>
	</tr>

	<tr><td>&nbsp;</td></tr>

	<tr id="gmapid">
		<td>Enter Google Map Key : <br>
			<input name='foursquare[gmap_key]' type='text' value="<?php echo $option['gmap_key'];?>"  class="widefat"/>
		</td>
	</tr>

	<tr><td>&nbsp;</td></tr>

	<tr>
		<td>
			Display Options : 
		</td>
	</tr>
	<tr>
		<td>
			<!-- <input type="checkbox" name="foursquare[hide_title]" value="1" <?php if($option['hide_title'] == 1) echo "checked='checked'";?>>Hide the title<br> -->
			<input type="checkbox" name="foursquare[badge]" value="1" <?php if($option['badge'] == 1) echo "checked='checked'";?> onclick="">Badges<br>
			<div id='badge_wide_div' style='margin-left:15px;'>
				<input type='radio' name='foursquare[no_badges_wide]' value='4' checked='checked'><label>4 Badges Wide</label><br>
				<input type='radio' name='foursquare[no_badges_wide]' value='3' <?php if($option['no_badges_wide'] == 3) echo "checked='checked'";?>><label>3 Badges Wide</label>
			</div>
			<input type="checkbox" name="foursquare[mayor]" value="1" <?php if($option['mayor'] == 1) echo "checked='checked'";?>>Mayorships<br>
			<input type="checkbox" name="foursquare[location]" value="1" <?php if($option['location'] == 1) echo "checked='checked'";?>>Last Checkin<br>
			<input type="checkbox" name="foursquare[gmap]" value="1" <?php if($option['gmap'] == 1) echo "checked='checked'";?>>Last Checkin on a Map<br>
		</td>
	</tr>
	<input type="hidden" name="choice" value="save_foursquare_option">
</table>
<style type="text/css">
	.widefat {
		width:200px;
	}
</style>
<script type="text/javascript">
	function show_text(id) {
		alert(id.value);
		var check = (id.checked) ? '' : 'none';
		if(id.value==1) {
			if(document.getElementById('badge_wide_div')) {
				alert(document.getElementById('badge_wide_div').style.display);
				document.getElementById('badge_wide_div').style.display = check;
				alert(document.getElementById('badge_wide_div').style.display);
			}
		}
	}

</script>
