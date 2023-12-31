<?php

/**
 *
 * @package templates/default
 *
 */

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

use Duplicator\Installer\Core\Params\PrmMng;

$paramsManager = PrmMng::getInstance();
$title         = DUPX_MU::newSiteIsMultisite() ? 'Super Admin' : 'Admin';
?>
<div class="hdr-sub3">Existing <?php echo $title; ?> Password Reset</div>
<div class="dupx-opts">
    <?php
    $paramsManager->getHtmlFormParam(PrmMng::PARAM_USERS_PWD_RESET);
    ?>
</div>
