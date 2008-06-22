<?php
$cmd = "/home/groups/t/to/tomotko/cgi-bin/convertMioFlash2ToMOTko2.rb < " . $_FILES[ 'glossaryFile' ][ 'tmp_name' ];

header('Content-type: application/zip');
header('Content-disposition: attachment; filename="glossary.zip"');
passthru( $cmd );
?>
