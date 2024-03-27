<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * home class
 */
class Home
{
	use MainController;
	/** this is main home */
	public function index()
	{
		$this->view('header');
		$this->view('home');
		$this->view('footer');
	}
	public function test()
	{
		$text = 'السلام عليكم ورحمة الله وبركاته%0Aنفيدكم بأنه تم قبولكم لحضور دورة تطبيقات الذكاء الاصطناعي والتي ستقام اليوم الإثنين الموافق 25 مارس 2024م، في تمام الساعة 10:00مساءً وحتى الساعة 2:00 صباحًا بتوقيت المملكة العربية السعودية وستستمر الدورة لمدة ثلاث أيام وستفتح القاعة من الساعة 09:30 علمًا بانه سيسمح فقط بدخول القاعة للأشخاص المسجلين اسمهم الثلاثي المرجو تأكيد حضوركم ليتم ارسال رابط القاعة لكم.%0Aوإذا لم يتسن لكم حضور البرنامج التدريبي، نأمل إبلاغنا من خلال إرسال رسالة إلى البريد الإلكتروني: info@madinahdig.com%0Aكما نسعد ونتشرف بخدمتكم في أي وقت بالرد على استفساراتكم وتقديم الدعم.%0Aمع وافر التحية والتقدير%0Aإدارة جمعية رقمية';

		$dat = new \Model\Data;
		$dat->limit = 50;
		$dat->order_column = 'time';
		$dat->order_type = 'ASC';
		$data = $dat->findAll();
		foreach ($data as $d) {
			echo '<a href="https://web.whatsapp.com/send/?phone=966' . $d->phone . '&text=' . $text . '" target="_blank">' . "أرسال إلى $d->arname</a><br><br>";
			exit;
		}
	}
}
