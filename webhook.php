<?php
    $contents = file_get_contents('/home/sutsiki/scripts/deploy.sh');
    echo shell_exec($contents);
    // echo shell_exec('sh /home/sutsiki/Scripts/deploy.sh');