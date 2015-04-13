<?php

	class qa_top_users {
		
        function allow_template($template)
        {
            $allow=true;
            return $allow;
        }

       function allow_region($region)
        {
            return ($region=='side');
        }

		function output_widget($region, $place, $themeobject, $template, $request, $qa_content1)
		{

			$themeobject->output('<div class="widgethearb">Top users:</div>');
			$themeobject->output('<div class="bordertopred">');			
			//require_once QA_INCLUDE_DIR.'db/users.php';
			//require_once QA_INCLUDE_DIR.'db/selects.php';
			//	Get list of all users
			$start = qa_get_start();
			$users = qa_db_select_with_pending(qa_db_top_users_selectspec($start, qa_opt_if_loaded('page_size_users')));
			foreach ($users as $userid => $user) {
						$themeobject->output('<span style="font-weight: normal;"> User </span>');
						$themeobject->output('<a href="http://www.example.com/qa/index.php?qa=user&qa_1='. qa_html( $user['handle']).'" title="'. qa_html( $user['handle']).' | GG.edu.vn">');
						$themeobject->output(''. qa_html( $user['handle']).'</a>');
						$themeobject->output('<span style="font-weight: normal;"> עם '.qa_html(number_format($user['points'])).' Points</span><br />');						
			}		
			$themeobject->output('</br><a href="http://www.example.com/qa/users" style="padding-right:100px;">For more users »</a>');
			$themeobject->output('</div>');
		}
	
	}
/*
	Omit PHP closing tag to help avoid accidental output
*/
