<?php
    global $tdata; //bad idea

    $tdata = $data;

    function make_list($parent) {
        global $tdata;
        echo '<ol>'; // Start an ordered list.
        foreach ($parent as $task_id => $todo) {
            echo "<li>$todo";
            if (isset($tdata[$task_id])) {
                make_list($tdata[$task_id]);
            }

            echo '</li>';
        }

        echo '</ol>';
    }

    make_list($tdata[0]);

