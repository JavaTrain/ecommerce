Requirements
============
**php 7.0**

Deploying the system
====================

1. Dev environment
-----------------
docker image [ntlegend/php7](https://hub.docker.com/r/ntlegend/php7/)

2. Cloning project
------------------
    git clone git@bitbucket.org:mindk/alreadyon-365publish.git .

main branch **redev**

3. Installing dependencies
--------------------------
All commands should be run in the docker

    wget http://getcomposer.org/composer.phar
    php composer.phar install --no-dev #production environment
    php composer.phar install          #development environment

4. Config Database
------------------
All commands should be run in the docker

    php bin/console doctrine:migrations:migrate

5. Installing assets (just in case)
-----------------------------------
All commands should be run in the docker

    php bin/console assets:install --symlink
    php bin/console assetic:dump --env=prod #production
    php bin/console assetic:dump           #development

6. Compile css (only for dev)
-----------------------------
All commands should be run in the docker

### Install
    cd src/Mindk/PublishBundle/Resources/uikit
    npm install gulp
    npm install

### Compile

    php bin/console assetic:watch
    cd src/Mindk/PublishBundle/Resources/uikit
    node ./node_modules/gulp/bin/gulp.js -t 365publishing
    node ./node_modules/gulp/bin/gulp.js watch -t 365publishing

### Theme customize

    cd src/Mindk/PublishBundle/Resources/uikit
    node ./node_modules/gulp/bin/gulp.js sync


7. Cron jobs


Naming Conventions
==================

1. Language Files
-----------------
Language file are grouped by scopes and(or) functionality.
For example, all buttons are in the file buttons.en.yml. All translations of user's pages are in the users.en.yml

Structure of language file must be the same as application logic

    user:
      registration:
        form:
          field1: Field1
        messages:
          success: Success message!
          error: Error message!





Route name should start from **mindk_publish** contains user role, entry name and view (if exist) or action
For example:

    mindk_publish_admin_user_list
    mindk_publish_admin_user_form
    mindk_publish_admin_user_delete


Request using
=============
Controller actions should get an Entity as input argument if it's necessary by functionality logic

    mindk_user_item:
         pattern:  /users/{id}
         defaults: { _controller: MindkUserBundle:User:show }


    public function showAction(User $user){ ... }; #Dependence injection


Commit Messages
===============
There is an instruction of how to set commit message: [instruction](https://docs.google.com/document/d/1QrDFcIiPjSLDn3EL15IJygNPiHORgU1_OOAqWjiDU5Y/edit/)



