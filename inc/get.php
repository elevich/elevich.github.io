<?php if (isset($message)) : ?>
<div class="alert alert-success">
	<?= $message ?>
</div>
<?php endif ?>

<form action="index.php" method="post">
	<h2 class="major">Contact</h2>
	<!--Icons-->
	<ul class="icons">
		<li>
			<a href="https://www.linkedin.com/in/eli-levich/" class="icon brands fa-linkedin"></a>
		</li>
		<li>
			<a href="https://www.facebook.com/eli.levich/" class="icon brands fa-facebook-f"></a>
		</li>
		<li>
			<a href="https://github.com/elevich" class="icon brands fa-github"></a>
		</li>
	</ul>

	<div>
		<label for="name">Name:</label>
		<input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Full name" />
		<small>
			<?= $errors['name'] ?? '' ?>
		</small>
	</div>

	<div>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email address" />
		<small>
			<?= $errors['email'] ?? '' ?>
		</small>
	</div>

	<div>
		<label for="subject">Subject:</label>
		<input type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Enter a subject" />
		<small>
			<?= $errors['subject'] ?? '' ?>
		</small>
	</div>

	<div>
		<label for="message">Message:</label>
		<textarea id="message" name="message" rows="5">
			<?= $inputs['message'] ?? '' ?>
		</textarea>
		<small>
			<?= $errors['message'] ?? '' ?>
		</small>
	</div>

	<label for="nickname" aria-hidden="true" class="user-cannot-see">
		Nickname
		<input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off" />
	</label>

	<button type="submit">Send Message</button>
</form>