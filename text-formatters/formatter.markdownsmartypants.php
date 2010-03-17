<?php

	Class formatterMarkdownSmartyPants extends TextFormatter{

		private static $_parser;

		public function about(){
			return array(
				'name' => 'Markdown plus SmartyPants',
				'version' => '1.5',
				'release-date' => '2010-03-17',
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
				include_once(EXTENSIONS . '/markdown/lib/php-markdown-extra-1.2.4/markdown.php');
				self::$_parser = new MarkdownExtra_Parser();
			}

            if(!function_exists('SmartyPants')) include_once(EXTENSIONS . '/markdown/lib/php-smartypants-1.5.1e/smartypants.php');
            
			$result = SmartyPants(
				stripslashes(self::$_parser->transform($string))
			);
			
			// Run the result through the HTML Purifier engine
			include_once(EXTENSIONS . '/markdown/lib/htmlpurifier-4.0.0-standalone/HTMLPurifier.standalone.php');
			$purifier = new HTMLPurifier;
			return $purifier->purify($result);
		}
	}

