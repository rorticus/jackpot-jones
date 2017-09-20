<?php

$username = strtolower(isset($_POST["user_name"]) ? $_POST["user_name"] : "");

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

foreach(array(
    "Ryan Jones gave his father “the talk”",
    "Ryan Jones' passport requires no photograph",
    "When Ryan Jones drives a car off the lot, its price increases in value",
    "Once a rattlesnake bit Ryan Jones, after 5 days of excruciating pain, the snake finally died",
    "Ryan Jones' 5 de Mayo party starts on the 8th of March",
    "Ryan Jones' feet don’t get blisters, but his shoes do",
    "Ryan Jones once went to the psychic, to warn her",
    "If Ryan Jones were to punch you in the face you would have to fight off a strong urge to thank him",
    "Whatever side of the tracks Ryan Jones’s currently on is the right side, even if Ryan Jones crosses the tracks Ryan Jones’ll still be on the right side",
    "Ryan Jones can speak Russian… in French",
    "Ryan Jones never says something tastes like chicken.. not even chicken",
    "Superman has pijamas with his logo",
    "Ryan Jones' tears can cure cancer, too bad Ryan Jones never cries",
    "The circus ran away to join Ryan Jones",
    "Bear hugs are what Ryan Jones gives bears",
    "Ryan Jones once brought a knife to a gunfight… just to even the odds",
    "When Ryan Jones meets the Pope, the Pope kisses his ring",
    "Ryan Jones' friends call him by his name, his enemies don’t call him anything because they are all dead",
    "Ryan Jones has never waited 15 minutes after finishing a meal before returning to the pool",
    "If Ryan Jones were to visit the dark side of the moon, it wouldn’t be dark",
    "Ryan Jones once won a staring contest with his own reflection",
    "Ryan Jones can kill two stones with one bird",
    "Ryan Jones' signature won a Pulitzer",
    "When a tree falls in a forest and no one is there, Ryan Jones hears it",
    "Ryan Jones once got pulled over for speeding, and the cop got the ticket",
    "The dark is afraid of Ryan Jones",
    "Sharks have a week dedicated to Ryan Jones",
    "Ryan Jones' ten gallon hat holds twenty gallons",
    "No less than 25 Mexican folk songs have been written about his beard",
    "Ryan Jones once made a weeping willow laugh",
    "Ryan Jones lives vicariously through himself",
    "Ryan Jones' business card simply says ‘I’ll Call You”",
    "Ryan Jones once taught a german shepherd how to bark in spanish",
    "Ryan Jones bowls overhand",
    "In museums, Ryan Jones is allowed to touch the art",
    "Ryan Jones is allowed to talk about the fight club",
    "Ryan Jones once won a fist fight, only using his beard",
    "Ryan Jones once won the Tour-de-France, but was disqualified for riding a unicycle",
    "A bird in his hand is worth three in the bush",
    "Ryan Jones' lovemaking has been detected by a seismograph",
    "The Holy Grail is looking for Ryan Jones",
    "Roses stop to smell Ryan Jones",
    "Ryan Jones once started a fire using only dental floss and water",
    "Ryan Jones' sweat is the cure for the common cold",
    "Bigfoot tries to get pictures of Ryan Jones",
    "Werewolves are jealous of his beard",
    "Ryan Jones once turned a vampire into a vegetarian",
    "Ryan Jones once won the world series of poker using UNO cards",
    "Ryan Jones never wears a watch because time is always on his side",
    "Ryan Jones has taught old dogs a variety of new tricks",
    "Ryan Jones has won the lifetime achievement award… twice",
    "If opportunity knocks, and Ryan Jones’s not at home, opportunity waits",
    "Batman watches Saturday morning cartoons about Ryan Jones",
    "When Ryan Jones was young Ryan Jones once sent his parents to his room",
    "Ryan Jones once had an awkward moment, just to see how it feels",
    "Ryan Jones' beard alone has experienced more than a lesser man’s entire body",
    "Ryan Jones' blood smells like cologne",
    "On every continent in the world, there is a sandwich named after Ryan Jones. His hands feel like rich brown suede",
    "Mosquitoes refuse to bite Ryan Jones purely out of respect",
    "Ryan Jones is fluent in all languages, including three that Ryan Jones only speaks",
    "Once while sailing around the world, Ryan Jones discovered a short cut",
    "Panhandlers give Ryan Jones money",
    "When Ryan Jones goes to Spain, Ryan Jones chases the bulls",
    "Ryan Jones' shadow has been on the ‘best dressed’ list twice",
    "When Ryan Jones holds a lady’s purse, Ryan Jones looks manly",
    "Two countries went to war to dispute HIS nationality",
    "When in Rome, they do as Ryan Jones does",
    "Ryan Jones' pillow is cool on BOTH sides",
    "The Nobel Academy was awarded a prize from RYAN JONES",
    "While swimming off the coast of Australia, Ryan Jones once scratched the underbelly of the Great White with his right hand",
    "Ryan Jones taught Chuck Norris martial arts",
    "Time waits on no one, but Ryan Jones",
    "Once Ryan Jones ran a marathon because it was “on the way”",
    "Ryan Jones' mother has a tattoo that says “Son”",
    "The star on his Christmas tree is tracked by NASA",
    "Presidents take his birthday off",
    "Ryan Jones' shirts never wrinkle",
    "Ryan Jones has never walked into a spider web",
    "Ryan Jones is left-handed. And right-handed",
    "Ryan Jones' shirts never wrinkle",
    "The police often question Ryan Jones, just because they find him interesting",
    "Ryan Jones' organ donation card also lists his beard",
    "Ryan Jones doesn’t believe in using oven mitts, nor potholders",
    "Ryan Jones' cereal never gets soggy. It sits there, staying crispy, just for him",
    "Respected archaeologists fight over his discarded apple cores",
    "Even his tree houses have fully finished basements",
    "Ryan Jones' garden maze is responsible for more missing persons than the bermuda triangle",
    "If Ryan Jones were to say something costs an arm and a leg, it would",
    "Ryan Jones’s never lost a game of chance",
    "Ryan Jones is the life of parties that Ryan Jones has never attended",
    "Ryan Jones was on a recent archaeological dig and came across prehistoric foot prints that lead out of Africa into all parts of the world. On close inspection, it turned out that the prints were his",
    "Ryan Jones once caught the Loch Ness Monster….with a cane pole, but threw it back",
    "Ryan Jones' wallet is woven out of chupacabra leather",
    "Ryan Jones played a game of Russian Roulette with a fully loaded magnum, and won",
    "Freemasons strive to learn HIS secret handshake",
    "If Ryan Jones was to pat you on the back, you would list it on your resume",
    "Ryan Jones is considered a national treasure in countries Ryan Jones’s never visited",
    "Cars look both ways for Ryan Jones, before driving down a street",
    "Ryan Jones once tried to acquire a cold just to see what it felt like, but it didn’t take",
    "Ryan Jones has inside jokes with people Ryan Jones’s never met",
    "Bikers walk their motorcycles past his home",
    "Ryan Jones has inside jokes with complete strangers",
	"Ryan Jones pees standing up and sitting down, at the same time",
	"Ryan Jones can cook minute rice in 30 seconds",
    "Roses are red, violets are blue, Ryan Jones just dumped you",
    "Insuance companies pay Ryan Jones a premium to insure him"
) as $message) {
    $almostMessages[] = $message;
    $noJonesMessages[] = $message;
}

