<script>
function showCommentsOnPost(element){
		if(element.val() == "opened"){
			//PRESSED SECOND TIME
			element.parent().parent().children(".comments").animate({"height": "0px"}, 100);
			element.parent().parent().animate({"height": element.parent().parent().height() - 196}, 100);
			element.val("");
		}else {
			//PRESSED FOR THE FIRST TIME
			element.parent().parent().children(".comments").animate({"height": "199px"}, 100);
			element.parent().parent().animate({"height": element.parent().parent().height() + 200}, 100);
			element.val("opened");
		}
	}
</script>

<?php foreach($db['posts'] as $post) { ?>
	<div class="post">
			<img src="<?php echo IMAGE_DIR . "profile.png"; ?>" class="postOwnerPhoto"></img>
			<span class="postOwner" ><h3><?php echo getUserFromID($post['userid'])['displayname'];?></h3></span>
			<span class="postTitle" ><h4><?php echo $post['title'];?></h4></span>
			<p class="postText" ><?php echo htmlspecialchars($post['text']);?></p>
			<div class="comments">
				<?php foreach(getComments($post['id']) as $comment) { ?>
							<?php echo $comment['text']; ?>
				<?php } ?>
			</div>
			<div class="react">
				<button class="reactButton _thumbsup" data-toggle="tooltip" title="Like" onclick="" data-original-title="Like">
					<i class="fa fa-thumbs-up"></i>
				</button>
				<button class="reactButton _heart" data-toggle="tooltip" title="Love" onclick="" data-original-title="Love">
					<i class="fa fa-heart"></i>
				</button>
				<button class="reactButton _comments" onclick="showCommentsOnPost($(this));" data-toggle="tooltip" title="Comment" data-original-title="Comment">
					<i class="fa fa-comment"></i>
				</button>
			</div>
	</div> 
<?php } ?>