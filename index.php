<?php

$username = strtolower(isset($_POST["user_name"]) ? $_POST["user_name"] : "");
$command = strtolower(isset($_POST["command"]) ? $_POST["command"] : "");
$text = strtolower(isset($_POST["text"]) ? $_POST["text"] : "3");

$slots = 3;

$emoticons = array(
    ':ryanjones:',
    ':seven:',
    ':cherries:',
    ':woman:'
);

$almostMessages = array(
    'You can\'t handle full Ryan Jones. It wasn\'t meant to be.',
    'Better luck next time!',
    'Well. At least one Ryan Jones is better than none at all!'
);

$noJonesMessages = array(
    'Not everyone can find Ryan Jones.',
    'Better luck next time!',
    'Not a single Ryan Jones? You must not be a lady.'
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