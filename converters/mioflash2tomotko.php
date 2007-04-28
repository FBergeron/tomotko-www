<?php
$cmd = "/home/groups/t/to/tomotko/cgi-bin/convertMioFlash2ToMOTko.rb < " . $_FILES[ 'glossaryFile' ][ 'tmp_name' ];
header('Content-type: application/xml');
header('Content-disposition: attachment; filename="glossary.xml"');
system( $cmd );
?>
