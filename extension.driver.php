<?php

	Class extension_Markdown implements iExtension{
		public function about(){
			return (object)array(
				'name' => 'Text Formatter: Markdown',
				'version' => '1.11',
				'release-date' => '2010-04-30',
				'author' => (object)array(
					'name' => 'Alistair Kearney',
					'website' => 'http://symphony-cms.com',
					'email' => 'alistair@symphony-cms.com'
				),
				'description' => 'Includes "Markdown", "Markdown Extra", "Markdown Extra with Smartypants" and "Markdown with HTML Purifier" text formatters. PHP implementation of the "Markdown" text-to-HTML syntax, created by John Gruber, developed by Michel Fortin.'
			);
		}
	}

	return 'extension_Markdown';