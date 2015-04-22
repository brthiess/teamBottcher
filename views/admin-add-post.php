<script src="js/advanced.js"></script>
<script src="js/wysihtml5-0.3.0.min.js"></script>


<div class="col-sm-12 add-post-container">
	
	<!--Text Area for Adding Blog Post-->
	<div class="col-sm-8">
		<div id="add-post-toolbar" style="display: none;">
		  <a data-wysihtml5-command="bold"><img src="images/admin/text-editor/bold.png"></a>
		  <a data-wysihtml5-command="italic"><img src="images/admin/text-editor/italic.png"></a>

		  <!-- Some wysihtml5 commands require extra parameters -->
		  <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>

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
			<div data-wysihtml5-dialog="insertImage">
			  <label>
				Image:
				<input data-wysihtml5-dialog-field="src" value="http://">
			  </label>
			  <a data-wysihtml5-dialog-action="save">OK</a>
			  <a data-wysihtml5-dialog-action="cancel">Cancel</a>
			</div>
		</div>
		<form><textarea id="post-content" placeholder="Enter your text ..." autofocus></textarea></form>
	</div>
</div>

<script>
var editor = new wysihtml5.Editor("post-content", { // id of textarea element
  toolbar:      "add-post-toolbar", // id of toolbar element
  parserRules:  wysihtml5ParserRules, // defined in parser rules set 
  stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "css/admin-text-editor.css"]
});
</script>