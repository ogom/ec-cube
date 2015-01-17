<?php

namespace Eccube;

class RouteMap
{
    public function getMap() {
        return array(
// api
            'api/customer/[:customer_id]' => array(
                'method' => 'GET|DELETE',
                'class' => '\\customer\\Index',
                'action' => 'process',
            ),
            'api/customer' => array(
                'method' => 'POST|PUT',
                'class' => '\\customer\\Index',
                'action' => 'process',
            ),

// sample
            'products/detail/[:product_id]/[:category_id]' => array(
                'class' => '\\Products\\Detail',
                'action' => 'process',
                'template' => 'produdcts_detail',
            ),
            'products/detail/[:product_id]/' => array(
                'class' => '\\Products\\Detail',
                'action' => 'process',
                'template' => 'produdcts_detail',
            ),
// front
            'index' => array(
                'method' => 'GET|POST',
                'class' => '\\Index',
                'action' => 'process',
                'template' => 'index',
            ),
            'abouts' => array(
                'class' => '\\Abouts\\Index',
                'action' => 'process',
                'template' => 'abouts',
            ),
            'cart/index' => array(
                'class' => '\\Cart\\Index',
                'action' => 'process',
                'template' => 'cart',
            ),
            'contact' => array(
                'class' => '\\Contact\\Index',
                'action' => 'process',
                'template' => 'contact',
            ),
            'contact/complete' => array(
                'class' => '\\Contact\\Complete',
                'action' => 'process',
                'template' => 'comtact_complete',
            ),
            'entry' => array(
                'class' => '\\Entry\\Index',
                'action' => 'process',
                'template' => 'entry',
            ),
            'entry/kiyaku' => array(
                'class' => '\\Entry\\Kiyaku',
                'action' => 'process',
                'template' => 'entry_kiyaku',
            ),
            'entry/email_mobile' => array(
                'class' => '\\Entry\\EmailMobile',
                'action' => 'process',
                'template' => 'email_mobile',
            ),
            'entry/complete' => array(
                'class' => '\\Entry\\Complete',
                'action' => 'process',
                'template' => 'entry_complete',
            ),
            'error' => array(
                'class' => '\\Error\\Index',
                'action' => 'process',
                'template' => 'error',
            ),
            'error/disp_error' => array(
                'class' => '\\Error\\DispError',
                'action' => 'process',
                'template' => 'disp_error',
            ),
            'error/system_error' => array(
                'class' => '\\Error\\SystemError',
                'action' => 'process',
                'template' => 'system_error',
            ),
            'forgot' => array(
                'class' => '\\Forgot\\Index',
                'action' => 'process',
                'template' => 'forgot',
            ),
            'frontparts/login_check' => array(
                'class' => '\\Frontparts\\LoginCheck',
                'action' => 'process',
                'template' => 'frontparts_login_check',
            ),
            'guide' => array(
                'class' => '\\Guide\\Index',
                'action' => 'process',
                'template' => 'guide',
            ),
            'guide/about' => array(
                'class' => '\\Guide\\About',
                'action' => 'process',
                'template' => 'guide_about',
            ),
            'guide/charge' => array(
                'class' => '\\Guide\\Charge',
                'action' => 'process',
                'template' => 'guide_charge',
            ),
            'guide/kiyaku' => array(
                'class' => '\\Guide\\Kiyaku',
                'action' => 'process',
                'template' => 'guide_kiyaku',
            ),
            'guide/privacy' => array(
                'class' => '\\Guide\\Privacy',
                'action' => 'process',
                'template' => 'guide_privacy',
            ),
            'guide/usage' => array(
                'class' => '\\Guide\\Usage',
                'action' => 'process',
                'template' => 'guide_usage',
            ),
            'mypage' => array(
                'class' => '\\Mypage\\Index',
                'action' => 'process',
                'template' => 'mypage',
            ),
            'mypage/change' => array(
                'class' => '\\Mypage\\Change',
                'action' => 'process',
                'template' => 'mypage_charge',
            ),
            'mypage/change_complete' => array(
                'class' => '\\Mypage\\ChangeComplete',
                'action' => 'process',
                'template' => 'mypage_change_complete',
            ),
            'mypage/delivery' => array(
                'class' => '\\Mypage\\Delivery',
                'action' => 'process',
                'template' => 'mypage_delivery',
            ),
            'mypage/delivery_addr' => array(
                'class' => '\\Mypage\\DeliveryAddr',
                'action' => 'process',
                'template' => 'mypage_delivery_addr',
            ),
            'mypage/download' => array(
                'class' => '\\Mypage\\Download',
                'action' => 'process',
                'template' => 'mypage_download',
            ),
            'mypage/favorite' => array(
                'class' => '\\Mypage\\Favorite',
                'action' => 'process',
                'template' => 'mypage_favorite',
            ),
            'mypage/history' => array(
                'class' => '\\Mypage\\History',
                'action' => 'process',
                'template' => 'mypage_history',
            ),
            'mypage/login' => array(
                'class' => '\\Mypage\\Login',
                'action' => 'process',
                'template' => 'mypage_login',
            ),
            'mypage/mail_view' => array(
                'dir' => '',
                'class' => '\\Mypage\\MailView',
                'action' => 'process',
                'template' => 'mypage_mail_view',
            ),
            'mypage/order' => array(
                'class' => '\\Mypage\\Order',
                'action' => 'process',
                'template' => 'mypage_order',
            ),
            'mypage/refusal' => array(
                'class' => '\\Mypage\\Refusal',
                'action' => 'process',
                'template' => 'mypage_refusal',
            ),
            'mypage/refusal_complete' => array(
                'class' => '\\Mypage\\RefusalComplete',
                'action' => 'process',
                'template' => 'mypage_refusal_complete',
            ),
            'order' => array(
                'class' => '\\Order\\Index',
                'action' => 'process',
                'template' => 'order',
            ),
            'preview' => array(
                'class' => '\\Preview\\Index',
                'action' => 'process',
                'template' => 'preview',
            ),
            'products' => array(
                'class' => '\\Prodcuts\\Index',
                'action' => 'process',
                'template' => 'products',
            ),
            'products/category_list' => array(
                'class' => '\\Products\\CategoryList',
                'action' => 'process',
                'template' => 'products_category_list',
            ),
            'products/list' => array(
                'class' => '\\Products\\ProductsList',
                'action' => 'process',
                'template' => 'products_products_list',
            ),
            'products/detail' => array(
                'class' => '\\Products\\Detail',
                'action' => 'process',
                'template' => 'produdcts_detail',
            ),
            'proudcts/search' => array(
                'class' => '\\Products\\Search',
                'action' => 'process',
                'template' => 'proudcts_search',
            ),
            'regist' => array(
                'class' => '\\Regist\\Index',
                'action' => 'process',
                'template' => 'regist',
            ),
            'regist/complete' => array(
                'class' => '\\Regist\\Complete',
                'action' => 'process',
                'template' => 'regist_complete',
            ),
            'rss' => array(
                'class' => '\\Rss\\Index',
                'action' => 'process',
                'template' => 'rss',
            ),
            'rss/products' => array(
                'class' => '\\Rss\\Products',
                'action' => 'process',
                'template' => 'rss_products',
            ),
            'shopping/index' => array(
                'class' => '\\Shopping\\Index',
                'action' => 'process',
                'template' => 'shopping',
            ),
            'shopping/confirm' => array(
                'class' => '\\Shopping\\Confirm',
                'action' => 'process',
                'template' => 'shopping_confirm',
            ),
            'shopping/complete' => array(
                'class' => '\\Shopping\\Complete',
                'action' => 'process',
                'template' => 'shopping_complete',
            ),
            'shopping/deliv' => array(
                'class' => '\\Shopping\\Deliv',
                'action' => 'process',
                'template' => 'shopping_deliv',
            ),
            'shopping/load_payment_module' => array(
                'class' => '\\Shopping\\LoadPaymentModule',
                'action' => 'process',
                'template' => 'shopping_load_payment_module',
            ),
            'shopping/multiple' => array(
                'class' => '\\Shopping\\Multiple',
                'action' => 'process',
                'template' => 'shopping_multiple',
            ),
            'shopping/payment' => array(
                'class' => '\\Shopping\\Payment',
                'action' => 'process',
                'template' => 'shopping_payment',
            ),
            'unsupported' => array(
                'class' => '\\Unsupported\\Index',
                'action' => 'process',
                'template' => 'unsupported',
            ),
            'upgrade' => array(
                'class' => '\\Upgrade\\Index',
                'action' => 'process',
                'template' => 'upgrade',
            ),
            'upgrade/download' => array(
                'class' => '\\Upgrade\\Index',
                'action' => 'process',
                'template' => 'upgrade_download',
            ),
            'upgrade/products_list' => array(
                'class' => '\\Upgrade\\ProductsList',
                'action' => 'process',
                'template' => 'upgrade_products_list',
            ),
            'upgrade/site_check' => array(
                'class' => '\\Upgrade\\SiteCheck',
                'action' => 'process',
                'template' => 'upgrade_site_check',
            ),
            'input_zip' => array(
                'class' => 'InputZip',
                'action' => 'process',
                'template' => 'input_zip',
            ),
            'resize_image' => array(
                'class' => 'ResizeImage',
                'action' => 'process',
                'template' => 'resize_image',
            ),
            'sitemap' => array(
                'class' => 'Sitemap',
                'action' => 'process',
                'template' => 'sitemap',
            ),

// admin
            'admin/index' => array(
                'class' => '\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_index',
            ),
            'admin/home' => array(
                'class' => '\\Home',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_home',
            ),
            'admin/logout' => array(
                'class' => '\\Logout',
                'action' => 'action',
                'ssl' => true,
                'template' => 'admin_logout',
            ),
            'admin/basis/' => array(
                'class' => '\\Basis\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis',
            ),
            'admin/basis/delivery' => array(
                'class' => '\\Basis\\Delivery',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_delivery',
            ),
            'admin/basis/delivery_input' => array(
                'class' => '\\Basis\\DeliveryINput',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_delivery_input',
            ),
            'admin/basis/holiday' => array(
                'class' => '\\Basis\\Holiday',
                'action' => 'process',
                'ssl' => true,
                'template' => '',
            ),
            'admin/basis/kiyaku' => array(
                'class' => '\\Basis\\Kiyaku',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_kiyaku',
            ),
            'admin/basis/mail' => array(
                'class' => '\\Basis\\Mail',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_mail',
            ),
            'admin/basis/payment' => array(
                'class' => '\\Basis\\Payment',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_payment',
            ),
            'admin/basis/payment_input' => array(
                'class' => '\\Basis\\PaymentInput',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_payment_input',
            ),
            'admin/basis/point' => array(
                'class' => '\\Basis\\Point',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_point',
            ),
            'admin/basis/tax' => array(
                'class' => '\\Basis\\Tax',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_tax',
            ),
            'admin/basis/tradelaw' => array(
                'class' => '\\Basis\\Tradelaw',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_tradelaw',
            ),
            'admin/basis/zip_install' => array(
                'class' => '\\Basis\\ZipInstall',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_basis_zip_install',
            ),
            'admin/contents' => array(
                'class' => '\\Contents\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contents',
            ),
            'admin/contents/csv' => array(
                'class' => '\\Contents\\Csv',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contents_csv',
            ),
            'admin/contents/file_manager' => array(
                'class' => '\\Contents\\FileManager',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contents_file_manager',
            ),
            'admin/contents/file_view' => array(
                'class' => '\\Contents\\FileView',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contentes_file_view',
            ),
            'admin/contents/recommend' => array(
                'class' => '\\Contents\\Recommend',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contents_recommend',
            ),
            'admin/contents/recommend_search' => array(
                'class' => '\\Contents\\RecommendSearch',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_contents_recommend_search',
            ),
            'admin/customer/' => array(
                'class' => '\\Customer\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_customer',
            ),
            'admin/customer/edit' => array(
                'class' => '\\Customer\\Edit',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_customer_edit',
            ),
            'admin/customer/search_customer' => array(
                'class' => '\\Customer\\SearchCustomer',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_customer_search_customer',
            ),
            'admin/design/' => array(
                'class' => '\\Design\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin/design',
            ),
            'admin/design/bloc' => array(
                'class' => '\\Design\\Bloc',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_bloc',
            ),
            'admin/design/css' => array(
                'class' => '\\Design\\Css',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_css',
            ),
            'admin/design/header' => array(
                'class' => '\\Design\\Header',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_header',
            ),
            'admin/design/main_edit' => array(
                'class' => '\\Design\\MainEdit',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_main_edit',
            ),
            'admin/design/template' => array(
                'class' => '\\Design\\Template',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_template',
            ),
            'admin/design/up_down' => array(
                'class' => '\\Design\\UpDown',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_design_up_down',
            ),
            'admin/mail/' => array(
                'class' => '\\Mail\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_mail',
            ),
            'admin/mail/history' => array(
                'class' => '\\Mail\\History',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_mail_history',
            ),
            'admin/mail/preview' => array(
                'class' => '\\Mail\\Preview',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_mail_preview',
            ),
            'admin/mail/template' => array(
                'class' => '\\Mail\\Template',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_mail_template',
            ),
            'admin/mail/template_input' => array(
                'class' => '\\Mail\\TemplateInput',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_mail_template_input',
            ),
            'admin/order/' => array(
                'class' => '\\Order\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order',
            ),
            'admin/order/disp' => array(
                'class' => '\\Order\\Disp',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_disp',
            ),
            'admin/order/edit' => array(
                'class' => '\\Order\\Edit',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_edit',
            ),
            'admin/order/mail' => array(
                'class' => '\\Order\\Mail',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_mail',
            ),
            'admin/order/mail_view' => array(
                'class' => '\\Order\\MailView',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_mail_view',
            ),
            'admin/order/multiple' => array(
                'class' => '\\Order\\Multiple',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_multiple',
            ),
            'admin/order/pdf' => array(
                'class' => 'Pdf',
                'action' => '\\Order\\process',
                'ssl' => true,
                'template' => 'admin_order_pdf',
            ),
            'admin/order/product_select' => array(
                'class' => '\\Order\\ProductSelect',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_product_select',
            ),
            'admin/order/status' => array(
                'class' => '\\Order\\Status',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_order_status',
            ),
            'admin/ownersstore/' => array(
                'class' => '\\Ownersstore\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_ownersstore',
            ),
            'admin/ownersstore/log' => array(
                'class' => '\\Ownersstore\\Log',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_ownersstore_log',
            ),
            'admin/ownersstore/module' => array(
                'class' => '\\Ownersstore\\Module',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_ownersstore_module',
            ),
            'admin/ownersstore/plugin_hook_point_list' => array(
                'class' => '\\Ownersstore\\PluginHookPointList',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_ownersstore_plugin_hook_point_list',
            ),
            'admin/ownersstore/settgings' => array(
                'class' => '\\Ownersstore\\Settings',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_ownersstore_settings',
            ),
            'admin/products/' => array(
                'class' => '\\Products\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products',
            ),
            'admin/products/category' => array(
                'class' => '\\Products\\Category',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_category',
            ),
            'admin/products/class_category' => array(
                'class' => '\\Products\\ClassCategory',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_class_category',
            ),
            'admin/products/class_list' => array(
                'class' => '\\Products\\ClassList',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_class_list',
            ),
            'admin/products/maker' => array(
                'class' => '\\Products\\Maker',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_maker',
            ),
            'admin/products/product_class' => array(
                'class' => '\\Products\\ProductClass',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_product_class',
            ),
            'admin/products/product' => array(
                'class' => '\\Products\\ProductEdit',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_product_edit',
            ),
            'admin/products/product_rank' => array(
                'class' => '\\Products\\ProductRank',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_product_rank',
            ),
            'admin/products/upload_csv' => array(
                'class' => '\\Products\\UploadCSV',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_upload_csv',
            ),
            'admin/products/upload_csv_category' => array(
                'class' => '\\Products\\UploadCSVCategory',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_products_upload_csv_category',
            ),
            'admin/system/' => array(
                'class' => '\\System\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system',
            ),
            'admin/system/admin_area' => array(
                'class' => '\\System\\AdminArea',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_admin_area',
            ),
            'admin/system/bkup' => array(
                'class' => '\\System\\Bkup',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_bkup',
            ),
            'admin/system/delete' => array(
                'class' => '\\System\\Delete',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_delete',
            ),
            'admin/system/editdb' => array(
                'class' => '\\System\\Editdb',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_editdb',
            ),
            'admin/system/input' => array(
                'class' => '\\System\\Input',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_input',
            ),
            'admin/system/log' => array(
                'class' => '\\System\\Log',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_log',
            ),
            'admin/system/masterdata' => array(
                'class' => '\\System\\Masterdata',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_masterdata',
            ),
            'admin/system/parameter' => array(
                'class' => '\\System\\Parameter',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_parameter',
            ),
            'admin/system/rank' => array(
                'class' => '\\System\\Rank',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_rank',
            ),
            'admin/system/system' => array(
                'class' => '\\System\\System',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_system_system',
            ),
            'admin/total/' => array(
                'class' => '\\Total\\Index',
                'action' => 'process',
                'ssl' => true,
                'template' => 'admin_total',
            ),

        );
    }

}