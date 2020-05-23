<?php

function tempdir() {
	$tempfile=tempnam(sys_get_temp_dir(),'');
	// you might want to reconsider this line when using this snippet.
	// it "could" clash with an existing directory and this line will
	// try to delete the existing one. Handle with caution.
	//if (file_exists($tempfile)) { unlink($tempfile); }
	mkdir($tempfile);
	if (is_dir($tempfile)) { return $tempfile; }
}

/*example*/

echo tempdir();
// returns: /tmp/8e9MLi
