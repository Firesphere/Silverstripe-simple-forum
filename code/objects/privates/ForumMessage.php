<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Message
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumMessage extends DataObject {
	
	private static $db = array(
		'Subject' => 'Varchar(255)',
		'Content' => 'HTMLText',
	);
	
	private static $has_one = array(
		'Parent' => 'Message',
		'Sender' => 'Member',
		'Receiver' => 'Member',
	);
	
	private static $has_many = array(
		'Children' => 'Message',
	);

}