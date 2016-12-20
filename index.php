<?php

$username = strtolower(isset($_POST["user_name"]) ? $_POST["user_name"] : "");
$command = strtolower(isset($_POST["command"]) ? $_POST["command"] : "");
$text = strtolower(isset($_POST["text"]) ? $_POST["text"] : "3");

$slots = max(2, min(7, (int)$text));

$emoticons = array(
    ':ryanjones:',
    ':seven:',
    ':cherries:',
    ':woman:'
);

$almostMessages = array(
    'You can\'t _handle_ full Ryan Jones. It wasn\'t meant to be.'
);

$noJonesMessages = array(
    'Not everyone can find Ryan Jones.'
);

if($username === 'Ryan Jones') {
    $emoticons = array(':woman:');
}

$results = array();
$ryanJoneses = 0;
for($i = 0; $i < $slots; $i++) {
    $emoticon = $emoticons[rand() % count($emoticons)];
    if($emoticon === ':ryanjones:') {
        $ryanJoneses++;
    }

    $results[] = $emoticon;
}

$winner = $ryanJoneses == $slots;

$attachment = '';

if($username != 'Ryan Jones') {
    if($winner) {
        $attachment = 'Ryan Jooooooooones!';
    } else {
        if($ryanJoneses > 0) {
            $attachment = $almostMessages[rand() % count($almostMessages)];
        } else {
            $attachment = $noJonesMessages[rand() % count($noJonesMessages)];
        }
    }
}

$response = array(
    "response_type" => "in_channel",
    "text" => join("", $results)
);

if($attachment != "") {
    $response["attachments"] = array(
        array(
            "text" => $attachment
        )
    );
}

header('Content-Type: application/json');

echo json_encode($response);