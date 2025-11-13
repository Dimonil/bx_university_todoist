<?php

function getTodos(?int $time = null) : array
{
	$filePath = getRepositoryPath($time);

	if(!file_exists($filePath))
	{
		return [];
	}

	$contents = file_get_contents($filePath);

	$todos = unserialize($contents,
		['allowed_classes' => false,
		]);

	return is_array($todos) ? $todos : [];
}

/**
 * @param int|null $time
 * @return string
 */
function getRepositoryPath(?int $time): string
{
	$time = $time ?? time();

	$fileName = date('Y-m-d', $time) . '.txt';
	$filePath = ROOT . '/data/' . $fileName;
	return $filePath;
}

function storeTodos(array $todos, ?int $time = null)
{
	$filePath = getRepositoryPath($time);

	file_put_contents($filePath, serialize($todos));
}

function getTodosOrFail(?int $time = null) : array
{
	$todos = getTodos($time);
	if(empty($todos))
	{
		echo 'Nothing to do here' . PHP_EOL ;
		exit();
	}
	return $todos;
}
