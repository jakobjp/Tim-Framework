<?php

namespace Tim;

function pr( $value )
{
	echo '<pre>';
	print_r( $value );
	echo '</pre>';
}

class Init {
	
	public static function autoload()
	{
		pr( func_get_args() );
	}
	
	public static function test()
	{
		echo 'TEST';
	}
	
}

?>