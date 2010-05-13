<?php

	/****

		Markdown Extra (With SmartyPants) Text Formatter
		Version: 1.8
		Release Date: 30th April 2010
		Author: Alistair Kearney (alistair@symphony-cms.com)

		Write entries in the Markdown format. Wrapper for the PHP Markdown 
		text-to-HTML conversion tool written by Michel Fortin.

	****/

	Class formatterMarkdown_Extra_With_Smartypants extends TextFormatter{
		
		const NAME = 'Markdown Extra (With SmartyPants)';
		
		private static $_parser;
		
		public function run($string){
			if(!self::$_parser){
				include_once(EXTENSIONS . '/markdown/lib/php-markdown-extra-1.2.4/markdown.php');
				self::$_parser = new Markdown_Parser();
			}
			
			// Markdown transformation
			$result = stripslashes(self::$_parser->transform($string));
			
			if(!function_exists('SmartyPants')) include_once(EXTENSIONS . '/markdown/lib/php-smartypants-1.5.1e/smartypants.php');
            
			// Apply "Smarty Pants" formatting
			$result = SmartyPants(
				stripslashes(self::$_parser->transform($string))
			);

			return $result;
		}
		
	}
	
	return "formatterMarkdown_Extra_With_Smartypants";
