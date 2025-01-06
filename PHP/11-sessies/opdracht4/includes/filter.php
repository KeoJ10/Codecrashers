<form action="<?=$_SERVER['PHP_SELF'];?>" method="GET">
			<label for="showProducts">hoeveelheid:</label>
		<select name="showProducts" id="ShowProducts">
			<option value="2">2</option>
			<option value="4">4</option>
			<option value="6">6</option>
			<option value="8">8</option>
		</select>
		<input type="radio" id="oplopend" name="oplopend" value="oplopend">
			<label for="oplopend">oplopend a-z</label>
			<input type="radio" id="aflopend" name="aflopend" value="aflopend">
			<label for="aflopend">aflopend z-a</label>
			<input type="submit" name="submit" value="opnieuw tonen?">
		</form>