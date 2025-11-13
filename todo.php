<?php
require_once __DIR__ . '/commands/add.php';
require_once __DIR__ . '/commands/list.php';
require_once __DIR__ . '/commands/done.php';
require_once __DIR__ . '/commands/undone.php';
require_once __DIR__ . '/commands/remove.php';
// php todo.php list
// php todo.php list 2022-10-12
// php todo.php list yesterday
// php todo.php add "wake up"
// php todo.php add "Drink coffee"
// php todo.php done 1 2
// php todo.php undone 1 2
// php todo.php remove 2 (rm)



function main(array $arguments): void
{
	array_shift($arguments);
	$command = array_shift($arguments);
	switch ($command)
	{
		case 'list':
			listCommand($arguments);
			break;
		case 'add':
			addCommand($arguments);
			break;
		case 'done':
			doneCommand($arguments);
			break;
		case 'undone':
			undoneCommand($arguments);
			break;
		case 'remove' or 'rm':
			removeCommand($arguments);
			break;
		default:
			echo 'Unknown command';
			exit(1);
	}
	exit(0);

}









main($argv);