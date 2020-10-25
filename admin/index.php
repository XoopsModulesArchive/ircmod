<?php

require_once dirname(__DIR__, 3) . '/include/cp_header.php';
header('Location: ' . XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $xoopsModule->getVar('mid'));
