<?php

namespace Afas\Core\Locale;

use KzykHys\CsvParser\CsvParser;
use RuntimeException;

/**
 * Provides a list of countries.
 */
class CountryManager implements CountryManagerInterface {

  /**
   * {@inheritdoc}
   */
  public function getList() {
    return array(
      'AT' => 'A',
      'AE' => 'AE',
      'AF' => 'AFG',
      'AG' => 'AG',
      'AI' => 'AIA',
      'AL' => 'AL',
      'AM' => 'AM',
      'AO' => 'AN',
      'AD' => 'AND',
      'SA' => 'AS',
      'AS' => 'ASM',
      'AQ' => 'ATA',
      'TF' => 'ATF',
      'AU' => 'AUS',
      'AW' => 'AW',
      'AX' => 'AX',
      'AZ' => 'AZ',
      'BE' => 'B',
      'BA' => 'BA',
      'BD' => 'BD',
      'BB' => 'BDS',
      'BG' => 'BG',
      'BZ' => 'BH',
      'BL' => 'BL',
      'BM' => 'BM',
      'BO' => 'BOL',
      'BQ' => 'BQ',
      'BR' => 'BR',
      'BH' => 'BRN',
      'BN' => 'BRU',
      'BS' => 'BS',
      'BT' => 'BT',
      'BF' => 'BU',
      'MM' => 'BUR',
      'BV' => 'BVT',
      'BY' => 'BY',
      'CU' => 'C',
      'CC' => 'CCK',
      'CA' => 'CDN',
      'CH' => 'CH',
      'CI' => 'CI',
      'LK' => 'CL',
      'CN' => 'CN',
      'CO' => 'CO',
      'CK' => 'COK',
      'CR' => 'CR',
      'CV' => 'CV',
      'CW' => 'CW',
      'CX' => 'CXR',
      'CY' => 'CY',
      'KY' => 'CYM',
      'CZ' => 'CZ',
      'DE' => 'D',
      'DJ' => 'DJI',
      'DK' => 'DK',
      'DO' => 'DOM',
      'BJ' => 'DY',
      'DZ' => 'DZ',
      'ES' => 'E',
      'KE' => 'EAK',
      'TZ' => 'EAT',
      'UG' => 'EAU',
      'EC' => 'EC',
      'EE' => 'EE',
      'SV' => 'EL',
      'GQ' => 'EQ',
      'ER' => 'ERI',
      'EH' => 'ESH',
      'EG' => 'ET',
      'ET' => 'ETH',
      'FR' => 'F',
      'FI' => 'FIN',
      'FJ' => 'FJI',
      'LI' => 'FL',
      'FK' => 'FLK',
      'FO' => 'FRO',
      'GA' => 'GA',
      'GB' => 'GB',
      'GT' => 'GCA',
      'GE' => 'GE',
      'GF' => 'GF',
      'GG' => 'GG',
      'GH' => 'GH',
      'GI' => 'GIB',
      'GN' => 'GN',
      'GP' => 'GP',
      'GR' => 'GR',
      'GL' => 'GRO',
      'GU' => 'GUM',
      'GY' => 'GUY',
      'GW' => 'GW',
      'HU' => 'H',
      'HK' => 'HK',
      'JO' => 'HKJ',
      'HM' => 'HMD',
      'HN' => 'HON',
      'HR' => 'HR',
      'IT' => 'I',
      'IL' => 'IL',
      'IM' => 'IM',
      'IN' => 'IND',
      'IO' => 'IOT',
      'IR' => 'IR',
      'IE' => 'IRL',
      'IQ' => 'IRQ',
      'IS' => 'IS',
      'JP' => 'J',
      'JM' => 'JA',
      'JE' => 'JE',
      'KH' => 'K',
      'KG' => 'KG',
      'KI' => 'KIR',
      'KM' => 'KM',
      'KN' => 'KN',
      'KP' => 'KO',
      'KW' => 'KWT',
      'KZ' => 'KZ',
      'LU' => 'L',
      'LA' => 'LAO',
      'LY' => 'LAR',
      'LR' => 'LB',
      'LS' => 'LS',
      'LT' => 'LT',
      'LV' => 'LV',
      'MT' => 'M',
      'MA' => 'MA',
      'MY' => 'MAL',
      'MH' => 'MAR',
      'MC' => 'MC',
      'MD' => 'MD',
      'MX' => 'MEX',
      'MF' => 'MF',
      'FM' => 'MIC',
      'MK' => 'MK',
      'ME' => 'MNE',
      'MP' => 'MNP',
      'MO' => 'MO',
      'MZ' => 'MOC',
      'MN' => 'MON',
      'MQ' => 'MQ',
      'MU' => 'MS',
      'MS' => 'MSR',
      'MV' => 'MV',
      'MW' => 'MW',
      'YT' => 'MYT',
      'NO' => 'N',
      'AN' => 'NA',
      'NC' => 'NCL',
      'NF' => 'NFK',
      'NI' => 'NIC',
      'NU' => 'NIU',
      'NL' => 'NL',
      'NP' => 'NPL',
      'NR' => 'NR',
      'NZ' => 'NZ',
      'UZ' => 'OEZ',
      'OM' => 'OMA',
      'PT' => 'P',
      'PA' => 'PA',
      'PN' => 'PCN',
      'PE' => 'PE',
      'PK' => 'PK',
      'PL' => 'PL',
      'PW' => 'PLW',
      'PG' => 'PNG',
      'PR' => 'PR',
      'PS' => 'PSE',
      'PY' => 'PY',
      'PF' => 'PYF',
      'QA' => 'QA',
      'AR' => 'RA',
      'BW' => 'RB',
      'TW' => 'RC',
      'CF' => 'RCA',
      'CG' => 'RCB',
      'CL' => 'RCH',
      'RE' => 'REU',
      'HT' => 'RH',
      'ID' => 'RI',
      'MR' => 'RIM',
      'LB' => 'RL',
      'MG' => 'RM',
      'ML' => 'RMM',
      'NE' => 'RN',
      'RO' => 'RO',
      'KR' => 'ROK',
      'UY' => 'ROU',
      'PH' => 'RP',
      'SM' => 'RSM',
      'BI' => 'RU',
      'RU' => 'RUS',
      'RW' => 'RWA',
      'SE' => 'S',
      'SB' => 'SB',
      'SZ' => 'SD',
      'SG' => 'SGP',
      'GS' => 'SGS',
      'SH' => 'SHN',
      'SJ' => 'SJM',
      'SK' => 'SK',
      'SI' => 'SLO',
      'SR' => 'SME',
      'SN' => 'SN',
      'SO' => 'SP',
      'PM' => 'SPM',
      'RS' => 'SRB',
      'SS' => 'SS',
      'ST' => 'ST',
      'SD' => 'SUD',
      'NA' => 'SWA',
      'SX' => 'SX',
      'SC' => 'SY',
      'SY' => 'SYR',
      'TH' => 'T',
      'TJ' => 'TAD',
      'CM' => 'TC',
      'TC' => 'TCA',
      'TG' => 'TG',
      'TK' => 'TKL',
      'TL' => 'TLS',
      'TM' => 'TMN',
      'TN' => 'TN',
      'TO' => 'TO',
      'TR' => 'TR',
      'TD' => 'TS',
      'TT' => 'TT',
      'TV' => 'TV',
      'UA' => 'UA',
      'UM' => 'UMI',
      'US' => 'USA',
      'VA' => 'VAT',
      'VG' => 'VGB',
      'VI' => 'VIR',
      'VN' => 'VN',
      'VU' => 'VU',
      'GM' => 'WAG',
      'SL' => 'WAL',
      'NG' => 'WAN',
      'DM' => 'WD',
      'GD' => 'WG',
      'LC' => 'WL',
      'WF' => 'WLF',
      'WS' => 'WSM',
      'VC' => 'WV',
      'XK' => 'XK',
      'YE' => 'YMN',
      'YU' => 'YU',
      'VE' => 'YV',
      'ZM' => 'Z',
      'ZA' => 'ZA',
      'CD' => 'ZRE',
      'ZW' => 'ZW',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getListNum3toIso2() {
    return array(
      4 => 'AF',
      8 => 'AL',
      10 => 'AQ',
      12 => 'DZ',
      16 => 'AS',
      20 => 'AD',
      24 => 'AO',
      28 => 'AG',
      31 => 'AZ',
      32 => 'AR',
      36 => 'AU',
      40 => 'AT',
      44 => 'BS',
      48 => 'BH',
      50 => 'BD',
      51 => 'AM',
      52 => 'BB',
      56 => 'BE',
      60 => 'BM',
      64 => 'BT',
      68 => 'BO',
      70 => 'BA',
      72 => 'BW',
      74 => 'BV',
      76 => 'BR',
      84 => 'BZ',
      86 => 'IO',
      90 => 'SB',
      92 => 'VG',
      96 => 'BN',
      100 => 'BG',
      104 => 'MM',
      108 => 'BI',
      112 => 'BY',
      116 => 'KH',
      120 => 'CM',
      124 => 'CA',
      132 => 'CV',
      136 => 'KY',
      140 => 'CF',
      144 => 'LK',
      148 => 'TD',
      152 => 'CL',
      156 => 'CN',
      158 => 'TW',
      162 => 'CX',
      166 => 'CC',
      170 => 'CO',
      174 => 'KM',
      175 => 'YT',
      178 => 'CG',
      180 => 'CD',
      184 => 'CK',
      188 => 'CR',
      191 => 'HR',
      192 => 'CU',
      196 => 'CY',
      203 => 'CZ',
      204 => 'BJ',
      208 => 'DK',
      212 => 'DM',
      214 => 'DO',
      218 => 'EC',
      222 => 'SV',
      226 => 'GQ',
      231 => 'ET',
      232 => 'ER',
      233 => 'EE',
      234 => 'FO',
      238 => 'FK',
      239 => 'GS',
      242 => 'FJ',
      246 => 'FI',
      248 => 'AX',
      250 => 'FR',
      254 => 'GF',
      258 => 'PF',
      260 => 'TF',
      262 => 'DJ',
      266 => 'GA',
      268 => 'GE',
      270 => 'GM',
      275 => 'PS',
      276 => 'DE',
      288 => 'GH',
      292 => 'GI',
      296 => 'KI',
      300 => 'GR',
      304 => 'GL',
      308 => 'GD',
      312 => 'GP',
      316 => 'GU',
      320 => 'GT',
      324 => 'GN',
      328 => 'GY',
      332 => 'HT',
      334 => 'HM',
      336 => 'VA',
      340 => 'HN',
      344 => 'HK',
      348 => 'HU',
      352 => 'IS',
      356 => 'IN',
      360 => 'ID',
      364 => 'IR',
      368 => 'IQ',
      372 => 'IE',
      376 => 'IL',
      380 => 'IT',
      384 => 'CI',
      388 => 'JM',
      392 => 'JP',
      398 => 'KZ',
      400 => 'JO',
      404 => 'KE',
      408 => 'KP',
      410 => 'KR',
      414 => 'KW',
      417 => 'KG',
      418 => 'LA',
      422 => 'LB',
      426 => 'LS',
      428 => 'LV',
      430 => 'LR',
      434 => 'LY',
      438 => 'LI',
      440 => 'LT',
      442 => 'LU',
      446 => 'MO',
      450 => 'MG',
      454 => 'MW',
      458 => 'MY',
      462 => 'MV',
      466 => 'ML',
      470 => 'MT',
      474 => 'MQ',
      478 => 'MR',
      480 => 'MU',
      484 => 'MX',
      492 => 'MC',
      496 => 'MN',
      498 => 'MD',
      499 => 'ME',
      500 => 'MS',
      504 => 'MA',
      508 => 'MZ',
      512 => 'OM',
      516 => 'NA',
      520 => 'NR',
      524 => 'NP',
      528 => 'NL',
      530 => 'AN',
      531 => 'CW',
      533 => 'AW',
      534 => 'SX',
      535 => 'BQ',
      540 => 'NC',
      548 => 'VU',
      554 => 'NZ',
      558 => 'NI',
      562 => 'NE',
      566 => 'NG',
      570 => 'NU',
      574 => 'NF',
      578 => 'NO',
      580 => 'MP',
      581 => 'UM',
      583 => 'FM',
      584 => 'MH',
      585 => 'PW',
      586 => 'PK',
      591 => 'PA',
      598 => 'PG',
      600 => 'PY',
      604 => 'PE',
      608 => 'PH',
      612 => 'PN',
      616 => 'PL',
      620 => 'PT',
      624 => 'GW',
      626 => 'TL',
      630 => 'PR',
      634 => 'QA',
      638 => 'RE',
      642 => 'RO',
      643 => 'RU',
      646 => 'RW',
      652 => 'BL',
      654 => 'SH',
      659 => 'KN',
      660 => 'AI',
      662 => 'LC',
      663 => 'MF',
      666 => 'PM',
      670 => 'VC',
      674 => 'SM',
      678 => 'ST',
      682 => 'SA',
      686 => 'SN',
      688 => 'RS',
      690 => 'SC',
      694 => 'SL',
      702 => 'SG',
      703 => 'SK',
      704 => 'VN',
      705 => 'SI',
      706 => 'SO',
      710 => 'ZA',
      716 => 'ZW',
      724 => 'ES',
      728 => 'SS',
      729 => 'SD',
      732 => 'EH',
      740 => 'SR',
      744 => 'SJ',
      748 => 'SZ',
      752 => 'SE',
      756 => 'CH',
      760 => 'SY',
      762 => 'TJ',
      764 => 'TH',
      768 => 'TG',
      772 => 'TK',
      776 => 'TO',
      780 => 'TT',
      784 => 'AE',
      788 => 'TN',
      792 => 'TR',
      795 => 'TM',
      796 => 'TC',
      798 => 'TV',
      800 => 'UG',
      804 => 'UA',
      807 => 'MK',
      818 => 'EG',
      826 => 'GB',
      831 => 'GG',
      832 => 'JE',
      833 => 'IM',
      834 => 'TZ',
      840 => 'US',
      850 => 'VI',
      854 => 'BF',
      858 => 'UY',
      860 => 'UZ',
      862 => 'VE',
      876 => 'WF',
      882 => 'WS',
      887 => 'YE',
      894 => 'ZM',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getListFromCsv() {
    if (!class_exists('KzykHys\CsvParser\CsvParser')) {
      throw new RuntimeException('Could not get data from CSV file: kzykhys/php-csv-parser must be installed.');
    }

    $parser = CsvParser::fromFile(dirname(dirname(dirname(__DIR__))) . '/resources/countrycodes.csv', array(
      'delimiter' => ';',
      'header' => array(
        'coid',
        'name',
        'eu',
        'iso-alpha2',
        'iso-alpha3',
        'iso-num3',
      ),
    ));
    return $parser->parse();
  }

}
