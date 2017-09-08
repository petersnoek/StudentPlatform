<?php if (isset($forum)): ?>

	<h1><?php echo $forum['title'] ?></h1>
	<h3><?php echo $forum['creator']?></h3>
	<p><?php echo $forum['create_date_time']?></p>
	</br>
	<p><?php echo $forum['description']?></p>

<?php endif; ?>

	<?php echo form_open('forums/view'); ?>
		<label for="username">Gebruiker</label>
		<input name="username" type="text" value="<?php echo $_SESSION['username'];?>" readonly />
		<label for="Date_time">Datum en tijd</label>
		<input name="Date_time" type="datetime" value="" />
		<label for="comment">Commentaar</label>
		<textarea name="comment" type="text" rows="5"></textarea>
		<input type="submit" name="submit" value="Plaats reactie" />
	</form>