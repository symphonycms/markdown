<?php

	Class extension_markdown extends Extension{
	
		public function about(){
			return array('name' => 'Markdown and SmartyPants Text Formatter',
						 'version' => '1.9',
						 'release-date' => '2009-08-10',
						 'author' => array('name' => 'Alistair Kearney',
										   'website' => 'http://www.pointybeard.com',
										   'email' => 'alistair@pointybeard.com'),
						 'description' => 'Includes 3 Text Formatters: PHP Markdown, PHP Markdown Extra and PHP Markdown Extra plus SmartyPants. This Text-to-HTML conversion tool is developed by Michel Fortin.'
				 		);
		}
				
	}

