<?php
/***********************************************************/
/*register_globalsの値を確認する場合はphpinfoのConfigrationで*/                                              */
/***********************************************************/
//phpinfo();

foreach($_SERVER as $server_key => $server_val)
{
    echo $server_key . "<br/>\n";
}
