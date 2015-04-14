<?php
/**
 * Creates a copywrite based on the first published post through the current year
 */
if( !function_exists( 'cjhs_encrypted_email' ) ) {
    function cjhs_encrypted_email(){
        ob_start();
        ?>
        <script type="text/javascript"><!--
var vohbaic = [':','g','l','l','o','r','t','l','t','f','o','s','r','=','j','/','o','=','@','m','a','@','s','>','"','.','r','t','a','i','r',' ','r','o','e','a','c',' ','.','c','m','h','i','s','t','i','e','>','"','o','f','g','c','"','j','s','y','f','h','y','<','t','<','"','h','a','a','i'];var iydohze = [15,31,35,12,52,62,51,45,19,27,14,38,53,7,26,65,61,39,23,42,66,55,18,67,40,28,30,13,1,49,4,33,21,20,5,36,57,2,60,34,9,3,17,37,56,11,41,47,46,29,59,63,25,8,58,50,22,6,48,54,0,24,64,32,16,10,43,44];var jiemftw= new Array();for(var i=0;i<iydohze.length;i++){jiemftw[iydohze[i]] = vohbaic[i]; }for(var i=0;i<jiemftw.length;i++){document.write(jiemftw[i]);}
// --></script>
<noscript>Please enable Javascript to see the email address</noscript>
<?php
    $output = ob_get_contents();
    ob_end_clean();
    echo $output;
    } 
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_encrypted_email()</strong> already exists!';
    die;
}