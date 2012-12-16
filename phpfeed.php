<?PHP


// Obtain Feed Url From POST
$phpfeed_url = $_POST['phpfeedurl'];


if ($phpfeed_url) // Check to see if we actually got a URL.
{
	// If so continue with the operation.
	continue;

}else{
	// Halt the script with a fatal error.
	die("Fatal Error: phpfeed did not find a url...");
}


// Create the xml object
$phpfeed_xml = simplexml_load_file($phpfeed_url);

// Get the item array
$phpfeed_item_array = $phpfeed_xml->rss->channel->item;

// Setup the result output
$phpfeed_result = json_encode($phpfeed_item_array);

// Echo the output to the page/javascript
echo $phpfeed_result;

