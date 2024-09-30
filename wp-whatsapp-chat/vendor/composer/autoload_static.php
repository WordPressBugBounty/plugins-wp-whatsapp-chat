<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit889c7327f688fbdb1714055411c3cb90
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
        'eed58ea21003214096fa69247fda8497' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/V2/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuadLayers\\WP_Plugin_Table_Links\\' => 33,
            'QuadLayers\\WP_Plugin_Suggestions\\' => 33,
            'QuadLayers\\WP_Plugin_Install_Tab\\' => 33,
            'QuadLayers\\WP_Orm\\' => 18,
            'QuadLayers\\WP_Notice_Plugin_Required\\' => 37,
            'QuadLayers\\WP_Notice_Plugin_Promote\\' => 36,
            'QuadLayers\\WP_Dashboard_Widget_News\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuadLayers\\WP_Plugin_Table_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src',
        ),
        'QuadLayers\\WP_Plugin_Suggestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src',
        ),
        'QuadLayers\\WP_Plugin_Install_Tab\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src',
        ),
        'QuadLayers\\WP_Orm\\' => 
        array (
            0 => __DIR__ . '/..' . '/franmastromarino/wp-orm/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Required\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Promote\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src',
        ),
        'QuadLayers\\WP_Dashboard_Widget_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Script_Data' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'QuadLayers\\QLWAPP\\Api\\Admin_Menu_Routes_Library' => __DIR__ . '/../..' . '/lib/api/class-admin-menu-routes-library.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Base' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/class-base.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Box\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/box/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Box\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/box/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Button\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/button/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Button\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/button/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Contacts\\Create' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/contacts/class-create.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Contacts\\Delete' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/contacts/class-delete.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Contacts\\Edit' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/contacts/class-edit.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Contacts\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/contacts/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Display\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/display/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Display\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/display/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Scheme\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/scheme/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Scheme\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/scheme/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Settings\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/settings/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\Settings\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/settings/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\WooCommerce\\Get' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/woocommerce/class-get.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Admin_Menu\\WooCommerce\\Post' => __DIR__ . '/../..' . '/lib/api/rest/admin-menu/woocommerce/class-post.php',
        'QuadLayers\\QLWAPP\\Api\\Rest\\Route' => __DIR__ . '/../..' . '/lib/api/rest/interface-route.php',
        'QuadLayers\\QLWAPP\\Controllers\\Admin_Menu' => __DIR__ . '/../..' . '/lib/controllers/class-admin-menu.php',
        'QuadLayers\\QLWAPP\\Controllers\\Admin_Menu_WooCommerce' => __DIR__ . '/../..' . '/lib/controllers/class-admin-menu-woocommerce.php',
        'QuadLayers\\QLWAPP\\Controllers\\Components' => __DIR__ . '/../..' . '/lib/controllers/class-components.php',
        'QuadLayers\\QLWAPP\\Controllers\\Helpers' => __DIR__ . '/../..' . '/lib/controllers/class-helpers.php',
        'QuadLayers\\QLWAPP\\Entities\\Box' => __DIR__ . '/../..' . '/lib/entities/class-box.php',
        'QuadLayers\\QLWAPP\\Entities\\Button' => __DIR__ . '/../..' . '/lib/entities/class-button.php',
        'QuadLayers\\QLWAPP\\Entities\\Contact' => __DIR__ . '/../..' . '/lib/entities/class-contact.php',
        'QuadLayers\\QLWAPP\\Entities\\Display' => __DIR__ . '/../..' . '/lib/entities/class-display.php',
        'QuadLayers\\QLWAPP\\Entities\\Scheme' => __DIR__ . '/../..' . '/lib/entities/class-scheme.php',
        'QuadLayers\\QLWAPP\\Entities\\Settings' => __DIR__ . '/../..' . '/lib/entities/class-settings.php',
        'QuadLayers\\QLWAPP\\Entities\\WooCommerce' => __DIR__ . '/../..' . '/lib/entities/class-woocommerce.php',
        'QuadLayers\\QLWAPP\\Frontend' => __DIR__ . '/../..' . '/lib/class-frontend.php',
        'QuadLayers\\QLWAPP\\Helpers' => __DIR__ . '/../..' . '/lib/class-helpers.php',
        'QuadLayers\\QLWAPP\\Models\\Box' => __DIR__ . '/../..' . '/lib/models/class-box.php',
        'QuadLayers\\QLWAPP\\Models\\Button' => __DIR__ . '/../..' . '/lib/models/class-button.php',
        'QuadLayers\\QLWAPP\\Models\\Contacts' => __DIR__ . '/../..' . '/lib/models/class-contacts.php',
        'QuadLayers\\QLWAPP\\Models\\Display' => __DIR__ . '/../..' . '/lib/models/class-display.php',
        'QuadLayers\\QLWAPP\\Models\\Scheme' => __DIR__ . '/../..' . '/lib/models/class-scheme.php',
        'QuadLayers\\QLWAPP\\Models\\Settings' => __DIR__ . '/../..' . '/lib/models/class-settings.php',
        'QuadLayers\\QLWAPP\\Models\\WooCommerce' => __DIR__ . '/../..' . '/lib/models/class-woocommerce.php',
        'QuadLayers\\QLWAPP\\Plugin' => __DIR__ . '/../..' . '/lib/class-plugin.php',
        'QuadLayers\\QLWAPP\\Services\\Entity_Options' => __DIR__ . '/../..' . '/lib/services/class-entity-options.php',
        'QuadLayers\\QLWAPP\\Services\\Entity_Visibility' => __DIR__ . '/../..' . '/lib/services/class-entity-visibility.php',
        'QuadLayers\\QLWAPP\\WooCommerce' => __DIR__ . '/../..' . '/lib/class-woocommerce.php',
        'QuadLayers\\WP_Dashboard_Widget_News\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
        'QuadLayers\\WP_Orm\\Builder\\CollectionRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/CollectionRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleVirtualRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleVirtualRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Entity\\CollectionEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/CollectionEntity.php',
        'QuadLayers\\WP_Orm\\Entity\\EntityInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/EntityInterface.php',
        'QuadLayers\\WP_Orm\\Entity\\SingleEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/SingleEntity.php',
        'QuadLayers\\WP_Orm\\Factory\\AbstractFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/AbstractFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\CollectionFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/CollectionFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\SingleFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/SingleFactory.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapperInterface.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapperInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepositoryInterface.php',
        'QuadLayers\\WP_Plugin_Install_Tab\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Page' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Table' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
        'QuadLayers\\WP_Plugin_Table_Links\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit889c7327f688fbdb1714055411c3cb90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit889c7327f688fbdb1714055411c3cb90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit889c7327f688fbdb1714055411c3cb90::$classMap;

        }, null, ClassLoader::class);
    }
}
