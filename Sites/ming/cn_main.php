<?php
/*
//	$_SESSION["cn1"] = 1;
?>	
<script>
//	window.location = "cn1-smelling.php";
//	window.location.reload();
	document.write("a");
</script>
<?php
Header( "HTTP/1.1 301 Moved Permanently" ); 
Header("location: cn1-smelling.php");
*/
/*
?>

<html>
<head>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "./cn1-smelling.php"
}
//-->
</script>
</head>
<body onLoad="setTimeout('delayer()', 5000)">
<h2>Prepare to be redirected!</h2>
<p>This page is a time delay redirect, please update your bookmarks to our new 
location!</p>

</body>
</html>
*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css"/>
<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    //check if hash exists and that it is not for the home screen
    if (window.location.hash != '' && window.location.hash != '#page_0') {

        //set whatever content you want to put into the new page
        var content_string = 'Some ' + window.location.hash + ' text...<br><br><a href="#page_0">go to home screen</a>';

        //append the new page onto the end of the body
        $('#page_body').append('<div data-role="page" id="' + window.location.hash.replace('#','') + '"><div data-role="content">' + content_string + '</div></div>');

        //add a link on the home screen to navaigate to the new page (just so nav isn't broken if user goes from new page to home screen)
        $('#page_0 div[data-role="content"]').append('<br><br><a href="#' + window.location.hash.replace('#','') + '">go to ' + window.location.hash.replace('#','') + ' page</a>');
    }
});
function create_page(page_id) {

    //set whatever content you want to put into the new page
    var string = 'FOO BAR page...<br><br><a href="#page_0">return to home screen</a>';

    //append the new page onto the end of the body
    $('#page_body').append('<div data-role="page" id="' + page_id + '"><div data-role="content">' + string + '</div></div>');

    //initialize the new page 
    $.mobile.initializePage();

    //navigate to the new page
    $.mobile.changePage("#" + page_id, "pop", false, true);

    //add a link on the home screen to navaigate to the new page (just so nav isn't broken if user goes from new page to home screen)
    $('#page_0 div[data-role="content"]').append('<br><br><a href="#' + page_id + '">go to ' + page_id + ' page</a>');

    //refresh the home screen so new link is given proper css
    $('#page_0 div[data-role="content"]').page();
}
</script>
<title>Fixed Headers Example</title>
<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>

</head>

<body id="page_body">
<div data-role="page" id="page_0">
<div data-role="content">Some #page_0 text...<br><br><a href="javascript: create_page('foo_bar_page');">create new page</a></div>
</div>


</body>
</html>
