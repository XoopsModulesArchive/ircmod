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
# Sintaxe :
# Comentários começam com o caracter #. Este caracter tem de ser obrigatóriamente o primeiro caracter da linha.
# A linha de informação tem 3 partes: a informação id, a informação id description, e informação string.
# - Data id : Figura Hexadecimal identificando a string.
# - Data description : Começa por [ e acaba por ]. A descrição não é convertida e por isso pode ser todo
# o tipo de string.
# - Data string : O próprio string. Parametros são especificados usando o sintax %i.
#
# O espaços podem ser adicionados usando \s caracter espaço.
0001 [INTERPRETOR_NOT_ON_CHANNEL] Não está no canal
0002 [INTERPRETOR_UNKNOWN_DCC] %1 : subcomando dcc desconhecido
0003 [INTERPRETOR_INSUFFICIENT_PARAMETERS] %1 : parametros insuficientes
0004 [INTERPRETOR_BAD_CONTEXT] %1 : impossivel realizar no corrente contexto
0005 [INTERPRETOR_CANNOT_CTCP_IN_DCCCHAT] Impossível enviar códigos CTCP através de DCC
0006 [INTERPRETOR_UNKNOWN_CONFIG] %1 : subcomando de DCC desconhecido
0007 [INTERPRETOR_TIMESTAMP_ON] Timestamp activo
0008 [INTERPRETOR_TIMESTAMP_OFF] Timestamp inactivo
0009 [INTERPRETOR_SMILEYS_ON] Gráficos smileys activos
000a [INTERPRETOR_SMILEYS_OFF] Gráficos smileys inactivos
000b [INTERPRETOR_IGNORE_ON] Ignorando %1
000c [INTERPRETOR_IGNORE_OFF] Não se encontra a ignorar %1 mais
000d [INTERPRETOR_MULTISERVER_DISABLED] Suporte MultiServidor está inactivo
0101 [DCC_WAITING_INCOMING] Aguardando chegada de ligação...
0102 [DCC_UNABLE_TO_OPEN_CONNECTION] Impossiblitado de abrir ligação : %1
0103 [DCC_CONNECTION_ESTABLISHED] Ligação DCC estabelecida
0104 [DCC_CONNECTION_CLOSED] Ligação Encerrada
0105 [DCC_ERROR] Erro : %1
0106 [DCC_UNABLE_TO_SEND_TO] %1 : impossivel enviar para %2
0107 [DCC_BAD_CONTEXT] Impossivel executar comando a partir currente contexto
0108 [DCC_NOT_CONNECTED] Não conectado
0109 [DCC_UNABLE_PASSIVE_MODE] Impossível inciar o modo passivo
010a [CTCP_PING_REPLY] [%1 PING reply] : %2 segundos
010b [DCC_STREAM_CLOSED] Stream fechado
0201 [IDENT_FAILED_LAUNCH] Failed to launch Ident server : %1
0202 [IDENT_REQUEST] Ident request from %1
0203 [IDENT_ERROR] Error occurred
0204 [IDENT_REPLIED] Replied %1
0205 [IDENT_DEFAULT_USER] default user
0206 [IDENT_NO_USER] No user for request
0207 [IDENT_RUNNING_ON_PORT] Ident server running on port %1
0208 [IDENT_LEAVING] Ident server leaving : %1
0209 [IDENT_NONE] none
020a [IDENT_UNKNOWN] unknown
020b [IDENT_UNDEFINED] Undefined result
0301 [FILE_SAVEAS] Save file as
0401 [ABOUT_ABOUT] About
0402 [ABOUT_PROGRAMMING] Programming
0403 [ABOUT_DESIGN] Design
0404 [ABOUT_THANKS] Thanks to
0405 [ABOUT_SUPPORT] for support, ideas and testing
0406 [ABOUT_GPL] This software is licensed under the GPL license
0501 [SERVER_UNABLE_TO_CONNECT] Unable to connect : %1
0502 [SERVER_UNABLE_TO_CONNECT_STILL] Unable to connect to %1 : currently trying to connect to %2
0503 [SERVER_DISCONNECTING] Disconnecting from %1
0504 [SERVER_CONNECTING] Connecting...
0505 [SERVER_NOT_CONNECTED] Not connected
0506 [SERVER_LOGIN] Logging in...
0507 [SERVER_DISCONNECTED] Disconnected from %1
0508 [SERVER_ERROR] Error : %1
071a [GUI_CHANGE_NICK] Change nick to
071b [GUI_COPY_WINDOW] Copy text
0801 [ASL_MALE] Boy, %1 years old, %2
0802 [ASL_FEMALE] Girl, %1 years old, %2
0803 [ASL_UNKNOWN] %1 years old from %2
0901 [REPLY_IDLE] %1 has been idle for %2
0902 [REPLY_SIGNON] %1 connected on %2
ffff [ERROR_NOT_DEFINED] Undefined string
