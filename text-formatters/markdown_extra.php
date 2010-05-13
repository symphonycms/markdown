<?php
	
	/****
		
		Markdown Extra Text Formatter
		Version: 1.8
		Release Date: 30th April 2010
		Author: Alistair Kearney (alistair@symphony-cms.com)
		
		Write entries in the Markdown format. Wrapper for the PHP Markdown 
		text-to-HTML conversion tool written by Michel Fortin.
	
	****/
	
	Class formatterMarkdown_Extra extends TextFormatter{

		private static $_parser;

		const NAME = 'Markdown Extra';
	
		public function run($string){
			if(!self::$_parser){
				include_once(EXTENSIONS . '/markdown/lib/php-markdown-extra-1.2.4/markdown.php');
				self::$_parser = new Markdown_Parser();
			}
			
			// Markdown transformation
			$result = stripslashes(self::$_parser->transform($string));

			return $result;
		}
		
	}

	return 'formatterMarkdown_Extra';