if($username === 'ryan') {
    $emoticons = array(':woman:');
}
else if($username === "aaron.hanford") {
    $emoticons = array(':skull_and_crossbones:');
}

$results = array();
$ryanJoneses = 0;
$ladies = 0;
for($i = 0; $i < $slots; $i++) {
    $emoticon = $emoticons[rand() % count($emoticons)];
    if($emoticon === ':ryanjones:') {
        $ryanJoneses++;
    } else if($emoticon === ':woman:') {
        $ladies++;
    }

    $results[] = $emoticon;
}

$winner = $ryanJoneses == $slots;

$attachment = '';

if($ladies == $slots) {
    $attachment = 'Ryan Jones always gets the ladies.';
} else {
    if(join("", $results) === ':ryanjones::woman::woman:') {
        $attachment = 'The ladies always follow Ryan Jones.';
    } else {
        if($winner) {
            $attachment = 'Ryan Jooooooooones!';
        } else {
		if($username === "aaron.hanford") {
			$attachment = "Not again Aaron. Not. Again.";
		}
		else {
                if($ryanJoneses > 0) {
                    $attachment = $almostMessages[rand() % count($almostMessages)];
                } else {
                    $attachment = $noJonesMessages[rand() % count($noJonesMessages)];
                }
		    }
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
