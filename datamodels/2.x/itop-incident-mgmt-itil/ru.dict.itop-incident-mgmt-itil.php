<?php

/**
 * Локализация интерфейса Combodo iTop подготовлена сообществом iTop по-русски http://community.itop-itsm.ru.
 * 
 * @author   Vladimir Kunin <v.b.kunin@gmail.com>
 * @license   http://opensource.org/licenses/AGPL-3.0
 *
 * 
 * Инструкция по установке
 * 
 * Процесс установки заключается в замене имеющихся локализационных файлов полученными и последующем запуске процедуры обновления iTop для перекомпиляции кода.
 * 	1. Скопируйте с заменой два полученных файла из "itop-rus/dictionaries" в "путь/до/вашего/itop/dictionaries".
 * 	2. Скопируйте с заменой полученные файлы "itop-rus/datamodels/2.x/название-модуля/ru.dict.название-модуля.php" в "путь/до/вашего/itop/datamodels/2.x/название-модуля".
 *  3. Перейдите по адресу "http://адрес/вашего/itop/setup", при этом файл "путь/до/вашего/itop/conf/production/config-itop.php" должен быть доступен для записи.
 *  4. На второй странице установщика выберите "Upgrade an existing iTop instance" и следуйте дальнейшим инструкциям установщика.
 *
 * Ответы на вопросы по установке и использованию переводов, а также на любые другие вопросы по iTop всегда можно получить на сайте сообщества iTop по-русски http://community.itop-itsm.ru.
 *
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:IncidentManagement' => 'Управление инцидентами',
	'Menu:IncidentManagement+' => 'Управление инцидентами',
	'Menu:Incident:Overview' => 'Обзор',
	'Menu:Incident:Overview+' => 'Обзор',
	'Menu:NewIncident' => 'Создать инцидент',
	'Menu:NewIncident+' => 'Create a new incident ticket',
	'Menu:SearchIncidents' => 'Найти инцидент',
	'Menu:SearchIncidents+' => 'Search for incident tickets',
	'Menu:Incident:Shortcuts' => 'Ярлыки',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Назначенные мне инциденты',
	'Menu:Incident:MyIncidents+' => 'Incidents assigned to me (as Agent)',
	'Menu:Incident:EscalatedIncidents' => 'Эскалированные инциденты',
	'Menu:Incident:EscalatedIncidents+' => 'Escalated incidents',
	'Menu:Incident:OpenIncidents' => 'Открытые инциденты',
	'Menu:Incident:OpenIncidents+' => 'All open incidents',
	'Menu:Incident:UnassignedIncidents' => 'Неназначенные инциденты',
	'Menu:Incident:UnassignedIncidents+' => 'Incidents not yet assigned',
	'Menu:Incident:HelpdeskIncidents' => 'Инциденты, назначенные на 2-ю линию',
	'Menu:Incident:HelpdeskIncidents+' => 'Incidents assigned to Level2',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Инциденты по проиритету за 14 дней',
	'UI-IncidentManagementOverview-Last-14-days' => 'Количество инцидентов на 14 дней',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Открытые инциденты по статусу',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Открытые инциденты по агенту',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Открытые инциденты по заказчику',
));




// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: Incident
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Incident' => 'Инцидент',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Статус',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Новый',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Эскалация TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Назначен',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Эскалация TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Ожидание утверждения',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'В ожидании',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Решенный',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Закрыт',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Влияние',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Отдел',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Услуга',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Персона',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Приоритет',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'Критический',
	'Class:Incident/Attribute:priority/Value:1+' => 'critical',
	'Class:Incident/Attribute:priority/Value:2' => 'Высокий',
	'Class:Incident/Attribute:priority/Value:2+' => 'high',
	'Class:Incident/Attribute:priority/Value:3' => 'Средний',
	'Class:Incident/Attribute:priority/Value:3+' => 'medium',
	'Class:Incident/Attribute:priority/Value:4' => 'Низкий',
	'Class:Incident/Attribute:priority/Value:4+' => 'low',
	'Class:Incident/Attribute:urgency' => 'Срочность',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'Критическая',
	'Class:Incident/Attribute:urgency/Value:1+' => 'critical',
	'Class:Incident/Attribute:urgency/Value:2' => 'Высокая',
	'Class:Incident/Attribute:urgency/Value:2+' => 'high',
	'Class:Incident/Attribute:urgency/Value:3' => 'Средняя',
	'Class:Incident/Attribute:urgency/Value:3+' => 'medium',
	'Class:Incident/Attribute:urgency/Value:4' => 'Низкая',
	'Class:Incident/Attribute:urgency/Value:4+' => 'low',
	'Class:Incident/Attribute:origin' => 'Источник',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'Почта',
	'Class:Incident/Attribute:origin/Value:mail+' => 'mail',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Мониторинг',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:phone' => 'Телефон',
	'Class:Incident/Attribute:origin/Value:phone+' => 'phone',
	'Class:Incident/Attribute:origin/Value:portal' => 'Портал',
	'Class:Incident/Attribute:origin/Value:portal+' => 'portal',
	'Class:Incident/Attribute:service_id' => 'Услуга',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Услуга',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Подкатегория',
	'Class:Incident/Attribute:servicesubcategory_id+' => 'Подкатегория услуги',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Подкатегория услуги',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => '«Хот»-флаг',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Нет',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Да',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:Incident/Attribute:escalation_reason' => 'Причина «Хот»-флага',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Назначение',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Решение',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'В ожидании',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Накопленное ожидание',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'TTO',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'TTR',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Срок TTO',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA TTO пропущено',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA TTO превышено',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Срок TTR',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA TTR пропущено',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA TTR превышено',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Время на решение',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => 'Код решения',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Помощь',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Исправление ошибки',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Ремонт оборудования',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Другое',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'other',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Патч ПО',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'Обновление системы',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Обучение',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'training',
	'Class:Incident/Attribute:solution' => 'Описание решения',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Причина ожидания',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Родительский инцидент',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Ссылка на родительский инцидент',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Родительское изменение',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Ссылка на родительское изменение',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Дочерние инциденты',
	'Class:Incident/Attribute:child_incidents_list+' => 'All the child incidents related to this incident',
	'Class:Incident/Attribute:public_log' => 'Общий журнал',
	'Class:Incident/Attribute:public_log+' => 'Информация в общем журнале доступна для пользователей портала',
	'Class:Incident/Attribute:user_satisfaction' => 'Удовлетворенность пользователя',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Очень доволен',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Вполне доволен',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Скорее недоволен',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Очень недоволен',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:Incident/Attribute:user_comment' => 'Комментарий пользователя',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'Родительский инцидент',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Назначить',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Переназначить',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'В ожидание',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Таймаут',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Автоматическое решение',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Автоматическое закрытие',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Отметить как решенный',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Закрыть',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Вновь открыть',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Cannot assign the Parent incident to the incident itself',
));


?>