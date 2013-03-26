#Usage


##Clone this repo:


      $ git clone git@github.com:Shashikant86/Behat-CrossBrowser-Parallel.git
      $ cd Behat-CrossBrowser-Parallel



Now install Behat, Mink, MinkExtension and their dependencies with composer:

      $curl http://getcomposer.org/installer | php
      $php composer.phar install

Now You will have additional dependencies in your project 

      $ ls
      README.md     bin           composer.json composer.phar report
      behat.yml     build.xml     composer.lock features      vendor

Download Selenium Server and launch server 

      $ java -jar selenium-server-standalone-2.30.0.jar


Now to launch Behat, just run:

      $ant run

Watch Tests running in the Firefox, Safari and GoogleChrome in parallel. 
