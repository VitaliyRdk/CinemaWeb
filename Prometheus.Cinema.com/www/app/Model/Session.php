<?php
	class Session extends AppModel{
		public $belongsTo = array("Hall", "Film");
		public $hasMany = "Price";
	}