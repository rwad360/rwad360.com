<?php

	function lang($phrase) {
		static $lang = array(
			'MESSAGE' => 'Welcome',
			'Admin' => 'Administrator',
			''=>'',
			''=>'',
			''=>''
		);
		return $lang[$phrase];
	}