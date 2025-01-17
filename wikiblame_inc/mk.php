<?php
/** Macedonian (македонски)
 * 
 * See the qqq 'language' for message documentation incl. usage of parameters
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bjankuloski06
 * @author Flominator
 * @author MuratTheTurkish
 * @author Od1n
 */

$text_dir = 'ltr';
$messages['January'] = 'јануари';
$messages['February'] = 'февруари';
$messages['March'] = 'март';
$messages['April'] = 'април';
$messages['May'] = 'мај';
$messages['June'] = 'јуни';
$messages['July'] = 'јули';
$messages['August'] = 'август';
$messages['September'] = 'септември';
$messages['October'] = 'октомври';
$messages['November'] = 'ноември';
$messages['December'] = 'декември';
$messages['ui_lang'] = 'Јазик за приказ';
$messages['lang'] = 'Јазик';
$messages['lang_example'] = 'mk, en, commons, www, …';
$messages['project'] = 'Проект';
$messages['project_example'] = 'wikipedia, wikisource, wikimedia, wikidata, …';
$messages['tld'] = 'Домен';
$messages['tld_example'] = 'org, com, net, …';
$messages['article'] = 'Страница';
$messages['needle'] = 'Барај:';
$messages['skipversions'] = 'Секогаш прескокнувај x верзии';
$messages['ignorefirst'] = 'Занемари ги првите x верзии';
$messages['limit'] = 'Верзии за проверка';
$messages['start_date'] = 'Почетен датум';
$messages['date_format'] = 'ДД, ММ, ГГГГ';
$messages['revision_date_format'] = '%d %B %Y г., %H:%M ч.';
$messages['order'] = 'Редослед';
$messages['newest_first'] = 'прво најнови';
$messages['oldest_first'] = 'прво најстари';
$messages['binary_search_inverse'] = 'Барај избришан текст (само бинарен)';
$messages['search_method'] = 'Метод на пребарување';
$messages['binary'] = 'бинарен';
$messages['binary_in_wp'] = 'https://mk.wikipedia.org/wiki/Бинарно_пребарување';
$messages['linear'] = 'линеарен';
$messages['interpolated'] = 'бинарен (побрз, ако има многу верзии)';
$messages['ignore_minors'] = 'занемари ситни промени (пробно)';
$messages['force_wikitags'] = 'принуди пребарување по викитекст';
$messages['from_url'] = 'од URL';
$messages['paste_url'] = 'Прекопирајте го URL-то во страница на МедијаВики';
$messages['no_valid_url'] = 'Ова не е важечкo URL на МедијаВики';
$messages['start'] = 'Почни';
$messages['reset'] = 'Одново';
$messages['manual'] = 'Прирачник';
$messages['manual_link'] = 'https://en.wikipedia.org/wiki/User:Flominator/WikiBlame?uselang=mk';
$messages['contact'] = 'Контакт';
$messages['contact_link'] = 'https://de.wikipedia.org/wiki/Benutzer Diskussion:Flominator/WikiBlame?uselang=mk';
$messages['get_less_versions'] = 'Вашето пребарување може да пројде __NUMREVISIONS__ преработки наеднаш. За да се заштити опслужувачот, дозволени се само __ALLOWEDREVISIONS__ барања по повик. Сменете ги нагодувањата или префрлете се на бинарен метод на пребарување!';
$messages['wrong_skips'] = 'Погрешни прилагодувања: Ако првите __VERSIONSTOSKIP__ верзии се прескокнат, тогаш ниту една од __VERSIONSTOSEARCH__ верзии за пребарување нема да биде обработена.';
$messages['search_in_progress_text'] = '<b>_NEEDLE_</b> се пребарува по историјата на верзиите на _ARTICLELINK_ како прост текст';
$messages['search_in_progress_wikitags'] = '<b>_NEEDLE_</b> се пребарува по историјата на верзиите на _ARTICLELINK_ како викитекст';
$messages['no_differences'] = 'Не пронајдов разлики во пребараните преработки.';
$messages['inverse_restart'] = 'Не најдов ниедно вметнување или отстранување. Да не сте го внеле поимот подоцна?';
$messages['inverse_stuck'] = 'Не најдов вметнување или отстранување во овие _NUMBEROFVERSIONS_ преработки. Можеби бараниот поим е отстранет претходно?';
$messages['inverse_earliest'] = 'Пребарај по претходни преработки';
$messages['first_version'] = 'Веројатно промените се случиле првата или последната преработка?';
$messages['first_version_present'] = '__NEEDLE__ беше уште во најстарата пребарана преработка која е од __REVISIONLINK__.';
$messages['latest_version_present'] = '__NEEDLE__ беше уште во најстарата пребарана преработка која е од __REVISIONLINK__.';
$messages['earlier_versions_available'] = 'Веројатно постојат најстари верзии.';
$messages['execution_time'] = 'Време за извршување: _EXECUTIONTIME_ секунди';
$messages['versions_found'] = 'Пронајдени се _NUMBEROFVERSIONS_  верзии';
$messages['please_wait'] = 'Почекајте…';
$messages['binary_test'] = 'Споредба на разликите во _FIRSTDATEVERSION_ помеѓу _FIRSTNUMBER_ и _SECONDNUMBER_ при преодот од _SOURCENUMBER_:';
$messages['dead_end'] = 'Западнавте во некој ќорсокак (веројатно предизвикан од враќања или уредувачки војни)';
$messages['once_more'] = 'Уште еднаш, со чувство:';
$messages['delete_from_here'] = 'Бришам _NUMBEROFVERSIONS_ претходни преработки, бидејќи отстранувањето мора да е направено подоцна';
$messages['delete_until_here'] = 'Бришам _NUMBEROFVERSIONS_ подоцнежни преработки, бидејќи вметнувањето мора да е направено порано';
$messages['binary_enough'] = 'Извршивте доволно обиди. Историјата на статијата е многу побркана. Изменете некои нагодувања.';
$messages['insertion_found'] = 'Пронајдено е вметнување помеѓу LEFT_VERSION и RIGHT_VERSION';
$messages['deletion_found'] = 'Пронајдено е бришење помеѓу LEFT_VERSION и RIGHT_VERSION';
$messages['here'] = 'тука';
$messages['help_translating'] = 'Помош со преведувањето на translatewiki.net';
$messages['start_here'] = 'Барај оттука';
$messages['too_much_versions'] = 'Ги достигнавте ограничувањето за пребарување на  __VERSIONLIMIT__ дозволени верзии. Обидете се пак за __WAITMINUTES__ минути или префрлете се на бинарно пребарување. Се извинуваме за непријатностите.';
$messages['not_found_at_all'] = 'Бараниот поим воопшто не е најден. Проверете ги поставките и обидете се пак.';
