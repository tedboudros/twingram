<form method="POST" action="">
	<div class="post container">
		<div class="row">
			<div class="col" style="padding-top: 15px;" align="center">
				<h2 class="center-block">Create a Post:</h2>
			</div>
		</div>
		<div class="row">
				<textarea placeholder="Title: " name="postTitle" style="height: 48px;" rows="1" class="UpostText col"></textarea>
		</div>
		<div class="row">
				<textarea placeholder="Content: " style="margin-bottom: 80px;"name="postText" class="UpostText col"></textarea>
		</div>
		<div class="row align-bottom react">
			<button class="reactButton UreactButton" data-toggle="tooltip" title="Love" onclick="" data-original-title="Love">
				<i class="fa fa-user"></i>
			</button>
			<button type="submit" style="border-right: 0;" class="reactButton UreactButton _post" value="Post" data-toggle="tooltip" title="Post" data-original-title="Post">
				<i class="fa fa-check-circle"></i>
			</button>
		</div>
	</div>
</form>
