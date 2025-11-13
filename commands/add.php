<?php
function addCommand(array $arguments)
{
	$title = array_shift($arguments);
	$fileName = date('Y-m-d') . '.txt';
	$filePath = __DIR__ . '/data/' . $fileName;
	$todo = [
		'id' => uniqid(),
		'title' => $title,
		'completed' => false,
		'created_at' =>time(),
		'updated_at' =>null,
		'completed_at' =>null,
	];

	if (file_exists($filePath))
	{
		$content = file_get_contents($filePath);
		$todos = unserialize($content,
			['allowed_classes' => false,
			]);
		$todos[] = $todo;
		file_put_contents($filePath, serialize($todos));
	}
	else
	{
		$todos = [$todo];
		file_put_contents($filePath, serialize($todos));
	}

}
