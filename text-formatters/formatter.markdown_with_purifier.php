<?php

	Class formatterMarkdown_With_Purifier extends TextFormatter{

		private static $_parser;

		public function about(){
			return array(
				'name' => 'Markdown (With HTML Purifier)',
				'version' => '1.1',
				'release-date' => '2010-04-30',
				'author' => array(
					'name' => 'Alistair Kearney',
					'website' => 'http://symphony-cms.com',
					'email' => 'alistair@symphony-cms.com'
				),
				'description' => 'Write entries in the Markdown format. Wrapper for the PHP Markdown text-to-HTML conversion tool written by Michel Fortin.'
			);
		}
				
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

