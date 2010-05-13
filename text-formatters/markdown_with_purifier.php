<?php

	/****
	
		Markdown Text Formatter with HTML Purifier
		Version: 1.1
		Release Date: 30th April 2010
		Author: Alistair Kearney (alistair@symphony-cms.com)
	
		Write entries in the Markdown format. Wrapper for the PHP Markdown 
		text-to-HTML conversion tool written by Michel Fortin.

	****/

	Class formatterMarkdown_With_Purifier extends TextFormatter{
		
		const NAME = 'Markdown (With HTML Purifier)';
		
		private static $_parser;
				
		public function run($string){
			if(!self::$_parser){
				include_once(EXTENSIONS . '/markdown/lib/php-markdown-1.0.1n/markdown.php');
				self::$_parser = new Markdown_Parser();
			}
			
			// Markdown transformation
			$result = stripslashes(self::$_parser->transform($string));
			
			// Run the result through the HTML Purifier engine
			include_once(EXTENSIONS . '/markdown/lib/htmlpurifier-4.0.0-standalone/HTMLPurifier.standalone.php');
			$purifier = new HTMLPurifier;
			$result = $purifier->purify($result);
			
			return $result;
		}
		
	}

	return 'formatterMarkdown_With_Purifier';
