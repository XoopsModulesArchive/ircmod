#
# This java file is a part of the
#
# - Plouf's Java IRC Client -
#
# Copyright (C) 2002 Philippe Detournay
#
# This file is licensed under the GPL license
#
# All contacts : theplouf@yahoo.com
#
#
# Syntax :
# Comments begin with the # character. This character must be the first character of the line.
# A data line has three parts : the data id, the data id description, the data string.
# - Data id : An hexadecimal figure identifying the string.
# - Data description : Begins by [ and ends by ]. The description is not parsed and
# can contains any string.
# - Data string : The string itself. Parameters are specified using the %i syntax.
#
# Trailing spaces can be added using the \s escape character.
0001 [INTERPRETOR_NOT_ON_CHANNEL] Pas sur un canal
0002 [INTERPRETOR_UNKNOWN_DCC] %1 : sous-commande dcc inconnue
0003 [INTERPRETOR_INSUFFICIENT_PARAMETERS] %1 : paramètres insuffisants
0004 [INTERPRETOR_BAD_CONTEXT] Impossible d'effectuer %1 ici
0005 [INTERPRETOR_CANNOT_CTCP_IN_DCCCHAT] Impossible d'envoyer des codes CTCP dans un DCC Chat
0006 [INTERPRETOR_UNKNOWN_CONFIG] %1 : sous-commande de configuration inconnue
0007 [INTERPRETOR_TIMESTAMP_ON] Horodateur activé
0008 [INTERPRETOR_TIMESTAMP_OFF] Horodateur désactivé
0009 [INTERPRETOR_SMILEYS_ON] Emoticons activés
000a [INTERPRETOR_SMILEYS_OFF] Emoticons désactivés
000b [INTERPRETOR_IGNORE_ON] Ignore à présent %1
000c [INTERPRETOR_IGNORE_OFF] N'ignore plus %1
000d [INTERPRETOR_MULTISERVER_DISABLED] Le support multiserveur est désactivé
0101 [DCC_WAITING_INCOMING] Attente de connexion...
0102 [DCC_UNABLE_TO_OPEN_CONNECTION] Impssible d'ouvrir la connexion : %1
0103 [DCC_CONNECTION_ESTABLISHED] "Connexion DCC établie
0104 [DCC_CONNECTION_CLOSED] Connexion fermée
0105 [DCC_ERROR] Erreur : %1
0106 [DCC_UNABLE_TO_SEND_TO] %1 : impossible d'envoyer à %2
0107 [DCC_BAD_CONTEXT] Impossible d'exécuter la commande dans le contexte actuel
0108 [DCC_NOT_CONNECTED] Non connecté
0109 [DCC_UNABLE_PASSIVE_MODE] Impossible d'initialiser le mode passif
010a [CTCP_PING_REPLY] [%1 PING reply] : %2 secondes
010b [DCC_STREAM_CLOSED] Stream fermé
0201 [IDENT_FAILED_LAUNCH] Impossible de lancer le serveur IDENT : %1
0202 [IDENT_REQUEST] Requête ident de %1
0203 [IDENT_ERROR] Erreur survenue
0204 [IDENT_REPLIED] Répondu %1
0205 [IDENT_DEFAULT_USER] utilisateur par défaut
0206 [IDENT_NO_USER] Aucun utilisateur pour la reqûete
0207 [IDENT_RUNNING_ON_PORT] Le serveur Ident s'exécute sur le port %1
0208 [IDENT_LEAVING] Le serveur Ident se termine : %1
0209 [IDENT_NONE] aucun
020a [IDENT_UNKNOWN] inconnu
020b [IDENT_UNDEFINED] Résultat indéterminé
0301 [FILE_SAVEAS] Sauver le fichier sous
0401 [ABOUT_ABOUT] A propos
0402 [ABOUT_PROGRAMMING] Programmation
0403 [ABOUT_DESIGN] Design
0404 [ABOUT_THANKS] Remerciements
0405 [ABOUT_SUPPORT] pour leur support, leurs idées et les tests
0406 [ABOUT_GPL] Ce programme est sous license GPL
0501 [SERVER_UNABLE_TO_CONNECT] Impossible de se connecter : %1
0502 [SERVER_UNABLE_TO_CONNECT_STILL] Impssible de se connecter à %1, déjà en train d'essayer de se connecter à %2
0503 [SERVER_DISCONNECTING] Déconnexion de %1
0504 [SERVER_CONNECTING] Connexion...
0505 [SERVER_NOT_CONNECTED] Non connecté
0506 [SERVER_LOGIN] Enregistrement...
0507 [SERVER_DISCONNECTED] Déconnecté de %1
0508 [SERVER_ERROR] Erreur : %1
071a [GUI_CHANGE_NICK] Modifier le nick
071b [GUI_COPY_WINDOW] Copier le texte
0801 [ASL_MALE] Garçon, %1 ans, %2
0802 [ASL_FEMALE] Fille, %1 ans, %2
0803 [ASL_UNKNOWN] %1 ans de %2
0901 [REPLY_IDLE] %1 est inactif depuis %2
0902 [REPLY_SIGNON] %1 s'est connecté(e) le %2
ffff [ERROR_NOT_DEFINED] Texte non défini