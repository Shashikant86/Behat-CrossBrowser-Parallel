#Usage


##Clone this repo:


      $ git clone git@github.com:Shashikant86/Behat-CrossBrowser-Parallel.git
      $ cd Behat-CrossBrowser-Parallel



Now install Behat, Mink, MinkExtension and their dependencies with composer:

      $curl http://getcomposer.org/installer | php
      $php composer.phar install

Download Selenium Server and launch server 

      $ java -jar selenium-server-standalone-2.30.0.jar


Now to launch Behat, just run:

      $ant run

Watch Tests running in the Firefox, Safari and GoogleChrome in parallel. 
