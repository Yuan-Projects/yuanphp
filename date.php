<?php
/**
 * Convert an array of date format used in the date() function to an array of date patterns  
 * used in the strftime() function.
 * @param array $dateFormat An array of date format used in the date() function
 * @return array An array of date patterns used in the strftime() function
 */
function dateFormatToIntlDateFormatterFormat($dateFormat) {

  $newPattern = array_map(function($v) {    
    $datePattern = array(
      'Y', // #1 A full numeric representation of a year, 4 digits	Examples: 1999 or 2003
      'm', // #2 Numeric representation of a month, with leading zeros, 01 through 12
      'd', // #3 Day of the month, 2 digits with leading zeros, 01 to 31
      'H', // #4 24-hour format of an hour with leading zeros, 00 through 23
      'i', // #5 Minutes with leading zeros, 	00 to 59
      'g', // #6 12-hour format of an hour without leading zeros, 1 through 12
      'a', // #7 Lowercase Ante meridiem and Post meridiem, am or pm
      'M', // #8 A short textual representation of a month, three letters, Jan through Dec
      'j', // #9 Day of the month without leading zeros,	1 to 31
      'D', // #10 A textual representation of a day, three letters	Mon through Sun
      'F', // #11 A full textual representation of a month, such as January or March, January through December
      'l', // #12 A full textual representation of the day of the week, Sunday through Saturday
      'G', // #13 24-hour format of an hour without leading zeros,	0 through 23
    );
    $datePattern2 = array(
      'y', // #1 A full numeric representation of a year, 4 digits	Examples: 1999 or 2003
      'MM', // #2 Numeric representation of a month, with leading zeros, 01 through 12
      'dd', // #3 Day of the month, 2 digits with leading zeros, 01 to 31
      'HH', // #4 24-hour format of an hour with leading zeros, 00 through 23
      'mm', // #5 Minutes with leading zeros, 	00 to 59
      'h', // #6 12-hour format of an hour without leading zeros, 1 through 12
      'a', // #7 Lowercase Ante meridiem and Post meridiem, am or pm
      'MMM', // #8 A short textual representation of a month, three letters, Jan through Dec
      'd', // #9 Day of the month without leading zeros,	1 to 31
      'eee', // #10 A textual representation of a day, three letters	Mon through Sun
      'MMMM', // #11 A full textual representation of a month, such as January or March, January through December
      'eeee', // #12 A full textual representation of the day of the week, Sunday through Saturday
      'H', // #13 24-hour format of an hour without leading zeros,	0 through 23
    );
  
    //return str_replace($datePattern, $datePattern2, $v);
    return strtr($v, array_combine($datePattern, $datePattern2));
  }, $dateFormat); 
  
  return $newPattern;
}