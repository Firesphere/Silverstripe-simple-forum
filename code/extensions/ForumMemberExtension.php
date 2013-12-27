<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ForumMemberExtension
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumMemberExtension extends DataExtension {
	
	private static $db = array(
		'Nickname' => 'Varchar(255)',
		'Birthday' => 'Date',
		'Signature' => 'Text',
	);
	
	private static $has_one = array(
		'ForumRole' => 'ForumRole',
	);
	
	private static $has_many = array(
		'ForumPosts' => 'ForumPost',
		'ForumTopics' => 'ForumTopic',
	);

}