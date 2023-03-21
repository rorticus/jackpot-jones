const express = require('express');
const sayings = require('./sayings');

const emoticons = [
    ':ryanjones:',
    ':seven:',
    ':cherries:',
    ':woman:'
];

const app = express();
app.use(express.urlencoded({extended: true}));

app.post('/', (req, res) => {
    const {username = ''} = req.body || {};

    let emoji = [];
    let message = '';
	let responseType = 'ephemeral';

    if (username === 'ryan') {
        emoji = [':woman:', ':woman:', ':woman:'];
    }

    for (let i = 0; i < 3; i++) {
        emoji.push(emoticons[Math.floor(Math.random() * emoticons.length)]);
    }

    if (emoji.every((e) => e === ':ryanjones:')) {
        message = 'Ryan Jooooooooooones!';
	responseType = 'in_channel';
    } else if (emoji.every(e => e === ':woman:')) {
        message = 'Ryan Jones always gets the ladies';
    } else {
        message = sayings[Math.floor(Math.random() * sayings.length)];
    }

    res.json({
        response_type: responseType,
        text: emoji.join(''),
        attachments: [
            {
                text: message
            }
        ]
    });
});

app.listen(8080);
