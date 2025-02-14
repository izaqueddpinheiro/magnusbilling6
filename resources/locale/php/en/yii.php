<?php
return array(

    /*MENU CONFIGURATION*/
    'config_title_signup_admin_email'              => 'Send email to admin when user signup from form',
    'config_desc_signup_admin_email'               => 'Send email to administrator email when creation new account from signup page\n 0 - Disable \n1 - Enable',
    'config_title_enable_callingcard'              => 'Enable CallingCard',
    'config_desc_enable_callingcard'               => 'Enable CallingCard.\n 0 - Disable \n1 - Enable',
    'config_title_MixMonitor_format'               => 'MixMonitor Format',
    'config_desc_MixMonitor_format'                => 'Record audio extension. See the available extension in http://www.voip-info.org/wiki/view/MixMonitor',
    'config_title_accept_terms_link'               => 'Link to terms on Signup form',
    'config_desc_accept_terms_link'                => 'Link to terms on Signup form',
    'config_title_admin_email'                     => 'Administrator email',
    'config_desc_admin_email'                      => 'Email for receive notifications',
    'config_title_admin_received_email'            => 'Send copy for admin email',
    'config_desc_admin_received_email'             => 'Send copy for admin email',
    'config_title_agent_limit_refill'              => 'Agent refill limit',
    'config_desc_agent_limit_refill'               => 'Limit to agent refill yours customers.',
    'config_title_amd'                             => 'AGI - Use amd macro',
    'config_desc_amd'                              => 'Use amd. Set to CM(amd)',
    'config_title_answer_call'                     => 'AGI - Answer Call',
    'config_desc_answer_call'                      => 'If enabled the MBilling answers the call that starts.\nDefault: 0',
    'config_title_answer_callback'                 => 'Answer Callback',
    'config_desc_answer_callback'                  => 'Answer Callback and play audio',
    'config_title_archive_call_prior_x_month'      => 'Archive calls',
    'config_desc_archive_call_prior_x_month'       => 'Archive call from last months.',
    'config_title_auto_generate_user_signup'       => 'Auto generate username in signup form',
    'config_desc_auto_generate_user_signup'        => 'Auto generate username in signup form',
    'config_title_base_country'                    => 'Country',
    'config_desc_base_country'                     => 'Allowed values\nUSA United States,\nBRL Brasil,\nARG Argentina,\nNLD Netherlands,\nESP Spanish,\nITA Italy,\nMEX Mexico',
    'config_title_base_currency'                   => 'Currency',
    'config_desc_base_currency'                    => 'Currency',
    'config_title_base_language'                   => 'Language',
    'config_desc_base_language'                    => 'Allowed values \nen English \nes Espanhol \npt_BR Portugues',
    'config_title_bloc_time_call'                  => 'Rounding time calls',
    'config_desc_bloc_time_call'                   => 'Round the lead time as charging sales.\n1: Yes\n0: No',
    'config_title_callback-softphone'              => 'Show CallBack tab on Android Softphone',
    'config_desc_callback-softphone'               => 'Show CallBack tab on Android Softphone\n 0 - Disable \n1 - Enable',
    'config_title_callback_add_prefix'             => 'Callback - add prefix',
    'config_desc_callback_add_prefix'              => 'Callback - add prefix on CallerID',
    'config_title_callback_remove_prefix'          => 'Callback remove prefix',
    'config_desc_callback_remove_prefix'           => 'Remove prefix on CallerID',
    'config_title_callingcard_answer'              => 'CallingCard answer',
    'config_desc_callingcard_answer'               => 'CallingCard answer',
    'config_title_callingcard_cid_enable'          => 'CallingCard CID authentication',
    'config_desc_callingcard_cid_enable'           => 'Active CID authentication',
    'config_title_callingcard_number_try'          => 'CallingCard try',
    'config_desc_callingcard_number_try'           => 'Callingcard try.',
    'config_title_callingcard_say_rateinitial'     => 'CallingCard say rate',
    'config_desc_callingcard_say_rateinitial'      => 'CallingCard say rate',
    'config_title_callingcard_say_timetocall'      => 'CallingCard say time to call',
    'config_desc_callingcard_say_timetocall'       => 'CallingCard say time to call',
    'config_title_channel_spy'                     => 'SpyCall Sip Account',
    'config_desc_channel_spy'                      => 'SpyCall Sip Account',
    'config_title_charge_sip_call'                 => 'Charge Sip Call',
    'config_desc_charge_sip_call'                  => 'Charge Sip Call',
    'config_title_cid_enable'                      => 'AGI - CID Enable',
    'config_desc_cid_enable'                       => 'Enable CID authentication.\n0 - Não\n1 - Sim\n',
    'config_title_color_menu'                      => 'Menu color (Thema windows)',
    'config_desc_color_menu'                       => 'Menu color, Black or White',
    'config_title_cpstotal'                        => 'Maximum CPS',
    'config_desc_cpstotal'                         => 'Maximum CPS accepted.',
    'config_title_decimal_precision'               => 'Decimal precision',
    'config_desc_decimal_precision'                => 'Decimal precision.',
    'config_title_delay_notifications'             => 'Days to notification',
    'config_desc_delay_notifications'              => 'Number of days to generate low balance warning to customers.',
    'config_title_dialcommand_param'               => 'AGI - Command Dial',
    'config_desc_dialcommand_param'                => 'More information  : http://voip-info.org/wiki-Asterisk+cmd+dial',
    'config_title_dialcommand_param_call_2did'     => 'AGI - DID Dial Command Params',
    'config_desc_dialcommand_param_call_2did'      => '%timeout% is the value of the paramater : Max time to Call a DID no billed',
    'config_title_dialcommand_param_sipiax_friend' => 'AGI - Internal Call, Dial Command Params',
    'config_desc_dialcommand_param_sipiax_friend'  => 'Dial paramater for call between users.\n\nby default (3600000  =  1HOUR MAX CALL).',
    'config_title_external_record_link'            => 'External URL to download records',
    'config_desc_external_record_link'             => 'External URL to download records. Only used to download only one audio. Leave blank to no find audio in external link. URL EX: http://IP/record.php?username=%user%&audio=%number%.%uniqueid%.%audio_exten%',

    'config_title_failover_lc_prefix'              => 'AGI - FailOver LCR/LCD',
    'config_desc_failover_lc_prefix'               => 'If anable and have two hidden tariff in de plan, MagnusBilling gonna get the cheape',
    'config_title_failover_recursive_limit'        => 'AGI - Backup trunk limit',
    'config_desc_failover_recursive_limit'         => 'Backup trunk limit',
    'config_title_generate_length'                 => 'Username length',
    'config_desc_generate_length'                  => 'Username length',
    'config_title_generate_prefix'                 => 'Prefix username',
    'config_desc_generate_prefix'                  => 'Prefix username',
    'config_title_international_prefixes'          => 'AGI - International prefixes',
    'config_desc_international_prefixes'           => 'List the prefixes you want stripped off if the call number.',
    'config_title_intro_prompt'                    => 'AGI - Intro _pront',
    'config_desc_intro_prompt'                     => 'To specify a prompt to play at the beginning of the calls',
    'config_title_invoice_tax'                     => 'Invoice tax',
    'config_desc_invoice_tax'                      => 'Tax to add in Invoice.',
    'config_title_ip_servers'                      => 'Server IP',
    'config_desc_ip_servers'                       => 'MagnusBilling server IP',
    'config_title_ip_tech_length'                  => 'Authentication IP/tech length',
    'config_desc_ip_tech_length'                   => 'Authentication IP/tech length 4, 5 or 6 digits',
    'config_desc_log'                              => 'min 0 - max 5 ',
    'config_title_module_extra'                    => 'URL to extra module',
    'config_desc_module_extra'                     => 'Url to extra module, default: index.php/extra/read',
    'config_title_number_try'                      => 'AGI - number try',
    'config_desc_number_try'                       => 'Number of attempts to dial the number\n Minimum value 1',
    'config_title_paypal-softphone'                => 'Active Paypal on Android Softphone',
    'config_desc_paypal-softphone'                 => 'Active Paypal on Android Softphone\n 0 - Disable 1 - Enable',
    'config_title_paypal_new_user'                 => 'Active paypal for new customer',
    'config_desc_paypal_new_user'                  => 'Active paypal for new customer. \n\n0 - Disable (RECOMENDED )\n1 - Enable',
    'config_title_planbilling_daytopay'            => 'Days to pay offers',
    'config_desc_planbilling_daytopay'             => 'Set how many days before maturity you wanna collect the bid offers.',
    'config_title_reCaptchaKey'                    => 'reCaptchaKey sitekey',
    'config_desc_reCaptchaKey'                     => 'Generate your sitekey in https://www.google.com/recaptcha/admin#list',
    'config_title_record_call'                     => 'AGI - Record calls',
    'config_desc_record_call'                      => 'Enables recording of all customers.\nCAUTION, THIS OPTION REQUIRES A LOT OF SERVER PERFORMANCE. SO YOU CAN RECORD CUSTOMER SPECIFIC.\n\n0: Disable\n1: Enable.',
    'config_title_say_balance_after_call'          => 'AGI - Say balance after call',
    'config_desc_say_balance_after_call'           => 'Play the balance to the user after the call\n\n0 - No\n1 - Yes',
    'config_title_say_rateinitial'                 => 'AGI - Say sell price',
    'config_desc_say_rateinitial'                  => 'Play the initial cost of the tariff.\n\n0 - No\n1 - Yes',
    'config_title_say_timetocall'                  => 'AGI - Say Duration',
    'config_desc_say_timetocall'                   => 'Play the amount of time that the user can call.\n\n0 - No\n1 - Yes',
    'config_title_service_daytopay'                => 'Days to send the Service notification',
    'config_desc_service_daytopay'                 => 'How many days MagnusBilling will send services notification to the user before que pay day?',
    'config_title_session_timeout'                 => 'Session timeout',
    'config_desc_session_timeout'                  => 'Time in seconds to close user session.',
    'config_title_show_filed_help'                 => 'Show fields help',
    'config_desc_show_filed_help'                  => 'Show fields help\n 0 - Disable \n1 - Enable',
    'config_title_show_playicon_cdr'               => 'Show Play icon on CDR',
    'config_desc_show_playicon_cdr'                => 'Show Play icon on CDR menu. Set to 1 for show the icon',
    'config_title_signup_auto_pass'                => 'Generate password automatically on Signup Form',
    'config_desc_signup_auto_pass'                 => 'Set the number of caracter to password. EX: if you have pass with 10 digits, set it to 10. Minimo value 6',
    'config_title_social_media_network'            => 'Social Media Network to show in customer panel',
    'config_desc_social_media_network'             => 'Social Media Network to show in customer panel',
    'config_title_switchdialcommand'               => 'AGI - Outbound Call',
    'config_desc_switchdialcommand'                => 'Define the order to make the outbound call<br>YES -> SIP/number@trunk - NO  SIP/trunk/number<br>Both should work exactly the same but i experimented one case when gateway was supporting number@trunk, So in case of trouble, try it out.',
    'config_title_trunk_short_duration_call'       => 'Sip trunk short duration call',
    'config_desc_trunk_short_duration_call'        => 'SIP TRUNK short duration call',
    'config_title_trunk_short_total_calls'         => 'Sip trunk short total calls',
    'config_desc_trunk_short_total_calls'          => 'Sip trunk short total calls',
    'config_title_tts_url'                         => 'Tts URL',
    'config_desc_tts_url'                          => 'Set here the URL to use in Massive Call. Use variable $name in the string field',
    'config_title_use_dnid'                        => 'AGI - Use DNID',
    'config_desc_use_dnid'                         => 'If the client does not need active schedule again the number he wish to call after entering the PIN.\n\n1 - Enable (DEFAULT)\n0 - Disable',
    'config_title_username_generate'               => 'Username Auto Generate',
    'config_desc_username_generate'                => 'Generate username automatically',
    'config_title_version'                         => 'Version',
    'config_desc_version'                          => 'MagnusBilling Version',

    /*END CONFIG MENU*/

    'Name'                                         => 'Nome',
    'User or password incorrect.'                  => 'User or password incorrect............',

);
