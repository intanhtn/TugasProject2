<?php

namespace App\ContohBootcamp\Services;

use App\ContohBootcamp\Repositories\TaskRepository;

class TaskService {
	private TaskRepository $taskRepository;

	public function __construct() {
		$this->taskRepository = new TaskRepository();
	}

	/**
	 * NOTE: untuk mengambil semua tasks di collection task
	 */
	public function getTasks()
	{
		$tasks = $this->taskRepository->getAll();
		return $tasks;
	}

	/**
	 * NOTE: menambahkan task
	 */
	public function addTask(array $data)
	{
		$taskId = $this->taskRepository->create($data);
		return $taskId;
	}

	/**
	 * NOTE: UNTUK mengambil data task
	 */
	public function getById(string $taskId)
	{
		$task = $this->taskRepository->getById($taskId);
		return $task;
	}

	/**
	 * NOTE: untuk update task
	 */
	public function updateTask(array $editTask, array $formData)
	{
		if(isset($formData['title']))
		{
			$editTask['title'] = $formData['title'];
		}

		if(isset($formData['description']))
		{
			$editTask['description'] = $formData['description'];
		}

		$id = $this->taskRepository->save( $editTask);
		return $id;
	}



	//tugas project 2
	public function deleteTasks()
	{
		$tasks = $this->taskRepository->deleteTask();
		return $tasks;
	}
	public function assignTasks()
	{
		$tasks = $this->taskRepository->assignTasks();
		return $tasks;
	}
	public function unassignTasks()
	{
		$tasks = $this->taskRepository->unassignTasks();
		return $tasks;
	}
	public function addsubTasks()
	{
		$tasks = $this->taskRepository->addsubTasks();
		return $tasks;
	}
	public function deletesubTasks()
	{
		$tasks = $this->taskRepository->deletesubTasks();
		return $tasks;
	}
}