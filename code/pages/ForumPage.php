<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ForumPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class ForumPage extends Page {
	
	private static $has_many = array(
		'ForumGroups' => 'ForumGroup',
	);

}