<?php

	function lang($phrase) {
		static $lang = array(
			'MESSAGE'=>'أهلا وسهلاً',
			'Admin'=>'مدير الموقع',
			''=>'',
			''=>'',
			''=>''
		);
		return $lang[$phrase];
	}