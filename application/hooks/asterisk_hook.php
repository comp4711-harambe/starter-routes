<?php
class AsteriskHook {

    function asterisk_words() {
        $CI = & get_instance();
        $buffer = $CI->output->get_output();

        preg_match_all('/<p[^>]*class="lead"[^>]*>([^>]*)<\s*\/\s*p\s*>/', $buffer, $string);
        $modifiedContent = $content = $string[1];
        $modifiedPtag = $ptag = $string[0];

        foreach ($content as $match) {
            preg_match_all("/^[a-zA-Z]{4}\s/", $match, $words);
            foreach ($words[0] as $word) {
                $modifiedContent = preg_replace("/" . $word . "/", "**** ", $modifiedContent); 
            }

            while (preg_match("/(\W)([a-zA-Z]{4})(\W)/", $modifiedContent[0], $matchedWord) == 1) {
                preg_match("/(.)([a-zA-Z]{4})(.)/", $matchedWord[0], $splitWord);
                $modifiedContent = preg_replace("/" . $splitWord[0] . "/", $splitWord[1] . "****" . $splitWord[3], $modifiedContent);
            }

            preg_match('/(<p[^>]*class="lead"[^>]*>)([^>]*)(<\s*\/\s*p\s*>)/', $buffer, $splitBuffer);
            $buffer = preg_replace("/" . $splitBuffer[2] . "/", $modifiedContent[0], $buffer);
        }

        $CI->output->set_output($buffer);
        $CI->output->_display();
    }
}

?>
