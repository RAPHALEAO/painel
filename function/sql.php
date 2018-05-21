<?php

$sqlPL = "SELECT id, user, host, db, command, time, state, info
FROM information_schema.processlist
WHERE command <> 'sleep'";

$sqlEL = "SELECT event_name, event_schema, last_executed, status 
        FROM information_schema.events
        WHERE event_schema = 'db-imatec'
        ORDER BY 3 DESC, 2 DESC;";

$sqlES = "SHOW VARIABLES WHERE VARIABLE_NAME = 'event_scheduler'";

$sqlSi = "SHOW SLAVE STATUS";