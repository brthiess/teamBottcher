<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
if (login_check($mysqli) == true) : ?>

<script src="js/advanced.js"></script>
<script src="js/wysihtml5-0.3.0.min.js"></script>
<script src="js/add-post.js"></script>


<div class="col-sm-12 add-post-container">
	
	<!--Text Area for Adding Blog Post-->
	<div class="col-sm-8">
		<h2>Title</h2>
		<div class="post-title">
			<input class="form-control" name="post-title" placeholder="Post Title"></input>
		</div>
		<br>
		<div id="add-post-toolbar" style="display: none;">
		  <a data-wysihtml5-command="bold"><img src="images/admin/text-editor/bold.png"></a>
		  <a data-wysihtml5-command="italic"><img src="images/admin/text-editor/italic.png"></a>

		  <!-- Some wysihtml5 commands require extra parameters -->
		  <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="x-large"><img src="images/admin/text-editor/header.png"></a>

		  <!-- Some wysihtml5 commands like 'createLink' require extra paramaters specified by the user (eg. href) -->
		  <a data-wysihtml5-command="createLink"><img src="images/admin/text-editor/link.png"></a>
		  <div data-wysihtml5-dialog="createLink" style="display: none;">
			<label>
			  Link:
			  <input data-wysihtml5-dialog-field="href" value="http://" class="text">
			</label>
			<a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
		  </div>
		  
		 <!-- User can define the image's src: -->
			<a data-wysihtml5-command="insertImage"><img src="images/admin/text-editor/image.png"></a>
			<div data-wysihtml5-dialog="insertImage" style="display:none;">
			  <label>
				Image:
				<input data-wysihtml5-dialog-field="src" value="http://">
			  </label>
			  <a data-wysihtml5-dialog-action="save">OK</a>
			  <a data-wysihtml5-dialog-action="cancel">Cancel</a>
			</div>
			
		
		</div>
		<form><textarea id="post-content" placeholder="Enter your text ..." autofocus></textarea></form>
		<div class="col-sm-4">
			<button type="submit" class="green-btn btn btn-info btn-block"><span class="glyphicon glyphicon-floppy-saved"></span> <strong>Save Post</strong></button>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="date-container">
			<h2>Date</h2>
			<input class="form-control" placeholder="Date" id="date" name="date"></input>
		</div>
		<br><br>
		<button type="submit" class="tall-btn btn btn-info btn-block"><span class="glyphicon glyphicon-plus"></span> <strong>New Post</strong></button>
	</div>
	
	<div class="top-buffer col-sm-12 post-preview-container text-center">
		<h2>Preview</h2>
		<div class="post-preview">
		</div>
	</div>
</div>
<?php else : ?>
	<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
    </p>
<?php endif; ?>
