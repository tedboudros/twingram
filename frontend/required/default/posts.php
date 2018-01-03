<script>
function showCommentsOnPost(element){
		if(element.val() == "opened"){
			//PRESSED SECOND TIME
			element.parent().parent().children(".comments").animate({"height": "0px"}, 100);
			element.parent().parent().animate({"height": element.parent().parent().height() - 196}, 100);
			element.children().addClass("fa-comment");
			element.children().removeClass("fa-caret-down");
			element.val("");
		}else {
			//PRESSED FOR THE FIRST TIME
			element.parent().parent().children(".comments").animate({"height": "163px"}, 100);
			element.parent().parent().animate({"height": element.parent().parent().height() + 200}, 100);
			element.children().removeClass("fa-comment");
			element.children().addClass("fa-caret-down");
			element.val("opened");
		}
	}
</script>

<?php foreach($db['posts'] as $post) { ?>
	<div class="post container" value='<?php echo $post['id'];?>'>
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
		<div class="row comments">
				<?php $security_key = substr(md5(mt_rand()), 0, 7);
						$_SESSION['security_key'] = $security_key;
				
				?>
					<script>
						$.ajax({
							type: "POST",
							url: '<?php echo HTTP_FRONTEND . "comments.php"; ?>',
							data: {
								security_key: '<?php echo $security_key; ?>',
								post_id: '<?php echo $post['id'];?>'
							},
							success: function( data ){
								$(".post[value='<?php echo $post['id'];?>']").children(".comments").append(data);
							},
							dataType: "html"
							});
					</script>
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
				<input placeholder="Comment:" class="commentInput"></input>
		</div>
	</div>
<?php } ?>