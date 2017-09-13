<?php

$db = array();
$site = array();

function dashboard(){
	$values = [];
	$query = db_query('SELECT * FROM `posts` WHERE id=(SELECT max(id) FROM `posts`)');
	while ($row = mysqli_fetch_assoc($query)) { 
			$values['posts'] = $row['id'];
		}
	$query = db_query('SELECT * FROM `users` WHERE id=(SELECT max(id) FROM `users`)');
	while ($row = mysqli_fetch_assoc($query)) { 
			$values['users'] = $row['id'];
		}
	$query = db_query('SELECT * FROM `comments` WHERE id=(SELECT max(id) FROM `comments`)');
	while ($row = mysqli_fetch_assoc($query)) { 
			$values['comments'] = $row['id'];
		}
		return $values;
	}


function loginAdmin($username, $password){
	$query = db_query('SELECT * FROM `admin` WHERE username = "' . $username . '"');
	while ($row = mysqli_fetch_assoc($query)) { 
		if(password_verify($password, $row['passwordhash'])){
			return $row;
		}
	}
	return 0;	
}

	function getUserFromID($id){
		$query = db_query('SELECT * FROM `users` WHERE id = ' . $id);
    while ($row = mysqli_fetch_assoc($query)) { 
			return $row;
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

	// New post

	if(isset($_POST['postText']) && $_POST['postText'] != "" && $_POST['postTitle'] != ""){
		$query = db_query('INSERT INTO `posts` (`id`, `userid`, `title`, `text`, `date`) VALUES (NULL, "1", "' . $_POST['postTitle'] . '", "' . $_POST['postText'] . '", CURRENT_TIMESTAMP)');
		header("location: /");
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

	$users = array();
	$query = db_query('SELECT * FROM `users`');
    while ($row = mysqli_fetch_assoc($query)) { 
		array_push($users, $row);
	}
	$db['users'] = $users;
	 unset($users);