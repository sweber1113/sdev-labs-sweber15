<?php
// include function files for this application
require_once('bookmark_fns.php');
session_start();

// start output html
do_html_header('Add Bookmarks');

check_valid_user();
display_add_bm_form();

display_user_menu();
do_html_footer();

?>
<?php
 require_once('bookmark_fns.php');
 session_start();

  //create short variable name
  $new_url = $_POST['new_url'];

  do_html_header('Adding bookmarks');

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // check URL format
    if (strstr($new_url, 'http://') === false) {
       $new_url = 'http://'.$new_url;
    }

    // check URL is valid
    if (!(@fopen($new_url, 'r'))) {
      throw new Exception('Not a valid URL.');
    }

    // try to add bm
    add_bm($new_url);
    echo 'Bookmark added.';

    // get the bookmarks this user has saved
    if ($url_array = get_user_urls($_SESSION['valid_user'])) {
      display_user_urls($url_array);
    }
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
  display_user_menu();
  do_html_footer();
  }
function add_bm($new_url) {
	// Add new bookmark to the database

	echo "Attempting to add ".htmlspecialchars($new_url)."<br />";
	$valid_user = $_SESSION['valid_user'];

	$conn = db_connect();

	// check not a repeat bookmark
	$result = $conn->query("select * from bookmark
                         where username='$valid_user'
                         and bm_URL='".$new_url."'");
	if ($result && ($result->num_rows>0)) {
	   throw new Exception('Bookmark already exists.');
	}		

	// insert the new bookmark
	if (!$conn->query("insert into bookmark values
	   ('".$valid_user."', '".$new_url."')")) {
	  throw new Exception('Bookmark could not be inserted.');
  }

	return true;
}
?>
