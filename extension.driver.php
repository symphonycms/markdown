<?php

	Class extension_Markdown extends Extension{

		public function update($previousVersion = false){
			if(version_compare($previousVersion, '1.10', '<')){

				$conversion = array(
					'pb_markdown' => 'markdown',
					'pb_markdownextrasmartypants' => 'markdown_extra_with_smartypants',
					'pb_markdownextra' => 'markdown_extra'
				);

				foreach($conversion as $old => $new){

					try{
						Symphony::Database()
							->update('tbl_fields_textarea')
							->set([
								'formatter' => $new,
							])
							->where(['formatter' => $old])
							->execute()
							->success();
					}
					catch(Exception $e){
					}

					try{
						Symphony::Database()
							->update('tbl_fields_textbox')
							->set([
								'text_formatter' => $new,
							])
							->where(['text_formatter' => $old])
							->execute()
							->success();
					}
					catch(Exception $e){
					}

				}

			}

			return true;
		}

	}
