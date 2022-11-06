<?php


    $firsWord = readline('Enter first word: ');
    $secondWord = readline('Enter second word: ');

    $wordsTogether = $firsWord . "" . $secondWord;
    $wordCount = strlen($wordsTogether);

    $periods = 0;
    if ($wordCount <= 30){
        $periods = 30 - $wordCount;
    }
    $dots = "";

    for ($i = 1; $i <= $periods; $i++){
        $dots .= '.';
    }


    echo  $firsWord . $dots . $secondWord;
