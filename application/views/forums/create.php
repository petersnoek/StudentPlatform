<h1>Forum aanmaken</h1>

<?php echo form_open('forums/create'); ?>
	<label for="title">Titel</label>
	<input type="text" name="title"/>
	<label for="description">Beschrijving</label>
	<textarea type="text" name="description"></textarea>
	<label for="creator">Gebruiker</label>
	<input type="text" name="creator" value="<?php echo $_SESSION['username'];?>" readonly/>
	<label for="date_time">Datum en tijd</label>
	<input type="datetime-local" name="date_time"/>
	<input type="submit" name="submit" value="Maak een nieuw forum aan" />
</form>