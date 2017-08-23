<?php

$db = array();
$site = array();

	function getUserFromID($id){
		$query = db_query('SELECT * FROM `users` WHERE id = ' . $id);
    while ($row = mysqli_fetch_assoc($query)) { 
			return $row['displayname'];
		}	
	}

	function getComments($id){
		$comments = array();
		$query = db_query('SELECT * FROM `comments` WHERE postid = ' . $id);
    while ($row = mysqli_fetch_assoc($query)) { 
			array_push($comments, $row);
		}	
		return $comments;
	}

	// POSTS
	$posts = array();
	$query = db_query('SELECT * FROM `posts`');
    while ($row = mysqli_fetch_assoc($query)) { 
		array_push($posts, $row);
	}
	$db['posts'] = array_reverse($posts);
	 unset($posts);
	 
	// SITE SETTINGS  
		$query = db_query('SELECT * FROM `settings`');
    while ($row = mysqli_fetch_assoc($query)) { 
		$site[$row['setting']] = $row['value'];
	}

	// SITE PAGES
	$pages = array();
	$query = db_query('SELECT * FROM `pages`');
	while ($row = mysqli_fetch_assoc($query)) { 
		$pages[$row['pageName']] = json_decode($row['pages']);
	}
