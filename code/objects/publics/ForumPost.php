<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ForumPost
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumPost extends DataObject {
	
	private static $db = array(
		'Content' => 'HTMLText',
	);
	
	private static $has_one = array(
		'Author' => 'Member',
		'Parent' => 'ForumTopic',
	);

}