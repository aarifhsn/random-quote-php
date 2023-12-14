<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Favourite Quotes</title>
    
</head>
<body>

<?php

$quotes = array(
    "The best among you is the one who doesn’t harm others with his tongue and hands." => "Prophet Muhammad (peace be upon him)",
    
    "We were the most humiliated people on earth & Allah gave us honour through Islam." => "Umar Ibn Al Khattab",
    
    "The best of houses is the house where an orphan gets love and kindness." => "Prophet Muhammad (peace be upon him)",
    
    "Indeed, I am near." => "Quran 2:186",
    
    "So when you have made a decision, then put your trust in Allah" => "Surah Al Imran (159)",
    
    "Remember your own faults when you want to mention of others." => "Prophet Muhammad (peace be upon him)",
    
    "And whoever fears Allah – He will make for him a way out and will provide for him from where he does not expect. And whoever relies upon Allah – then He is sufficient for him. 
    Indeed, Allah will accomplish His purpose. Allah has already set for everything a [decreed] extent." => "Al Quran, 65: 2-3",

    "Marry someone who is deeply interested in the way of God because that is who your children will follow." => "Mufti Ismail Menk",
);


$randQuote = array_rand($quotes);
$randWriter = $quotes[$randQuote];

    echo "<div class='display_quotes'>
            <p>$randQuote</p>
            <span>$randWriter</span>
            
            <a href='?'' >Refresh</a>
        </div>";
?>
    
    
    
</body>
</html>
