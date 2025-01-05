# Note PHP

This repository is created for revising and learning PHP language.
Don't forget create virtual server on Apache and install PHP on your machine.
Follow the steps below to complete the setup.

## Instruction for Windows

### With XAMPP

> [!TIP]
> Least complicated way.

1. Install [XAMPP](https://www.apachefriends.org/) with default componets.
2. Use the `C:\xampp\htdocs` directory.
3. Create a new folder, for example, `sites`.
4. Clone this repository into the `sites` directory.
5. In the XAMMP control panel, run Apache server.
6. Use `http://localhost/sites/php-note/` in your browser.

> [!NOTE]
> To use an alias in your browser during development, follow these steps:
>
> - Go to `C:\xampp\apache\conf\extra`.
> - Open `httpd-vhosts.conf`.
> - Cofigurate it as show below (just this to the bottom of the file):
>
>   > **Remark:** `fncswab` stands for `folder name containing sites, without angle brackets`.
>   > If you choose this method, don't forget rename the folder by adding `.local` to the end of its name.
>
> ```apache
> <VirtualHost *:80>
>   DocumentRoot "C:/xampp/htdocs/sites/<fncswab>.local"
>   ServerName <fncswab>.local
>   ErrorLog "logs/<fncswab>-local.com-error.log"
>   CustomLog "logs/<fncswab>-local.com-access.log" common
> </VirtualHost>
> ```
>
> - Then go to `C:\Windows\System32\drivers\etc`.
> - Cofigurate the `hosts` file like this:
>
> ```
> # XAMMP sites:
> 127.0.0.1 <fncswab>.local
> # End of section
> ```
>
> - Restart apache server in the XAMMP control panel.
> - Use the alias in your browser.

### With separated installing apache and php

> [!TIP]
> Complicated way.

#### PHP Installation

1. Go to the official [PHP](https://windows.php.net/download) website.
2. Find the `Zip` file with a thread safe PHP version and download it.
3. Extract the package to `C:\php` directory.
4. Locate the `php.ini-development` file and rename to `php.ini`.
5. In the `php.ini` file, uncomment the line `;extension_dir = "ext"` by removing the semicolumn.
6. Then specify the path to the PHP extension directory like this:

   ```
   extension_dir = "C:\php\ext"
   ```

#### Apache Installation

1. Install or update `C++` packages
   - For [64-bit](https://aka.ms/vs/17/release/VC_redist.x64.exe) systems.
   - For [32-bit](https://aka.ms/vs/17/release/VC_redist.x86.exe) systems.
2. Download [Apache](https://www.apachelounge.com/download/) binaries distribution `.zip` file, matching your system architecture.
3. Extract the package to directory named `C:\apache<version-without-angle-brackets>`.
4. Move to `C:\Apache24\conf` and configure `httpd.conf` file:

   - Locate the following lines:

     ```apache
     #LoadModule vhost_alias_module modules/mod_vhost_alias.so
     #LoadModule watchdog_module modules/mod_watchdog.so
     #LoadModule xml2enc_module modules/mod_xml2enc.so
     ```

   - Add these lines after that (bottom):

     ```apache
     LoadModule php_module "C:/php/php8apache2_4.dll"
     PHPIniDir "C:/php"
     ```

   - Then find:

     ```apache
     DocumentRoot "${SRVROOT}/htdocs"
     <Directory "${SRVROOT}/htdocs">
     ```

   - Replace with the following:

     ```apache
     DocumentRoot "c:/localhost"
     <Directory "c:/localhost">
     ```

   - Replace path for logs:

     | Line                                 | Replace to                                   |
     | ------------------------------------ | -------------------------------------------- |
     | `ErrorLog "logs/error.log"`          | `ErrorLog "c:/localhost/error.log"`          |
     | `CustomLog "logs/access.log" common` | `CustomLog "c:/localhost/access.log" common` |

   - Find the next one:
     ```apache
     #ServerName www.example.com:80
     ```
   - Uncomment this and rename server:
     ```apache
     ServerName localhost
     ```
   - Add the following lines:

     ```apache
     AddType application/x-httpd-php .php
     AddType application/x-httpd-php-source .phps
     ```

     under `<IfModule mime_module>`
     in these module:

     ```apache
     <IfModule mime_module>
     AddType application/x-httpd-php .php
     AddType application/x-httpd-php-source .phps
     #
     # TypesConfig points to the file containing the list of mappings from
     # filename extension to MIME-type.
     #
     TypesConfig conf/mime.types
     ```

   - Finally, locate the `<IfModule dir_module>` block:
     ```apache
     <IfModule dir_module>
         DirectoryIndex index.html
     </IfModule>
     ```
     add index.php in the end of line:
     ```apache
     <IfModule dir_module>
         DirectoryIndex index.html index.php
     </IfModule>
     ```

5. Create a `localhost` folder in the `C:\` directory to store your local projects.
6. Clone and extract the files from this repository into the `localhost` directory.
7. Run `httpd.exe` in the `C:\apache<version-without-angle-brackets>`.

## Instruction for Linux

```
Under development
```
