function console_log($data){ 
    if(is_array($data) || is_object($data)){
	echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
    } elseif($data === true) {
        echo("<script>console.log('true');</script>");
    } elseif($data === false) {
        echo("<script>console.log('false');</script>");
    }else {
	echo("<script>console.log('php_string: ".$data."');</script>");
    }
}
