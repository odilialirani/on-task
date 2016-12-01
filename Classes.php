<?php
	class User {
		private $name;			// User's name (String)
		private $email;			// User's email (String)

		function __construct($name,$email) {
			$this->name = $name;
			$this->email = $email;
		}

		function updateUserDB() {
			// TODO: Update DB for changed values
		}
	}

	class Checkpoint extends Task {
		private $name;			// Checkpoint name (String)
		private $completed;		// Completion (Boolean)
		private $user;			// Person in charge (User)

		function __construct($name, $user) {
			$this->name = $name;
			$this->completed = false;
			$this->user = $user;
		}

		function completed() {
			$this->completed = true;
			updateTaskDB();
		}

		function notComplete() {
			$this->completed = false;
			updateTaskDB();
		}

		function getCheckpointName() {
			return $this->name;
		}

		function getCheckpointStatus() {
			return $this->completed;
		}

		function getUser() {
			return $this->user;
		}

		function updateTaskDB() {
			// TODO: Update DB for changed values;
		}
	}

	class Task {
		private $name;			// Task name (String)
		private $deadline;		// Deadline date (DateTime)
		private $checkpoints;	// Checkpoints (Array of Checkpoint)
		private $status;		// Completion (Percentage)
		private $users;			// Person(s) in charge (Array of User)
	
		function __construct($name, $deadline, $checkpoints, $users) {
			$this->name = $name;
			$this->deadline = $deadline;
			$this->checkpoints = $checkpoints;
		}

		function getStatus() {
			// TODO: Recalculate percentage from $checkpoints[]->status
			$completed = 0;
			$total = 0;
			foreach ($checkpoints as $cp) {
				$total = $total + 1;
				if ($cp->getCheckpointStatus()) {
					$completed = $completed + 1;
				}
			}
			$this->status = intdiv($completed, $total) * 100;
			return $this->status;
		}

		function updateTaskDB() {
			$this->getStatus();
			// TODO: Update DB for changed values
		}
	}
?>