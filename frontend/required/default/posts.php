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
	<div class="post container">
		<div class="row" style="padding-top: 15px;">
			<div class="col">
				<a style="background-image: url(<?php echo IMAGE_DIR . getUserFromID($post['userid'])['image']; ?>);" class="userPhoto"></a>
				<h4 class="postOwner"><?php echo getUserFromID($post['userid'])['displayname'];?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col" align="center">
				<h3 class="postTitle center-block"><?php echo $post['title'];?></h3>
				</div>
		</div>
		<div class="row">
			<p class="postText" ><?php echo $post['text'];?></p>
		</div>
		<div class="row">
			<div class="comments">
				<?php foreach(getComments($post['id']) as $comment) { ?>
							<?php echo $comment['text']; ?>
				<?php } ?>
			</div>
		</div>
		<div class="row align-bottom react">
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