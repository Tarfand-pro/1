<?php
ob_start();
include 'administrative/access/Class.php';
// Variable Source
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$chat_id = $update->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$from_id = $update->message->from->id;
 //========================
$forward_id = $update->message->forward_from->id;
$first = $update->message->from->first_name;
$username = $update->message->from->username;
$text = $update->message->text;
$message_id = $update->message->message_id;
$m = $gold - 20;
$txt = $update->callback_query->message->text;
$messageid = $update->callback_query->message->message_id;
$block = file_get_contents("administrative/block-list.txt");
$feed = 394653247;
$banall = file_get_contents("administrative/banall-member/banall.txt");
$time = file_get_contents("https://provps.ir/td?td=time");
$date = file_get_contents("https://provps.ir/td?td=date");
$command = file_get_contents('administrative/user/'.$from_id."/command.txt");
$vipbot = file_get_contents('administrative/user/'.$from_id."/vipp.txt");
$idtxt = file_get_contents("administrative/access/robots.txt");
$idpushe = file_get_contents("Bot/$idtxt/other/access/mum.txt");
$tokentxt = file_get_contents("administrative/tokensadmins/token/$idtxt.txt");
$create = file_get_contents('administrative/user/'.$from_id."/create.txt");
$cre = file_get_contents('administrative/user/'.$from_id."/cre.txt");
$karbarash = file_get_contents('administrative/user/'.$from_id."/gold.txt");
$gold = file_get_contents('administrative/user/'.$from_id."/gold.txt");
$goldacc = file_get_contents('administrative/user/'.$from_id."/goldacc.txt");
$wait = file_get_contents('administrative/user/'.$from_id."/wait.txt");
$codefree = file_get_contents('administrative/user/'.$from_id."/codefree.txt");
$Member = file_get_contents('administrative/access/mum.txt');
$url_s2a = file_get_contents("administrative/user/".$from_id."/url_s2a.txt");
$text_s2a = file_get_contents("administrative/user/".$from_id."/text_s2a.txt");
$from_chat_msg_id = $update->message->forward_from_message_id;
$from_chat_username = $update->message->forward_from_chat->username;
$bot = file_get_contents('administrative/user/'.$from_id."/bot.txt");
$datetime = json_decode(file_get_contents("http://api.norbert-team.ir/date-time/"));
$time = file_get_contents("http://provps.ir/td/?td=time");
$date = file_get_contents("http://provps.ir/td/?td=date");
$stickerid = $update->message->sticker->file_id;
$videoid = $update->message->video->file_id;
$nan = file_get_contents("administrative/admins.txt");
$idtxt = file_get_contents("administrative/access/robots.txt");
$idpushe = file_get_contents("Bot/$idtxt/other/access/mum.txt");
$voiceid = $update->message->voice->file_id;
$textmessage = isset($update->message->text)?$update->message->text:'';
$membersvip = file_get_contents("administrative/user/$from_id/gold.txt");
$fileid = $update->message->document->file_id;
$photoid = $update->message->photo->file_id;
$musicid = $update->message->audio->file_id;
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot442580454:AAE2S6gM6pVzGTMLc9-q3ZQJtRWmkKl_wfo/getChatMember?chat_id=@syeioo&user_id=".$from_id));
$tch = $truechannel->result->status;
$message_id = $update->message->message_id;
$message_id_call = $update->callback_query->message->message_id;
$ban_all = file_get_contents("administrative/user/banall.txt");
//=========
    if (strpos($banall , "$from_id") !== false) {
	return false;
	}
	elseif (strpos($block , "$from_id") !== false) {
	return false;
	}
	elseif ($from_id != $chat_id and $chat_id != $feed) {
	LeaveChat($chat_id);
	}
	elseif (strpos($banall , "$from_id") !== false  ) {
  SendMessage($chat_id,"*You Are GloballyBanned From Server.❌
Don't Message Again...❌*
➖➖➖➖➖➖➖➖➖➖`
دسترسی شما به این سرور مسدود شده است.❌
لطفا پیام ندهید...❌`");
 }
	//===============
	//===============
	elseif(preg_match('/^\/([Ss]tart)(.*)/',$text)){
	preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
	$match[2] = str_replace(" ","",$match[2]);
	$match[2] = str_replace("\n","",$match[2]);
	if($match[2] != null){
	if (strpos($Member , "$from_id") == false){
	if($match[2] != $from_id){
	if (strpos($gold , "$from_id") == false){
	$txxt = file_get_contents('administrative/user/'.$match[2]."/gold.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($from_id,$pmembersid)){
      $aaddd = file_get_contents('administrative/user/'.$match[2]."/gold.txt");
		save('administrative/user/'.$match[2]."/gold.txt",$aaddd+1);
    }
	SendMessage($match[2],"🆕 یک نفر با لینک اختصاصی شما وارد ربات شد","html","true",$button_official_fa);
	}
	}
	}
	}
	mkdir('administrative/user/'.$from_id);
	if($from_id == $Member){
	SendMessage($chat_id,"🇮🇷لطفا زبان خود را انتخاب کنید :
➖➖➖➖➖➖➖➖
🇬🇧Please choose your language :","html","true",$button_lang);
	}else{
	SendMessage($chat_id,"🇮🇷لطفا زبان خود را انتخاب کنید :
➖➖➖➖➖➖➖➖
🇬🇧Please choose your language :","html","true",$button_lang);
	}
	}
	//===============
	elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
	SendMessage($chat_id,"📛 برای حمایت از ما و همچنان ربات ابتدا وارد کانال زیر بشید 👇

🆔 @syeioo

✅ سپس روی JOIN بزنید و به ربات برگشته عبارت 👇

🔸 /start

✴️ رو بزنید تا دکمه های ربات نمایش داده بشن👌","html","true",$button_remove);
	}
  
  
  elseif($text == '↩️منوی اصلی'){
  save('administrative/user/'.$from_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_admin);
  }else{
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_fa);
  }
  }
  //===============
    elseif($text == 'فارسی 🇮🇷'){
      save('administrative/user/'.$from_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"ســلام $name عزیزم😄

✳️ به ربات ساز تلگرام
در ساعت : $time ⏰
و تاریخ : $date 🗓

 خوش اومدی❤️

🅾️ با استفاده از این سرویس شما میتوانید رباتی جهت ارائه پشتیبانی به کاربران ربات، کانال، گروه، وبسایت یا وبلاگ و... خود ایجاد کنید.

⚛️ برای ساخت ربات دکمه (🛠ساختن ربات) رو بزنید.

برای دیدن آموزش دریافت توکن نیز روی دکمه ( راهنما) بزنید و یا از فیلم های آموزشی استفاده کنید.
🆔 @pvsaz5450bot","html","true",$button_official_admin);
  }else{
  SendMessage($chat_id,"زبان فارسی 🇮🇷 تنظیم شد
  ســلام $name عزیزم😄

✳️ به ربات ساز تلگرام
در ساعت : $time ⏰
و تاریخ : $date 🗓

 خوش اومدی❤️

🅾️ با استفاده از این سرویس شما میتوانید رباتی جهت ارائه پشتیبانی به کاربران ربات، کانال، گروه، وبسایت یا وبلاگ و... خود ایجاد کنید.

⚛️ برای ساخت ربات دکمه (🛠ساختن ربات) رو بزنید.

برای دیدن آموزش دریافت توکن نیز روی دکمه ( راهنما) بزنید و یا از فیلم های آموزشی استفاده کنید.
🆔 @pvsaz5450bot ","html","true",$button_official_fa);
  }
  }
  //===============
    elseif($text == 'English 🇦🇺'){
      save('administrative/user/'.$from_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"زبان انگلیسی در دسترس نمیباشد 
  زبان فارسی تنظیم شد!
  ","html","true",$button_official_fa);
  }
  }
  //===============
    elseif($text == '🇦🇺 تغییر زبان 🇮🇷'){
      save('administrative/user/'.$from_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"زبان مورد نظر را انتخاب کنید","html","true",$button_lang);
  }else{
  SendMessage($chat_id,"زبان مورد نظر را انتخاب کنید ","html","true",$button_lang);
  }
  }
  //===============
     elseif($text == '🇦🇺 Change Language 🇮🇷'){
      save('administrative/user/'.$from_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"Select your preferred language","html","true",$button_lang);
  }else{
  SendMessage($chat_id,"Select your preferred language ","html","true",$button_lang);
  }
  }
  //===============
	elseif(preg_match('/^\/([Cc][Oo][Dd][Ee]) (.*)/',$text)){
	preg_match('/^\/([Cc][Oo][Dd][Ee]) (.*)/',$text,$match);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$match[2].txt")){
	$code = file_get_contents("administrative/code/$match[2].txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$match[2]);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	/*elseif($text == "🎁استفاده از کد💎"){
  SendMessage($chat_id,"برای ویژه کردن نوع رباتت رو انتخاب کن👇","html","true",$button_bots);
}*/
	elseif($text == "🎁استفاده از کد💎"){
      SendMessage($chat_id,"از دستور
/code CODEMOREDNAZAR
استفاده کنید");

}
elseif($text == "🗣پیامرسان⚙️"){
	save('administrative/user/'.$from_id."/command.txt","checkcode");
  SendMessage($chat_id,"💎کدی که در کانال برای ویژه شدن ربات ارسال شده رو بفرست","html","true",$button_back);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$text.txt")){
	$code = file_get_contents("administrative/code/$text.txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$text);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
نوع ربات: پیام رسان
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	///bot2
	elseif($text == "🖇 تبچی api 🏷"){
	save('administrative/user/'.$from_id."/command.txt","checkcode");
  SendMessage($chat_id,"💎کدی که در کانال برای ویژه شدن ربات ارسال شده رو بفرست","html","true",$button_back);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$text.txt")){
	$code = file_get_contents("administrative/code/$text.txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$text);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
نوع ربات: تبچی
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	///bot3
	elseif($text == "🛒فروشگاه🛒"){
	save('administrative/user/'.$from_id."/command.txt","checkcode");
  SendMessage($chat_id,"💎کدی که در کانال برای ویژه شدن ربات ارسال شده رو بفرست","html","true",$button_back);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$text.txt")){
	$code = file_get_contents("administrative/code/$text.txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$text);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
نوع ربات: فروشگاه
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	///bot4
	elseif($text == "👁‍🗨ویو گیر👁‍🗨"){
	save('administrative/user/'.$from_id."/command.txt","checkcode");
  SendMessage($chat_id,"💎کدی که در کانال برای ویژه شدن ربات ارسال شده رو بفرست","html","true",$button_back);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$text.txt")){
	$code = file_get_contents("administrative/code/$text.txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$text);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
نوع ربات: ویوگیر
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	///bot5
	elseif($text == "⚙️بنردهی🤖"){
	save('administrative/user/'.$from_id."/command.txt","checkcode");
  SendMessage($chat_id,"💎کدی که در کانال برای ویژه شدن ربات ارسال شده رو بفرست","html","true",$button_back);
	if($codefree == 'true' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ شما قبلا یک بار از این امکان استفاده کردید.","html","true");
	}else{
	if(file_exists("administrative/code/$text.txt")){
	$code = file_get_contents("administrative/code/$text.txt");
	if($code == 'true'){
	SendMessage($chat_id,"✴️ کد استفاده شده.","html","true");
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	save('administrative/user/'.$from_id."/wait.txt",$text);
	SendMessage($chat_id,"🤖 آیدی ربات رو وارد کنید:
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}else{
	SendMessage($chat_id,"🅾 کد مورد نظر وجود ندارد.","html","true");
	}
	}
	}
	//===============
	elseif($command == 'code free'){
	$code = file_get_contents("administrative/code/$wait.txt");
	if($code == 'true'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ آخ آخ یکی زودتر از شما کد رو استفاده کرد.","html","true",$button_official_fa);
	}else{
	$text = str_replace("@",'',$text);
	if(file_exists("Bot/$text")){
	$vip = file_get_contents("Bot/$text/other/setting/bot_type.txt");
	if($vip == 'gold'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($chat_id,"⛔️ ربات مورد نظر ویژه میباشد.","html","true",$button_official_fa);
	}else{
	save("administrative/code/$wait.txt","true");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/codefree.txt","true");
	save("Bot/$text/other/setting/bot_type.txt","gold");
	SendMessage($chat_id,"✅ ربات مورد نظر ویژه شد.","html","true",$button_official_fa);
	SendMessage($admin,"$first $from_id $wait","html","true");
	SendMessage($kanal,"💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
اطلاعات استفاده کننده از کد=
نام : <code>$first</code>
نوع ربات: بنردهی
یوزر ایدی : <code>$from_id</code>
کد استفاده شده: <code>$wait</code>
زمان استفاده : <code>$time</code>
تاریخ استفاده: <code>$date</code>
💌💌💌💌💌💌💌💌💌💌💌💌💌💌💌
🇮🇷 @syeioo
🇮🇷 @pvsaz5450bot","html","true");
	}
	}else{
	save('administrative/user/'.$from_id."/command.txt","code free");
	SendMessage($chat_id,"⭕️ ربات وجود ندارد.
	✳️ به حروف کوچیک و بزرگ آیدی دقت کنید.","html","true",$button_back);
	}
	}
	}
	
	elseif($text == '📊آمار فعلی ربات⌛️'){  
	  $txtt = file_get_contents('administrative/access/mum.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;
	$mmemcount_member = numberformat("$mmemcount",',');
	$txttt = file_get_contents('administrative/access/robots.txt');
    $member_id1 = explode("\n",$txttt);
    $mmemcount1 = count($member_id1) -1;
	$mmemcount_bots = numberformat("$mmemcount1",',');
	$txtttt = file_get_contents('administrative/access/allm.txt');
    $member_id111 = explode("\n",$txtttt);
    $mmemcount111 = count($member_id111) -1;
	$mmemcount_member_all_bot = numberformat("$mmemcount111",',');
	$adminHA = getFileList('administrative/tokensadmins/admin','.txt');
	$tokenHA = getFileList('administrative/tokensadmins/token','.txt');
	$bots = file_get_contents("administrative/access/UserName.txt");
	$exbot = explode("@",$bots);
	$c = count($exbot)-2;
	$botsss = '';
	if($exbot[$c-(-1)] != null){
	$botsss = $botsss."@".$exbot[$c-(-1)];
	}if($exbot[$c] != null){
	$botsss = $botsss."@".$exbot[$c];
	}if($exbot[$c-1] != null){
	$botsss = $botsss."@".$exbot[$c-1];
	}if($exbot[$c-2] != null){
	$botsss = $botsss."@".$exbot[$c-2];
	}if($exbot[$c-3] != null){
	$botsss = $botsss."@".$exbot[$c-3];
	}if($exbot[$c-4] != null){
	$botsss = $botsss."@".$exbot[$c-4];
	}if($exbot[$c-5] != null){
	$botsss = $botsss."@".$exbot[$c-5];
	}if($exbot[$c-6] != null){
	$botsss = $botsss."@".$exbot[$c-6];
	}if($exbot[$c-7] != null){
	$botsss = $botsss."@".$exbot[$c-7];
	}if($exbot[$c-8] != null){
	$botsss = $botsss."@".$exbot[$c-8];
	}
	$botsss = str_replace("\n",' | ',$botsss);
  SendMessage($chat_id,"آخرین آمار ربات تا ساعت ($time ) و تاریخ ($date ) این گونه میباشد👇👇👇

🤖 تعداد ربات ها:👇
$mmemcount_bots
  👥 تعداد اعضا ربات:👇
$mmemcount_member","html","true");
  }
  elseif($text == "❌حذف ربات⚠️"){
	sendMessage($chat_id,"به زودی این بخش کامل میشود!");  
  }
  //============
  elseif($text == '📮فوروارد همگانی' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","s2a fwd");
	SendMessage($chat_id,"📮 پیام مورد نظر را فوروارد کنید","html","true",$button_back);
	}
  //===============
  elseif($text == '⚠️راهنما'){
  SendMessage($chat_id,"1⃣ ابتدا به ربات ( @BotFather ) مراجعه کنید
2⃣ دستور /newbot رو ارسال کنید
3⃣ یک نام برای ربات ارسال کنید
4⃣ پس از ارسال نام،یک یوزرنیم ارسال کنید
❌ توجه کنین حتما باید در آخر یوزرنیم ارسالی کلمه bot با حروف کوچیک یا بزرگ (فرقی نداره) وجود داشته باشه
5⃣ اگر با پیغام زیر برخورد کردید
Sorry, this username is already taken. Please try something different.
یعنی قبلا یکی این یوزرنیم رو ثبت کرده یوزرنیم دیگری وارد کنید. اگر این پیغام رو دریافت نکردید یعنی کار حل است
6⃣ حالا به این ربات مراجعه کنید و دکمه (☢ساخت ربات) رو بزنید
7⃣ سپس پیام آخری که از ربات ( @BotFather ) دریافت کردید رو فوروارد کنید
8⃣ ربات شما با موفقیت ثبت شد

🆔 @syeioo","html","true");
  }
  //===============
  elseif($text == '⚠️Help'){
  SendMessage($chat_id,"1⃣ first robot (@BotFather) See
2⃣ command / newbot the post
3⃣ submit a name for the robot
4⃣ after sending your name, a username submit
❌ Notice username must finally write the word bot with small or large letters (Does not count) there is
5⃣ If you encounter the following message
Sorry, this username is already taken. Please try something different.
That's already one of the registered username enter a different username. If you do not receive this message, the task is solved
6⃣ now see the robot buttons (☢Build a Robot) press
7⃣ The last message from the robot (@BotFather) you get the ball forward
8⃣ was successfully registered your robot
🆔 @syeioo","html","true",$button_official_fa);
  }
  //===============
 
  //============
  //===============
    elseif($text == '⚜حساب ویژه'){
 sendMessage($chat_id,"جهت ویژه کردن ربات خود وارد لینک زیر شوید
https://www.payping.ir/d/yLN4
سپس در فیلد مربوطه ایدی ربات خودرا وارد کنید
<code>بعد از پرداخت ربات مربوطه ویژه خواهدشد!</code>
","HTML");
  }
  //================
   elseif($text == '⚜Special Account'){
 sendMessage($chat_id,"Especially VIP not for your robot enters the link below
https://zarinp.al/provps.ir/3000
<code>Then enter their robot in the Username field Eide</code>
<code>after payment of the corresponding robot will be special!</code>
","HTML");
  }
  //================
  elseif($command == 'gold acc 20'){
	if(file_exists("Bot/$text")){
	save("Bot/$text/other/setting/bot_type.txt","gold");
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/user/'.$from_id."/goldacc.txt","true");
	SendMessage($chat_id,"✅ حساب ربات ویژه شد","html","true",$button_official_fa);
	}else{
  SendMessage($chat_id,"🤖 آیدی بات رو بدون @ وارد کنید.آیدی وارد شده اشتباه است
⭕️ به کوچیک و بزرگی حروف دقت کنید","html","true");
  }
  }
  //===============
  elseif($text == '👥پشتیبانی'){
  SendMessage($chat_id,"🔸 دوست عزیز تمام نظراتتون رو میتونید به ربات زیر بفرستید ما 24 ساعته پاسخگوی شما هستیم و برای حل مشکل شما آماده ایم👇
🆔 @pvsaz5450supportbot","html","true");
  }
  //===============
    elseif($text == '👥Support'){
  SendMessage($chat_id,"You can send your comments to the robot 🔸 dear friend of all of us 24 hours to respond to you and we are ready to solve your problem Aym👇
🆔 @pvsaz5450supportbot","html","true");
  }
  //===============
  elseif($text == '⛔️قوانین'){
  SendMessage($chat_id,"ℹ قوانین استفاده از ربات:

☢ همه مطالب باید تابع قوانین جمهوری اسلامی ایران باشد.
☢ رعایت ادب و احترام به کاربران.
☢ ساخت هرگونه ربات در ضمیمه +18 خلاف قوانین ربات میباشد و در صورت مشاهده ربات مورد نظر مسدود و همچنین مدیر ربات از تمامی ربات ها بلاک میشود.
☢ مسئولیت پیام های رد و بدل شده در هر ربات با مدیر آن میباشد و ما هیچگونه مسئولیتی نداریم.
☢ در صورت مشاهده استفاده از قابلیت های ربات در جهات منفی به شدت برخورد میشود.
☢ اگر به هر دلیلی درخواست های ربات شما به سرور ما بیش از حد معمول باشد (و حساب ربات ویژه نباشد) چند باری به شما اخطار داده میشود اگر این اخطار ها نادیده گرفته شوند ربات شما مسدود و به هیچ عنوان از محدودیت خارج نمیشود.

🆔 @syeioo","html","true");
  }
  //===============
  elseif($text == '⛔️Rules'){
  SendMessage($chat_id,"ℹ Terms of robots:

☢ All entries must be subject to the laws of the Islamic Republic of Iran.
☢ courtesy and respect for the user.
☢ build any robot in robot is attached to +18 laws and blocked if desired robot and robot Manager will block all robots.
☢ responsibility exchanged messages per robot with its director and we have no responsibility.
☢ if the robot's capabilities negative aspects are taken very seriously.
☢ If for any reason the request of the robot you to our server more than usual (and Account robot, especially not) a few times to warn you. If this warning is ignored, the robot blocked and no restriction does not exit.
🆔 @syeioo","html","true",$button_official_fa);
  }
  //===============
    elseif($text == '✈️ویژه کردن و ربات دوم'){
  SendMessage($chat_id,"خوش آمدید.
  شما میتوانید با دعوت دوستان خود به ربات
  میتوانید رایگان یا ربات خودرا ویژه کنید و یا ربات دومی بسازید.
  برای ساخت ربات دوم نیازمند دعوت 10 نفر از دوستان خودهستید
  و برای ویژه کردن ربات خود نیازمند دعوت 20 نفر از دوستان خود
  پیروز باشید♥","html","true",$button_bazaryabi);
  }
  //===============
  elseif($text == '❇️امکانات'){
   ForwardMessage($chat_id,"@syeioo","77");  
   }
  //===============
  elseif($text == '❇️Facilities'){
   ForwardMessage($chat_id,"@syeioo","77");  
   }
  //===============
   elseif($text == 'دریافت لینک بازاریابی'){
  SendMessage($chat_id,"سلام😊🌹

امروز دنبال این بودم که راهی پیدا کنم افرادی که ریپورتن بتونن با بقیه در ارتباط باشن و یا بلعکس که یک ربات عالی پیدا کردم.😍

میخوای هیچکی ایدیتو نداشته باشه ولی باهات درارتباط باشن؟🤔
میخوای با افراد ریپورت چت کنی؟؟😎
یا میخوای افراد ریپورت با تو چت کنند؟😫
خب ربات پیام رسانت رو بساز و با امکانات بی نظیرش خودت رو راحت کن😄

برخی از امکانات مهمش رو بهت میگم تا بتونی راحت تر باهاش اشنا بشی و ازش استفاده کنی😁

-به تعداد نامحدود دکمه مختلف بساز🔘
-پیامتون رو به بقیه فوروارد کنید و یا به صورت ناشناس بفرستی🗣
-مشاهده دقیق امار کاربران
-ساخت گروه برای مدیریت ربات توسط چندنفر👥
-دارای تنظیمات فوق حرفه ای⚙️
-بکاپ گیری و حذف کامل اطلاعات ربات💾
-پروفایل حرفه ای📫
-پشتیبانی قوی و 24 ساعته☎️
-سرعت فوق العاده🌐
-امنیت بالا🗝
-قدرت⚙️
-و...

برای ساخت ربات پیام رسانِ کاملا هوشمند کافیست روی کلمه آبی رنگ زیر کلیک یا لمس کنی😍👇
[ساخت ربات پیام رسان](https://telegram.me/pvsaz5450bot?start=$from_id)
","MarkDown","true",$button_bazaryabi);
  }
  //===============
   //===============
  elseif($text == 'چقدر کاربر آوردم؟'){
  SendMessage($chat_id,"
  تعداد زیرمجموعه های شما: $karbarash
  هروقت این عدد به 20 برسه میتونی رباتت رو ویژه کنی
  و هروقت به 10 برسه میتونی یک ربات دیگه هم بسازی","html","true","$button_bazaryabi");
  }
  		elseif($text == 'میخوام رباتم ویژه بشه'){
		if($karbarash > 19){
		save("administrative/user/$from_id/command.txt","viplink");
		sendMessage($chat_id,"لطفا ایدی ربات خودرا برای ویژه شدن ارسال نمایید");
		}else{
		SendMessage($chat_id,"متاسفانه شما 20 نفر را نیاوردید
		موجودی شما:
		    $karbarash");
		}}
		elseif($command == 'viplink'){
		$newgold = $karbarash - 19;
		save("administrative/user/$from_id/gold.txt",$newgold);
		save("administrative/user/$from_id/command.txt","none");
		save("Bot/$text/other/setting/bot_type.txt","gold");
		sendMessage($chat_id,"تبریک میگم ربات $text
		هم اکنون ویژه میباشد");
		}
		  elseif($text == 'میخوام یک ربات دیگه بسازم'){
			  if($karbarash > 9){
				  save("administrative/user/".$from_id."/gold.txt",$karbarash-9);
  unlink("administrative/user/".$from_id."/create.txt");
  SendMessage($chat_id,"شما هم اکنون میتوانید یک ربات دیگر بسازید","html","true",$button_bazaryabi);
  }else{
	  sendMessage($chat_id,"متاسفانه شما 10 نفر را نیاوردید
		موجودی شما:
		    $karbarash");
  }
		  }
  elseif($text == '⭕️گزارش تخلف'){
  save('administrative/user/'.$from_id."/command.txt","takhlof");
  SendMessage($chat_id,"⭕️ لطفا یوزر آیدی ربات مورد نظر را ارسال کنید","html","true",$button_back);
  }
  //===============
   elseif($text == '⭕️Report Violation'){
  save('administrative/user/'.$from_id."/command.txt","takhlof");
  SendMessage($chat_id,"Please ⭕️ user ID to send robots","html","true",$button_back_en);
  }
  //===============
  elseif($command == 'takhlof'){
	if(preg_match('/^(@)(.*)([Bb][Oo][Tt])/s',$text)){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($feed,"گزارش تخلف ⬇","html","true");
	ForwardMessage($feed,$chat_id,$message_id);
	SendMessage($chat_id,"✅ ثبت شد.
	✅ به زودی به درخواست شما رسیدگی میشود","html","true",$button_official_fa);
  }else{
	save('administrative/user/'.$from_id."/command.txt","takhlof");
	SendMessage($chat_id,"⭕️ خطا !!!
	⭕️ دقت کنین یوزرنیم ربات با @ شروع شده و با کلمه (bot) پایان میابد","html","true",$button_back);
  }
  }
    elseif($text == 'ارسال' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","send");
  SendMessage($chat_id,"متن را وارد کنید!","html","true",$button_back);
  }
    elseif($command == 'send'){
	save('administrative/user/'.$from_id."/command.txt","none");
	SendMessage($kanal,$text,"MarkDown","true");
	sendMessage($chat_id,"ارسال شد","html","true",$button_official_fa);
  }
    elseif($text == 'فور' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","fwd");
	SendMessage($chat_id,"📮 پیام مورد نظر را فوروارد کنید","html","true",$button_back);
	}
	elseif($command == 'fwd' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","none");
	SendMessage($chat_id,"📮 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
			ForwardMessage($kanal,$admin,$message_id);
		}
  //===============
     elseif($text == '↩️Back Menu'){
  SendMessage($chat_id,"↩️ return to the main menu

⏺ What can I do for you?","html","true",$button_official_fa);
  }
  //===============
  //
  elseif($text == '☢ساخت ربات'){
	SendMessage($chat_id,"سلام دوست عزیز
	لطفا نوع رباتی که میخواهید بسازید را انتخاب کنید♥","html","true",$button_create);
  }
  //
  elseif($text == '♋ساخت ربات پیام رسان♋'){
  SendMessage($chat_id,"✅ توکن ربات مورد نظر رو ارسال کنید یا میتونین پیام حاوی توکن رو از ( @BotFather ) فوروارد کنید","html","true",$button_back);
  save('administrative/user/'.$from_id."/command.txt","create botpv");
  }
  elseif($text == '♈ساخت ربات ویو گیر♈'){
  SendMessage($chat_id,"✅ توکن ربات مورد نظر رو ارسال کنید یا میتونین پیام حاوی توکن رو از ( @BotFather ) فوروارد کنید","html","true",$button_back);
  save('administrative/user/'.$from_id."/command.txt","create botview");
  }
  //==============
  ////////////////////////////////////
    elseif($command == 'create botview'){
  if($update->message->forward_from != null){
  $rep = strchr($text,"Use this token to access the http API:");
  $rep = str_replace("Use this token to access the http API:",'',$rep);
  $rep = str_replace("For a description of the Bot API, see this page: https://core.telegram.org/bots/api",'',$rep);
  $rep = str_replace("\n",'',$rep);
  $token = $rep;
  }else{
  $token = $text;
  }
  $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
  $resultb = objectToArrays($userbot);
  $username_bot = $resultb["result"]["username"];
  $id_bot = $resultb["result"]["id"];
  $first_bot = $resultb["result"]["first_name"];
  $ok = $resultb["ok"];
  if($ok != 1) {
  SendMessage($chat_id,"‼️دوست عزیز توکن مورد نظر نامعتبر است.

⭕️لطفا با دقت بیشتر یک توکن صحیح بفرستید:","html","true",$button_back);
  }else{
	  
	 if($username == null){
  $username = $first;
  }else{
  $username = "@".$username;
  }
	  
  if(file_exists("Bot/$username_bot")){
  $pmtext = "{✅ ربات آپدیت شد توسط 👈 ($username)}{🤖 ربات مربوطه 👈 (@$username_bot)}{⏰ زمان 👈 ($time)}{📅 تاریخ 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
    $textinstalls = "ربات شما با موفقیت در سرور @pvsaz5450bot بروزرسانی شد✅
برای مشاهده خدمات لطفا /start را ارسال بکنید🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  
  SendMessage($chat_id,"✅ ربات شما با موفقیت آپدیت شد.

✴️ به ربات ما امتیاز بدین👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 برای ورود به ربات خود کلیک کنید😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_fa);
  }else{
	  
	  if($create == 'true' and $from_id != $admin){
		  save('administrative/user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"⭕️ دوست عزیز شما قبلا یک ربات ساخته اید برای ربات دوم باید مبلغ 1,000 تومن پرداخت کنید.برای اطلاعات بیشتر به @pvsaz5450supportbotمراجعه کنید","html","true",$button_official_fa);
  }else{
	  
  $pmtext = "{✅ ربات ساخته شد توسط 👈 ($username)}{🤖 ربات مربوطه 👈 (@$username_bot)}{⏰ زمان 👈 ($time)}{📅 تاریخ 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save('administrative/user/'.$from_id."/create.txt","true");
  mkdir("Bot/$username_bot");
  mkdir("Bot/$username_bot/admin");
  mkdir("Bot/$username_bot/ads");
  mkdir("Bot/$username_bot/user");
  mkdir("Bot/$username_bot/admin/code");
  mkdir("Bot/$username_bot/ads/ads admin");
  mkdir("Bot/$username_bot/ads/ads msg id");
  mkdir("Bot/$username_bot/ads/ads tally");
  mkdir("Bot/$username_bot/ads/ads tedad");
  mkdir("Bot/$username_bot/ads/ads username");
  mkdir("Bot/$username_bot/ads/ads time");
  mkdir("Bot/$username_bot/ads/ads date");
  mkdir("Bot/$username_bot/data");
  save("Bot/$username_bot/data/start.txt","Hi!✋ 
  Welcome To My Bot");
  save("Bot/$username_bot/data/help.txt","راهنمایی تنظیم نشده است");
  save("Bot/$username_bot/data/channel.txt","تنظیم نشده");
  save("Bot/$username_bot/data/shop.txt","متن فروشگاه ثبت نشده است.");
  save("Bot/$username_bot/data/zir.txt","متن زیر مجموعه گیری ثبت نشده است");
  save("Bot/$username_bot/data/seen.txt","1");
  save("Bot/$username_bot/data/coinlink.txt","5");
  save("Bot/$username_bot/data/bottype.txt","free");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
  $class = file_get_contents("administrative/source/view/Class.php");
  $class = str_replace("[*[TOKEN]*]",$token,$class);
  $class = str_replace("[*[ADMIN]*]",$from_id,$class);
  save("Bot/$username_bot/Class.php",$class);
  $index = file_get_contents("administrative/source/view/index.php");
  save("Bot/$username_bot/index.php",$index);	
  $textinstalls = "ربات شما با موفقیت به سرور @pvsaz5450bot متصل شد✅
برای مشاهده خدمات لطفا /start را ارسال بکنید🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  SendMessage($chat_id,"✅ ربات شما با موفقیت ساخته شد.
  
✴️ به ربات ما امتیاز بدین👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 برای ورود به ربات خود کلیک کنید😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_fa);
  
  $txxt = file_get_contents('administrative/access/robots.txt');
  $pmembersid= explode("\n",$txxt);
  if (!in_array($username_bot,$pmembersid)){
  $aaddd = file_get_contents('administrative/access/robots.txt');
  $aaddd .= $username_bot."\n";
  file_put_contents('administrative/access/robots.txt',$aaddd);
  }
  }
  }
  }
  }
  ////////////////////////////////////
  elseif($command == 'create botpv'){
  if($update->message->forward_from != null){
  $rep = strchr($text,"Use this token to access the http API:");
  $rep = str_replace("Use this token to access the http API:",'',$rep);
  $rep = str_replace("For a description of the Bot API, see this page: https://core.telegram.org/bots/api",'',$rep);
  $rep = str_replace("\n",'',$rep);
  $token = $rep;
  }else{
  $token = $text;
  }
  $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
  $resultb = objectToArrays($userbot);
  $username_bot = $resultb["result"]["username"];
  $id_bot = $resultb["result"]["id"];
  $first_bot = $resultb["result"]["first_name"];
  $ok = $resultb["ok"];
  if($ok != 1) {
  SendMessage($chat_id,"‼️دوست عزیز توکن مورد نظر نامعتبر است.

⭕️لطفا با دقت بیشتر یک توکن صحیح بفرستید:","html","true",$button_back);
  }else{
	  
	 if($username == null){
  $username = $first;
  }else{
  $username = "@".$username;
  }
	  
  if(file_exists("Bot/$username_bot")){
  $pmtext = "{✅ ربات آپدیت شد توسط 👈 ($username)}{🤖 ربات مربوطه 👈 (@$username_bot)}{⏰ زمان 👈 ($time)}{📅 تاریخ 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
    $textinstalls = "ربات شما با موفقیت در سرور @pvsaz5450bot بروزرسانی شد✅
برای مشاهده خدمات لطفا /start را ارسال بکنید🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  
  SendMessage($chat_id,"✅ ربات شما با موفقیت آپدیت شد.

✴️ به ربات ما امتیاز بدین👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 برای ورود به ربات خود کلیک کنید😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_fa);
  }else{
	  
	  if($create == 'true' and $from_id != $admin){
		  save('administrative/user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"⭕️ دوست عزیز شما قبلا یک ربات ساخته اید برای ربات دوم باید مبلغ 1,000 تومن پرداخت کنید.برای اطلاعات بیشتر به @pvsaz5450supportbotمراجعه کنید","html","true",$button_official_fa);
  }else{
	  
  $pmtext = "{✅ ربات ساخته شد توسط 👈 ($username)}{🤖 ربات مربوطه 👈 (@$username_bot)}{⏰ زمان 👈 ($time)}{📅 تاریخ 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save('administrative/user/'.$from_id."/create.txt","true");
  mkdir("Bot/$username_bot");
  mkdir("Bot/$username_bot/other");
  mkdir("Bot/$username_bot/other/$from_id");
  mkdir("Bot/$username_bot/other/access");
  mkdir("Bot/$username_bot/other/button");
  mkdir("Bot/$username_bot/other/profile");
  mkdir("Bot/$username_bot/other/setting");
  mkdir("Bot/$username_bot/other/wordlist");
  mkdir("Bot/$username_bot/other/button/caption");
  mkdir("Bot/$username_bot/other/button/file");
  mkdir("Bot/$username_bot/other/button/forward");
  mkdir("Bot/$username_bot/other/button/music");
  mkdir("Bot/$username_bot/other/button/photo");
  mkdir("Bot/$username_bot/other/button/feed");
  mkdir("Bot/$username_bot/other/button/sticker");
  mkdir("Bot/$username_bot/other/button/text");
  mkdir("Bot/$username_bot/other/button/video");
  mkdir("Bot/$username_bot/other/button/voice");
  save("Bot/$username_bot/other/setting/start.txt","Hi!✋ 
  <b>Welcome To My Bot</b>");
  save("Bot/$username_bot/other/setting/send.txt","<b>Sent To My Admin!</b>");
  save("Bot/$username_bot/other/setting/sticker.txt","✅");
  save("Bot/$username_bot/other/setting/file.txt","✅");
  save("Bot/$username_bot/other/setting/aks.txt","✅");
  save("Bot/$username_bot/other/setting/music.txt","✅");
  save("Bot/$username_bot/other/setting/film.txt","✅");
  save("Bot/$username_bot/other/setting/voice.txt","✅");
  save("Bot/$username_bot/other/setting/join.txt","✅");
  save("Bot/$username_bot/other/setting/link.txt","✅");
  save("Bot/$username_bot/other/setting/forward.txt","✅");
  save("Bot/$username_bot/other/setting/pm_forward.txt","⛔️");
  save("Bot/$username_bot/other/setting/pm_resani.txt","✅");
  save("Bot/$username_bot/other/setting/on-off.txt","true");
  save("Bot/$username_bot/other/setting/profile.txt","✅");
  save("Bot/$username_bot/other/setting/contact.txt","⛔️");
  save("Bot/$username_bot/other/setting/location.txt","⛔️");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
  $class = file_get_contents("administrative/source/Class.php");
  $class = str_replace("[*[TOKEN]*]",$token,$class);
  $class = str_replace("[*[ADMIN]*]",$from_id,$class);
  save("Bot/$username_bot/Class.php",$class);
  $index = file_get_contents("administrative/source/index.php");
  save("Bot/$username_bot/index.php",$index);	
  $butt = file_get_contents("administrative/source/Button.php");
  save("Bot/$username_bot/other/Button.php",$butt);	
  $textinstalls = "ربات شما با موفقیت به سرور @pvsaz5450bot متصل شد✅
برای مشاهده خدمات لطفا /start را ارسال بکنید🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  SendMessage($chat_id,"✅ ربات شما با موفقیت ساخته شد.
  
✴️ به ربات ما امتیاز بدین👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 برای ورود به ربات خود کلیک کنید😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_fa);
  
  $txxt = file_get_contents('administrative/access/robots.txt');
  $pmembersid= explode("\n",$txxt);
  if (!in_array($username_bot,$pmembersid)){
  $aaddd = file_get_contents('administrative/access/robots.txt');
  $aaddd .= $username_bot."\n";
  file_put_contents('administrative/access/robots.txt',$aaddd);
  }
  }
  }
  }
  }/*
  elseif ($text == '☢ حذف ربات') {
if (file_exists("administrative/user/'.$from_id."/command.txt")) {

}
$botname = file_get_contents("administrative/user/'.$from_id."/create.txt");
if ($botname == "") {
SendMessage($chat_id,"شما هنوز هیچ رباتی نساخته اید !");

}
else {
save("administrative/user/'.$from_id."/command.txt","delete");


 	var_dump(bot('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"یکی از ربات های خود را انتخاب کنید : ",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"👉 @".$botname,'callback_data'=>"del ".$botname]
	]
	]
	])
	]));


}
}
elseif ($command == 'delete') {
$botun = $txtmsg ;
if (file_exists("Bot/".$botun."/index.php")) {

$src = file_get_contents("Bot/".$botun."/index.php");

if (strpos($src , $from_id) !== false ) {
save("administrative/user/'.$from_id."/command.txt","none");
unlink("Bot/".$botun."/index.php");
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"🚀 ربات شما با موفقیت پاک شده است 
یک ربات جدید بسازید 😄",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"🔄 ساخت ربات"],['text'=>"🔙 برگشت"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
}
else {
SendMessage($chat_id,"خطا!
شما نمی توانید این ربات را پاک کنید ! ");
}
}
else {
SendMessage($chat_id,"یافت نشد.");
}
}
    $data = $update->callback_query->data;
    if (strpos($data, "del") !== false ) {
    $botun = str_replace("del ","",$data);
    unlink("Bot/".$botun."/index.php");
    save("administrative/user/'.$from_id."/create.txt","");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ربات شما با موفقیت حذف شد !",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"به کانال ما بپیوندید",'url'=>"https://telegram.me/DevelopersCity"]
                    ]
                ]
            ])
        ])
    );
 }
 else {
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"خطا",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"به کانال ما بپیوندید",'url'=>"https://telegram.me/DevelopersCity"]
                    ]
                ]
            ])
        ])
    );
 }
}*/
  //==========
  elseif($text == '☢Build a Robot'){
  SendMessage($chat_id,"✅ Please Send Token Your Bot And Forward our ( @BotFather ) Token send me","html","true",$button_back_en);
  save('administrative/user/'.$from_id."/command.txt","create bottpv");
  }
  //==============
  elseif($command == 'create bottpv'){
  if($update->message->forward_from != null){
  $rep = strchr($text,"Use this token to access the http API:");
  $rep = str_replace("Use this token to access the http API:",'',$rep);
  $rep = str_replace("For a description of the Bot API, see this page: https://core.telegram.org/bots/api",'',$rep);
  $rep = str_replace("\n",'',$rep);
  $token = $rep;
  }else{
  $token = $text;
  }
  $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
  $resultb = objectToArrays($userbot);
  $username_bot = $resultb["result"]["username"];
  $id_bot = $resultb["result"]["id"];
  $first_bot = $resultb["result"]["first_name"];
  $ok = $resultb["ok"];
  if($ok != 1) {
  SendMessage($chat_id,"! Dvst's the token is invalid.

⭕Ltfa more accurately send a true token:","html","true",$button_back_en);
  }else{
	  
	 if($username == null){
  $username = $first;
  }else{
  $username = "@".$username;
  }
	  
  if(file_exists("Bot/$username_bot")){
  $pmtext = "{✅ robot updated by 👈 ($username)} {🤖 the robot 👈 (@$username_bot)} {⏰ time 👈 ($time)} {📅 date 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
    $textinstalls = "You have successfully updated robot on a server @pvsaz5450bot✅
To view Please services / start to write🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  
  SendMessage($chat_id,"You have successfully updated ✅ robot.

✴️ to our robot Points Bdyn👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 Click to enter your robot Knyd😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ return to the main menu

⏺ What can I do for you?","html","true",$button_official_fa);
  }else{
	  
	  if($create == 'true' and $from_id != $admin){
		  save('administrative/user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"⭕️ dear friend you have not already created a robot for the second robot must pay 1,000 Tumen. For more information, please visit @pvsaz5450supportbot","html","true",$button_official_fa);
  }else{
	  
  $pmtext = "{✅ robot built by 👈 ($username)} {🤖 the robot 👈 (@$username_bot)} {⏰ time 👈 ($time)} {📅 date 👈 ($date)}";
  $msgid = json_decode(file_get_contents('https://api.telegram.org/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/sendMessage?parse_mode=HTML&chat_id=-1001146531348&text='.$pmtext));
  $msg_id = $msgid->result->message_id;
  ForwardMessage($chat_id,"-1001146531348",$msg_id);
  save('administrative/user/'.$from_id."/command.txt","none");
  save('administrative/user/'.$from_id."/create.txt","true");
  mkdir("Bot/$username_bot");
  mkdir("Bot/$username_bot/other");
  mkdir("Bot/$username_bot/other/$from_id");
  mkdir("Bot/$username_bot/other/access");
  mkdir("Bot/$username_bot/other/button");
  mkdir("Bot/$username_bot/other/profile");
  mkdir("Bot/$username_bot/other/setting");
  mkdir("Bot/$username_bot/other/wordlist");
  mkdir("Bot/$username_bot/other/button/caption");
  mkdir("Bot/$username_bot/other/button/file");
  mkdir("Bot/$username_bot/other/button/forward");
  mkdir("Bot/$username_bot/other/button/music");
  mkdir("Bot/$username_bot/other/button/photo");
  mkdir("Bot/$username_bot/other/button/feed");
  mkdir("Bot/$username_bot/other/button/sticker");
  mkdir("Bot/$username_bot/other/button/text");
  mkdir("Bot/$username_bot/other/button/video");
  mkdir("Bot/$username_bot/other/button/voice");
  save("Bot/$username_bot/other/setting/start.txt","Hi!✋ 
  <b>Welcome To My Bot</b>");
  save("Bot/$username_bot/other/setting/send.txt","<b>Sent To My Admin!</b>");
  save("Bot/$username_bot/other/setting/sticker.txt","✅");
  save("Bot/$username_bot/other/setting/file.txt","✅");
  save("Bot/$username_bot/other/setting/aks.txt","✅");
  save("Bot/$username_bot/other/setting/music.txt","✅");
  save("Bot/$username_bot/other/setting/film.txt","✅");
  save("Bot/$username_bot/other/setting/voice.txt","✅");
  save("Bot/$username_bot/other/setting/join.txt","✅");
  save("Bot/$username_bot/other/setting/link.txt","✅");
  save("Bot/$username_bot/other/setting/forward.txt","✅");
  save("Bot/$username_bot/other/setting/pm_forward.txt","⛔️");
  save("Bot/$username_bot/other/setting/pm_resani.txt","✅");
  save("Bot/$username_bot/other/setting/on-off.txt","true");
  save("Bot/$username_bot/other/setting/profile.txt","✅");
  save("Bot/$username_bot/other/setting/contact.txt","⛔️");
  save("Bot/$username_bot/other/setting/location.txt","⛔️");
  save("administrative/tokensadmins/token/$username_bot.txt",$token);
  save("administrative/tokensadmins/admin/$username_bot.txt",$from_id);
  $class = file_get_contents("administrative/source/Class.php");
  $class = str_replace("[*[TOKEN]*]",$token,$class);
  $class = str_replace("[*[ADMIN]*]",$from_id,$class);
  save("Bot/$username_bot/Class.php",$class);
  $index = file_get_contents("administrative/source/index.php");
  save("Bot/$username_bot/index.php",$index);	
  $butt = file_get_contents("administrative/source/Button.php");
  save("Bot/$username_bot/other/Button.php",$butt);	
  $textinstalls = "The robot has been successfully connected to the server @pvsaz5450bot Shd✅
To view Please services / start to write Bknyd🗳";
  file_get_contents("http://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$textinstalls");
  file_get_contents("https://api.telegram.org/bot".$token."/setwebhook?url=https://provps.ir/hossein/Bot/$username_bot/");
  SendMessage($chat_id,"You have successfully Created Install ✅ robot.

✴️ to our robot Points Bdyn👇
🌐 https://telegram.me/storebot?start=pvsaz5450bot

🤖 Click to enter your robot Knyd😀👇","html","true",json_encode(['inline_keyboard'=>[[['text'=>"🔯 @$username_bot",'url'=>"https://telegram.me/$username_bot"]],]]));
  SendMessage($chat_id,"↩️ return to the main menu

⏺ What can I do for you?","html","true",$button_official_fa);
  
  $txxt = file_get_contents('administrative/access/robots.txt');
  $pmembersid= explode("\n",$txxt);
  if (!in_array($username_bot,$pmembersid)){
  $aaddd = file_get_contents('administrative/access/robots.txt');
  $aaddd .= $username_bot."\n";
  file_put_contents('administrative/access/robots.txt',$aaddd);
  }
  }
  }
  }
  }
  //==========
  // Manage
  elseif($text == '🈸مدیریت' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"🈸 به بخش ادمین خوش اومدین","html","true",$button_manage);
  }
  elseif ($text == 'افزودن ادمین' and $from_id == $admin){
	  $s = file_get_contents("administrative/admin.txt");
	 save('administrative/user/'.$from_id."/command.txt","addadmin");
	 sendMessage($chat_id,"سلام
	 لطفا ایدی ادمین را بصورت آرایه
	 ,id
	 در فایل 
	 administrative/admin.txt
	 اضافه کنید.
	 و ایدی فرد را اینجا وارد کنید تا من خبر ادمین شدنشو بهش بدم");
  }
  elseif($command == 'addadmin' and $from_id == $admin){
	save('administrative/user/'.$from_id."/command.txt","none");
	save('administrative/admin.txt',"$text");
	sendMessage($chat_id,"فرد موردنظر ادمین شد!");
	sendMessage($text,"تبریک شما ادمین شدید
	لطفا قوانین را رعایت کنید");
  }
  //============
  elseif($text == '☢کد رایگان' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","cod free");
  SendMessage($chat_id,"☢ کد مورد نظر رو وارد کنید","html","true",$button_back);
  }
  elseif($command == 'cod free' and $from_id == $admin){
  save("administrative/code/$text.txt","false");
  save("administrative/user/".$from_id."/command.txt","none");
  SendMessage($chat_id,"☢ کد ثبت شد.","html","true",$button_manage);
  SendMessage($kanal,"🎁کد اشتراک تبلیغات مخصوص همه ربات ها‼️:
〰〰〰〰〰〰〰〰〰〰〰〰〰〰
🎁 Code : $text
〰〰〰〰〰〰〰〰〰〰〰〰〰〰
تنها یک نفر میتواند تبلیغات رباتش را  بردارد!
روش استفاده:👇👇

1-  روی دکمه 🎁استفاده از کد💎 بزنید.
2- نوع ربات خود را انتخاب کنید.
3- کد را که در کانال فرستاده شده ارسال کنید.
4- ایدی ربات خود را بدون @ و دقیق  (کوچک یا بزرگ بودن حروف) وارد کنید.
➖➖➖➖➖➖➖➖➖➖➖➖
➖➖➖➖➖
@syeioo
@pvsaz5450bot
مشخصات استفاده کننده کد👇","html","true");
  }
  elseif($text == '🅾️اطلاعات'){
  save("other/$from_id/command.txt","set idtaraf");
  SendChatAction($chat_id,"typing");
  SendMessage($chat_id,"<i>🅾️ ایدی عددی را وارد کنید:</i>","html","true",$button_manage);
  }
elseif($command == 'set idtaraf'){
  save("other/$from_id/command.txt","none");
 $info = json_decode(
 file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text")
 );
 if ($info->ok == true)
 {
   SendMessage($chat_id,"<i>✅ آیدی حروفی :$info->result->username</i>","html","true",$button_manage);
 }
 }

  //============
  elseif($text == '⭕️لغو حساب ویژه' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","laghv hesab");
  SendMessage($chat_id,"⭕️ یوزرنیم بات رو بدون @ وارد کنید","html","true",$button_back);
  }
  elseif($command == 'laghv hesab' and $from_id == $admin){
  unlink("Bot/$text/other/setting/bot_type.txt");
  save("administrative/user/".$from_id."/command.txt","none");
  SendMessage($chat_id,"⭕️ حساب غیر ویژه شد.","html","true",$button_manage);
  }
  //============
  elseif($text == '🔱حساب ویژه' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","hesab gold");
  SendMessage($chat_id,"🔱 یوزرنیم بات رو بدون @ وارد کنید","html","true",$button_back);
  }
  elseif($command == 'hesab gold' and $from_id == $admin){
  save("Bot/$text/other/setting/bot_type.txt","gold");
  save("administrative/user/".$from_id."/command.txt","none");
  SendMessage($chat_id,"🔱 حساب ویژه شد.","html","true",$button_manage);
  }
  ////////////////////////
    elseif($text == 'ویو' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","hesab goldview");
  SendMessage($chat_id,"🔱 یوزرنیم بات رو بدون @ وارد کنید","html","true",$button_back);
  }
  elseif($command == 'hesab goldview' and $from_id == $admin){
  save("Bot/$text/data/bottype.txt","gold");
  save("administrative/user/".$from_id."/command.txt","none");
  SendMessage($chat_id,"🔱 حساب ویژه شد.","html","true",$button_manage);
  }
  //============
  elseif($text == '🤖ربات دوم' and $from_id == $admin){
  save('administrative/user/'.$from_id."/command.txt","Bot 2");
  SendMessage($chat_id,"🤖 پیامی از شخص مورد نظر فوروارد کنید","html","true",$button_back);
  }
  elseif($command == 'Bot 2' and $from_id == $admin){
  unlink("administrative/user/".$forward_id."/create.txt");
  save("administrative/user/".$from_id."/command.txt","none");
  SendMessage($chat_id,"🤖 شخص مورد نظر ربات دیگری میتواند بسازد.","html","true",$button_manage);
  }
  //============
  elseif($text == '📊آمار' and $from_id == $admin){  
	  $txtt = file_get_contents('administrative/access/mum.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;
	$mmemcount_member = numberformat("$mmemcount",',');
	$txttt = file_get_contents('administrative/access/robots.txt');
    $member_id1 = explode("\n",$txttt);
    $mmemcount1 = count($member_id1) -1;
	$mmemcount_bots = numberformat("$mmemcount1",',');
	$txtttt = file_get_contents('administrative/access/allm.txt');
    $member_id111 = explode("\n",$txtttt);
    $mmemcount111 = count($member_id111) -1;
	$mmemcount_member_all_bot = numberformat("$mmemcount111",',');
	$adminHA = getFileList('administrative/tokensadmins/admin','.txt');
	$tokenHA = getFileList('administrative/tokensadmins/token','.txt');
	$bots = file_get_contents("administrative/access/UserName.txt");
	$exbot = explode("@",$bots);
	$c = count($exbot)-2;
	$botsss = '';
	if($exbot[$c-(-1)] != null){
	$botsss = $botsss."@".$exbot[$c-(-1)];
	}if($exbot[$c] != null){
	$botsss = $botsss."@".$exbot[$c];
	}if($exbot[$c-1] != null){
	$botsss = $botsss."@".$exbot[$c-1];
	}if($exbot[$c-2] != null){
	$botsss = $botsss."@".$exbot[$c-2];
	}if($exbot[$c-3] != null){
	$botsss = $botsss."@".$exbot[$c-3];
	}if($exbot[$c-4] != null){
	$botsss = $botsss."@".$exbot[$c-4];
	}if($exbot[$c-5] != null){
	$botsss = $botsss."@".$exbot[$c-5];
	}if($exbot[$c-6] != null){
	$botsss = $botsss."@".$exbot[$c-6];
	}if($exbot[$c-7] != null){
	$botsss = $botsss."@".$exbot[$c-7];
	}if($exbot[$c-8] != null){
	$botsss = $botsss."@".$exbot[$c-8];
	}
	$botsss = str_replace("\n",' | ',$botsss);
  SendMessage($chat_id,"🤖 ربات ها: $mmemcount_bots
  ❇️ اعضا کل ربات ها: $mmemcount_member_all_bot
  👥 اعضا ربات اصلی: $mmemcount_member
  
  🅾 اعضا جدید:
  $botsss","html","true");
  }
  //============
  elseif($text == '📮فوروارد همگانی' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","s2a fwd");
	SendMessage($chat_id,"📮 پیام مورد نظر را فوروارد کنید","html","true",$button_back);
	}
	elseif($command == 's2a fwd' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","none");
	SendMessage($chat_id,"📮 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
	$all_member = fopen( "administrative/access/mum.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			ForwardMessage($user,$admin,$message_id);
		}
	}
	//===========
	elseif($text == '📭پیام همگانی' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","s2a");
	SendMessage($chat_id,"📭 پیامتون رو وارد کنید","html","true",$button_back);
	}
	elseif($command == 's2a' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","none");
	SendMessage($chat_id,"📭 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
	$all_member = fopen( "administrative/access/mum.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			if($sticker_id != null){
			SendSticker($user,$sticker_id);
			}
			elseif($video_id != null){
			SendVideo($user,$video_id,$caption);
			}
			elseif($voice_id != null){
			SendVoice($user,$voice_id,'',$caption);
			}
			elseif($file_id != null){
			SendDocument($user,$file_id,'',$caption);
			}
			elseif($music_id != null){
			SendAudio($user,$music_id,'',$caption);
			}
			elseif($photo2_id != null){
			SendPhoto($user,$photo2_id,'',$caption);
			}
			elseif($photo1_id != null){
			SendPhoto($user,$photo1_id,'',$caption);
			}
			elseif($photo0_id != null){
			SendPhoto($user,$photo0_id,'',$caption);
			}
			elseif($text != null){
			SendMessage($user,$text,"html","true");
			}
		}
	}
		elseif($text == 'همگانی بات' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","s2ab");
	SendMessage($chat_id,"📭 پیامتون رو وارد کنید","html","true",$button_back);
	}
	elseif($command == 's2ab' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","none");
	SendMessage($chat_id,"📭 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
	$all_member = fopen( "administrative/access/mum.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			if($sticker_id != null){
			SendSticker($user,$sticker_id);
			}
			elseif($video_id != null){
			SendVideo($user,$video_id,$caption);
			}
			elseif($voice_id != null){
			SendVoice($user,$voice_id,'',$caption);
			}
			elseif($file_id != null){
			SendDocument($user,$file_id,'',$caption);
			}
			elseif($music_id != null){
			SendAudio($user,$music_id,'',$caption);
			}
			elseif($photo2_id != null){
			SendPhoto($user,$photo2_id,'',$caption);
			}
			elseif($photo1_id != null){
			SendPhoto($user,$photo1_id,'',$caption);
			}
			elseif($photo0_id != null){
			SendPhoto($user,$photo0_id,'',$caption);
			}
			elseif($text != null){
			SendMessage($idpushe,$text,"html","true");
			}
		}
	}
//============
elseif($text == '📟تبلیغات' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","ads");
	SendMessage($chat_id,"📟 تبلیغ مورد نظر رو فوروارد کنید","html","true",$button_back);
	}
	elseif($command == 'ads' and $from_id == $admin){
	save("administrative/user/".$from_id."/command.txt","none");
	save("administrative/access/forward-msg-id.txt",$from_chat_msg_id);
	save("administrative/access/forward-id.txt","@$from_chat_username");
	SendMessage($chat_id,"📟 تبلیغ مورد نظر ثبت شد.","html","true",$button_manage);
	}
//============
elseif(preg_match('/^\/([Bb]anall) (.*)/',$text) and $from_id == $admin){
	preg_match('/^\/([Bb]anall) (.*)/',$text,$match);
	$id = json_decode(file_get_contents("https://api.pwrtelegram.xyz/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/getChat?chat_id=".$match[2]));
	$user = $id->result->id;
	if($user != null){
	$txxt = file_get_contents('administrative/banall-member/banall.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($user,$pmembersid)){
      $aaddd = file_get_contents('administrative/banall-member/banall.txt');
      $aaddd .= $user."\n";
		file_put_contents('administrative/banall-member/banall.txt',$aaddd);
    }
	SendMessage($chat_id,"🚫 کاربر مورد نظر بن ال شد.","html","true");
	SendMessage($user,"*You Are GloballyBanned From Server.❌
Don't Message Again...❌*
➖➖➖➖➖➖➖➖➖➖`
دسترسی شما به این سرور مسدود شده است.❌
لطفا پیام ندهید...❌`","html","true");
	}else{
	SendMessage($chat_id,"متاسفانه خطایی رخ داده است.","html","true");
	}
	}
//============
 	elseif(preg_match('/^\/([Uu]n[Bb]anall) (.*)/',$text) and $from_id == $admin){
	preg_match('/^\/([Uu]n[Bb]anall) (.*)/',$text,$match);
	$id = json_decode(file_get_contents("https://api.pwrtelegram.xyz/bot204374776:AAEarK46pm0Zr_dWdVEGRU0v0QBlbBty-7Y/getChat?chat_id=".$match[2]));
	$user = $id->result->id;
	if($user != null){
	$rep = str_replace("$user\n",'',$block);
	save("administrative/banall-member/banall.txt",$rep);
	SendMessage($chat_id,"✅کاربر مورد نظر آنبن ال  شد.","html","true");
	SendMessage($user,"✅شما آنبن ال شدین.","html","true");
	}else{
	SendMessage($chat_id,"🚫 متاسفانه خطایی رخ داده است.","html","true");
	}
	}
	//==========
	 elseif($text == '📊لیست افراد بن ال شده' and $from_id == $admin){
	
	$botsban = file_get_contents("administrative/banall-member/banall.txt");
	$exbotban = explode(">",$botsban);
	$c = count($exbotban)-2;
	$botsssban = '';
	if($exbotban[$c-(-1)] != null){
	$botsssban = $botsssban.">".$exbotban[$c-(-1)];
	}if($exbotban[$c] != null){
	$botsssban = $botsssban.">".$exbotban[$c];
	}if($exbotban[$c-1] != null){
	$botsssban = $botsssban.">".$exbotban[$c-1];
	}if($exbotban[$c-2] != null){
	$botsssban = $botsssban.">".$exbotban[$c-2];
	}if($exbotban[$c-3] != null){
	$botsssban = $botsssban.">".$exbotban[$c-3];
	}if($exbotban[$c-4] != null){
	$botsssban = $botsssban.">".$exbotban[$c-4];
	}if($exbotban[$c-5] != null){
	$botsssban = $botsssban.">".$exbotban[$c-5];
	}if($exbotban[$c-6] != null){
	$botsssban = $botsssban.">".$exbotban[$c-6];
	}if($exbotban[$c-7] != null){
	$botsssban = $botsssban.">".$exbotban[$c-7];
	}if($exbotban[$c-8] != null){
	$botsssban = $botsssban.">".$exbotban[$c-8];
	}
	$botsssban = str_replace("\n",' | ',$botsssban);
	
	SendChatAction($chat_id,"typing");
	SendMessage($chat_id,"<i>📊🕵لیست </i> <code>10</code> <i>کاربر بن ال شده: </i>
	$botsssban","html","true");
	}
	
    //============
elseif($text == '♻️بروزرسانی' and $from_id == $admin){
SendMessage($chat_id,"صبر کنید");	
$all_Bots = fopen( "administrative/access/robots.txt", 'r');
		while( !feof( $all_Bots)) {
 			$Bot = fgets( $all_Bots);
			$Bot = str_replace(" ",'',$Bot);
			$Bot = str_replace("\n",'',$Bot);
			$token = file_get_contents("administrative/tokensadmins/token/$Bot.txt");
			$admin = file_get_contents("administrative/tokensadmins/admin/$Bot.txt");
			$class = file_get_contents("administrative/source/Class.php");
			$class = str_replace("[*[TOKEN]*]",$token,$class);
			$class = str_replace("[*[ADMIN]*]",$admin,$class);
			file_put_contents("Bot/$Bot/Class.php",$class);
			$index = file_get_contents("administrative/source/index.php");
			file_put_contents("Bot/$Bot/index.php",$index);	
			 }
	SendMessage($chat_id,"✅ همه ربات ها آپدیت شد.");
}
//============
else{
  SendMessage($chat_id,"⛔️ دستور نامشخص...","html","true");
}
mkdir('administrative/user/'.$from_id);
$txxt = file_get_contents('administrative/access/mum.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('administrative/access/mum.txt');
      $aaddd .= $chat_id."\n";
		file_put_contents('administrative/access/mum.txt',$aaddd);
    }
	$txxt = file_get_contents('administrative/access/UserName.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array("@".$username,$pmembersid)){
      $aaddd = file_get_contents('administrative/access/UserName.txt');
      $aaddd .= "@".$username."\n";
	  if($username != null){
		file_put_contents('administrative/access/UserName.txt',$aaddd);
	  }
    }
    unlink("error_log");
?>
