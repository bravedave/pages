## MVP - Extension

A simple extension for extending the https://github.com/bravedave/mvp.

Setting up a development project is covered in bravedave/mvp, this is just _create an extension_

I'm going to create the Pages extension - it will create a page and display it, allowing you to add content ...

_my extension is called __pages___

### Steps
1. <a href="#Development_Environment">Create a development/testing environment</a>
2. <a href="#Develop_Test">develop and test</a>
3. publish - GitHub - https://github.com/
4. advertise - PackAGist -  https://packagist.org/
5. use - composer

### Recipe

<a name="Development_Environment"></a>
#### Create a Development/Testing Environment

1. Setup a new project
   ```bash
   composer create-project bravedave/mvp pages @dev
   cd pages
   ```
2. Modify:
   1. the projects _namespace_, change the psr-4 namespace to reflect your namespace:

   _composer.json_
   ```json
   "autoload": {
        "psr-4": {
            "pages\\": "src/app/"

        }

   }
   ```

   2. add the namespace declaration to _src/app/launcher.php_
      * _note: Parsedown is no longer "in the namespace", add the reference so you can contiue to see and use it ..._

   ```php
   <?php
   /**
    * David Bray
    * BrayWorth Pty Ltd
    * e. david@brayworth.com.au
    *
    * MIT License
    *
   */

   namespace pages;
   use Parsedown;

   class launcher {
   ```

   3. update the reference in _www/_mvp.php
   ```php
   pages\launcher::run()
   ```


3. Update the Autoload
   ```bash
   composer u
   ```

3. the _src/app/_ folder is going to hold our files
   1. remove all files except launcher - it is going to test your application
   2. review src/app/launcher.php
   3. You are ready to launch the application
      a. review the _run.cmd_, it will look for php in a standard location ..

   ```bash
   ./run.cmd
   ```

<a name="Develop_Test"></a>
#### Develop and Test

1. Create a namespaced class - _src/app/page.php_<br />
   (see the src/app/page.php for full source)

   ```php
   <?php
   /*
    * David Bray
    * BrayWorth Pty Ltd
    * e. david@brayworth.com.au
    *
    * MIT License
    *
   */

   namespace pages;

   class page {}
   ```


