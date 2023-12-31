<?php

/**
 * Version Pro Base functionalities
 *
 * Name: Duplicator PRO base
 * Version: 1
 * Author: Snap Creek
 * Author URI: http://snapcreek.com
 *
 * @package Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 *
 */

namespace Duplicator\Addons\ProBase;

use DUP_PRO_U;
use DUP_PRO_Global_Entity;
use Duplicator\Core\Controllers\ControllersManager;
use Duplicator\Addons\ProBase\License\License;
use Duplicator\Controllers\SettingsPageController;

class LicensingController
{
    const L2_SLUG_LICENSING = 'licensing';

    /**
     * License controller init
     *
     * @return void
     */
    public static function init()
    {
        add_filter('duplicator_sub_menu_items_' . ControllersManager::SETTINGS_SUBMENU_SLUG, array(__CLASS__, 'licenseSubMenu'));
        add_filter('duplicator_render_page_content_' . ControllersManager::SETTINGS_SUBMENU_SLUG, array(__CLASS__, 'renderLicenseContent'));
    }

    /**
     * Add license sub menu page
     *
     * @param array $subMenus sub menus
     *
     * @return array
     */
    public static function licenseSubMenu($subMenus)
    {
        $subMenus[] = SettingsPageController::generateSubMenuItem(self::L2_SLUG_LICENSING, __('Licensing', 'duplicator-pro'), '', true, 100);
        return $subMenus;
    }

    /**
     * Render license page
     *
     * @param string[] $currentLevelSlugs current page/tables slugs
     *
     * @return void
     */
    public static function renderLicenseContent($currentLevelSlugs)
    {
        switch ($currentLevelSlugs[1]) {
            case self::L2_SLUG_LICENSING:
                require ProBase::getAddonPath() . '/template/licensing.php';
                break;
        }
    }

    /**
     * License type viewer
     *
     * @return void
     */
    public static function displayLicenseInfo()
    {
        $license_type = License::getType();

        if ($license_type === License::TYPE_UNLICENSED) {
            echo sprintf('<b>%s</b>', DUP_PRO_U::__("Unlicensed"));
        } else {
            $global        = DUP_PRO_Global_Entity::get_instance();
            $license_limit = $global->license_limit;
            $license_data  = License::getLicenseData(false);
            $license_key   = License::getLicenseKey();

            if (License::isValidOvrKey($license_key)) {
                $license_key = License::getStandardKeyFromOvrKey($license_key);
            }

            switch ($license_type) {
                case License::TYPE_BUSINESS_GOLD:
                $license_text        = DUP_PRO_U::__('Gold');
                $supports_powertools = true;
                $supports_mu_plus    = true;
                $license_limit       = 'Unlimited';
                break;
            }

            echo sprintf('<b>%s</b>', $license_text);

            $pt  = $supports_powertools ? '<i class="far fa-check-circle"></i>  ' : '<i class="far fa-circle"></i>  ';
            $mup = $supports_mu_plus ? '<i class="far fa-check-circle"></i>  ' : '<i class="far fa-circle"></i>  ';

            $txt_lic_hdr = DUP_PRO_U::__('Site Licenses');
            $txt_lic_msg = DUP_PRO_U::__(
                'Indicates the number of sites the plugin can be active on at any one time. ' .
                'At any point you may deactivate/uninstall the plugin to free up the license and use the plugin elsewhere if needed.'
            );
            $txt_pt_hdr  = DUP_PRO_U::__('Powertools');
            $txt_pt_msg  = DUP_PRO_U::__('Enhanced features that greatly improve the productivity of serious users. Include hourly schedules, ' .
                                                'installer branding, salt & key replacement, priority support and more.');
            $txt_mup_hdr = DUP_PRO_U::__('Multisite Plus+');
            $txt_mup_msg = DUP_PRO_U::__(
                'Adds the ability to install a subsite as a standalone site, ' .
                'insert a standalone site into a multisite, or insert a subsite from the same/different multisite into a multisite.'
            );

            $lic_limit  = 'unlimited';
            $site_count = 1;

            echo '<div class="dup-license-type-info">';
            echo "<i class='far fa-check-circle'></i>  {$txt_lic_hdr}: {$site_count} of {$lic_limit} " .
                "<i class='fa fa-question-circle  fa-sm' data-tooltip-title='{$txt_lic_hdr}' data-tooltip='{$txt_lic_msg}'></i><br/>";
            echo $pt;
            echo "{$txt_pt_hdr} <i class='fa fa-question-circle fa-sm' data-tooltip-title='{$txt_pt_hdr}' data-tooltip='{$txt_pt_msg}'></i><br/>";
            echo $mup;
            echo "{$txt_mup_hdr} <i class='fa fa-question-circle fa-sm' data-tooltip-title='{$txt_mup_hdr}' data-tooltip='{$txt_mup_msg}'></i><br/>";
            echo '</div>';
        }
    }
}