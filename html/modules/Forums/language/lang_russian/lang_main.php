<?php
/***************************************************************************
 *                            lang_main.php [Russian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id$
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Translation performed by Alexey V. Borzov (borz_off)
// borz_off@rdw.ru
//


// setlocale(LC_ALL, 'ru_RU.ISO-8859-5');
$lang['ENCODING'] = 'windows-1251';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd.m.Y'; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Ôîðóì';
$lang['Category'] = 'Êàòåãîðèÿ';
$lang['Topic'] = 'Òåìà';
$lang['Topics'] = 'Òåìû';
$lang['Replies'] = 'Îòâåòîâ';
$lang['Views'] = 'Ïðîñìîòðîâ'; 
$lang['Post'] = 'Ñîîáùåíèå';        // ???
$lang['Posts'] = 'Ñîîáùåíèÿ';       // ???
$lang['Posted'] = 'Äîáàâëåíî';
$lang['Username'] = 'Èìÿ';
$lang['Password'] = 'Ïàðîëü';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Àâòîð';          // ???
$lang['Author'] = 'Àâòîð';
$lang['Time'] = 'Âðåìÿ';
$lang['Hours'] = '×àñû';
$lang['Message'] = 'Ñîîáùåíèå';

$lang['1_Day'] = 'çà ïîñëåäíèé äåíü';
$lang['7_Days'] = 'çà ïîñëåäíèå 7 äíåé';
$lang['2_Weeks'] = 'çà ïîñëåäíèå 2 íåäåëè';
$lang['1_Month'] = 'çà ïîñëåäíèé ìåñÿö';
$lang['3_Months'] = 'çà ïîñëåäíèå 3 ìåñÿöà';
$lang['6_Months'] = 'çà ïîñëåäíèå 6 ìåñÿöåâ';
$lang['1_Year'] = 'çà ïîñëåäíèé ãîä';

$lang['Go'] = 'Ïåðåéòè';
$lang['Jump_to'] = 'Ïåðåéòè';
$lang['Submit'] = 'Îòïðàâèòü';
$lang['Reset'] = 'Âåðíóòü';
$lang['Cancel'] = 'Îòìåíà';
$lang['Preview'] = 'Ïðåäâ. ïðîñìîòð';
$lang['Confirm'] = 'Ïîäòâåðäèòå';
$lang['Spellcheck'] = 'Îðôîãðàôèÿ';
$lang['Yes'] = 'Äà';
$lang['No'] = 'Íåò';
$lang['Enabled'] = 'Âêëþ÷åíî';
$lang['Disabled'] = 'Âûêëþ÷åíî';
$lang['Error'] = 'Îøèáêà';

$lang['Next'] = 'Ñëåä.';
$lang['Previous'] = 'Ïðåä.';
$lang['Goto_page'] = 'Íà ñòðàíèöó';
$lang['Joined'] = 'Çàðåãèñòðèðîâàí';
$lang['IP_Address'] = 'Àäðåñ IP';

$lang['Select_forum'] = 'Âûáåðèòå ôîðóì';
$lang['View_latest_post'] = 'Ïîñìîòðåòü ïîñëåäíåå ñîîáùåíèå';
$lang['View_newest_post'] = 'Ñàìîå íîâîå ñîîáùåíèå';
$lang['Page_of'] = 'Ñòðàíèöà <b>%d</b> èç <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Number';
$lang['AIM'] = 'AIM Address';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Ñïèñîê ôîðóìîâ %s';

$lang['Post_new_topic'] = 'Íà÷àòü íîâóþ òåìó';
$lang['Reply_to_topic'] = 'Îòâåòèòü íà òåìó';
$lang['Reply_with_quote'] = 'Îòâåòèòü ñ öèòàòîé';

$lang['Click_return_topic'] = '%sÂåðíóòüñÿ â òåìó%s';
$lang['Click_return_login'] = '%sÏîïðîáîâàòü åù¸ ðàç%s';
$lang['Click_return_forum'] = '%sÂåðíóòüñÿ â ôîðóì%s';
$lang['Click_view_message'] = '%sÏðîñìîòðåòü âàøå ñîîáùåíèå%s';
$lang['Click_return_modcp'] = '%sÂåðíóòüñÿ ê ïàíåëè ìîäåðàöèè%s';
$lang['Click_return_group'] = '%sÂåðíóòüñÿ ê èíôîðìàöèè î ãðóïïàõ%s';

$lang['Admin_panel'] = 'Ïåðåéòè â àäìèíèñòðàòîðñêèé ðàçäåë';

$lang['Board_disable'] = 'Èçâèíèòå, ýòè ôîðóìû îòêëþ÷åíû. Ïîïðîáóéòå çàéòè ïîïîçæå';


//
// Global Header strings
//
$lang['Registered_users'] = 'Çàðåãèñòðèðîâàííûå ïîëüçîâàòåëè:';
$lang['Browsing_forum'] = 'Ñåé÷àñ ýòîò ôîðóì ïðîñìàòðèâàþò:';
$lang['Online_users_zero_total'] = 'Ñåé÷àñ ïîñåòèòåëåé íà ôîðóìå: <b>0</b>, èç íèõ ';
$lang['Online_users_total'] = 'Ñåé÷àñ ïîñåòèòåëåé íà ôîðóìå: <b>%d</b>, èç íèõ ';
$lang['Online_user_total'] = 'Ñåé÷àñ ïîñåòèòåëåé íà ôîðóìå: <b>%d</b>, èç íèõ ';
$lang['Reg_users_zero_total'] = 'çàðåãèñòðèðîâàííûõ: 0, ';
$lang['Reg_users_total'] = 'çàðåãèñòðèðîâàííûõ: %d, ';
$lang['Reg_user_total'] = 'çàðåãèñòðèðîâàííûõ: %d, ';
$lang['Hidden_users_zero_total'] = 'ñêðûòûõ: 0 è ';
$lang['Hidden_users_total'] = 'ñêðûòûõ: %d è ';
$lang['Hidden_user_total'] = 'ñêðûòûõ: %d è ';
$lang['Guest_users_zero_total'] = 'ãîñòåé: 0';
$lang['Guest_users_total'] = 'ãîñòåé: %d';
$lang['Guest_user_total'] = 'ãîñòåé: %d';
$lang['Record_online_users'] = 'Áîëüøå âñåãî ïîñåòèòåëåé (<b>%s</b>) çäåñü áûëî %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sÀäìèíèñòðàòîð%s';
$lang['Mod_online_color'] = '%sÌîäåðàòîð%s';

$lang['You_last_visit'] = 'Âû ïîñëåäíèé ðàç çàõîäèëè %s';
$lang['Current_time'] = 'Òåêóùåå âðåìÿ %s'; // %s replaced by time

$lang['Search_new'] = 'Íàéòè ñîîáùåíèÿ ñ âàøåãî ïîñëåäíåãî ïîñåùåíèÿ';
$lang['Search_your_posts'] = 'Íàéòè âàøè ñîîáùåíèÿ';
$lang['Search_unanswered'] = 'Íàéòè ñîîáùåíèÿ áåç îòâåòîâ';

$lang['Register'] = 'Ðåãèñòðàöèÿ';
$lang['Profile'] = 'Ïðîôèëü';
$lang['Edit_profile'] = 'Ðåäàêòèðîâàòü âàø ïðîôèëü';
$lang['Search'] = 'Ïîèñê';
$lang['Memberlist'] = 'Ïîëüçîâàòåëè';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Ðóêîâîäñòâî ïî BBCode';
$lang['Usergroups'] = 'Ãðóïïû';
$lang['Last_Post'] = 'Ïîñëåäíåå ñîîáùåíèå';
$lang['Moderator'] = 'Ìîäåðàòîð';
$lang['Moderators'] = 'Ìîäåðàòîðû';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Íàøè ïîëüçîâàòåëè íå îñòàâèëè íè îäíîãî ñîîáùåíèÿ'; // Number of posts
$lang['Posted_article_total'] = 'Íàøè ïîëüçîâàòåëè îñòàâèëè ñîîáùåíèé: <b>%d</b>'; // Number of posts
$lang['Posted_articles_total'] = 'Íàøè ïîëüçîâàòåëè îñòàâèëè ñîîáùåíèé: <b>%d</b>'; // Number of posts
$lang['Registered_users_zero_total'] = 'Ó íàñ íåò çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé'; // # registered users
$lang['Registered_user_total'] = 'Âñåãî çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé: <b>%d</b>'; // # registered users
$lang['Registered_users_total'] = 'Âñåãî çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé: <b>%d</b>'; // # registered users
$lang['Newest_user'] = 'Ïîñëåäíèé çàðåãèñòðèðîâàííûé ïîëüçîâàòåëü: <b>%s%s%s</b>'; // username

$lang['No_new_posts_last_visit'] = 'Íåò íîâûõ ñîîáùåíèé ñ ïîñëåäíåãî ïîñåùåíèÿ';
$lang['No_new_posts'] = 'Íåò íîâûõ ñîîáùåíèé';
$lang['New_posts'] = 'Íîâûå ñîîáùåíèÿ';
$lang['New_post'] = 'Íîâîå ñîîáùåíèå';
$lang['No_new_posts_hot'] = 'Íåò íîâûõ ñîîáùåíèé [ Ïîïóëÿðíàÿ òåìà ]';
$lang['New_posts_hot'] = 'Íîâûå ñîîáùåíèÿ [ Ïîïóëÿðíàÿ òåìà ]';
$lang['No_new_posts_locked'] = 'Íåò íîâûõ ñîîáùåíèé [ Òåìà çàêðûòà ]';
$lang['New_posts_locked'] = 'Íîâûå ñîîáùåíèÿ [ Òåìà çàêðûòà ]';
$lang['Forum_is_locked'] = 'Ôîðóì çàêðûò';


//
// Login
//
$lang['Enter_password'] = 'Ââåäèòå âàøå èìÿ è ïàðîëü äëÿ âõîäà â ñèñòåìó';
$lang['Login'] = 'Âõîä';
$lang['Logout'] = 'Âûõîä';

$lang['Forgotten_password'] = 'Çàáûëè ïàðîëü?';

$lang['Log_me_in'] = 'Àâòîìàòè÷åñêè âõîäèòü ïðè êàæäîì ïîñåùåíèè';

$lang['Error_login'] = 'Âû ââåëè íåâåðíîå/íåàêòèâíîå èìÿ ïîëüçîâàòåëÿ èëè íåâåðíûé ïàðîëü.';


//
// Index page
//
$lang['Index'] = 'Ãëàâíàÿ';
$lang['No_Posts'] = 'Íåò ñîîáùåíèé';
$lang['No_forums'] = 'Íà ýòîì ñàéòå íåò ôîðóìîâ';

$lang['Private_Message'] = 'Ëè÷íîå ñîîáùåíèå';
$lang['Private_Messages'] = 'Ëè÷íûå ñîîáùåíèÿ';
$lang['Who_is_Online'] = 'Êòî ñåé÷àñ íà ôîðóìå';

$lang['Mark_all_forums'] = 'Îòìåòèòü âñå ôîðóìû êàê ïðî÷ò¸ííûå';
$lang['Forums_marked_read'] = 'Âñå ôîðóìû áûëè îòìå÷åíû êàê ïðî÷ò¸ííûå';


//
// Viewforum
//
$lang['View_forum'] = 'Ïðîñìîòð ôîðóìà';

$lang['Forum_not_exist'] = 'Ôîðóìà, êîòîðûé âû âûáðàëè, íå ñóùåñòâóåò';
$lang['Reached_on_error'] = 'Âû ïîïàëè íà ýòó ñòðàíèöó èç-çà îøèáêè';

$lang['Display_topics'] = 'Ïîêàçàòü òåìû';
$lang['All_Topics'] = 'âñå òåìû';

$lang['Topic_Announcement'] = '<b>Îáúÿâëåíèå:</b>';
$lang['Topic_Sticky'] = '<b>Âàæíàÿ:</b>';
$lang['Topic_Moved'] = '<b>Ïåðåìåùåíà:</b>';
$lang['Topic_Poll'] = '<b>[ Îïðîñ ]</b>';

$lang['Mark_all_topics'] = 'Îòìåòèòü âñå òåìû êàê ïðî÷ò¸ííûå';
$lang['Topics_marked_read'] = 'Âñå òåìû â ýòîì ôîðóìå áûëè îòìå÷åíû êàê ïðî÷ò¸ííûå';

$lang['Rules_post_can'] = 'Âû <b>ìîæåòå</b> íà÷èíàòü òåìû';
$lang['Rules_post_cannot'] = 'Âû <b>íå ìîæåòå</b> íà÷èíàòü òåìû';
$lang['Rules_reply_can'] = 'Âû <b>ìîæåòå</b> îòâå÷àòü íà ñîîáùåíèÿ';
$lang['Rules_reply_cannot'] = 'Âû <b>íå ìîæåòå</b> îòâå÷àòü íà ñîîáùåíèÿ';
$lang['Rules_edit_can'] = 'Âû <b>ìîæåòå</b> ðåäàêòèðîâàòü ñâîè ñîîáùåíèÿ';
$lang['Rules_edit_cannot'] = 'Âû <b>íå ìîæåòå</b> ðåäàêòèðîâàòü ñâîè ñîîáùåíèÿ';
$lang['Rules_delete_can'] = 'Âû <b>ìîæåòå</b> óäàëÿòü ñâîè ñîîáùåíèÿ';
$lang['Rules_delete_cannot'] = 'Âû <b>íå ìîæåòå</b> óäàëÿòü ñâîè ñîîáùåíèÿ';
$lang['Rules_vote_can'] = 'Âû <b>ìîæåòå</b> ãîëîñîâàòü â îïðîñàõ';
$lang['Rules_vote_cannot'] = 'Âû <b>íå ìîæåòå</b> ãîëîñîâàòü â îïðîñàõ';
$lang['Rules_moderate'] = 'Âû <b>ìîæåòå</b> %sìîäåðèðîâàòü ýòîò ôîðóì%s'; // %s replaced by a href 

$lang['No_topics_post_one'] = 'Â ýòîì ôîðóìå ïîêà íåò ñîîáùåíèé<br />Ù¸ëêíèòå <b>Íà÷àòü íîâóþ òåìó</b>, è âàøå ñîîáùåíèå ñòàíåò ïåðâûì.';


//
// Viewtopic
//
$lang['View_topic'] = 'Ïðîñìîòð òåìû';

$lang['Guest'] = 'Ãîñòü';
$lang['Post_subject'] = 'Çàãîëîâîê ñîîáùåíèÿ';
$lang['View_next_topic'] = 'Ñëåäóþùàÿ òåìà';
$lang['View_previous_topic'] = 'Ïðåäûäóùàÿ òåìà';
$lang['Submit_vote'] = 'Ïðîãîëîñîâàòü';
$lang['View_results'] = 'Ðåçóëüòàòû';

$lang['No_newer_topics'] = 'Â ýòîì ôîðóìå íåò áîëåå íîâûõ òåì';
$lang['No_older_topics'] = 'Â ýòîì ôîðóìå íåò áîëåå ñòàðûõ òåì';
$lang['Topic_post_not_exist'] = 'Òåìû, êîòîðóþ âû çàïðîñèëè, íå ñóùåñòâóåò.';
$lang['No_posts_topic'] = 'Â ýòîé òåìå íåò ñîîáùåíèé';

$lang['Display_posts'] = 'Ïîêàçàòü ñîîáùåíèÿ';
$lang['All_Posts'] = 'âñå ñîîáùåíèÿ';
$lang['Newest_First'] = 'Íà÷èíàÿ ñ íîâûõ';
$lang['Oldest_First'] = 'Íà÷èíàÿ ñî ñòàðûõ';

$lang['Back_to_top'] = 'Âåðíóòüñÿ ê íà÷àëó';

$lang['Read_profile'] = 'Ïîñìîòðåòü ïðîôèëü'; // Followed by username of poster
$lang['Send_email'] = 'Îòïðàâèòü E-mail '; // Followed by username of poster
$lang['Visit_website'] = 'Ïîñåòèòü ñàéò àâòîðà';
$lang['ICQ_status'] = 'Ñòàòóñ ICQ';
$lang['Edit_delete_post'] = 'Èçìåíèòü/óäàëèòü ýòî ñîîáùåíèå';
$lang['View_IP'] = 'Ïîêàçàòü IP àäðåñ àâòîðà';
$lang['Delete_post'] = 'Óäàëèòü ýòî ñîîáùåíèå';

$lang['wrote'] = 'ïèñàë(à)'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Öèòàòà'; // comes before bbcode quote output.
$lang['Code'] = 'Êîä'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Ïîñëåäíèé ðàç ðåäàêòèðîâàëîñü: %s (%s), âñåãî ðåäàêòèðîâàëîñü %d ðàç'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Ïîñëåäíèé ðàç ðåäàêòèðîâàëîñü: %s (%s), âñåãî ðåäàêòèðîâàëîñü %d ðàç(à)'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Çàêðûòü òåìó';
$lang['Unlock_topic'] = 'Âíîâü îòêðûòü òåìó';
$lang['Move_topic'] = 'Ïåðåíåñòè òåìó';
$lang['Delete_topic'] = 'Óäàëèòü òåìó';
$lang['Split_topic'] = 'Ðàçäåëèòü òåìó';

$lang['Stop_watching_topic'] = 'Ïåðåñòàòü ñëåäèòü çà îòâåòàìè';
$lang['Start_watching_topic'] = 'Ñëåäèòü çà îòâåòàìè â òåìå';
$lang['No_longer_watching'] = 'Âû áîëüøå íå ñëåäèòå çà îòâåòàìè â ýòîé òåìå';
$lang['You_are_watching'] = 'Òåïåðü âû ñëåäèòå çà îòâåòàìè â ýòîé òåìå';

$lang['Total_votes'] = 'Âñåãî ïðîãîëîñîâàëî';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Ñîîáùåíèå';
$lang['Topic_review'] = 'Îáçîð òåìû';

$lang['No_post_mode'] = 'Íå óêàçàí ðåæèì ñîîáùåíèÿ';

$lang['Post_a_new_topic'] = 'Íà÷àòü íîâóþ òåìó';
$lang['Post_a_reply'] = 'Îòâåòèòü';
$lang['Post_topic_as'] = 'Ñòàòóñ ñîçäàâàåìîé òåìû';
$lang['Edit_Post'] = 'Ðåäàêòèðîâàòü ñîîáùåíèå';
$lang['Options'] = 'Íàñòðîéêè';

$lang['Post_Announcement'] = 'Îáúÿâëåíèå';
$lang['Post_Sticky'] = 'Âàæíàÿ';
$lang['Post_Normal'] = 'Îáû÷íàÿ';

$lang['Confirm_delete'] = 'Âû óâåðåíû, ÷òî õîòèòå óäàëèòü ýòî ñîîáùåíèå?';
$lang['Confirm_delete_poll'] = 'Âû óâåðåíû, ÷òî õîòèòå óäàëèòü ýòîò îïðîñ?';

$lang['Flood_Error'] = 'Âû íå ìîæåòå îòïðàâèòü ñëåäóþùåå ñîîáùåíèå ñðàçó ïîñëå ïðåäûäóùåãî. Ïîæàëóéñòà, ïîïðîáóéòå ÷óòü ïîïîçæå.';
$lang['Empty_subject'] = 'Âû äîëæíû óêàçàòü çàãîëîâîê ñîîáùåíèÿ, êîãäà íà÷èíàåòå íîâóþ òåìó';
$lang['Empty_message'] = 'Âû äîëæíû ââåñòè òåêñò ñîîáùåíèÿ';
$lang['Forum_locked'] = 'Ýòîò ôîðóì çàêðûò, âû íå ìîæåòå ïèñàòü íîâûå ñîîáùåíèÿ è ðåäàêòèðîâàòü ñòàðûå.';
$lang['Topic_locked'] = 'Ýòà òåìà çàêðûòà, âû íå ìîæåòå ïèñàòü îòâåòû è ðåäàêòèðîâàòü ñîîáùåíèÿ.';
$lang['No_post_id'] = 'Âû äîëæíû âûáðàòü ñîîáùåíèå äëÿ ðåäàêòèðîâàíèÿ';
$lang['No_topic_id'] = 'Âû äîëæíû âûáðàòü òåìó äëÿ îòâåòà';
$lang['No_valid_mode'] = 'Âû ìîæåòå òîëüêî ñîçäàâàòü òåìû, îòâå÷àòü è ðåäàêòèðîâàòü ñîîáùåíèÿ. Âåðíèòåñü è ïîïðîáóéòå åù¸ ðàç.';
$lang['No_such_post'] = 'Ñîîáùåíèå îòñóòñòâóåò. Âåðíèòåñü è ïîïðîáóéòå åù¸ ðàç.';
$lang['Edit_own_posts'] = 'Èçâèíèòå, âû ìîæåòå ðåäàêòèðîâàòü òîëüêî âàøè ñîáñòâåííûå ñîîáùåíèÿ';
$lang['Delete_own_posts'] = 'Èçâèíèòå, âû ìîæåòå óäàëÿòü òîëüêî âàøè ñîáñòâåííûå ñîîáùåíèÿ';
$lang['Cannot_delete_replied'] = 'Èçâèíèòå, âû íå ìîæåòå óäàëèòü ñîîáùåíèå, íà êîòîðîå áûëè ïîëó÷åíû îòâåòû';
$lang['Cannot_delete_poll'] = 'Èçâèíèòå, âû íå ìîæåòå óäàëèòü àêòèâíûé îïðîñ';
$lang['Empty_poll_title'] = 'Âû äîëæíû ââåñòè çàãîëîâîê äëÿ îïðîñà';
$lang['To_few_poll_options'] = 'Âû äîëæíû ââåñòè íå ìåíåå äâóõ âàðèàíòîâ îòâåòà';
$lang['To_many_poll_options'] = 'Âû ïîïûòàëèñü ââåñòè ñëèøêîì ìíîãî âàðèàíòîâ îòâåòà';
$lang['Post_has_no_poll'] = 'Â ýòîì ñîîáùåíèè íåò îïðîñà';
$lang['Already_voted'] = 'Âû óæå ãîëîñîâàëè â ýòîì îïðîñå';
$lang['No_vote_option'] = 'Âû äîëæíû óêàçàòü âàðèàíò îòâåòà ïðè ãîëîñîâàíèè';

$lang['Add_poll'] = 'Äîáàâèòü îïðîñ';
$lang['Add_poll_explain'] = 'Åñëè âû íå õîòèòå äîáàâëÿòü îïðîñ ê âàøåìó ñîîáùåíèþ, îñòàâüòå ïîëÿ ïóñòûìè';
$lang['Poll_question'] = 'Âîïðîñ';
$lang['Poll_option'] = 'Âàðèàíò îòâåòà';
$lang['Add_option'] = 'Äîáàâèòü åù¸ âàðèàíò';
$lang['Update'] = 'Îáíîâèòü';
$lang['Delete'] = 'Óäàëèòü';
$lang['Poll_for'] = 'Îïðîñ äîëæåí èäòè';
$lang['Days'] = 'Äíåé'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Ââåäèòå 0 èëè îñòàâüòå ïîëå ïóñòûì, ÷òîáû îïðîñ íå êîí÷àëñÿ ]';
$lang['Delete_poll'] = 'Óäàëèòü îïðîñ';

$lang['Disable_HTML_post'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè HTML';
$lang['Disable_BBCode_post'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè BBCode';
$lang['Disable_Smilies_post'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè ñìàéëèêè';

$lang['HTML_is_ON'] = 'HTML <u>ÂÊËÞ×ÅÍ</u>';
$lang['HTML_is_OFF'] = 'HTML <u>ÂÛÊËÞ×ÅÍ</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>ÂÊËÞ×ÅÍ</u>';
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>ÂÛÊËÞ×ÅÍ</u>';
$lang['Smilies_are_ON'] = 'Ñìàéëèêè <u>ÂÊËÞ×ÅÍÛ</u>';
$lang['Smilies_are_OFF'] = 'Ñìàéëèêè <u>ÂÛÊËÞ×ÅÍÛ</u>';

$lang['Attach_signature'] = 'Ïðèñîåäèíèòü ïîäïèñü (ïîäïèñü ìîæíî èçìåíÿòü â ïðîôèëå)';
$lang['Notify'] = 'Ñîîáùàòü ìíå î ïîëó÷åíèè îòâåòà';
$lang['Delete_post'] = 'Óäàëèòü ñîîáùåíèå';

$lang['Stored'] = 'Âàøå ñîîáùåíèå áûëî óñïåøíî äîáàâëåíî';
$lang['Deleted'] = 'Âàøå ñîîáùåíèå áûëî óñïåøíî óäàëåíî';
$lang['Poll_delete'] = 'Âàø îïðîñ áûë óñïåøíî óäàë¸í';
$lang['Vote_cast'] = 'Âàø ãîëîñ áûë ó÷ò¸í';

$lang['Topic_reply_notification'] = 'Óâåäîìëåíèå îá îòâåòå â òåìå';

$lang['bbcode_b_help'] = 'Æèðíûé òåêñò: [b]òåêñò[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Íàêëîííûé òåêñò: [i]òåêñò[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Ïîä÷¸ðêíóòûé òåêñò: [u]òåêñò[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Öèòàòà: [quote]òåêñò[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Êîä (ïðîãðàììà): [code]êîä[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Ñïèñîê: [list]òåêñò[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Íóìåðîâàííûé ñïèñîê: [list=]òåêñò[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Âñòàâèòü êàðòèíêó: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Âñòàâèòü ññûëêó: [url]http://url[/url] èëè [url=http://url]òåêñò ññûëêè[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Çàêðûòü âñå îòêðûòûå òåãè bbCode';
$lang['bbcode_s_help'] = 'Öâåò øðèôòà: [color=red]òåêñò[/color]  Ïîäñêàçêà: ìîæíî èñïîëüçîâàòü color=#FF0000';
$lang['bbcode_f_help'] = 'Ðàçìåð øðèôòà: [size=x-small]ìàëåíüêèé òåêñò[/size]';

$lang['Emoticons'] = 'Ñìàéëèêè';
$lang['More_emoticons'] = 'Äîïîëíèòåëüíûå ñìàéëèêè';

$lang['Font_color'] = 'Öâåò øðèôòà';
$lang['color_default'] = 'Ïî óìîë÷àíèþ';
$lang['color_dark_red'] = 'Ò¸ìíî-êðàñíûé';
$lang['color_red'] = 'Êðàñíûé';
$lang['color_orange'] = 'Îðàíæåâûé';
$lang['color_brown'] = 'Êîðè÷íåâûé';
$lang['color_yellow'] = 'Æ¸ëòûé';
$lang['color_green'] = 'Çåë¸íûé';
$lang['color_olive'] = 'Îëèâêîâûé';
$lang['color_cyan'] = 'Ãîëóáîé';
$lang['color_blue'] = 'Ñèíèé';
$lang['color_dark_blue'] = 'Ò¸ìíî-ñèíèé';
$lang['color_indigo'] = 'Èíäèãî';
$lang['color_violet'] = 'Ôèîëåòîâûé';
$lang['color_white'] = 'Áåëûé';
$lang['color_black'] = '×¸ðíûé';

$lang['Font_size'] = 'Ðàçìåð øðèôòà';
$lang['font_tiny'] = 'Î÷åíü ìàëåíüêèé';
$lang['font_small'] = 'Ìàëåíüêèé';
$lang['font_normal'] = 'Îáû÷íûé';
$lang['font_large'] = 'Áîëüøîé';
$lang['font_huge'] = 'Îãðîìíûé';

$lang['Close_Tags'] = 'Çàêðûòü òåãè';
$lang['Styles_tip'] = 'Ïîäñêàçêà: Ìîæíî áûñòðî ïðèìåíèòü ñòèëè ê âûäåëåííîìó òåêñòó';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Ëè÷íûå ñîîáùåíèÿ';

$lang['Login_check_pm'] = 'Âîéòè è ïðîâåðèòü ëè÷íûå ñîîáùåíèÿ';
$lang['New_pms'] = 'Íîâûõ ñîîáùåíèé: %d'; // You have 2 new messages
$lang['New_pm'] = 'Íîâûõ ñîîáùåíèé: %d'; // You have 1 new message
$lang['No_new_pm'] = 'Íîâûõ ñîîáùåíèé íåò';
$lang['Unread_pms'] = 'Íåïðî÷èòàííûõ ñîîáùåíèé: %d';
$lang['Unread_pm'] = 'Íåïðî÷èòàííûõ ñîîáùåíèé: %d';
$lang['No_unread_pm'] = 'Íåò íåïðî÷èòàííûõ ñîîáùåíèé';
$lang['You_new_pm'] = 'Âàì ïðèøëî íîâîå ëè÷íîå ñîîáùåíèå';
$lang['You_new_pms'] = 'Âàì ïðèøëè íîâûå ëè÷íûå ñîîáùåíèÿ';
$lang['You_no_new_pm'] = 'Ó âàñ íåò íîâûõ ëè÷íûõ ñîîáùåíèé';

$lang['Unread_message'] = 'Íåïðî÷èòàííîå ñîîáùåíèå';
$lang['Read_message'] = 'Ïðî÷èòàííîå ñîîáùåíèå';

$lang['Read_pm'] = 'Ïðî÷èòàòü ñîîáùåíèå';
$lang['Post_new_pm'] = 'Íàïèñàòü íîâîå ñîîáùåíèå';
$lang['Post_reply_pm'] = 'Îòâåòèòü íà ñîîáùåíèå';
$lang['Post_quote_pm'] = 'Îòâåòèòü ñ öèòàòîé';
$lang['Edit_pm'] = 'Ðåäàêòèðîâàòü ñîîáùåíèå';

$lang['Inbox'] = 'Âõîäÿùèå';
$lang['Outbox'] = 'Èñõîäÿùèå';
$lang['Savebox'] = 'Ñîõðàíåííûå';
$lang['Sentbox'] = 'Îòïðàâëåííûå';
$lang['Flag'] = 'Ôëàã';
$lang['Subject'] = 'Òåìà';
$lang['From'] = 'Îò';
$lang['To'] = 'Êîìó';
$lang['Date'] = 'Äàòà';
$lang['Mark'] = 'Îòìåòêà';
$lang['Sent'] = 'Îòïðàâëåíî';
$lang['Saved'] = 'Ñîõðàíåíî';
$lang['Delete_marked'] = 'Óäàëèòü îòìå÷åííîå';
$lang['Delete_all'] = 'Óäàëèòü âñå';
$lang['Save_marked'] = 'Ñîõðàíèòü îòìå÷åííîå'; 
$lang['Save_message'] = 'Ñîõðàíèòü ñîîáùåíèå';
$lang['Delete_message'] = 'Óäàëèòü ñîîáùåíèå';

$lang['Display_messages'] = 'Ïîêàçàòü ñîîáùåíèÿ'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Âñå ñîîáùåíèÿ';

$lang['No_messages_folder'] = 'Â ýòîé ïàïêå íåò ñîîáùåíèé';

$lang['PM_disabled'] = 'Âîçìîæíîñòü îòïðàâêè ëè÷íûõ ñîîáùåíèé íà ýòèõ ôîðóìàõ áûëà îòêëþ÷åíà';
$lang['Cannot_send_privmsg'] = 'Èçâèíèòå, âàì íå ðàçðåøåíî îòïðàâëÿòü ëè÷íûå ñîîáùåíèÿ';
$lang['No_to_user'] = 'Âû äîëæíû óêàçàòü èìÿ ïîëó÷àòåëÿ ýòîãî ñîîáùåíèÿ';
$lang['No_such_user'] = 'Èçâèíèòå, íî òàêîãî ïîëüçîâàòåëÿ íå ñóùåñòâóåò';

$lang['Disable_HTML_pm'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè HTML';
$lang['Disable_BBCode_pm'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè BBCode';
$lang['Disable_Smilies_pm'] = 'Îòêëþ÷èòü â ýòîì ñîîáùåíèè ñìàéëèêè';

$lang['Message_sent'] = 'Âàøå ñîîáùåíèå áûëî îòïðàâëåíî';

$lang['Click_return_inbox'] = '%sÂåðíóòüñÿ â ïàïêó &laquo;Âõîäÿùèå&raquo;%s';
$lang['Click_return_index'] = '%sÂåðíóòüñÿ ê ñïèñêó ôîðóìîâ%s';

$lang['Send_a_new_message'] = 'Îòïðàâèòü ëè÷íîå ñîîáùåíèå';
$lang['Send_a_reply'] = 'Îòâåòèòü íà ëè÷íîå ñîîáùåíèå';
$lang['Edit_message'] = 'Ðåäàêòèðîâàòü ëè÷íîå ñîîáùåíèå';

$lang['Notification_subject'] = 'Âàì ïðèøëî íîâîå ëè÷íîå ñîîáùåíèå';

$lang['Find_username'] = 'Íàéòè ïîëüçîâàòåëÿ';
$lang['Find'] = 'Íàéòè';
$lang['No_match'] = 'Íå íàéäåíî';

$lang['No_post_id'] = 'Íå óêàçàí ID';
$lang['No_such_folder'] = 'Òàêîé ïàïêè íåò';
$lang['No_folder'] = 'Íå óêàçàíà ïàïêà';

$lang['Mark_all'] = 'Âûäåëèòü âñå';
$lang['Unmark_all'] = 'Ñíÿòü âûäåëåíèå';

$lang['Confirm_delete_pm'] = 'Âû óâåðåíû, ÷òî õîòèòå óäàëèòü ýòî ñîîáùåíèå?';
$lang['Confirm_delete_pms'] = 'Âû óâåðåíû, ÷òî õîòèòå óäàëèòü ýòè ñîîáùåíèÿ?';

$lang['Inbox_size'] = 'Âàøà ïàïêà &laquo;Âõîäÿùèå&raquo; çàïîëíåíà íà %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Âàøà ïàïêà &laquo;Îòïðàâëåííûå&raquo; çàïîëíåíà íà %d%%'; 
$lang['Savebox_size'] = 'Âàøà ïàïêà &laquo;Ñîõðàíåííûå&raquo; çàïîëíåíà íà %d%%'; 

$lang['Click_view_privmsg'] = '%sÏåðåéòè â ïàïêó &laquo;Âõîäÿùèå&raquo;%s';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Ïðîôèëü ïîëüçîâàòåëÿ %s'; // %s is username 
$lang['About_user'] = 'Î ïîëüçîâàòåëå %s'; // ñëîâî 'ïîëüçîâàòåëü' - ÷òîáû íå çàìîðà÷èâàòüñÿ ñ ìóæñêèì/æåíñêèì ðîäîì

$lang['Preferences'] = 'Ëè÷íûå íàñòðîéêè';
$lang['Items_required'] = 'Ïîëÿ îòìå÷åííûå * îáÿçàòåëüíû ê çàïîëíåíèþ, åñëè íå óêàçàíî îáðàòíîå';
$lang['Registration_info'] = 'Ðåãèñòðàöèîííàÿ èíôîðìàöèÿ';
$lang['Profile_info'] = 'Ïðîôèëü';
$lang['Profile_info_warn'] = 'Ýòà èíôîðìàöèÿ áóäåò â îòêðûòîì äîñòóïå';
$lang['Avatar_panel'] = 'Óïðàâëåíèå àâàòàðîé';
$lang['Avatar_gallery'] = 'Ãàëåðåÿ àâàòàð';

$lang['Website'] = 'Ñàéò';
$lang['Location'] = 'Îòêóäà';
$lang['Contact'] = 'Êàê ñâÿçàòüñÿ ñ'; // Êàê ñâÿçàòüñÿ ñ Vasya_Poopkin
$lang['Email_address'] = 'Àäðåñ E-mail';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Îòïðàâèòü ëè÷íîå ñîîáùåíèå';
$lang['Hidden_email'] = '[ ñêðûò ]';
$lang['Search_user_posts'] = 'Èñêàòü âñå ñîáùåíèÿ ýòîãî ïîëüçîâàòåëÿ';
$lang['Interests'] = 'Èíòåðåñû';
$lang['Occupation'] = 'Ðîä çàíÿòèé';
$lang['Poster_rank'] = 'Çâàíèå';

$lang['Total_posts'] = 'Âñåãî ñîîáùåíèé';
$lang['User_post_pct_stats'] = '%.2f%% îò îáùåãî ÷èñëà'; // 15% of total
$lang['User_post_day_stats'] = '%.2f ñîîáùåíèé â äåíü'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Íàéòè âñå ñîîáùåíèÿ ïîëüçîâàòåëÿ %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Èçâèíèòå, òàêîãî ïîëüçîâàòåëÿ íå ñóùåñòâóåò';
$lang['Wrong_Profile'] = 'Âû íå ìîæåòå ðåäàêòèðîâàòü ÷óæîé ïðîôèëü.';

$lang['Only_one_avatar'] = 'Ìîæåò áûòü óêàçàí òîëüêî îäèí òèï àâàòàðû';
$lang['File_no_data'] = 'Ôàéë ïî óêàçàííîìó âàìè URL íå ñîäåðæèò äàííûõ';
$lang['No_connection_URL'] = 'Íåâîçìîæíî óñòàíîâèòü ñîåäèíåíèÿ ñ óêàçàííûì âàìè URL';
$lang['Incomplete_URL'] = 'Âû óêàçàëè íåïîëíûé URL';
$lang['Wrong_remote_avatar_format'] = 'Íåâåðíûé URL óäàë¸ííîé àâàòàðû';
$lang['No_send_account_inactive'] = 'Èçâèíèòå, íî ïàðîëü íå ìîæåò áûòü âûñëàí, òàê êàê âàøà ó÷¸òíàÿ çàïèñü íåàêòèâíà. Îáðàòèòåñü ê àäìèíèñòðàòîðó ôîðóìà çà äîïîëíèòåëüíîé èíôîðìàöèåé.';

$lang['Always_smile'] = 'Ñìàéëèêè âñåãäà âêëþ÷åíû';
$lang['Always_html'] = 'HTML âñåãäà âêëþ÷¸í';
$lang['Always_bbcode'] = 'BBCode âñåãäà âêëþ÷¸í';
$lang['Always_add_sig'] = 'Âñåãäà ïðèñîåäèíÿòü ìîþ ïîäïèñü';
$lang['Always_notify'] = 'Âñåãäà ñîîáùàòü ìíå îá îòâåòàõ';
$lang['Always_notify_explain'] = 'Êîãäà êòî-íèáóäü îòâåòèò íà òåìó, â êîòîðóþ âû ïèñàëè, âàì âûñûëàåòñÿ E-mail. Ýòî ìîæíî òàêæå íàñòðîèòü ïðè ðàçìåùåíèè ñîîáùåíèÿ.';

$lang['Board_style'] = 'Âíåøíèé âèä ôîðóìîâ';
$lang['Board_lang'] = 'ßçûê';
$lang['No_themes'] = 'Â áàçå íåò öâåòîâûõ ñõåì';
$lang['Timezone'] = '×àñîâîé ïîÿñ';
$lang['Date_format'] = 'Ôîðìàò äàòû';
$lang['Date_format_explain'] = 'Ñèíòàêñèñ èäåíòè÷åí ôóíêöèè <a href="http://www.php.net/date" target="_other">date()</a> ÿçûêà PHP';
$lang['Signature'] = 'Ïîäïèñü';
$lang['Signature_explain'] = 'Ýòî òåêñò, êîòîðûé ìîæíî äîáàâëÿòü ê ðàçìåùàåìûì âàìè ñîîáùåíèÿì. Äëèíà åãî îãðàíè÷åíà %d ñèìâîëàìè.';
$lang['Public_view_email'] = 'Âñåãäà ïîêàçûâàòü ìîé àäðåñ E-mail';

$lang['Current_password'] = 'Òåêóùèé ïàðîëü';
$lang['New_password'] = 'Íîâûé ïàðîëü';
$lang['Confirm_password'] = 'Ïîäòâåðäèòå ïàðîëü';
$lang['Confirm_password_explain'] = 'Âû äîëæíû óêàçàòü âàø òåêóùèé ïàðîëü, åñëè õîòèòå èçìåíèòü åãî èëè ïîìåíÿòü ñâîé àäðåñ E-mail.';
$lang['password_if_changed'] = 'Óêàçûâàéòå ïàðîëü òîëüêî åñëè âû õîòèòå åãî ïîìåíÿòü';
$lang['password_confirm_if_changed'] = 'Ïîäòâåðæäàòü ïàðîëü íóæíî â òîì ñëó÷àå, åñëè âû èçìåíèëè åãî âûøå.';

$lang['Avatar'] = 'Àâàòàðà';
$lang['Avatar_explain'] = 'Ïîêàçûâàåò íåáîëüøîå èçîáðàæåíèå ïîä èíôîðìàöèåé î âàñ â ñîîáùåíèÿõ. Ìîæåò áûòü ïîêàçàíî òîëüêî îäíî èçîáðàæåíèå, øèðèíîé íå áîëåå %d ïèêñåëîâ, âûñîòîé íå áîëåå %d ïèêñåëîâ è îáú¸ìîì íå áîëåå %d êá.';
$lang['Upload_Avatar_file'] = 'Çàãðóçèòü àâàòàðó ñ âàøåãî êîìïüþòåðà';
$lang['Upload_Avatar_URL'] = 'Çàãðóçèòü àâàòàðó ñ URL';
$lang['Upload_Avatar_URL_explain'] = 'Ââåäèòå URL ïî êîòîðîìó íàõîäèòñÿ ôàéë ñ èçîáðàæåíèåì, îí áóäåò ñêîïèðîâàí íà ýòîò ñàéò.';
$lang['Pick_local_Avatar'] = 'Âûáðàòü àâàòàðó èç ãàëåðåè';
$lang['Link_remote_Avatar'] = 'Ïîêàçûâàòü àâàòàðó ñ äðóãîãî ñåðâåðà';
$lang['Link_remote_Avatar_explain'] = 'Ââåäèòå URL èçîáðàæåíèÿ, íà êîòîðîå âû õîòèòå ñîñëàòüñÿ.';
$lang['Avatar_URL'] = 'URL èçîáðàæåíèÿ àâàòàðû';
$lang['Select_from_gallery'] = 'Âûáðàòü àâàòàðó èç ãàëåðåè';
$lang['View_avatar_gallery'] = 'Ïîêàçàòü ãàëåðåþ';

$lang['Select_avatar'] = 'Âûáåðèòå àâàòàðó';
$lang['Return_profile'] = 'Âåðíóòüñÿ ê ïðîôèëþ';
$lang['Select_category'] = 'Âûáåðèòå êàòåãîðèþ';

$lang['Delete_Image'] = 'Óäàëèòü èçîáðàæåíèå';
$lang['Current_Image'] = 'Òåêóùåå èçîáðàæåíèå';

$lang['Notify_on_privmsg'] = 'Óâåäîìëÿòü î íîâûõ ëè÷íûõ ñîîáùåíèÿõ';
$lang['Popup_on_privmsg'] = 'Îòêðûâàòü íîâîå îêíî ïðè íîâîì ëè÷íîì ñîîáùåíèè'; 
$lang['Popup_on_privmsg_explain'] = 'Â íåêîòîðûõ øàáëîíàõ ìîæåò îòêðûâàòüñÿ íîâîå îêíî áðàóçåðà ñ óâåäîìëåíèåì î ïðèõîäå íîâîãî ëè÷íîãî ñîîáùåíèÿ.'; 
$lang['Hide_user'] = 'Ñêðûâàòü âàøå ïðåáûâàíèå íà ôîðóìå';

$lang['Profile_updated'] = 'Âàø ïðîôèëü áûë èçìåí¸í';
$lang['Profile_updated_inactive'] = 'Âàø ïðîôèëü áûë èçìåí¸í, íî âû èçìåíèëè âàæíûå äàííûå, òàê ÷òî òåïåðü âàøà ó÷¸òíàÿ çàïèñü íåàêòèâíà. Ïðîâåðüòå âàø ïî÷òîâûé ÿùèê, ÷òîáû óçíàòü êàê âíîâü àêòèâèçèðîâàòü ó÷¸òíóþ çàïèñü èëè, åñëè òðåáóåòñÿ îäîáðåíèå àäìèíèñòðàòîðà, ïîäîæäèòå ïîêà ýòî ñäåëàåò àäìèíèñòðàòîð.';

$lang['Password_mismatch'] = 'Ââåä¸ííûå ïàðîëè íå ñîâïàäàþò';
$lang['Current_password_mismatch'] = 'Ââåä¸ííûé âàìè ïàðîëü íå ñîâïàäàåò ñ ïàðîëåì èç áàçû';
$lang['Password_long'] = 'Âàø ïàðîëü äîëæåí áûòü íå äëèííåå 32 ñèìâîëîâ';
$lang['Username_taken'] = 'Èçâèíèòå, ïîëüçîâàòåëü ñ òàêèì èìåíåì óæå ñóùåñòâóåò';
$lang['Username_invalid'] = 'Èçâèíèòå, ýòî èìÿ ñîäåðæèò íåïîäõîäÿùèå ñèìâîëû, (íàïðèìåð ")';
$lang['Username_disallowed'] = 'Èçâèíèòå, ýòî èìÿ áûëî çàïðåùåíî ê èñïîëüçîâàíèþ';
$lang['Email_taken'] = 'Èçâèíèòå, ýòîò àäðåñ E-mail óæå çàíÿò äðóãèì ïîëüçîâàòåëåì';
$lang['Email_banned'] = 'Èçâèíèòå, ýòîò àäðåñ E-mail íàõîäèòñÿ â ÷¸ðíîì ñïèñêå';
$lang['Email_invalid'] = 'Èçâèíèòå, ýòîò àäðåñ E-mail íåïðàâèëåí';
$lang['Invalid_username'] = 'Çàïðîøåííîå èìÿ ïîëüçîâàòåëÿ óæå çàíÿòî, çàïðåùåíî, ëèáî ñîäåðæèò íåïîäõîäÿùèå ñèìâîëû (íàïðèìåð ")';
$lang['Signature_too_long'] = 'Ñëèøêîì äëèííàÿ ïîäïèñü';
$lang['Fields_empty'] = 'Âû äîëæíû çàïîëíèòü îáÿçàòåëüíûå ïîëÿ';
$lang['Avatar_filetype'] = 'Ôàéë àâàòàðû äîëæåí áûòü .jpg, .gif èëè .png';
$lang['Avatar_filesize'] = 'Îáú¸ì ôàéëà àâàòàðû äîëæåí áûòü íå áîëåå %d êá';
$lang['Avatar_imagesize'] = 'Àâàòàðà äîëæíà áûòü íå áîëüøå %d ïèêñåëîâ â øèðèíó è %d ïèêñåëîâ â âûñîòó';

$lang['Welcome_subject'] = 'Äîáðî ïîæàëîâàòü íà ôîðóìû %s';
$lang['New_account_subject'] = 'Íîâûé ïîëüçîâàòåëü';
$lang['Account_activated_subject'] = 'Ó÷¸òíàÿ çàïèñü àêòèâèçèðîâàíà';

$lang['Account_added'] = 'Ñïàñèáî çà ðåãèñòðàöèþ, ó÷¸òíàÿ çàïèñü áûëà ñîçäàíà. Âû ìîæåòå âîéòè â ñèñòåìó, èñïîëüçóÿ âàøå èìÿ è ïàðîëü.';
$lang['Account_inactive'] = 'Ó÷¸òíàÿ çàïèñü áûëà ñîçäàíà. Íà ýòîì ôîðóìå òðåáóåòñÿ àêòèâèçàöèÿ ó÷¸òíîé çàïèñè, êëþ÷ äëÿ àêòèâèçàöèè áûë âûñëàí íà ââåä¸ííûé âàìè àäðåñ. Ïðîâåðüòå ñâîþ ïî÷òó äëÿ áîëåå ïîäðîáíîé èíôîðìàöèè.';
$lang['Account_inactive_admin'] = 'Ó÷¸òíàÿ çàïèñü áûëà ñîçäàíà. Íà ýòîì ôîðóìå òðåáóåòñÿ àêòèâèçàöèÿ íîâîé ó÷¸òíîé çàïèñè àäìèíèñòðàòîðàìè. Èì áûë îòïðàâëåí E-mail, è, êàê òîëüêî îíè àêòèâèçèðóþò âàøó ó÷¸òíóþ çàïèñü, âû ïîëó÷èòå óâåäîìëåíèå.';
$lang['Account_active'] = 'Âàøà ó÷¸òíàÿ çàïèñü áûëà àêòèâèçèðîâàíà. Ñïàñèáî çà ðåãèñòðàöèþ.';
$lang['Account_active_admin'] = 'Âàøà ó÷¸òíàÿ çàïèñü áûëà àêòèâèçèðîâàíà.';
$lang['Reactivate'] = 'Âíîâü àêòèâèçèðîâàòü ó÷¸òíóþ çàïèñü';
$lang['Already_activated'] = 'Âû óæå àêòèâèçèðîâàëè ñâîþ ó÷¸òíóþ çàïèñü';
$lang['COPPA'] = 'Âàøà ó÷¸òíàÿ çàïèñü áûëà ñîçäàíà, íî òåïåðü îíà äîëæíà áûòü îäîáðåíà, áîëåå ïîäðîáíàÿ èíôîðìàöèÿ áûëà âûñëàíà âàì ïî E-mail.';

$lang['Registration'] = 'Óñëîâèÿ ðåãèñòðàöèè';
$lang['Reg_agreement'] = 'Õîòÿ àäìèíèñòðàòîðû è ìîäåðàòîðû ýòîãî ôîðóìà ñòàðàþòñÿ óäàëÿòü èëè ðåäàêòèðîâàòü íåïðèåìëåìûå ñîîáùåíèÿ êàê ìîæíî áûñòðåå, âñå ñîîáùåíèÿ ïðîñìîòðåòü íåâîçìîæíî. Òàêèì îáðàçîì âû ïðèçíà¸òå,  ÷òî ñîîáùåíèÿ íà ýòèõ ôîðóìàõ îòðàæàþò òî÷êè çðåíèÿ èõ àâòîðîâ, à íå àäìèíèñòðàöèè ôîðóìîâ (êðîìå ñîîáùåíèé, ðàçìåù¸ííûõ å¸ ïðåäñòàâèòåëÿìè) è àäìèíèñòðàöèÿ íå ìîæåò áûòü îòâåòñòâåííà çà èõ ñîäåðæàíèå.<br /><br /> Âû ñîãëàøàåòåñü íå ðàçìåùàòü îñêîðáèòåëüíûõ, óãðîæàþùèõ, êëåâåòíè÷åñêèõ ñîîáùåíèé, ïîðíîãðàôè÷åñêèõ ñîîáùåíèé, ïðèçûâîâ ê íàöèîíàëüíîé ðîçíè è ïðî÷èõ ñîîáùåíèé, ìîãóùèõ íàðóøèòü ñîîòâåòñòâóþùèå çàêîíû. Ïîïûòêè ðàçìåùåíèÿ òàêèõ ñîîáùåíèé ìîãóò ïðèâåñòè ê âàøåìó íåìåäëåííîìó îòêëþ÷åíèþ îò ôîðóìîâ (ïðè ýòîì âàø ïðîâàéäåð áóäåò ïîñòàâëåí â èçâåñòíîñòü). IP àäðåñà âñåõ ñîîáùåíèé ñîõðàíÿþòñÿ äëÿ âîçìîæíîñòè ïðîâåäåíèÿ òàêîé ïîëèòèêè. Âû ñîãëàøàåòåñü ñ òåì, ÷òî àäìèíèñòðàòîðû ôîðóìà èìåþò ïðàâî óäàëèòü, îòðåäàêòèðîâàòü, ïåðåíåñòè èëè çàêðûòü ëþáóþ òåìó â ëþáîå âðåìÿ ïî ñâîåìó óñìîòðåíèþ. Êàê ïîëüçîâàòåëü âû ñîãëàñíû ñ òåì, ÷òî ââåä¸ííàÿ âàìè èíôîðìàöèÿ áóäåò õðàíèòüñÿ â áàçå äàííûõ. Õîòÿ ýòà èíôîðìàöèÿ íå áóäåò îòêðûòà òðåòüèì ëèöàì áåç âàøåãî ðàçðåøåíèÿ, àäìèíèñòðàöèÿ ôîðóìîâ íå ìîæåò áûòü îòâåòñòâåííà çà äåéñòâèÿ õàêåðîâ, êîòîðûå ìîãóò ïðèâåñòè ê íåñàíêöèîíèðîâàííîìó äîñòóïó ê íåé.<br /><br /> Ýòè ôîðóìû èñïîëüçóþò cookies äëÿ õðàíåíèÿ èíôîðìàöèè íà âàøåì êîìïüþòåðå. Ýòè cookie íå ñîäåðæàò íèêàêîé èíôîðìàöèè èç ââåä¸ííîé âàìè è ñëóæàò ëèøü äëÿ óëó÷øåíèÿ êà÷åñòâà ðàáîòû ôîðóìîâ. Âàø E-mail àäðåñ èñïîëüçóåòñÿ ëèøü äëÿ ïîäòâåðæäåíèÿ âàøåé ðåãèñòðàöèè è ïàðîëÿ (è äëÿ âûñûëêè íîâîãî ïàðîëÿ åñëè âû çàáóäåòå òåêóùèé).<br /><br />Íàæàòèåì íà êíîïêó ðåãèñòðàöèè âû ïîäòâåðæäàåòå ñâî¸ ñîãëàñèå ñ ýòèìè óñëîâèÿìè.';

$lang['Agree_under_13'] = 'ß ñîãëàñåí ñ ýòèìè óñëîâèÿìè è ìíå <b>ìåíüøå</b> 13 ëåò';
$lang['Agree_over_13'] = 'ß ñîãëàñåí ñ ýòèìè óñëîâèÿìè è ÿ <b>ñòàðøå</b> 13 ëåò';
$lang['Agree_not'] = 'ß íå ñîãëàñåí ñ ýòèìè óñëîâèÿìè';

$lang['Wrong_activation'] = 'Ââåä¸ííûé âàìè êëþ÷ àêòèâèçàöèè íå ñîâïàäàåò ñ õðàíÿùèìñÿ â áàçå';
$lang['Send_password'] = 'Ïðèñëàòü íîâûé ïàðîëü'; 
$lang['Password_updated'] = 'Íîâûé ïàðîëü áûë ñîçäàí, ïðîâåðüòå ïî÷òîâûé ÿùèê, ÷òîáû óçíàòü êàê åãî àêòèâèçèðîâàòü';
$lang['No_email_match'] = 'Ââåä¸ííûé âàìè àäðåñ E-mail íå ñîâïàäàåò ñ çàïèñàííûì íà ýòîãî ïîëüçîâàòåëÿ';
$lang['New_password_activation'] = 'Àêòèâèçàöèÿ íîâîãî ïàðîëÿ';
$lang['Password_activated'] = 'Âàøà ó÷¸òíàÿ çàïèñü áûëà âíîâü àêòèâèçèðîâàíà. Äëÿ âõîäà â ñèñòåìó èñïîëüçóéòå ïàðîëü èç ïðèñëàííîãî âàì ïèñüìà.';

$lang['Send_email_msg'] = 'Îòïðàâèòü E-mail';
$lang['No_user_specified'] = 'Ïîëüçîâàòåëü íå áûë âûáðàí';
$lang['User_prevent_email'] = 'Ïîëüçîâàòåëü íå æåëàåò ïîëó÷àòü E-mail. Ïîïðîáóéòå îòïðàâèòü åìó/åé ëè÷íîå ñîîáùåíèå';
$lang['User_not_exist'] = 'Ïîëüçîâàòåëÿ íå ñóùåñòâóåò';
$lang['CC_email'] = 'Îòïðàâèòü êîïèþ ñîîáùåíèÿ ñàìîìó ñåáå';
$lang['Email_message_desc'] = 'Ñîîáùåíèå áóäåò îòïðàâëåíî â âèäå ïðîñòîãî òåêñòà, íå âêëþ÷àéòå â íåãî HTML èëè BBCode. Â êà÷åñòâå îáðàòíîãî àäðåñà áóäåò ïîêàçûâàòüñÿ âàø àäðåñ E-mail.';
$lang['Flood_email_limit'] = 'Âû íå ìîæåòå îòïðàâèòü åù¸ îäèí E-mail ñðàçó ïîñëå ïðåäûäóùåãî, ïîïðîáóéòå ñäåëàòü ýòî ïîïîçæå.';
$lang['Recipient'] = 'Ïîëó÷àòåëü';
$lang['Email_sent'] = 'Ñîîáùåíèå áûëî îòïðàâëåíî';
$lang['Send_email'] = 'Îòïðàâèòü E-mail';
$lang['Empty_subject_email'] = 'Âû äîëæíû óêàçàòü òåìó ñîîáùåíèÿ';
$lang['Empty_message_email'] = 'Âû äîëæíû óêàçàòü òåêñò ñîîáùåíèÿ äëÿ îòïðàâêè';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Óïîðÿäî÷èòü ïî';
$lang['Sort'] = 'Óïîðÿäî÷èòü';
$lang['Sort_Top_Ten'] = 'äåñÿòü ñàìûõ àêòèâíûõ ó÷àñòíèêîâ';
$lang['Sort_Joined'] = 'äàòå ðåãèñòðàöèè';
$lang['Sort_Username'] = 'èìåíè ïîëüçîâàòåëÿ';
$lang['Sort_Location'] = 'ìåñòîíàõîæäåíèþ';
$lang['Sort_Posts'] = 'êîëè÷åñòâó ñîîáùåíèé';
$lang['Sort_Email'] = 'àäðåñó E-mail';
$lang['Sort_Website'] = 'àäðåñó ñàéòà';
$lang['Sort_Ascending'] = 'ïî âîçðàñòàíèþ';
$lang['Sort_Descending'] = 'ïî óáûâàíèþ';
$lang['Order'] = ''; // íå íóæíî, â àíãëèéñêîì èñïîëüçóåòñÿ â êîíòåêñòå 'Order ascending'


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Ïàíåëü óïðàâëåíèÿ ãðóïïàìè';
$lang['Group_member_details'] = 'Èíôîðìàöèÿ î ÷ëåíñòâå â ãðóïïàõ';
$lang['Group_member_join'] = 'Âñòóïèòü â ãðóïïó';

$lang['Group_Information'] = 'Èíôîðìàöèÿ î ãðóïïå';
$lang['Group_name'] = 'Íàçâàíèå ãðóïïû';
$lang['Group_description'] = 'Îïèñàíèå ãðóïïû';
$lang['Group_membership'] = '×ëåíñòâî â ãðóïïå';
$lang['Group_Members'] = '×ëåíû ãðóïïû';
$lang['Group_Moderator'] = 'Ìîäåðàòîð ãðóïïû';
$lang['Pending_members'] = 'Êàíäèäàòû â ÷ëåíû ãðóïïû';

$lang['Group_type'] = 'Òèï ãðóïïû';
$lang['Group_open'] = 'Ãðóïïà ñ îòêðûòûì ÷ëåíñòâîì';
$lang['Group_closed'] = 'Ãðóïïà ñ çàêðûòûì ÷ëåíñòâîì';
$lang['Group_hidden'] = 'Ñêðûòàÿ ãðóïïà';

$lang['Current_memberships'] = 'ßâëÿåòåñü ÷ëåíîì ãðóïï';
$lang['Non_member_groups'] = 'Íå ÿâëÿåòåñü ÷ëåíîì ãðóïï';
$lang['Memberships_pending'] = 'Êàíäèäàò â ÷ëåíû ãðóïï';

$lang['No_groups_exist'] = 'Íåò íè îäíîé ãðóïïû';
$lang['Group_not_exist'] = 'Òàêîé ãðóïïû íå ñóùåñòâóåò';

$lang['Join_group'] = 'Âñòóïèòü â ãðóïïó';
$lang['No_group_members'] = 'Â ýòîé ãðóïïå íåò íè îäíîãî ÷ëåíà';
$lang['Group_hidden_members'] = 'Ýòà ãðóïïà ñêðûòà, âû íå ìîæåòå ïîñìîòðåòü å¸ ñîñòàâ';
$lang['No_pending_group_members'] = 'Â ýòîé ãðóïïå íåò êàíäèäàòîâ â ÷ëåíû';
$lang['Group_joined'] = 'Âû ïîïðîñèëè î âñòóïëåíèè â ãðóïïó. Êîãäà âàøó ïðîñüáó îäîáðèò ìîäåðàòîð ãðóïïû, âàì áóäåò ïðèñëàíî óâåäîìëåíèå.';
$lang['Group_request'] = 'Áûëî ïîäàíà ïðîñüáà î âñòóïëåíèè â ãðóïïó.';
$lang['Group_approved'] = 'Âàøà ïðîñüáà áûëà óäîâëåòâîðåíà.';
$lang['Group_added'] = 'Âû áûëè âêëþ÷åíû â ãðóïïó';
$lang['Already_member_group'] = 'Âû óæå ÿâëÿåòåñü ÷ëåíîì ýòîé ãðóïïû';
$lang['User_is_member_group'] = 'Ïîëüçîâàòåëü óæå ÿâëÿåòñÿ ÷ëåíîì ýòîé ãðóïïû';
$lang['Group_type_updated'] = 'Òèï ãðóïïû óñïåøíî èçìåí¸í';

$lang['Could_not_add_user'] = 'Âûáðàííîãî ïîëüçîâàòåëÿ íå ñóùåñòâóåò';
$lang['Could_not_anon_user'] = 'Âû íå ìîæåòå ñäåëàòü àíîíèìíîãî ïîëüçîâàòåëÿ ÷ëåíîì ãðóïïû';

$lang['Confirm_unsub'] = 'Âû óâåðåíû, ÷òî õîòèòå âûéòè èç ýòîé ãðóïïû?';
$lang['Confirm_unsub_pending'] = 'Âû óâåðåíû, ÷òî õîòèòå îòêàçàòüñÿ îò ó÷àñòèÿ â ýòîé ãðóïïå? Âàøà ïðîñüáà î âñòóïëåíèè íå áûëà íè óäîâëåòâîðåíà, íè îòêëîíåíà!';

$lang['Unsub_success'] = 'Âû óñïåøíî ïîêèíóëè ýòó ãðóïïó.';

$lang['Approve_selected'] = 'Îäîáðèòü âûäåëåííîå';
$lang['Deny_selected'] = 'Îòêëîíèòü âûäåëåííîå';
$lang['Not_logged_in'] = 'Âû äîëæíû âîéòè â ñèñòåìó, ïðåæäå ÷åì âñòóïàòü â ãðóïïó.';
$lang['Remove_selected'] = 'Óäàëèòü âûäåëåííîå';
$lang['Add_member'] = 'Äîáàâèòü ÷ëåíà ãðóïïû';
$lang['Not_group_moderator'] = 'Âû íå ÿâëÿåòåñü ìîäåðàòîðîì ãðóïïû è íå ìîæåòå âûïîëíèòü äàííîå äåéñòâèå';

$lang['Login_to_join'] = 'Âîéäèòå â ñèñòåìó, ÷òîáû ìåíÿòü ñâî¸ ÷ëåíñòâî â ãðóïïàõ';
$lang['This_open_group'] = 'Ýòî ãðóïïà ñ îòêðûòûì ÷ëåíñòâîì, âû ìîæåòå ïîäàòü ïðîñüáó î âñòóïëåíèè';
$lang['This_closed_group'] = 'Ýòî ãðóïïà ñ çàêðûòûì ÷ëåíñòâîì, íîâûå ïîëüçîâàòåëè íå ïðèíèìàþòñÿ';
$lang['This_hidden_group'] = 'Ýòî ñêðûòàÿ ãðóïïà, àâòîìàòè÷åñêîå äîáàâëåíèå ïîëüçîâàòåëåé íå ðàçðåøàåòñÿ';
$lang['Member_this_group'] = 'Âû ÷ëåí ýòîé ãðóïïû';
$lang['Pending_this_group'] = 'Âû êàíäèäàò â ÷ëåíû ýòîé ãðóïïû';
$lang['Are_group_moderator'] = 'Âû ìîäåðàòîð ýòîé ãðóïïû';
$lang['None'] = 'Íåò';

$lang['Subscribe'] = 'Ïîäïèñàòüñÿ';
$lang['Unsubscribe'] = 'Îòïèñàòüñÿ';
$lang['View_Information'] = 'Ïðîñìîòðåòü èíôîðìàöèþ';


//
// Search
//
$lang['Search_query'] = 'Çàïðîñ';
$lang['Search_options'] = 'Ïàðàìåòðû çàïðîñà';

$lang['Search_keywords'] = 'Êëþ÷åâûå ñëîâà';
$lang['Search_keywords_explain'] = 'Âû ìîæåòå èñïîëüçîâàòü <u>AND</u> ÷òîáû îïðåäåëèòü ñëîâà, êîòîðûå äîëæíû áûòü â ðåçóëüòàòàõ, <u>OR</u> äëÿ ñëîâ, êîòîðûå ìîãóò áûòü â ðåçóëüòàòàõ, è <u>NOT</u> äëÿ ñëîâ, êîòîðûõ â ðåçóëüòàòàõ áûòü íå äîëæíî. Èñïîëüçóéòå * â êà÷åñòâå øàáëîíà äëÿ ÷àñòè÷íîãî ñîâïàäåíèÿ.';
$lang['Search_author'] = 'Ïîèñê ïî àâòîðó';
$lang['Search_author_explain'] = 'Èñïîëüçóéòå * â êà÷åñòâå øàáëîíà';

$lang['Search_for_any'] = 'Èñêàòü ëþáîå ñëîâî/ïîèñê ñ ÿçûêîì çàïðîñîâ';
$lang['Search_for_all'] = 'Èñêàòü âñå ñëîâà';
$lang['Search_title_msg'] = 'Èñêàòü â íàçâàíèÿõ òåì è òåêñòàõ ñîîáùåíèé';
$lang['Search_msg_only'] = 'Èñêàòü òîëüêî â òåêñòàõ ñîîáùåíèé';

$lang['Return_first'] = 'Ïîêàçûâàòü ïåðâûå'; // followed by xxx characters
$lang['characters_posts'] = 'ñèìâîëîâ ñîîáùåíèé';

$lang['Search_previous'] = 'Âðåìÿ ðàçìåùåíèÿ'; // followed by days, weeks, months, year, all

$lang['Sort_by'] = 'Óïîðÿäî÷èòü ïî';
$lang['Sort_Time'] = 'âðåìåíè ðàçìåùåíèÿ';
$lang['Sort_Post_Subject'] = 'çàãîëîâêó ñîîáùåíèÿ';
$lang['Sort_Topic_Title'] = 'òåìå';
$lang['Sort_Author'] = 'àâòîðó';
$lang['Sort_Forum'] = 'ôîðóìó';

$lang['Display_results'] = 'Ïîêàçûâàòü ðåçóëüòàòû êàê';
$lang['All_available'] = 'Âñå èìåþùèåñÿ';
$lang['No_searchable_forums'] = 'Ó âàñ íåò äîñòóïà ê ïîèñêó íè â îäíîì èç ôîðóìîâ íà ñàéòå';

$lang['No_search_match'] = 'Ïîäõîäÿùèõ òåì èëè ñîîáùåíèé íå íàéäåíî';
$lang['Found_search_match'] = 'Ðåçóëüòàòîâ ïîèñêà: %d'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Ðåçóëüòàòîâ ïîèñêà: %d'; // eg. Search found 24 matches

$lang['Close_window'] = 'Çàêðûòü îêíî';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Èçâèíèòå, òîëüêî %s ìîãóò ðàçìåùàòü îáúÿâëåíèÿ â ýòîì ôîðóìå';
$lang['Sorry_auth_sticky'] = 'Èçâèíèòå, òîëüêî %s ìîãóò ðàçìåùàòü âàæíûå òåìû â ýòîì ôîðóìå'; 
$lang['Sorry_auth_read'] = 'Èçâèíèòå, òîëüêî %s ìîãóò ÷èòàòü ñîîáùåíèÿ â ýòîì ôîðóìå'; 
$lang['Sorry_auth_post'] = 'Èçâèíèòå, òîëüêî %s ìîãóò íà÷èíàòü òåìû â ýòîì ôîðóìå'; 
$lang['Sorry_auth_reply'] = 'Èçâèíèòå, òîëüêî %s ìîãóò îòâå÷àòü íà ñîîáùåíèÿ â ýòîì ôîðóìå'; 
$lang['Sorry_auth_edit'] = 'Èçâèíèòå, òîëüêî %s ìîãóò ðåäàêòèðîâàòü ñîîáùåíèÿ â ýòîì ôîðóìå'; 
$lang['Sorry_auth_delete'] = 'Èçâèíèòå, òîëüêî %s ìîãóò óäàëÿòü ñîîáùåíèÿ â ýòîì ôîðóìå'; 
$lang['Sorry_auth_vote'] = 'Èçâèíèòå, òîëüêî %s ìîãóò ãîëîñîâàòü â îïðîñàõ ýòîãî ôîðóìà'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>ãîñòè</b>';
$lang['Auth_Registered_Users'] = '<b>çàðåãèñòðèðîâàííûå ïîëüçîâàòåëè</b>';
$lang['Auth_Users_granted_access'] = '<b>ïîëüçîâàòåëè ñî ñïåöèàëüíûìè ïðàâàìè äîñòóïà</b>';
$lang['Auth_Moderators'] = '<b>ìîäåðàòîðû</b>';
$lang['Auth_Administrators'] = '<b>àäìèíèñòðàòîðû</b>';

$lang['Not_Moderator'] = 'Âû íå ÿâëÿåòåñü ìîäåðàòîðîì ýòîãî ôîðóìà';
$lang['Not_Authorised'] = 'Íåò äîñòóïà';

$lang['You_been_banned'] = 'Âàì áûë çàêðûò äîñòóï ê ôîðóìó<br />Îáðàòèòåñü ê âåáìàñòåðó èëè àäìèíèñòðàòîðó ôîðóìîâ çà äîïîëíèòåëüíîé èíôîðìàöèåé';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Ñåé÷àñ íà ôîðóìå çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé: 0 è '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Ñåé÷àñ íà ôîðóìå çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé: %d è '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Ñåé÷àñ íà ôîðóìå çàðåãèñòðèðîâàííûõ ïîëüçîâàòåëåé: %d è ';
$lang['Hidden_users_zero_online'] = 'ñêðûòûõ ïîëüçîâàòåëåé: 0'; // 6 Hidden users online
$lang['Hidden_users_online'] = 'ñêðûòûõ ïîëüçîâàòåëåé: %d';
$lang['Hidden_user_online'] = 'ñêðûòûõ ïîëüçîâàòåëåé: %d'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Ñåé÷àñ íà ôîðóìå ãîñòåé: %d';
$lang['Guest_users_zero_online'] = 'Ñåé÷àñ íà ôîðóìå ãîñòåé: 0'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Ñåé÷àñ íà ôîðóìå ãîñòåé: %d';
$lang['No_users_browsing'] = 'Ýòîò ôîðóì ñåé÷àñ íèêòî íå ïðîñìàòðèâàåò';

$lang['Online_explain'] = 'Ýòè äàííûå îñíîâàíû íà àêòèâíîñòè ïîëüçîâàòåëåé çà ïîñëåäíèå ïÿòü ìèíóò';

$lang['Forum_Location'] = 'Ìåñòî íà ôîðóìå';
$lang['Last_updated'] = 'Ïîñëåäíåå èçìåíåíèå';

$lang['Forum_index'] = 'Ñïèñîê ôîðóìîâ';
$lang['Logging_on'] = 'Âõîä â ñèñòåìó';
$lang['Posting_message'] = 'Ðàçìåùåíèå ñîîáùåíèÿ';
$lang['Searching_forums'] = 'Ïîèñê ïî ôîðóìó';
$lang['Viewing_profile'] = 'Ïðîñìîòð ïðîôèëÿ';
$lang['Viewing_online'] = 'Ïðîñìîòð &laquo;Êòî ñåé÷àñ íà ôîðóìå&raquo;';
$lang['Viewing_member_list'] = 'Ïðîñìîòð ñïèñêà ïîëüçîâàòåëåé';
$lang['Viewing_priv_msgs'] = 'Ïðîñìîòð ëè÷íûõ ñîîáùåíèé';
$lang['Viewing_FAQ'] = 'Ïðîñìîòð FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Ïàíåëü ìîäåðàöèè';
$lang['Mod_CP_explain'] = 'Çäåñü âû ìîæåòå ïðîâîäèòü ìàññîâóþ ìîäåðàöèþ ýòîãî ôîðóìà. Âû ìîæåòå çàêðûâàòü, îòêðûâàòü, ïåðåìåùàòü èëè óäàëÿòü ëþáîå êîëè÷åñòâî òåì.';

$lang['Select'] = 'Âûáðàòü';
$lang['Delete'] = 'Óäàëèòü';
$lang['Move'] = 'Ïåðåìåñòèòü';
$lang['Lock'] = 'Çàêðûòü';
$lang['Unlock'] = 'Îòêðûòü';

$lang['Topics_Removed'] = 'Âûáðàííûå òåìû áûëè óñïåøíî óäàëåíû èç áàçû äàííûõ';
$lang['Topics_Locked'] = 'Âûáðàííûå òåìû áûëè çàêðûòû';
$lang['Topics_Moved'] = 'Âûáðàííûå òåìû áûëè ïåðåìåùåíû';
$lang['Topics_Unlocked'] = 'Âûáðàííûå òåìû áûëè îòêðûòû';
$lang['No_Topics_Moved'] = 'Íå áûëî ïåðåíåñåíî íè îäíîé òåìû';

$lang['Confirm_delete_topic'] = 'Âû äåéñòâèòåëüíî õîòèòå óäàëèòü âûáðàííûå òåìû?';
$lang['Confirm_lock_topic'] = 'Âû äåéñòâèòåëüíî õîòèòå çàêðûòü âûáðàííûå òåìû?';
$lang['Confirm_unlock_topic'] = 'Âû äåéñòâèòåëüíî õîòèòå îòêðûòü âûáðàííûå òåìû?';
$lang['Confirm_move_topic'] = 'Âû äåéñòâèòåëüíî õîòèòå ïåðåìåñòèòü âûáðàííûå òåìû?';

$lang['Move_to_forum'] = 'Ïåðåìåñòèòü â ôîðóì';
$lang['Leave_shadow_topic'] = 'Îñòàâèòü ññûëêó â ñòàðîì ôîðóìå';

$lang['Split_Topic'] = 'Ðàçäåëåíèå òåìû';
$lang['Split_Topic_explain'] = 'Ñ èñïîëüçîâàíèåì ýòîé ôîðìû âû ìîæåòå ðàçäåëèòü òåìó íà äâå ëèáî âûáèðàÿ ñîîáùåíèÿ ïî îäíîìó, ëèáî ðàçáèâ ïî âûáðàííîìó ñîîáùåíèþ';
$lang['Split_title'] = 'Çàãîëîâîê íîâîé òåìû';
$lang['Split_forum'] = 'Ôîðóì äëÿ íîâîé òåìû';
$lang['Split_posts'] = 'Îòäåëèòü âûáðàííûå ñîîáùåíèÿ';
$lang['Split_after'] = 'Îòäåëèòü âñå ñîîáùåíèÿ ïîñëå âûáðàííîãî';
$lang['Topic_split'] = 'Âûáðàííàÿ òåìà áûëà óñïåøíî îòäåëåíà';

$lang['Too_many_error'] = 'Âû âûáðàëè ñëèøêîì ìíîãî ñîîáùåíèé. Âû ìîæåòå âûáðàòü òîëüêî îäíî ñîîáùåíèå, ÷òîáû îòäåëèòü âñå ñîîáùåíèÿ ïîñëå íåãî.';

$lang['None_selected'] = 'Âû íå âûáðàëè íè îäíîé òåìû äëÿ ñîâåðøåíèÿ ýòîé îïåðàöèè. Âåðíèòåñü íàçàä è âûáåðèòå.';
$lang['New_forum'] = 'Íîâûé ôîðóì';

$lang['This_posts_IP'] = 'IP àäðåñ äëÿ ýòîãî ñîîáùåíèÿ';
$lang['Other_IP_this_user'] = 'Äðóãèå IP àäðåñà ñ êîòîðûõ ïèñàë ýòîò ïîëüçîâàòåëü';
$lang['Users_this_IP'] = 'Ïîëüçîâàòåëè, ïèñàâøèå ñ ýòîãî IP';
$lang['IP_info'] = 'Èíôîðìàöèÿ îá IP àäðåñå';
$lang['Lookup_IP'] = 'Ïîñìîòðåòü õîñò äëÿ IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '×àñîâîé ïîÿñ: %s'; // This is followed by GMT and the timezone offset

$lang['-12'] = 'GMT - 12';
$lang['-11'] = 'GMT - 11';
$lang['-10'] = 'GMT - 10';
$lang['-9'] = 'GMT - 9';
$lang['-8'] = 'GMT - 8';
$lang['-7'] = 'GMT - 7';
$lang['-6'] = 'GMT - 6';
$lang['-5'] = 'GMT - 5';
$lang['-4'] = 'GMT - 4';
$lang['-3.5'] = 'GMT - 3:30';
$lang['-3'] = 'GMT - 3';
$lang['-2'] = 'GMT - 2';
$lang['-1'] = 'GMT - 1';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1';
$lang['2'] = 'GMT + 2';
$lang['3'] = 'GMT + 3';
$lang['3.5'] = 'GMT + 3:30';
$lang['4'] = 'GMT + 4';
$lang['4.5'] = 'GMT + 4:30';
$lang['5'] = 'GMT + 5';
$lang['5.5'] = 'GMT + 5:30';
$lang['6'] = 'GMT + 6';
$lang['6.5'] = 'GMT + 6:30';
$lang['7'] = 'GMT + 7';
$lang['8'] = 'GMT + 8';
$lang['9'] = 'GMT + 9';
$lang['9.5'] = 'GMT + 9:30';
$lang['10'] = 'GMT + 10';
$lang['11'] = 'GMT + 11';
$lang['12'] = 'GMT + 12';

// ýòî äëÿ âûïàäàþùåãî ìåíþ, ðàíüøå òóò åù¸ áûëè ãîðîäà
$lang['tz']['-12'] = 'GMT - 12';
$lang['tz']['-11'] = 'GMT - 11';
$lang['tz']['-10'] = 'GMT - 10';
$lang['tz']['-9'] = 'GMT - 9';
$lang['tz']['-8'] = 'GMT - 8';
$lang['tz']['-7'] = 'GMT - 7';
$lang['tz']['-6'] = 'GMT - 6';
$lang['tz']['-5'] = 'GMT - 5';
$lang['tz']['-4'] = 'GMT - 4';
$lang['tz']['-3.5'] = 'GMT - 3:30';
$lang['tz']['-3'] = 'GMT - 3';
$lang['tz']['-2'] = 'GMT - 2';
$lang['tz']['-1'] = 'GMT - 1';
$lang['tz']['0'] = 'GMT (âðåìÿ ïî Ãðèíâè÷ó)';
$lang['tz']['1'] = 'GMT + 1';
$lang['tz']['2'] = 'GMT + 2';
$lang['tz']['3'] = 'GMT + 3 (ìîñêîâñêîå âðåìÿ)';
$lang['tz']['3.5'] = 'GMT + 3:30';
$lang['tz']['4'] = 'GMT + 4 (ëåòíåå ìîñêîâñêîå âðåìÿ)';
$lang['tz']['4.5'] = 'GMT + 4:30';
$lang['tz']['5'] = 'GMT + 5';
$lang['tz']['5.5'] = 'GMT + 5:30';
$lang['tz']['6'] = 'GMT + 6';
$lang['tz']['6.5'] = 'GMT + 6:30';
$lang['tz']['7'] = 'GMT + 7';
$lang['tz']['8'] = 'GMT + 8';
$lang['tz']['9'] = 'GMT + 9';
$lang['tz']['9.5'] = 'GMT + 9:30';
$lang['tz']['10'] = 'GMT + 10';
$lang['tz']['11'] = 'GMT + 11';
$lang['tz']['12'] = 'GMT + 12';

$lang['datetime']['Sunday'] = 'Âîñêðåñåíüå';
$lang['datetime']['Monday'] = 'Ïîíåäåëüíèê';
$lang['datetime']['Tuesday'] = 'Âòîðíèê';
$lang['datetime']['Wednesday'] = 'Ñðåäà';
$lang['datetime']['Thursday'] = '×åòâåðã';
$lang['datetime']['Friday'] = 'Ïÿòíèöà';
$lang['datetime']['Saturday'] = 'Ñóááîòà';
$lang['datetime']['Sun'] = 'Âñ';
$lang['datetime']['Mon'] = 'Ïí';
$lang['datetime']['Tue'] = 'Âò';
$lang['datetime']['Wed'] = 'Ñð';
$lang['datetime']['Thu'] = '×ò';
$lang['datetime']['Fri'] = 'Ïò';
$lang['datetime']['Sat'] = 'Ñá';
$lang['datetime']['January'] = 'ßíâàðü';
$lang['datetime']['February'] = 'Ôåâðàëü';
$lang['datetime']['March'] = 'Ìàðò';
$lang['datetime']['April'] = 'Àïðåëü';
$lang['datetime']['May'] = 'Ìàé';
$lang['datetime']['June'] = 'Èþíü';
$lang['datetime']['July'] = 'Èþëü';
$lang['datetime']['August'] = 'Àâãóñò';
$lang['datetime']['September'] = 'Ñåíòÿáðü';
$lang['datetime']['October'] = 'Îêòÿáðü';
$lang['datetime']['November'] = 'Íîÿáðü';
$lang['datetime']['December'] = 'Äåêàáðü';
$lang['datetime']['Jan'] = 'ßíâ';
$lang['datetime']['Feb'] = 'Ôåâ';
$lang['datetime']['Mar'] = 'Ìàð';
$lang['datetime']['Apr'] = 'Àïð';
$lang['datetime']['May'] = 'Ìàé';
$lang['datetime']['Jun'] = 'Èþí';
$lang['datetime']['Jul'] = 'Èþë';
$lang['datetime']['Aug'] = 'Àâã';
$lang['datetime']['Sep'] = 'Ñåí';
$lang['datetime']['Oct'] = 'Îêò';
$lang['datetime']['Nov'] = 'Íîÿ';
$lang['datetime']['Desc'] = 'Äåê';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Èíôîðìàöèÿ';
$lang['Critical_Information'] = 'Êðèòè÷åñêàÿ èíôîðìàöèÿ';

$lang['General_Error'] = 'Îáùàÿ îøèáêà';
$lang['Critical_Error'] = 'Êðèòè÷åñêàÿ îøèáêà';
$lang['An_error_occured'] = 'Ïðîèçîøëà îøèáêà';
$lang['A_critical_error'] = 'Ïðîèçîøëà êðèòè÷åñêàÿ îøèáêà';

//
// That's all Folks!
// -------------------------------------------------

?>