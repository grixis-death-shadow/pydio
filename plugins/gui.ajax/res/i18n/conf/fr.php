<?php
/*
* Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <https://pydio.com>.
*/
$mess=array(
"Client Plugin" => "Plugin client",
"Browser-based rich interface. Contains configurations for theming, custom welcome message, etc." => "Client riche pour les navigateurs. Contient des configurations pour les thèmes, messages d'accueil personnalisés, ...",
"Main Options" => "Options principales",
"Theme" => "Thème",
"Theme used for display" => "Thème d'affichage",
"Start Up Screen" => "Ecran de démarrage",
"Title Font Size" => "Taille du titre",
"Font sized used for the title in the start up screen" => "Taille de la police du titre sur la page d'accueil",
"Custom Icon" => "Icône personnalisée",
"URI to a custom image to be used as start up logo" => "URI d'une icône personnalisée à afficher sur l'écran d'accueil",
"Icon Width" => "Largeur de l'icône",
"Width of the custom image (by default 35px)" => "Largeur de l'icône (par défaut 35px).",
"Welcome Message" => "Message d'accueil",
"An additionnal message displayed in the start up screen" => "Message supplémentaire ajouté sur l'écran d'accueil",
"Client Session Config" => "Configuration de la session client",
"Client Timeout" => "Expiration du client",
"The length of the client session in SECONDS. By default, it's copying the server session length. In most PHP installation, it will be 1440, ie 24minutes. You can set this value to 0, this will make the client session 'infinite' by pinging the server at regular occasions (thus keeping the PHP session alive). This is not a recommanded setting for evident security reasons." => "Durée de la session client en SECONDES. Par défaut, identique à la durée de session du serveur. Dans la plupart des installations PHP, ce sera 1440, soit 24 minutes. Définir cette valeur à 0 permet de faire une durée de session 'infinie' en appelant régulièrement le serveur (ce qui conservera la session PHP active). Cette configuration n'est pas recommandée pour des raisons de sécurité évidentes.",
"Warning Before" => "Alerte avant",
"Number of MINUTES before the session expiration for issuing an alert to the user" => "Nombre de MINUTES avant l'expiration de la session pour alerter l'utilisateur.",
"Google Analytics" => "Google Analytics",
"Analytics ID" => "Identifiant GA",
"Id of your GA account, something like UE-XXXX-YY" => "Identifiant de votre compte GA, du type UE-XXXX-YY",
"Analytics Domain" => "Domaine GA",
"Set the domain for your analytics reports (not mandatory!)" => "Domaine pour le rapport Google Analytics (optionnel !)",
"Analytics Events" => "Evénements GA",
"Use Events Logging, experimental only implemented on download action in Pydio" => "Utiliser les journaux d'événements, implémenté à titre expérimental uniquement sur l'action de téléchargement dans Pydio",
"Icon Only" => "Icône seulement",
"Skip the title, only display an image" => "Ignore le titre, affiche uniquement une image",
"Icon Path (Legacy)" => "Chemin de l'icône (Legacy)",
"Icon Height" => "Hauteur de l'icône",
"Height of the custom icon (with the px mention)" => "Hauteur de l'icône personnalisée (avec la mention px)",
"Top Toolbar" => "Barre d'outil du haut",
"Title" => "Titre",
"Append a title to the image logo" => "Ajouter un titre à l'image du logo",
"Logo" => "Logo",
"Replace the top left logo in the top toolbar" => "Remplacer le logo en haut à gauche de la barre d'outils du haut",
"Logo Height" => "Hauteur du logo",
"Manually set a logo height" => "Définissez manuellement la hauteur du logo",
"Logo Width" => "Largeur du logo",
"Manually set a logo width" => "Définissez manuellement la largeur du logo",
"Logo Top" => "Décalage du haut du logo",
"Manually set a top offset" => "Définissez manuellement le décalage du logo par rapport au haut",
"Logo Left" => "Décalage à gauche du logo",
"Manually set a left offset" => "Définissez manuellement le décalage du logo par rapport à la gauche",
"Set up some application parameters. If you enable Emails, please use the Test button to check if your php is correctly configured." => "Set up some application parameters. If you enable Emails, please use the Test button to check if your php is correctly configured.",
"Detected Encoding" => "Detected Encoding",
"Detected Server Path" => "Detected Server Path",
"Application Title" => "Application Title",
"Set the domain for yuor analytics reports (not mandatory!)" => "Domaine pour le rapport analytics (optionnel)",
"Additional JS frameworks" => "Framework JS additionel",
"Additional JS frameworks description" => "Liste de chemins vers des fichiers javascripts qui doivent être chargés AVANT que la framework pydio soit chargé. Utiliser plutôt les plugins.",
"Login Screen" => "Page de login",
"Welcome Page" => "Page d'accueil",
"Replace the logo displayed in the welcome page" => "Logo affiché sur la page d'accueil",
"Custom Background (1)" => "Fond d'écran (1)",
"Background Attributes (1)" => "Attributs (1)",
"Custom Background (2)" => "Fond d'écran (2)",
"Background Attributes (2)" => "Attributs (2)",
"Custom Background (3)" => "Fond d'écran (3)",
"Background Attributes (3)" => "Attributs (3)",
"Custom Background (4)" => "Fond d'écran (4)",
"Background Attributes (4)" => "Attributs (4)",
"Custom Background (5)" => "Fond d'écran (5)",
"Background Attributes (5)" => "Attributs (5)",
"Custom Background (6)" => "Fond d'écran (6)",
"Background Attributes (6)" => "Attributs (6)",
"Image used as a background" => "Image utilisée en fond",
"Attributes of the image used as a background" => "Attributs de positionnement du fond",
"Center in Page (no-repeat)" => "Centrer (no-repeat)",
"Fetch Window (repeat vertically)" => "Couvrir la fenêtre (répeter verticalement)",
"Fetch Window (no repeat)" => "Couvrir la fenêtre (no repeat)",
"Tile (repeat both directions)" => "Mosaique (répeter dans 2 directions)",
"Page Background Images" => "Images de fond",
"Minisite" => "Liens publics",
"Minisite Logo" => "Logo de des liens publics",
"Top-right logo displayed on minisite page" => "Logo afficher en haut à droite sur les liens",
"User Home Logo" => "Logo de la page d'accueil",
"Web Session" => "Session Web",
"Google Analytics Analytics ID" => "Google Analytics Analytics ID",
"Google Analytics Analytics Domain" => "Google Analytics Analytics Domain",
"Google Analytics Analytics Events" => "Google Analytics Analytics Events",
"Low-Resolution Background" => "Fond d'écran Basse Resolution",
"Make sure to use a smaller resolution image, otherwise mobile loading is very slow." => "Utilisé pour les mobiles, assurez vous d'utiliser une image légère.",
"Background Attributes (Low Resolution)" => "Attributs (Basse Resolution)",
"Display Branding Tool" => "Afficher l'outil de branding",
"Show the palette on the interface to change the interface colors and logos. Make sure to reload the interface if you toggle this option." => "Afficher la palette sur l'interface permettant de modifier les couleurs et les logos. Recharger complètement la fenêtre après changement de cette option.",
"Use configured branding" => "Utiliser le branding configuré",
"Override default styles and colors with the options defined in the branding tool. Make sure to reload the interface if you toggle this option." => "Utiliser les logos et couleurs définis et sauvés lors de l'utilisation de l'outil de branding. Recharger complètement la fenêtre après changement de cette option.",
"Enable Welcome Tour" => "Activer le guide de bienvenue",
"Enable the small tour triggered at first visit" => "Présenter un petit tour de l'interface à l'utilisateur à la première connexion.",
);