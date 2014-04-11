<?php
// Sets the files we'll be using
$srcurl = 'http://php6/jokesite/index.php'; // This must be a URL!
$tempfilename = 'tempindex.html';       // This must be a filename!
$targetfilename = 'index.html';         // Also a filename!
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Generating <?php echo $targetfilename; ?></title>
    <meta http-equiv="content-type"
          content="text/html; charset=iso-8859-1" />
</head>
<body>
<p>Generating <?php echo $targetfilename; ?>...</p>
<?php

// Begin by deleting the temporary file, in case
// it was left lying around. This might spit out an
// error message if it were to fail, so we use
// @ to suppress it.
@unlink($tempfilename);

// Load the dynamic page by requesting it with a
// URL. The PHP will be processed by the Web server
// before we receive it (since we're basically
// masquerading as a Web browser), so what we'll get
// is a static HTML page. The 'r' indicates that we
// only intend to read from this "file".
$dynpage = fopen($srcurl, 'r');

// Check for errors
if (!$dynpage) {
    exit("<p>Unable to load $srcurl. Static page update aborted!</p>");
}

// Read the contents of the URL into a PHP variable.
// Specify that we're willing to read up to 1MB of
// data (just in case something goes wrong).
$htmldata = fread($dynpage, 1024*1024);

// Close the connection to the source "file", now
// that we're done with it.
fclose($dynpage);

// Open the temporary file (creating it in the
// process) in preparation to write to it (note
// the 'w').
$tempfile = fopen($tempfilename, 'w');

// Check for errors
if (!$tempfile) {
    exit("<p>Unable to open temporary file ($tempfilename) for writing. Static page update aborted!</p>");
}

// Write the data for the static page into the
// temporary file
fwrite($tempfile, $htmldata);

// Close the temporary file, now that we're done
// writing to it.
fclose($tempfile);

// If we got this far, then the temporary file
// was successfully written, and we can now copy
// it on top of the static page.
$ok = copy($tempfilename, $targetfilename);

// Finally, delete the temporary file.
unlink($tempfilename);

?>
<p>Static page successfully updated!</p>
</body>
</html>