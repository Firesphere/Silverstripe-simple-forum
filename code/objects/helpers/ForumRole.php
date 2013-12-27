<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Role
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumRole extends DataObject {
	
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Description' => 'HTMLText',
		'Level' => 'Enum("Admin,Moderator,User")',
	);
	
	private static $has_many = array(
		'ForumGroups' => 'ForumGroup',
		'Members' => 'Member',
	);
}