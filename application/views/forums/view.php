<?php if (isset($forum)): ?>
	<div class="start_forum">
		<h1 class="forum_title"><?php echo $forum['title'] ?></h1>
		<h3 class="username"><?php echo $forum['creator']?></h3>
		<p class="datetime"><?php echo $forum['create_date_time']?></p>
		<p class="description"><?php echo $forum['description']?></p>
	</div>

<?php endif; ?>

<?php if (isset($comments)): ?>
	<?php foreach ($comments as $row): ?>
		<div class="comment">
			<h3 class="username"><?php echo $row['username'] ?></h3>
			<p class="datetime"><?php echo $row['date_time_reaction'] ?></p>
			<p class="description"><?php echo $row['description'] ?></p>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

<div class="comment-form">
	<?php echo form_open('forums/view/'. (isset($forum) ? $forum["id"] : "") ) ?>

		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="username">Gebruiker</label>
			<?php if (isset($forum)): ?>
				<input type="hidden" name="forum_id" value="<?php echo $forum['id'] ?>"/> 
			<?php endif; ?>	
			<input class="form-control" name="username" type="text" value="<?php echo $_SESSION['username'];?>" readonly />
		</div>
		<div class="form-group">
			<label for="date_time_reaction">Datum en tijd</label>
			<input class="form-control" name="date_time_reaction" type="datetime" value="<?php echo date('m/d/y H:i:s');?>" readonly/>
		</div>
		<div class="form-group">
			<label for="description">Commentaar</label>
			<textarea class="form-control" name="description" type="text" rows="5"></textarea>
		</div>
		<input type="submit" name="submit" value="Plaats reactie" />
	</form>
</div>