<?php
function undoneCommand(array $arguments)
{
	$todos = getTodosOrFail();

	$todos = mapTodos($todos, $arguments, function($todo){
		return array_merge($todo,[
			'completed' => false,
			'update_at' => time(),
			'completed_at' => null,
		]);
	});

	storeTodos($todos);
}