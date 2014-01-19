<?php

// A bunch of defaults
$DEFAULT_PAGE="index";
$MARKDOWN_FILE_EXTENSION=".mkd";

// the page to access is pased via a ?page=<whatever> GET parameter.
$filename=$_GET['page'];

// If no page is requested, fetch index.mkd or whatever your default is.
if ($filename==""){
    $filename=$DEFAULT_PAGE;
}

// Generate filepath. os.path.join I miss you :(
$filepath='./markdown/' . $filename . $MARKDOWN_FILE_EXTENSION;

// Fetch the markdown/file's contents
// TODO: Should probably check if we have this file as markdown(?)
$file_contents = file_get_contents($filepath);

// If file doesn't exist/can't be read/"huston we have a problem",
// redirect to ./markdown/error.mkd
if($file_contents == false){
    header("location: error");
    exit();
}
?>
<html>
    <head>
        <!-- Add title here -->
        <title><?php echo ucfirst($filename); ?></title>
        <link rel="shortcut icon" href="./favicon.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="./css/markdown.css" />
        <script type="text/javascript" src="./js/markdown.js"></script>
        <script type="text/javascript">
            function injectMarkdown(){
                // Convert the markdown to HTML and inject into page.
                document.getElementById("md").innerHTML = markdown.toHTML(<?php echo json_encode($file_contents); ?>);
            };
        </script>
    </head>
    <body onload="injectMarkdown()">
    <div id="md"></div>
    </body>
</html>
