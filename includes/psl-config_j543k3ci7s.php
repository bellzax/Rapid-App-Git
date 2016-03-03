 <?php
/**
 * These are the database login details
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "za977950");    // The database username. 
define("PASSWORD", "Freck@345");    // The database password. 
define("DATABASE", "za977950");    // The database name.

//Testing Server login details
/*define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username. 
define("PASSWORD", "");    // The database password. 
define("DATABASE", "za977950");    // The database name.
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!*/
?>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>