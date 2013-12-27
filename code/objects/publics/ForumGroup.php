<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ForumGroup
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumGroup extends DataObject {
	
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Description' => 'Varchar(255)',
		'URLSegment' => 'Varchar(255)'
	);
	
	private static $has_one = array(
		'ForumPage' => 'ForumPage',
		'AccLevel' => 'ForumRole',
	);
	
	private static $has_many = array(
		'Children' => 'ForumTopic',
	);

	private static $indexes = array(
		'URLSegment' => true,
	);
}