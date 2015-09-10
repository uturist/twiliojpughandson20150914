<?php
    
    $people = array(
                    "+8190xxxxxxxx"=>”さとう”,
                    "+8180xxxxxxxx"=>”すずき”,
                    "+8150xxxxxxxx"=>”たなか”
                    );
    
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
<?php if(!$name = $people[$_REQUEST['From']]) { ?>
    <Say language="ja-jp" voice="woman">お電話ありがとうございます。こちらはトゥイリオシステムです。担当におつなぎいたしますので、ご用件をお話しいただき、しばしそのままでお待ち下さい。</Say>
    <Record
    　action="http://xxx.mybluemix.net/callcenter" method="POST"
    　maxLength="60"
    />
    <Say language="ja-jp" voice="woman">申し訳ありません。もう一度お掛け直しください</Say>
<?php } else { ?>
    <Say language="ja-jp" voice="woman"><?php echo $name ?>さんこんにちは。どうなさいましたか。</Say>
    <Record
    　action="http://xxx.mybluemix.net/callcenter" method="POST"
    　maxLength="5"
    />
    <Say language="ja-jp" voice="woman"><?php echo $name ?>さん申し訳ありません。もう一度お掛け直しください</Say>
<?php } ?>
</Response>
