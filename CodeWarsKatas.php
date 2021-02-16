<?php

use JetBrains\PhpStorm\Pure;

/**
 * Class CodeWarsKatas
 * This class contains my solutions for CodeWars.com kata problems.
 *
 * @author  Allison Christiansen
 * @url https://www.codewars.com/users/nnyit/completed_solutions
 */
class CodeWarsKatas
{

    /**
     * https://www.codewars.com/kata
     */
    /**
     * https://www.codewars.com/kata/550f22f4d758534c1100025a
     * @param array $arr
     * @return array
     */
    function dirReduc(array $arr): array
    {
        $separator = " ";
        $values = implode($separator, $arr);
        $values = $this->directionReduceReplace($values);
        $arr = array_filter(explode($separator, $values));
        return $arr;
    }

    /**
     * @param string $values
     * @return string
     */
    function directionReduceReplace(string $values): string
    {
        $pattern = "/((NORTH SOUTH)|(SOUTH NORTH)|(WEST EAST)|(EAST WEST))\s*/";
        if (preg_match($pattern, $values)) {
            $values = preg_replace($pattern, "", $values);
            return $this->directionReduceReplace($values);
        } else {
            return $values;
        }

    }


    /**
     * https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1
     * @param string $text
     * @return int
     */
    #[Pure] function duplicateCount(string $text): int
    {
        $char_data = count_chars(strtolower($text), 1);
        $duplicates = 0;
        foreach ($char_data as $count)
        {
            if ($count > 1)
            {
                $duplicates += 1;
            }
        }
        return $duplicates;
    }

    /**
     * https://www.codewars.com/kata/54b724efac3d5402db00065e
     * @param string $code
     * @return string
     */
    function decode_morse(string $code): string
    {
        $morse_code = $this->get_morse_code_library();

        $word_delimiter = "   ";
        $words = explode($word_delimiter, trim($code));
        $output = "";

        foreach ($words as $word)
        {
            $chars = explode(" ", $word);
            foreach ($chars as $char)
            {
                $output .= $morse_code[$char];

            }
            $output .= " ";
        }

        return trim($output);
    }

    function get_morse_code_library(): array
    {
        define('MORSE_CODE', array());
        return MORSE_CODE;
    }

    /**
     * https://www.codewars.com/kata/546f922b54af40e1e90001da
     * @param string $s
     * @return string
     */
    #[Pure] function alphabet_position(string $s): string
    {
        // Your code here
        $arr = str_split(strtolower($s));
        $ord_a = ord('a');
        $ord_z = ord('z');
        $positions = "";

        foreach ($arr as $char)
        {
            $ord_char = ord($char);
            if ($ord_char >= $ord_a && $ord_char <= $ord_z)
            {
                $position = ($ord_char - $ord_a + 1);
                $positions .= "$position ";
            }
        }

        return trim($positions);
    }

    /**
     * https://www.codewars.com/kata/50654ddff44f800200000004
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    function multiply(float|int $a, float|int $b): float|int
    {
        return $a * $b;
    }
}