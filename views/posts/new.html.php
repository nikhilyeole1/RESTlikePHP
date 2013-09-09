<?php include 'views/header.php';?>

 <h1>New post</h1>

<form method="post" id="new_post" class="new_post" action="posts.php?action=create" accept-charset="UTF-8">
  <div class="field">
    <label for="post_title">Title</label><br>
    <input type="text"  size="30" name="post[title]" id="post_title">
  </div>
  <div class="field">
    <label for="post_content">Body</label><br>
    <textarea rows="20" name="post[body]" id="post_boody" cols="40"></textarea>
  </div>

  <div class="actions">
    <input type="submit" value="Create Post" name="commit">
  </div>
</form>
	
<a href="#" >Back</a>

<!-- trialAjax -->
<div id="trialNewAjax">Click for putting ajax</div>

<?php include 'views/footer.php';?>