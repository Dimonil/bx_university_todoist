<?php
function removeCommand(array $arguments)
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
	$now = time();
	foreach($arguments as $num)
	{
		$index = (int)$num - 1;
		if(!isset($todos[$index])) {
			continue;
		}
		unset($todos[$index]);
	}

	$todos = array_values($todos);
	file_put_contents($filePath, serialize($todos));
}
