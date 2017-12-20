The description below assumes that you already have  Virtualhost and Vagrant installed.
https://laravel.com/docs/5.5/homestead#first-steps  (the first step)

<ol>
   <li> Edit your /etc/hosts and add a host:  192.168.10.11  jobtip.local</li>
   <li> Install Vagrant BOX for homestead <p>vagrant box add laravel/homestead</p></li>
   <li> Copy Homestead.yaml.example to Homestead.yaml and edit it. Change map folders and sites. I have all projects in 'work' directory, but you can map only jobtip.</li>
   <li> Configure your environment: copy .env.example to .env and edit it</li>
   <li> Start vagrant with 'vagrant up'</li>
   <li> SSH to the virtual machine:  'vagrant ssh'</li>
   <li> install all needed components:  'composer install'</li>
   <li> create CACHE directories:  storage/framework/cache, storage/framework/session, storage/framework/views</li>
   <li> php artisan key:generate</li>
   <li> create tables in database with: php artisan migrate</li>
   <li> fill the database with seeders: php artisan db:seed</li>
   <li> Your project is ready http://jobtip.local (check it in your browser)</li>
   
</ol>