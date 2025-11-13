<?php
function listCommand(array $arguments)
{
	$fileName = date('Y-m-d') . '.txt';
	$filePath = __DIR__ . '/data/' . $fileName;
	if(!file_exists($filePath))
	{
		echo 'Nothing to do here';
		return;
	}
	$contents = file_get_contents($filePath);
	$todos = unserialize($contents,
		['allowed_classes' => false,
		]);

	if(empty($todos))
	{
		echo 'Nothing to do here';
		return;
	}

	foreach($todos as $index => $todo){
		echo sprintf(
			"%s. [%s] %s \n",
			($index + 1),
			$todo['completed'] ? 'x' : ' ',
			$todo['title']);
	}

}