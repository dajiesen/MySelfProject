<?php
$str = "<? W3S?h????>";
echo htmlentities($str);
echo "\r\n";
echo lcfirst("Hello Word");
echo "\r\n";
$arr = array('Hello','World!','I','love','Shanghai!');
echo join(" ",$arr);
echo "\r\n";
$str = "name=jason&age=19";
parse_str($str);
echo $name."-".$age;
echo "\r\n";
