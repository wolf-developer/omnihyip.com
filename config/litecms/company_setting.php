<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'company_setting',

    /*
     * Modules.
     */
    'modules'   => ['company_setting'],
/*
     * Image size.
     */
    'company_logo'    => [

        'sm' => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'md' => [
            'width'     => '370',
            'height'    => '420',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'lg' => [
            'width'     => '780',
            'height'    => '497',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'xl' => [
            'width'     => '800',
            'height'    => '530',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

    ],
    
    'company_setting'       => [
        'model' => [
            'model'                 => \Litecms\CompanySetting\Models\CompanySetting::class,
            'table'                 => 'company_settings',
            'presenter'             => \Litecms\CompanySetting\Repositories\Presenter\CompanySettingPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['company_name',  'company_legal_name','company_logo',  'company_start',  'contact_person',  'company_address',  'company_country',  'company_city', 'company_map',  'company_zip_code',  'company_phone',  'company_email',  'company_domain', 'maxreferral',  'facebook_link',  'twitter_link',  'instagram_link',  'seo_title',  'meta_data',  'google_analytic_code', 'google_site_key','google_secret_key', 'google_webmaster_tool_code', 'captcha_client_reg', 'captcha_client_login', 'captcha_admin_login','paypay_status','total_client','total_withdrawal','total_deposit'],
            'translatables'         => [],
            'upload_config' => 'company_logo.company_logo.model',  
            'upload_folder'         => 'company_logo/company_logo',
            'uploads'               => [
            
                    'company_logo' => [
                        'count' => 1,
                        'type'  => 'image',                        
                    ],
                    'company_method_logo' => [
                        'count' => 6,
                        'type'  => 'image',
                    ],
            
            ],

            'casts'                 => [
            
                'company_logo'    => 'array',
                'company_method_logo'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'CompanySetting',
            'module'    => 'CompanySetting',
        ],

    ],
];
