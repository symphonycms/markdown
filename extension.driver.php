<?php

	Class extension_Markdown extends Extension{
		public function about(){
			return array(
				'name' => 'Text Formatter: Markdown',
				'version' => '1.10',
				'release-date' => '2010-03-17',
				'author' => array(
					'name' => 'Alistair Kearney',
					'website' => 'http://symphony-cms.com',
					'email' => 'alistair@symphony-cms.com'
				),
				'description' => 'Includes "Markdown" and "Markdown plus Smartypants" text formatters. Also applies the "HTML Purifier" HTML/XHTML filter on resultant output. PHP implementation of the "Markdown" text-to-HTML syntax, created by John Gruber, developed by Michel Fortin.'
			);
		}
		
		public function update($previousVersion){
			
			try{
				if(version_compare($previousVersion, '1.10', '<')){
				  
					Symphony::Database()->query(
						"UPDATE `tbl_fields_textarea`
						 SET formatter='markdown' 
						 WHERE formatter='pb_markdown'");
					
					Symphony::Database()->query(
						"UPDATE `tbl_fields_textbox`
						 SET text_formatter='markdown' 
						 WHERE text_formatter='pb_markdown'");
					
				}
			}
			catch(Exception $e){
				// Discard
			}
		
		  return true;
		}

	}

