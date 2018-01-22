<?php
/**
 * This file is part of Docalist Postal Address Metadata.
 *
 * Copyright (C) 2012-2018 Daniel Ménard
 *
 * For copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Docalist\PostalAddressMetadata\Resources;

/*
 * WARNING: This file has been generated by the script create-postal-address-metadata.php
 * Do not modify this file directly!
 *
 * Generation date: 2018/01/22.
 *
 * Disable PHP_CodeSniffer warnings for lines which exceed the limit (e.g. the 'GB' entry)
 * phpcs:disable Generic.Files.LineLength.TooLong
 */

return [
    'AC' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => 'ASCN 1ZZ',
        'zipex' => 'ASCN 1ZZ'
    ],
    'AD' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => 'AD[1-7]0\\d',
        'zipex' => 'AD100,AD501,AD700'
    ],
    'AE' => [
        'fmt' => '%N%n%O%n%A%n%S',
        'require' => 'AS',
        'state_name_type' => 'emirate'
    ],
    'AF' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => '\\d{4}',
        'zipex' => '1001,2601,3801'
    ],
    'AG' => [
        'require' => 'A'
    ],
    'AI' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => '(?:AI-)?2640',
        'zipex' => '2640'
    ],
    'AL' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C',
        'zip' => '\\d{4}',
        'zipex' => '1001,1017,3501'
    ],
    'AM' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C%n%S',
        'zip' => '(?:37)?\\d{4}',
        'zipex' => '375010,0002,0010'
    ],
    'AO' => [

    ],
    'AQ' => [

    ],
    'AR' => [
        'fmt' => '%N%n%O%n%A%n%Z %C%n%S',
        'upper' => 'ACZ',
        'zip' => '((?:[A-HJ-NP-Z])?\\d{4})([A-Z]{3})?',
        'zipex' => 'C1070AAM,C1000WAM,B1000TBU,X5187XAB'
    ],
    'AS' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(96799)(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96799'
    ],
    'AT' => [
        'fmt' => '%O%n%N%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '1010,3741'
    ],
    'AU' => [
        'fmt' => '%O%n%N%n%A%n%C %S %Z',
        'locality_name_type' => 'suburb',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'CS',
        'zip' => '\\d{4}',
        'zipex' => '2060,3171,6430,4000,4006,3001'
    ],
    'AW' => [

    ],
    'AX' => [
        'fmt' => '%O%n%N%n%A%nAX-%Z %C%nÅLAND',
        'require' => 'ACZ',
        'zip' => '22\\d{3}',
        'zipex' => '22150,22550,22240,22710,22270,22730,22430'
    ],
    'AZ' => [
        'fmt' => '%N%n%O%n%A%nAZ %Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1000'
    ],
    'BA' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '71000'
    ],
    'BB' => [
        'fmt' => '%N%n%O%n%A%n%C, %S %Z',
        'state_name_type' => 'parish',
        'zip' => 'BB\\d{5}',
        'zipex' => 'BB23026,BB22025'
    ],
    'BD' => [
        'fmt' => '%N%n%O%n%A%n%C - %Z',
        'zip' => '\\d{4}',
        'zipex' => '1340,1000'
    ],
    'BE' => [
        'fmt' => '%O%n%N%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '4000,1000'
    ],
    'BF' => [
        'fmt' => '%N%n%O%n%A%n%C %X'
    ],
    'BG' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1000,1700'
    ],
    'BH' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '(?:\\d|1[0-2])\\d{2}',
        'zipex' => '317'
    ],
    'BI' => [

    ],
    'BJ' => [
        'upper' => 'AC'
    ],
    'BL' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78][01]\\d{2}',
        'zipex' => '97100'
    ],
    'BM' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '[A-Z]{2} ?[A-Z0-9]{2}',
        'zipex' => 'FL 07,HM GX,HM 12'
    ],
    'BN' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '[A-Z]{2} ?\\d{4}',
        'zipex' => 'BT2328,KA1131,BA1511'
    ],
    'BO' => [
        'upper' => 'AC'
    ],
    'BQ' => [

    ],
    'BR' => [
        'fmt' => '%O%n%N%n%A%n%D%n%C-%S%n%Z',
        'require' => 'ASCZ',
        'state_name_type' => 'state',
        'sublocality_name_type' => 'neighborhood',
        'upper' => 'CS',
        'zip' => '\\d{5}-?\\d{3}',
        'zipex' => '40301-110,70002-900'
    ],
    'BS' => [
        'fmt' => '%N%n%O%n%A%n%C, %S',
        'state_name_type' => 'island'
    ],
    'BT' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '11001,31101,35003'
    ],
    'BV' => [

    ],
    'BW' => [

    ],
    'BY' => [
        'fmt' => '%S%n%Z %C%n%A%n%O%n%N',
        'zip' => '\\d{6}',
        'zipex' => '223016,225860,220050'
    ],
    'BZ' => [

    ],
    'CA' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'upper' => 'ACNOSZ',
        'zip' => '[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] ?\\d[ABCEGHJ-NPRSTV-Z]\\d',
        'zipex' => 'H3Z 2Y7,V8X 3X4,T0L 1K0,T0H 1A0,K1A 0B1'
    ],
    'CC' => [
        'fmt' => '%O%n%N%n%A%n%C %S %Z',
        'upper' => 'CS',
        'zip' => '6799',
        'zipex' => '6799'
    ],
    'CD' => [

    ],
    'CF' => [

    ],
    'CG' => [

    ],
    'CH' => [
        'fmt' => '%O%n%N%n%A%nCH-%Z %C',
        'require' => 'ACZ',
        'upper' => '',
        'zip' => '\\d{4}',
        'zipex' => '2544,1211,1556,3030'
    ],
    'CI' => [
        'fmt' => '%N%n%O%n%X %A %C %X'
    ],
    'CK' => [

    ],
    'CL' => [
        'fmt' => '%N%n%O%n%A%n%Z %C%n%S',
        'zip' => '\\d{7}',
        'zipex' => '8340457,8720019,1230000,8329100'
    ],
    'CM' => [

    ],
    'CN' => [
        'fmt' => '%Z%n%S%C%D%n%A%n%O%n%N',
        'require' => 'ACSZ',
        'sublocality_name_type' => 'district',
        'upper' => 'S',
        'zip' => '\\d{6}',
        'zipex' => '266033,317204,100096,100808'
    ],
    'CO' => [
        'fmt' => '%N%n%O%n%A%n%C, %S, %Z',
        'require' => 'AS',
        'state_name_type' => 'department',
        'zip' => '\\d{6}',
        'zipex' => '111221,130001,760011'
    ],
    'CR' => [
        'fmt' => '%N%n%O%n%A%n%S, %C%n%Z',
        'require' => 'ACS',
        'zip' => '\\d{4,5}|\\d{3}-\\d{4}',
        'zipex' => '1000,2010,1001'
    ],
    'CV' => [
        'fmt' => '%N%n%O%n%A%n%Z %C%n%S',
        'state_name_type' => 'island',
        'zip' => '\\d{4}',
        'zipex' => '7600'
    ],
    'CW' => [

    ],
    'CX' => [
        'fmt' => '%O%n%N%n%A%n%C %S %Z',
        'upper' => 'CS',
        'zip' => '6798',
        'zipex' => '6798'
    ],
    'CY' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '2008,3304,1900'
    ],
    'CZ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{3} ?\\d{2}',
        'zipex' => '100 00,251 66,530 87,110 00,225 99'
    ],
    'DE' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{5}',
        'zipex' => '26133,53225'
    ],
    'DJ' => [

    ],
    'DK' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '8660,1566'
    ],
    'DM' => [

    ],
    'DO' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '11903,10101'
    ],
    'DZ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '40304,16027'
    ],
    'EC' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C',
        'upper' => 'CZ',
        'zip' => '\\d{6}',
        'zipex' => '090105,092301'
    ],
    'EE' => [
        'fmt' => '%N%n%O%n%A%n%Z %C %S',
        'zip' => '\\d{5}',
        'zipex' => '69501,11212',
        'require' => 'ACZ',
        'state_name_type' => 'county'
    ],
    'EG' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S%n%Z',
        'zip' => '\\d{5}',
        'zipex' => '12411,11599'
    ],
    'EH' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '70000,72000'
    ],
    'ER' => [

    ],
    'ES' => [
        'fmt' => '%N%n%O%n%A%n%Z %C %S',
        'require' => 'ACSZ',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '28039,28300,28070'
    ],
    'ET' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1000'
    ],
    'FI' => [
        'fmt' => '%O%n%N%n%A%nFI-%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{5}',
        'zipex' => '00550,00011'
    ],
    'FJ' => [

    ],
    'FK' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'FIQQ 1ZZ',
        'zipex' => 'FIQQ 1ZZ'
    ],
    'FM' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(9694[1-4])(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96941,96944'
    ],
    'FO' => [
        'fmt' => '%N%n%O%n%A%nFO%Z %C',
        'zip' => '\\d{3}',
        'zipex' => '100'
    ],
    'FR' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'CX',
        'zip' => '\\d{2} ?\\d{3}',
        'zipex' => '33380,34092,33506'
    ],
    'GA' => [

    ],
    'GB' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'locality_name_type' => 'post_town',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'GIR ?0AA|(?:(?:AB|AL|B|BA|BB|BD|BF|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|WV|YO|ZE)(?:\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}))|BFPO ?\\d{1,4}',
        'zipex' => 'EC1Y 8SY,GIR 0AA,M2 5BQ,M34 4AB,CR0 2YR,DN16 9AA,W1A 4ZZ,EC1A 1HQ,OX14 4PG,BS18 8HF,NR25 7HG,RH6 0NP,BH23 6AA,B6 5BA,SO23 9AP,PO1 3AX,BFPO 61'
    ],
    'GD' => [

    ],
    'GE' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '0101'
    ],
    'GF' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78]3\\d{2}',
        'zipex' => '97300'
    ],
    'GG' => [
        'fmt' => '%N%n%O%n%A%n%C%nGUERNSEY%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'GY\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'zipex' => 'GY1 1AA,GY2 2BT'
    ],
    'GH' => [

    ],
    'GI' => [
        'fmt' => '%N%n%O%n%A%nGIBRALTAR%n%Z',
        'require' => 'A',
        'zip' => 'GX11 1AA',
        'zipex' => 'GX11 1AA'
    ],
    'GL' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '39\\d{2}',
        'zipex' => '3900,3950,3911'
    ],
    'GM' => [

    ],
    'GN' => [
        'fmt' => '%N%n%O%n%Z %A %C',
        'zip' => '\\d{3}',
        'zipex' => '001,200,100'
    ],
    'GP' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78][01]\\d{2}',
        'zipex' => '97100'
    ],
    'GQ' => [

    ],
    'GR' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{3} ?\\d{2}',
        'zipex' => '151 24,151 10,101 88'
    ],
    'GS' => [
        'fmt' => '%N%n%O%n%A%n%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'SIQQ 1ZZ',
        'zipex' => 'SIQQ 1ZZ'
    ],
    'GT' => [
        'fmt' => '%N%n%O%n%A%n%Z- %C',
        'zip' => '\\d{5}',
        'zipex' => '09001,01501'
    ],
    'GU' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'require' => 'ACZ',
        'upper' => 'ACNO',
        'zip' => '(969(?:[12]\\d|3[12]))(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96910,96931'
    ],
    'GW' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1000,1011'
    ],
    'GY' => [

    ],
    'HK' => [
        'fmt' => '%S%n%C%n%A%n%O%n%N',
        'locality_name_type' => 'district',
        'require' => 'AS',
        'state_name_type' => 'area',
        'upper' => 'S'
    ],
    'HM' => [
        'fmt' => '%O%n%N%n%A%n%C %S %Z',
        'upper' => 'CS',
        'zip' => '\\d{4}',
        'zipex' => '7050'
    ],
    'HN' => [
        'fmt' => '%N%n%O%n%A%n%C, %S%n%Z',
        'require' => 'ACS',
        'zip' => '\\d{5}',
        'zipex' => '31301'
    ],
    'HR' => [
        'fmt' => '%N%n%O%n%A%nHR-%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '10000,21001,10002'
    ],
    'HT' => [
        'fmt' => '%N%n%O%n%A%nHT%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '6120,5310,6110,8510'
    ],
    'HU' => [
        'fmt' => '%N%n%O%n%C%n%A%n%Z',
        'require' => 'ACZ',
        'upper' => 'ACNO',
        'zip' => '\\d{4}',
        'zipex' => '1037,2380,1540'
    ],
    'ID' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S %Z',
        'require' => 'AS',
        'zip' => '\\d{5}',
        'zipex' => '40115'
    ],
    'IE' => [
        'fmt' => '%N%n%O%n%A%n%D%n%C%n%S %Z',
        'state_name_type' => 'county',
        'sublocality_name_type' => 'townland',
        'zip' => '[\\dA-Z]{3} ?[\\dA-Z]{4}',
        'zip_name_type' => 'eircode',
        'zipex' => 'A65 F4E2'
    ],
    'IL' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}(?:\\d{2})?',
        'zipex' => '9614303'
    ],
    'IM' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'IM\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'zipex' => 'IM2 1AA,IM99 1PS'
    ],
    'IN' => [
        'fmt' => '%N%n%O%n%A%n%C %Z%n%S',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'zip' => '\\d{6}',
        'zip_name_type' => 'pin',
        'zipex' => '110034,110001'
    ],
    'IO' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'BBND 1ZZ',
        'zipex' => 'BBND 1ZZ'
    ],
    'IQ' => [
        'fmt' => '%O%n%N%n%A%n%C, %S%n%Z',
        'require' => 'ACS',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '31001'
    ],
    'IR' => [
        'fmt' => '%O%n%N%n%S%n%C, %D%n%A%n%Z',
        'sublocality_name_type' => 'neighborhood',
        'zip' => '\\d{5}-?\\d{5}',
        'zipex' => '11936-12345'
    ],
    'IS' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{3}',
        'zipex' => '320,121,220,110'
    ],
    'IT' => [
        'fmt' => '%N%n%O%n%A%n%Z %C %S',
        'require' => 'ACSZ',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '00144,47037,39049'
    ],
    'JE' => [
        'fmt' => '%N%n%O%n%A%n%C%nJERSEY%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'JE\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'zipex' => 'JE1 1AA,JE2 2BT'
    ],
    'JM' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S %X',
        'require' => 'ACS',
        'state_name_type' => 'parish'
    ],
    'JO' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '11937,11190'
    ],
    'JP' => [
        'fmt' => '〒%Z%n%S%C%n%A%n%O%n%N',
        'require' => 'ACSZ',
        'state_name_type' => 'prefecture',
        'upper' => 'S',
        'zip' => '\\d{3}-?\\d{4}',
        'zipex' => '154-0023,350-1106,951-8073,112-0001,208-0032,231-0012'
    ],
    'KE' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => '\\d{5}',
        'zipex' => '20100,00100'
    ],
    'KG' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{6}',
        'zipex' => '720001'
    ],
    'KH' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '12203,14206,12000'
    ],
    'KI' => [
        'fmt' => '%N%n%O%n%A%n%S%n%C',
        'state_name_type' => 'island',
        'upper' => 'ACNOS'
    ],
    'KM' => [
        'upper' => 'AC'
    ],
    'KN' => [
        'fmt' => '%N%n%O%n%A%n%C, %S',
        'require' => 'ACS',
        'state_name_type' => 'island'
    ],
    'KR' => [
        'fmt' => '%S %C%D%n%A%n%O%n%N%n%Z',
        'require' => 'ACSZ',
        'state_name_type' => 'do_si',
        'sublocality_name_type' => 'district',
        'upper' => 'Z',
        'zip' => '\\d{5}',
        'zipex' => '03051'
    ],
    'KW' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '54541,54551,54404,13009'
    ],
    'KY' => [
        'fmt' => '%N%n%O%n%A%n%S %Z',
        'require' => 'AS',
        'state_name_type' => 'island',
        'zip' => 'KY\\d-\\d{4}',
        'zipex' => 'KY1-1100,KY1-1702,KY2-2101'
    ],
    'KZ' => [
        'fmt' => '%Z%n%S%n%C%n%A%n%O%n%N',
        'zip' => '\\d{6}',
        'zipex' => '040900,050012'
    ],
    'LA' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '01160,01000'
    ],
    'LB' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '(?:\\d{4})(?: ?(?:\\d{4}))?',
        'zipex' => '2038 3054,1107 2810,1000'
    ],
    'LC' => [

    ],
    'LI' => [
        'fmt' => '%O%n%N%n%A%nFL-%Z %C',
        'require' => 'ACZ',
        'zip' => '948[5-9]|949[0-8]',
        'zipex' => '9496,9491,9490,9485'
    ],
    'LK' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => '\\d{5}',
        'zipex' => '20000,00100'
    ],
    'LR' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1000'
    ],
    'LS' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{3}',
        'zipex' => '100'
    ],
    'LT' => [
        'fmt' => '%O%n%N%n%A%nLT-%Z %C %S',
        'zip' => '\\d{5}',
        'zipex' => '04340,03500',
        'require' => 'ACZ',
        'state_name_type' => 'county'
    ],
    'LU' => [
        'fmt' => '%O%n%N%n%A%nL-%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '4750,2998'
    ],
    'LV' => [
        'fmt' => '%N%n%O%n%A%n%C, %Z',
        'zip' => 'LV-\\d{4}',
        'zipex' => 'LV-1073,LV-1000',
        'require' => 'ACZ'
    ],
    'LY' => [

    ],
    'MA' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '53000,10000,20050,16052'
    ],
    'MC' => [
        'fmt' => '%N%n%O%n%A%nMC-%Z %C %X',
        'zip' => '980\\d{2}',
        'zipex' => '98000,98020,98011,98001'
    ],
    'MD' => [
        'fmt' => '%N%n%O%n%A%nMD-%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '2012,2019'
    ],
    'ME' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '8\\d{4}',
        'zipex' => '81257,81258,81217,84314,85366'
    ],
    'MF' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78][01]\\d{2}',
        'zipex' => '97100'
    ],
    'MG' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{3}',
        'zipex' => '501,101'
    ],
    'MH' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(969[67]\\d)(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96960,96970'
    ],
    'MK' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1314,1321,1443,1062'
    ],
    'ML' => [

    ],
    'MM' => [
        'fmt' => '%N%n%O%n%A%n%C, %Z',
        'zip' => '\\d{5}',
        'zipex' => '11181'
    ],
    'MN' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S %Z',
        'zip' => '\\d{5}',
        'zipex' => '65030,65270'
    ],
    'MO' => [
        'fmt' => '%A%n%O%n%N',
        'require' => 'A'
    ],
    'MP' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(9695[012])(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96950,96951,96952'
    ],
    'MQ' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78]2\\d{2}',
        'zipex' => '97220'
    ],
    'MR' => [
        'upper' => 'AC'
    ],
    'MS' => [

    ],
    'MT' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'upper' => 'CZ',
        'zip' => '[A-Z]{3} ?\\d{2,4}',
        'zipex' => 'NXR 01,ZTN 05,GPO 01,BZN 1130,SPB 6031,VCT 1753'
    ],
    'MU' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C',
        'upper' => 'CZ',
        'zip' => '\\d{3}(?:\\d{2}|[A-Z]{2}\\d{3})',
        'zipex' => '42602'
    ],
    'MV' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '20026'
    ],
    'MW' => [
        'fmt' => '%N%n%O%n%A%n%C %X'
    ],
    'MX' => [
        'fmt' => '%N%n%O%n%A%n%D%n%Z %C, %S',
        'require' => 'ACZ',
        'state_name_type' => 'state',
        'sublocality_name_type' => 'neighborhood',
        'upper' => 'CSZ',
        'zip' => '\\d{5}',
        'zipex' => '02860,77520,06082'
    ],
    'MY' => [
        'fmt' => '%N%n%O%n%A%n%D%n%Z %C%n%S',
        'require' => 'ACZ',
        'state_name_type' => 'state',
        'sublocality_name_type' => 'village_township',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '43000,50754,88990,50670'
    ],
    'MZ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1102,1119,3212'
    ],
    'NA' => [

    ],
    'NC' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '988\\d{2}',
        'zipex' => '98814,98800,98810'
    ],
    'NE' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '8001'
    ],
    'NF' => [
        'fmt' => '%O%n%N%n%A%n%C %S %Z',
        'upper' => 'CS',
        'zip' => '2899',
        'zipex' => '2899'
    ],
    'NG' => [
        'fmt' => '%N%n%O%n%A%n%D%n%C %Z%n%S',
        'state_name_type' => 'state',
        'upper' => 'CS',
        'zip' => '\\d{6}',
        'zipex' => '930283,300001,931104'
    ],
    'NI' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C, %S',
        'state_name_type' => 'department',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '52000'
    ],
    'NL' => [
        'fmt' => '%O%n%N%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4} ?[A-Z]{2}',
        'zipex' => '1234 AB,2490 AA'
    ],
    'NO' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'locality_name_type' => 'post_town',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '0025,0107,6631'
    ],
    'NP' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '44601'
    ],
    'NR' => [
        'fmt' => '%N%n%O%n%A%n%S',
        'require' => 'AS',
        'state_name_type' => 'district'
    ],
    'NU' => [

    ],
    'NZ' => [
        'fmt' => '%N%n%O%n%A%n%D%n%C %Z',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '6001,6015,6332,8252,1030'
    ],
    'OM' => [
        'fmt' => '%N%n%O%n%A%n%Z%n%C',
        'zip' => '(?:PC )?\\d{3}',
        'zipex' => '133,112,111'
    ],
    'PA' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S',
        'upper' => 'CS'
    ],
    'PE' => [
        'fmt' => '%N%n%O%n%A%n%C %Z%n%S',
        'zip' => '(?:LIMA \\d{1,2}|CALLAO 0?\\d)|[0-2]\\d{4}',
        'zipex' => 'LIMA 23,LIMA 42,CALLAO 2,02001'
    ],
    'PF' => [
        'fmt' => '%N%n%O%n%A%n%Z %C %S',
        'require' => 'ACSZ',
        'state_name_type' => 'island',
        'upper' => 'CS',
        'zip' => '987\\d{2}',
        'zipex' => '98709'
    ],
    'PG' => [
        'fmt' => '%N%n%O%n%A%n%C %Z %S',
        'require' => 'ACS',
        'zip' => '\\d{3}',
        'zipex' => '111'
    ],
    'PH' => [
        'fmt' => '%N%n%O%n%A%n%D, %C%n%Z %S',
        'zip' => '\\d{4}',
        'zipex' => '1008,1050,1135,1207,2000,1000'
    ],
    'PK' => [
        'fmt' => '%N%n%O%n%A%n%C-%Z',
        'zip' => '\\d{5}',
        'zipex' => '44000'
    ],
    'PL' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{2}-\\d{3}',
        'zipex' => '00-950,05-470,48-300,32-015,00-940'
    ],
    'PM' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78]5\\d{2}',
        'zipex' => '97500'
    ],
    'PN' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'PCRN 1ZZ',
        'zipex' => 'PCRN 1ZZ'
    ],
    'PR' => [
        'fmt' => '%N%n%O%n%A%n%C PR %Z',
        'require' => 'ACZ',
        'upper' => 'ACNO',
        'zip' => '(00[679]\\d{2})(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '00930'
    ],
    'PS' => [

    ],
    'PT' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{4}-\\d{3}',
        'zipex' => '2725-079,1250-096,1201-950,2860-571,1208-148'
    ],
    'PW' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(969(?:39|40))(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '96940'
    ],
    'PY' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1536,1538,1209'
    ],
    'QA' => [
        'upper' => 'AC'
    ],
    'RE' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '9[78]4\\d{2}',
        'zipex' => '97400'
    ],
    'RO' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'upper' => 'AC',
        'zip' => '\\d{6}',
        'zipex' => '060274,061357,200716'
    ],
    'RS' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5,6}',
        'zipex' => '106314'
    ],
    'RU' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S%n%Z',
        'require' => 'ACSZ',
        'state_name_type' => 'oblast',
        'upper' => 'AC',
        'zip' => '\\d{6}',
        'zipex' => '247112,103375,188300'
    ],
    'RW' => [
        'upper' => 'AC'
    ],
    'SA' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => '\\d{5}',
        'zipex' => '11564,11187,11142'
    ],
    'SB' => [

    ],
    'SC' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S',
        'state_name_type' => 'island',
        'upper' => 'S'
    ],
    'SE' => [
        'fmt' => '%O%n%N%n%A%nSE-%Z %C',
        'locality_name_type' => 'post_town',
        'require' => 'ACZ',
        'zip' => '\\d{3} ?\\d{2}',
        'zipex' => '11455,12345,10500'
    ],
    'SG' => [
        'fmt' => '%N%n%O%n%A%nSINGAPORE %Z',
        'require' => 'AZ',
        'zip' => '\\d{6}',
        'zipex' => '546080,308125,408600'
    ],
    'SH' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => '(?:ASCN|STHL) 1ZZ',
        'zipex' => 'STHL 1ZZ'
    ],
    'SI' => [
        'fmt' => '%N%n%O%n%A%nSI-%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '4000,1001,2500'
    ],
    'SJ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'locality_name_type' => 'post_town',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '9170'
    ],
    'SK' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'ACZ',
        'zip' => '\\d{3} ?\\d{2}',
        'zipex' => '010 01,023 14,972 48,921 01,975 99'
    ],
    'SL' => [

    ],
    'SM' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'require' => 'AZ',
        'zip' => '4789\\d',
        'zipex' => '47890,47891,47895,47899'
    ],
    'SN' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '12500,46024,16556,10000'
    ],
    'SO' => [
        'fmt' => '%N%n%O%n%A%n%C, %S %Z',
        'require' => 'ACS',
        'upper' => 'ACS',
        'zip' => '[A-Z]{2} ?\\d{5}',
        'zipex' => 'JH 09010,AD 11010'
    ],
    'SR' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S',
        'upper' => 'AS'
    ],
    'SS' => [

    ],
    'ST' => [

    ],
    'SV' => [
        'fmt' => '%N%n%O%n%A%n%Z-%C%n%S',
        'require' => 'ACS',
        'upper' => 'CSZ',
        'zip' => 'CP [1-3][1-7][0-2]\\d',
        'zipex' => 'CP 1101'
    ],
    'SX' => [

    ],
    'SZ' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'upper' => 'ACZ',
        'zip' => '[HLMS]\\d{3}',
        'zipex' => 'H100'
    ],
    'TA' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'zip' => 'TDCU 1ZZ',
        'zipex' => 'TDCU 1ZZ'
    ],
    'TC' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'ACZ',
        'upper' => 'CZ',
        'zip' => 'TKCA 1ZZ',
        'zipex' => 'TKCA 1ZZ'
    ],
    'TD' => [

    ],
    'TF' => [

    ],
    'TG' => [

    ],
    'TH' => [
        'fmt' => '%N%n%O%n%A%n%D %C%n%S %Z',
        'upper' => 'S',
        'zip' => '\\d{5}',
        'zipex' => '10150,10210'
    ],
    'TJ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{6}',
        'zipex' => '735450,734025'
    ],
    'TK' => [

    ],
    'TL' => [

    ],
    'TM' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{6}',
        'zipex' => '744000'
    ],
    'TN' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4}',
        'zipex' => '1002,8129,3100,1030'
    ],
    'TO' => [

    ],
    'TR' => [
        'fmt' => '%N%n%O%n%A%n%Z %C/%S',
        'locality_name_type' => 'district',
        'require' => 'ACZ',
        'zip' => '\\d{5}',
        'zipex' => '01960,06101'
    ],
    'TT' => [

    ],
    'TV' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S',
        'state_name_type' => 'island',
        'upper' => 'ACS'
    ],
    'TW' => [
        'fmt' => '%Z%n%S%C%n%A%n%O%n%N',
        'require' => 'ACSZ',
        'state_name_type' => 'county',
        'zip' => '\\d{3}(?:\\d{2})?',
        'zipex' => '104,106,10603,40867'
    ],
    'TZ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{4,5}',
        'zipex' => '6090,34413'
    ],
    'UA' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S%n%Z',
        'require' => 'ACSZ',
        'state_name_type' => 'oblast',
        'zip' => '\\d{5}',
        'zipex' => '15432,01055,01001'
    ],
    'UG' => [

    ],
    'UM' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACS',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '96898',
        'zip_name_type' => 'zip',
        'zipex' => '96898'
    ],
    'US' => [
        'fmt' => '%N%n%O%n%A%n%C, %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'CS',
        'zip' => '(\\d{5})(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '95014,22162-1010'
    ],
    'UY' => [
        'fmt' => '%N%n%O%n%A%n%Z %C %S',
        'upper' => 'CS',
        'zip' => '\\d{5}',
        'zipex' => '11600'
    ],
    'UZ' => [
        'fmt' => '%N%n%O%n%A%n%Z %C%n%S',
        'upper' => 'CS',
        'zip' => '\\d{6}',
        'zipex' => '702100,700000'
    ],
    'VA' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '00120',
        'zipex' => '00120'
    ],
    'VC' => [
        'fmt' => '%N%n%O%n%A%n%C %Z',
        'zip' => 'VC\\d{4}',
        'zipex' => 'VC0100,VC0110,VC0400'
    ],
    'VE' => [
        'fmt' => '%N%n%O%n%A%n%C %Z, %S',
        'require' => 'ACS',
        'state_name_type' => 'state',
        'upper' => 'CS',
        'zip' => '\\d{4}',
        'zipex' => '1010,3001,8011,1020'
    ],
    'VG' => [
        'fmt' => '%N%n%O%n%A%n%C%n%Z',
        'require' => 'A',
        'zip' => 'VG\\d{4}',
        'zipex' => 'VG1110,VG1150,VG1160'
    ],
    'VI' => [
        'fmt' => '%N%n%O%n%A%n%C %S %Z',
        'require' => 'ACSZ',
        'state_name_type' => 'state',
        'upper' => 'ACNOS',
        'zip' => '(008(?:(?:[0-4]\\d)|(?:5[01])))(?:[ \\-](\\d{4}))?',
        'zip_name_type' => 'zip',
        'zipex' => '00802-1222,00850-9802'
    ],
    'VN' => [
        'fmt' => '%N%n%O%n%A%n%C%n%S %Z',
        'zip' => '\\d{6}',
        'zipex' => '119415,136065,720344'
    ],
    'VU' => [

    ],
    'WF' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '986\\d{2}',
        'zipex' => '98600'
    ],
    'WS' => [

    ],
    'XK' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '[1-7]\\d{4}',
        'zipex' => '10000'
    ],
    'YE' => [

    ],
    'YT' => [
        'fmt' => '%O%n%N%n%A%n%Z %C %X',
        'require' => 'ACZ',
        'upper' => 'ACX',
        'zip' => '976\\d{2}',
        'zipex' => '97600'
    ],
    'ZA' => [
        'fmt' => '%N%n%O%n%A%n%D%n%C%n%Z',
        'require' => 'ACZ',
        'zip' => '\\d{4}',
        'zipex' => '0083,1451,0001'
    ],
    'ZM' => [
        'fmt' => '%N%n%O%n%A%n%Z %C',
        'zip' => '\\d{5}',
        'zipex' => '50100,50101'
    ],
    'ZW' => [

    ],
    'ZZ' => [
        'fmt' => '%O%n%N%n%A%n%D%n%Z %C %X%n%S',
        'locality_name_type' => 'city',
        'require' => 'AC',
        'state_name_type' => 'province',
        'sublocality_name_type' => 'suburb',
        'upper' => 'C',
        'zip_name_type' => 'postal'
    ]
];
