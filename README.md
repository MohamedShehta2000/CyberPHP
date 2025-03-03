# **PHP for Hackers**  
![4f4a8f48-d899-4a13-9228-a726b0dd6be8](https://github.com/user-attachments/assets/53b6cd9b-de1b-4dbc-abd8-7d480962882d)


## **Setup Apache & PHP on Linux**  

```bash
sudo apt install apache2  
sudo systemctl start apache2  
sudo systemctl enable apache2  
sudo apt install libapache2-mod-php  
```

## **Apache Web Directory**  

📂 Default path: **`/var/www/html`**  

```bash
cd /var/www/html  
ls  # List files  
rm *  # Remove all files (Caution!)  
nano index.php  # Edit PHP file  
```

## **Basic PHP Code**  

```php
<html>
<body>
<?php 
$color = "red"; 
echo "My car is " . $color . "<br>";

function myMessage() {
    echo "Hello world!";
}
myMessage();

function FamilyName($fname) {
    echo "$fname Refnes.<br>";
}
FamilyName("Jani");
?>
</body>
</html>
```

🚀 **Happy Hacking!**
