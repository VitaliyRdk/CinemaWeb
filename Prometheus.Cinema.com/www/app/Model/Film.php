<?php
	class Film extends AppModel {
		public $hasMany = array('Photo' => array('dependent' => true),'Session' => array('dependent' => true));
	}