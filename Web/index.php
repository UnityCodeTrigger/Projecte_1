<?php

$currentView = Router::GetView($_SERVER['REQUEST_URI']);
Router::GetPage($currentView[0],$currentView[1]);

?>
