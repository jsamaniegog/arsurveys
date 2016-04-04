<?php
/*
 * -------------------------------------------------------------------------
ARSurveys plugin
Monitors via notifications the results of surveys
Provides bad result notification as well as good result notifications

Copyright (C) 2016 by Raynet SAS a company of A.Raymond Network.

http://www.araymond.com
-------------------------------------------------------------------------

LICENSE

This file is part of ARSurveys plugin for GLPI.

This file is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GLPI is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GLPI. If not, see <http://www.gnu.org/licenses/>.
--------------------------------------------------------------------------
 */


// ----------------------------------------------------------------------
// Original Author of file: Olivier Moron
// ----------------------------------------------------------------------

$LANG['plugin_arsurveys']["name"] = "Alertas de encuestas";
$LANG['plugin_arsurveys']["notifconfig"] = "Umbral establecido";

$LANG['plugin_arsurveys']["ticketsatisfactiontype"] = "Encuestas de peticiones";

$LANG['plugin_arsurveys']['config']['bad_threshold'] = "Umbral negativo: si el resultado de la encuesta de satisfacción es menor o igual (<=) a este valor una notificación será enviada como un 'resultado negativo encuesta'";
$LANG['plugin_arsurveys']['config']['good_threshold'] = "Umbral positivo: si el resultado de la encuesta de satisfacción es mayor o igual (>=) a este valor una notificación será enviada como un 'resultado positivo encuesta'";
$LANG['plugin_arsurveys']['config']['force_positive_notif'] = "Una respuesta a una encuesta de satisfacción que sea positiva no genera notificación si el usuario no ha rellenado el comentario. ¿Quieres enviarlas de todos modos?";
$LANG['plugin_arsurveys']['config']['comments'] = "Comentarios";
$LANG['plugin_arsurveys']['config']['datemod'] = "Última actualización" ;
$LANG['plugin_arsurveys']['config']['save'] = "Guardar" ;

$LANG['plugin_arsurveys']['bad_survey'] = 'Resultado de encuesta negativo' ;
$LANG['plugin_arsurveys']['good_survey'] = 'Resultado de encuesta positivo' ;

$LANG['plugin_arsurveys']['ticketsatisfaction.action'] = 'Respuesta de la encuesta' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.user'] = 'Autor de la encuesta' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.ticket'] = 'Número de petición' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.ticketname'] = 'Título de la petición' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.url'] = 'URL de la encuesta' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.date_begin'] = 'Fecha de inicio' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.date_answer'] = 'Fecha de respuesta' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.satisfaction'] = 'Calificación otorgada' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.comment'] = 'Comentario de la encuesta' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.friendliness'] = 'Satisfacción de la cordialidad' ;
$LANG['plugin_arsurveys']['ticketsatisfaction.responsetime'] = 'Satisfacción del tiempo de respuesta' ;
