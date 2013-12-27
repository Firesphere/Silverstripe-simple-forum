<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ForumTopic
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumTopic extends DataObject {
	
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Content' => 'HTMLText',
		'URLSegment' => 'Varchar(255)',
	);
	
	private static $has_one = array(
		'Author' => 'Member',
	);
	
	private static $has_many = array(
		'Children' => 'ForumPost',
	);

	private static $indexes = array(
		'URLSegment' => true
	);
}