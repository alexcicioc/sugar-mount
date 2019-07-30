<?php
/***CONFIGURATOR***/
$sugar_config['js_lang_version'] = 6;
/***CONFIGURATOR***/

$sugar_config['full_text_engine'] =
    array(
        'Elastic' =>
            array(
                'host' => $_ENV['ELASTIC_SEARCH_HOST'],
                'port' => $_ENV['ELASTIC_SEARCH_PORT'],
            ),
    );

$sugar_config['dbconfig'] =
    array(
        'db_host_name' => $_ENV['MYSQL_HOST'],
        'db_host_instance' => 'SQLEXPRESS',
        'db_user_name' => $_ENV['MYSQL_USER'],
        'db_password' => $_ENV['MYSQL_PASSWORD'],
        'db_name' => $_ENV['MYSQL_DATABASE'],
        'db_type' => $_ENV['DB_TYPE'],
        'db_port' => '',
        'db_manager' => $_ENV['DB_MANAGER'],
    );

// If you're using Sugar under a load ballancer this has to be disabled
$sugar_config['verify_client_ip'] = false;
