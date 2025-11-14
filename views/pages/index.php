<?php
/**
 * @var array $todos
 */
?>

<main>

	<?php foreach($todos as $todo): ?>
		<article class="todo">
			<label>
				<input type="checkbox" <?= ($todo['completed']) ? 'checked' : ''; ?> >
				<?= $todo['title']; ?>
			</label>
		</article>
	<?php endforeach; ?>

	<form action="/" method="post">
		<input type="text" placeholder="What u do?">
		<button type="submit">Save</button>
	</form>
</main>
