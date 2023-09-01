# php
PHP MEMO

Mamp :
C:/Mamp/Htdocs/projet1/index.php

Historique
Le langage PHP a été créé en 1994 par Rasmus Lerdorf pour son site web. C'était à l'origine une bibliothèque logicielle en C53 dont il se servait pour conserver une trace des visiteurs qui venaient consulter son CV. Au fur et à mesure qu'il ajoutait de nouvelles fonctionnalités, Rasmus a transformé la bibliothèque en une implémentation capable de communiquer avec des bases de données et de créer des applications dynamiques et simples pour le Web.

Configuration de php.ini : 
En conséquence, dans un environnement de production il est recommandé d'avoir:
display_errors = Off, afin de ne pas afficher les erreurs (en cours d'exécution du script)
display_startup_errors = Off, afin de ne pas afficher les erreurs (au lancement du script)
log_errors = On, afin de stocker les erreurs dans un fichier

Le chemin du fichier d'erreur peut être spécifié via le paramètre error_log.
De même l'équipe PHP recommande d'avoir
track_errors = Off

4.2.2.5.Section "Date"
L'utilisation des fonctions de manipulation de date peut vous contraindre de spécifier un fuseau horaire. Ceci peut se faire également via le fichier php.ini. Dans ce cas, il faut renseigner le paramètre date.timezone
date.timezone = Europe/Paris



Protocoles PHP
PHP supporte de nombreux protocoles comme LDAP, IMAP, SNMP, NNTP, POP3, HTTP, COM (sous Windows) et encore d'autres. Vous pouvez ouvrir des sockets réseau, et interagir avec n'importe quel autre protocole. PHP supporte le format complexe WDDX, qui permet de communiquer entre tous les langages web. En terme d'interconnexion, PHP supporte aussi les objets Java, et les utilise de manière transparente comme objets intégrés.

Cas d’utilisation

Il y a trois domaines différents où PHP peut s'illustrer.
Langage de script côté serveur. C'est l'utilisation la plus traditionnelle, et aussi le principal objet de PHP. Vous aurez besoin de trois composants pour l'exploiter : un analyseur PHP (CGI ou module serveur), un serveur web et un navigateur web. Vous devez exécuter le serveur web en corrélation avec PHP. Vous pouvez accéder au programme PHP avec l'aide du navigateur web. Tout ceci peut fonctionner sur votre propre machine si vous souhaitez juste expérimenter la programmation PHP. Voyez la section d'installation pour plus d'informations.

Langage de programmation en ligne de commande. Vous pouvez écrire des scripts PHP et l'exécuter en ligne de commande, sans l'aide du serveur web et d'un navigateur. Il vous suffit de disposer de l'exécutable PHP. Cette utilisation est idéale pour les scripts qui sont exécutés régulièrement (avec un cron sous Unix ou Linux), ou un gestionnaire de tâches (sous Windows). Ces scripts peuvent aussi être utilisés pour réaliser des opérations sur des fichiers texte. Voyez la section sur l'utilisation de PHP en ligne de commande pour plus d'informations.

Ecrire des applications clientes graphiques. PHP n'est probablement pas le meilleur langage pour écrire des applications clientes graphiques, mais si vous connaissez bien PHP et que vous souhaitez exploiter des fonctionnalités avancées dans vos applications clientes, vous pouvez utiliser PHP-GTK pour écrire de tels programmes. Vous avez aussi la possibilité d'écrire des applications très portables avec ce langage. PHP-GTK est une extension de PHP, qui n'est pas fournie dans la distribution de base. Si vous êtes intéressé par PHP-GTK, visitez » son site web.

Alternatives à PHP
Javascript, Java, Python, Ruby, C#, Go... etc
Parmi les concurrents de PHP, on peut citer les suivants :

Active Server Pages : conçu par Microsoft, il exploite le framework (c'est-à-dire un ensemble de bibliothèques qui fournissent des services pour les développeurs) .NET bien connu des développeurs C#. Ce langage peut être intéressant si vous avez l'habitude de développer en C# .NET et que vous ne voulez pas être dépaysés.
Ruby on Rails : très actif, ce framework s'utilise avec le langage Ruby et permet de réaliser des sites dynamiques rapidement en suivant certaines conventions. 
Django : il est similaire à Ruby on Rails, mais il s'utilise en langage Python.
Java et les JSP (Java Server Pages) : plus couramment appelé « JEE », il est particulièrement utilisé dans le monde professionnel. Il demande une certaine rigueur. La mise en place d'un projet JEE est traditionnellement un peu plus longue et plus lourde mais le système est apprécié des professionnels et des institutions. C'est ce qui est utilisé sur le site des impôts français, par exemple.
Hack (langage) :  langage de programmation impératif créé par Facebook et proche du langage PHP
