<?php
	
	/****
		
		Markdown Text Formatter
		Version: 1.7
		Release Date: 17th March 2010
		Author: Alistair Kearney (alistair@symphony-cms.com)
		
		Write entries in the Markdown format. Wrapper for the PHP Markdown 
		text-to-HTML conversion tool written by Michel Fortin.
	
	****/
	
	Class formatterMarkdown extends TextFormatter{
		
		const NAME = 'Markdown';
		
		private static $_parser;
				
		public function run($string){
			if(!self::$_parser){
				include_once(EXTENSIONS . '/markdown/lib/php-markdown-1.0.1n/markdown.php');
				self::$_parser = new Markdown_Parser();
			}
			
			// Markdown transformation
			$result = stripslashes(self::$_parser->transform($string));

			return $result;
		}
		
	}
	
	return 'formatterMarkdown';

