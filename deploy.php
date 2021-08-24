<?php
namespace Deployer;

require 'recipe/symfony4.php';

// Project name
set('application', 'postback');

// Project repository
set('repository', 'https://github.com/abashkatov/postback-tools.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

set('default_stage', 'prod');
set('branch', 'master');

// Hosts

host('postback.adv2ls.ru')
  ->stage('prod')
  ->set('bin/php', function () {
    return '/usr/bin/php8.0';
  })
  ->set('bin/composer', function () {
    return '/usr/bin/php8.0 /usr/bin/composer';
  })
  ->set('symfony_env', '{{stage}}')
  ->set('deploy_path', '/var/www/{{application}}')
  ->set('composer_options', '{{composer_action}} --verbose --prefer-dist --no-progress --no-interaction --optimize-autoloader --no-suggest')
;
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');

