<?PHP


// Obtain Feed Url From POST
$phpfeed_url = $_GET['phpfeedurl'];


if ($phpfeed_url == "") // Check to see if we didn't get a URL.
{
	// Halt the script with a fatal error.
	die("Fatal Error: phpfeed did not find a url...");
}

// Get The XML
$file_contents = file_get_contents($phpfeed_url);

//Prepare the string for xml parsing
$file_contents = str_replace(array("\n", "\r", "\t"), '', $file_contents);

// Create the xml object
$phpfeed_xml = simplexml_load_string($file_contents);

// Get the item array
$phpfeed_item_json = json_encode($phpfeed_xml);

// Echo the output to the page/javascript
echo $phpfeed_item_json;

