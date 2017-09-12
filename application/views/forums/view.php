<?php if (isset($forum)): ?>

	<h1><?php echo $forum['title'] ?></h1>
	<h3><?php echo $forum['creator']?></h3>
	<p><?php echo $forum['create_date_time']?></p>
	<p><?php echo $forum['description']?></p>

<?php endif; ?>

<?php if (isset($comments)): ?>
	<?php foreach ($comments as $row): ?>
		<h3><?php echo $row['username'] ?></h3>
		<p><?php echo $row['date_time_reaction'] ?></p>
		<p><?php echo $row['description'] ?></p>
	<?php endforeach; ?>
<?php endif; ?>

	<?php echo form_open('forums/view/'. (isset($forum) ? $forum["id"] : "") ) ?>

		<?php echo validation_errors(); ?>

		<label for="username">Gebruiker</label>
		<?php if (isset($forum)): ?>
			<input type="hidden" name="forum_id" value="<?php echo $forum['id'] ?>"/> 
		<?php endif; ?>	
		<input name="username" type="text" value="<?php echo $_SESSION['username'];?>" readonly />
		<label for="date_time_reaction">Datum en tijd</label>
		<input name="date_time_reaction" type="datetime" value="<?php echo date('m/d/y H:i:s');?>" readonly/>
		<label for="description">Commentaar</label>
		<textarea name="description" type="text" rows="5"></textarea>
		<input type="submit" name="submit" value="Plaats reactie" />
	</form>