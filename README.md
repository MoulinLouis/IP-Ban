# IP-Ban

### Qu'est ce qu'IP-BAN ?

C'est un système en PHP permettant de restreindre l'accès à un site à une liste d'adresses IP. Si un utilisateur étant dans cette liste tente de se connecter à la page protéger, il sera automatiquement redirigé vers une autre page.

### Comment l'utiliser ?

Importer le fichier ban_list.php dans votre projet et ajouter le code suivant en haut de votre page php :

```php
<?php
require_once('ban/ban_list.php');
?>
```

### Comment ajouter une IP ?

Ajouter une adresse IP dans le tableau $ban_list du fichier ban_list.php

#### Exemple (une seule IP) :
```php
$ban_list = array("192.168.1.1");
```

#### Exemple (plusieurs IP) :
```php
$ban_list = array("192.168.1.1", "127.0.0.1", "10.0.0.1");
```