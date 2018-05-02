<?php
class Task
{

    public function getTasks()
    {
        // Connect to the database:
        $dbc = mysqli_connect('localhost', 'root', '', 'sem7');

        $q = 'SELECT task_id, parent_id, task FROM tasks WHERE date_completed IS NULL ORDER BY parent_id, date_added ASC';
        $r = mysqli_query($dbc, $q);

        $tasks = array();

        while (list($task_id, $parent_id, $task) = mysqli_fetch_array($r, MYSQLI_NUM)) {

            $tasks[$parent_id][$task_id] = $task;

        }

        return $tasks;

    }

}