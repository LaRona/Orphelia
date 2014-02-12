<?php
//
// PHASE: BOOTSTRAP
//
define('ORPHELIA_INSTALL_PATH', dirname(__FILE__));
define('ORPHELIA_SITE_PATH', ORPHELIA_INSTALL_PATH . '/site');

require(ORPHELIA_INSTALL_PATH.'/src/COrphelia/bootstrap.php');

$lia = COrphelia::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$lia->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//

$lia->ThemeEngineRender();

