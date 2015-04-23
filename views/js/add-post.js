$(document).ready(function() {
	//Initializing date field
	$( "#date" ).datepicker()
	
	//For initializing text editor
	var editor = new wysihtml5.Editor("post-content", { // id of textarea element
	  toolbar:      "add-post-toolbar", // id of toolbar element
	  parserRules:  wysihtml5ParserRules, // defined in parser rules set 
	  stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "css/admin-text-editor.css"]
	});
});