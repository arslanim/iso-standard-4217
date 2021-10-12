<?php

namespace arslanimamutdinov\ISOStandard4217;

use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use arslanimamutdinov\ISOStandardUtilities\StandardSearchUtility;

/**
 * Class ISO4217
 * @package arslanimamutdinov\ISOStandard4217
 * @method static Currency AED() "United Arab Emirates dirham"
 * @method static Currency AFN() "Afghan afghani"
 * @method static Currency ALL() "Albanian lek"
 * @method static Currency AMD() "Armenian dram"
 * @method static Currency ANG() "Netherlands Antillean guilder"
 * @method static Currency AOA() "Angolan kwanza"
 * @method static Currency ARS() "Argentine peso"
 * @method static Currency AUD() "Australian dollar"
 * @method static Currency AWG() "Aruban florin"
 * @method static Currency AZN() "Azerbaijani manat"
 * @method static Currency BAM() "Bosnia and Herzegovina convertible mark"
 * @method static Currency BBD() "Barbados dollar"
 * @method static Currency BDT() "Bangladeshi taka"
 * @method static Currency BGN() "Bulgarian lev"
 * @method static Currency BHD() "Bahraini dinar"
 * @method static Currency BIF() "Burundian franc"
 * @method static Currency BMD() "Bermudian dollar"
 * @method static Currency BND() "Brunei dollar"
 * @method static Currency BOB() "Boliviano"
 * @method static Currency BOV() "Bolivian Mvdol (funds code)"
 * @method static Currency BRL() "Brazilian real"
 * @method static Currency BSD() "Bahamian dollar"
 * @method static Currency BTN() "Bhutanese ngultrum"
 * @method static Currency BWP() "Botswana pula"
 * @method static Currency BYN() "Belarusian ruble"
 * @method static Currency BZD() "Belize dollar"
 * @method static Currency CAD() "Canadian dollar"
 * @method static Currency CDF() "Congolese franc"
 * @method static Currency CHE() "WIR euro (complementary currency)"
 * @method static Currency CHF() "Swiss franc"
 * @method static Currency CHW() "WIR franc (complementary currency)"
 * @method static Currency CLF() "Unidad de Fomento (funds code)"
 * @method static Currency CLP() "Chilean peso"
 * @method static Currency CNY() "Chinese yuan[8]"
 * @method static Currency COP() "Colombian peso"
 * @method static Currency COU() "Unidad de Valor Real (UVR) (funds code)[9]"
 * @method static Currency CRC() "Costa Rican colon"
 * @method static Currency CUC() "Cuban convertible peso"
 * @method static Currency CUP() "Cuban peso"
 * @method static Currency CVE() "Cape Verdean escudo"
 * @method static Currency CZK() "Czech koruna"
 * @method static Currency DJF() "Djiboutian franc"
 * @method static Currency DKK() "Danish krone"
 * @method static Currency DOP() "Dominican peso"
 * @method static Currency DZD() "Algerian dinar"
 * @method static Currency EGP() "Egyptian pound"
 * @method static Currency ERN() "Eritrean nakfa"
 * @method static Currency ETB() "Ethiopian birr"
 * @method static Currency EUR() "Euro"
 * @method static Currency FJD() "Fiji dollar"
 * @method static Currency FKP() "Falkland Islands pound"
 * @method static Currency GBP() "Pound sterling"
 * @method static Currency GEL() "Georgian lari"
 * @method static Currency GHS() "Ghanaian cedi"
 * @method static Currency GIP() "Gibraltar pound"
 * @method static Currency GMD() "Gambian dalasi"
 * @method static Currency GNF() "Guinean franc"
 * @method static Currency GTQ() "Guatemalan quetzal"
 * @method static Currency GYD() "Guyanese dollar"
 * @method static Currency HKD() "Hong Kong dollar"
 * @method static Currency HNL() "Honduran lempira"
 * @method static Currency HRK() "Croatian kuna"
 * @method static Currency HTG() "Haitian gourde"
 * @method static Currency HUF() "Hungarian forint"
 * @method static Currency IDR() "Indonesian rupiah"
 * @method static Currency ILS() "Israeli new shekel"
 * @method static Currency INR() "Indian rupee"
 * @method static Currency IQD() "Iraqi dinar"
 * @method static Currency IRR() "Iranian rial"
 * @method static Currency ISK() "Icelandic krÃ³na (plural: krÃ³nur)"
 * @method static Currency JMD() "Jamaican dollar"
 * @method static Currency JOD() "Jordanian dinar"
 * @method static Currency JPY() "Japanese yen"
 * @method static Currency KES() "Kenyan shilling"
 * @method static Currency KGS() "Kyrgyzstani som"
 * @method static Currency KHR() "Cambodian riel"
 * @method static Currency KMF() "Comoro franc"
 * @method static Currency KPW() "North Korean won"
 * @method static Currency KRW() "South Korean won"
 * @method static Currency KWD() "Kuwaiti dinar"
 * @method static Currency KYD() "Cayman Islands dollar"
 * @method static Currency KZT() "Kazakhstani tenge"
 * @method static Currency LAK() "Lao kip"
 * @method static Currency LBP() "Lebanese pound"
 * @method static Currency LKR() "Sri Lankan rupee"
 * @method static Currency LRD() "Liberian dollar"
 * @method static Currency LSL() "Lesotho loti"
 * @method static Currency LYD() "Libyan dinar"
 * @method static Currency MAD() "Moroccan dirham"
 * @method static Currency MDL() "Moldovan leu"
 * @method static Currency MGA() "Malagasy ariary"
 * @method static Currency MKD() "Macedonian denar"
 * @method static Currency MMK() "Myanmar kyat"
 * @method static Currency MNT() "Mongolian tÃ¶grÃ¶g"
 * @method static Currency MOP() "Macanese pataca"
 * @method static Currency MRU() "Mauritanian ouguiya"
 * @method static Currency MUR() "Mauritian rupee"
 * @method static Currency MVR() "Maldivian rufiyaa"
 * @method static Currency MWK() "Malawian kwacha"
 * @method static Currency MXN() "Mexican peso"
 * @method static Currency MXV() "Mexican Unidad de Inversion (UDI) (funds code)"
 * @method static Currency MYR() "Malaysian ringgit"
 * @method static Currency MZN() "Mozambican metical"
 * @method static Currency NAD() "Namibian dollar"
 * @method static Currency NGN() "Nigerian naira"
 * @method static Currency NIO() "Nicaraguan cÃ³rdoba"
 * @method static Currency NOK() "Norwegian krone"
 * @method static Currency NPR() "Nepalese rupee"
 * @method static Currency NZD() "New Zealand dollar"
 * @method static Currency OMR() "Omani rial"
 * @method static Currency PAB() "Panamanian balboa"
 * @method static Currency PEN() "Peruvian sol"
 * @method static Currency PGK() "Papua New Guinean kina"
 * @method static Currency PHP() "Philippine peso[13]"
 * @method static Currency PKR() "Pakistani rupee"
 * @method static Currency PLN() "Polish zÅoty"
 * @method static Currency PYG() "Paraguayan guaranÃ­"
 * @method static Currency QAR() "Qatari riyal"
 * @method static Currency RON() "Romanian leu"
 * @method static Currency RSD() "Serbian dinar"
 * @method static Currency RUB() "Russian ruble"
 * @method static Currency RWF() "Rwandan franc"
 * @method static Currency SAR() "Saudi riyal"
 * @method static Currency SBD() "Solomon Islands dollar"
 * @method static Currency SCR() "Seychelles rupee"
 * @method static Currency SDG() "Sudanese pound"
 * @method static Currency SEK() "Swedish krona (plural: kronor)"
 * @method static Currency SGD() "Singapore dollar"
 * @method static Currency SHP() "Saint Helena pound"
 * @method static Currency SLL() "Sierra Leonean leone"
 * @method static Currency SOS() "Somali shilling"
 * @method static Currency SRD() "Surinamese dollar"
 * @method static Currency SSP() "South Sudanese pound"
 * @method static Currency STN() "SÃ£o TomÃ© and PrÃ­ncipe dobra"
 * @method static Currency SVC() "Salvadoran colÃ³n"
 * @method static Currency SYP() "Syrian pound"
 * @method static Currency SZL() "Swazi lilangeni"
 * @method static Currency THB() "Thai baht"
 * @method static Currency TJS() "Tajikistani somoni"
 * @method static Currency TMT() "Turkmenistan manat"
 * @method static Currency TND() "Tunisian dinar"
 * @method static Currency TOP() "Tongan paÊ»anga"
 * @method static Currency TRY() "Turkish lira"
 * @method static Currency TTD() "Trinidad and Tobago dollar"
 * @method static Currency TWD() "New Taiwan dollar"
 * @method static Currency TZS() "Tanzanian shilling"
 * @method static Currency UAH() "Ukrainian hryvnia"
 * @method static Currency UGX() "Ugandan shilling"
 * @method static Currency USD() "United States dollar"
 * @method static Currency USN() "United States dollar (next day) (funds code)"
 * @method static Currency UYI() "Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)"
 * @method static Currency UYU() "Uruguayan peso"
 * @method static Currency UYW() "Unidad previsional[15]"
 * @method static Currency UZS() "Uzbekistan som"
 * @method static Currency VED() "Venezuelan bolÃ­var digital[16]"
 * @method static Currency VES() "Venezuelan bolÃ­var soberano[13]"
 * @method static Currency VND() "Vietnamese Äá»ng"
 * @method static Currency VUV() "Vanuatu vatu"
 * @method static Currency WST() "Samoan tala"
 * @method static Currency XAF() "CFA franc BEAC"
 * @method static Currency XAG() "Silver (one troy ounce)"
 * @method static Currency XAU() "Gold (one troy ounce)"
 * @method static Currency XBA() "European Composite Unit (EURCO) (bond market unit)"
 * @method static Currency XBB() "European Monetary Unit (E.M.U.-6) (bond market unit)"
 * @method static Currency XBC() "European Unit of Account 9 (E.U.A.-9) (bond market unit)"
 * @method static Currency XBD() "European Unit of Account 17 (E.U.A.-17) (bond market unit)"
 * @method static Currency XCD() "East Caribbean dollar"
 * @method static Currency XDR() "Special drawing rights"
 * @method static Currency XOF() "CFA franc BCEAO"
 * @method static Currency XPD() "Palladium (one troy ounce)"
 * @method static Currency XPF() "CFP franc (franc Pacifique)"
 * @method static Currency XPT() "Platinum (one troy ounce)"
 * @method static Currency XSU() "SUCRE"
 * @method static Currency XTS() "Code reserved for testing"
 * @method static Currency XUA() "ADB Unit of Account"
 * @method static Currency XXX() "No currency"
 * @method static Currency YER() "Yemeni rial"
 * @method static Currency ZAR() "South African rand"
 * @method static Currency ZMW() "Zambian kwacha"
 * @method static Currency ZWL() "Zimbabwean dollar"
 */
abstract class ISO4217
{
    private const CURRENCIES = [
        [
            AttributeCodes::ATTRIBUTE_NAME => "United Arab Emirates dirham",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AED",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "784",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Afghan afghani",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AFN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "971",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Albanian lek",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ALL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "008",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Armenian dram",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AMD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "051",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Netherlands Antillean guilder",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ANG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "532",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Angolan kwanza",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AOA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "973",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Argentine peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ARS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "032",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Australian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AUD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "036",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Aruban florin",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AWG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "533",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Azerbaijani manat",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AZN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "944",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bosnia and Herzegovina convertible mark",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BAM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "977",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Barbados dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BBD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "052",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bangladeshi taka",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BDT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "050",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bulgarian lev",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BGN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "975",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bahraini dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BHD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "048",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Burundian franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BIF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "108",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bermudian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BMD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "060",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Brunei dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "096",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Boliviano",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BOB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "068",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bolivian Mvdol (funds code)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BOV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "984",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Brazilian real",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BRL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "986",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bahamian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BSD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "044",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bhutanese ngultrum",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BTN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "064",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Botswana pula",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BWP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "072",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Belarusian ruble",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BYN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "933",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Belize dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BZD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "084",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Canadian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CAD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "124",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Congolese franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CDF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "976",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "WIR euro (complementary currency)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "947",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Swiss franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "756",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "WIR franc (complementary currency)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "948",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Unidad de Fomento (funds code)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CLF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "990",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Chilean peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CLP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "152",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Chinese yuan[8]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CNY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "156",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Colombian peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "170",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Unidad de Valor Real (UVR) (funds code)[9]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "970",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Costa Rican colon",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CRC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "188",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cuban convertible peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CUC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "931",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cuban peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CUP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "192",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cape Verdean escudo",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CVE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "132",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Czech koruna",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CZK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "203",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Djiboutian franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DJF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "262",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Danish krone",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DKK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "208",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Dominican peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DOP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "214",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Algerian dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DZD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "012",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Egyptian pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "EGP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "818",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Eritrean nakfa",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ERN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "232",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ethiopian birr",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ETB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "230",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Euro",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "EUR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "978",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Fiji dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FJD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "242",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Falkland Islands pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FKP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "238",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Pound sterling",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GBP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "826",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Georgian lari",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GEL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "981",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ghanaian cedi",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GHS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "936",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gibraltar pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GIP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "292",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gambian dalasi",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GMD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "270",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guinean franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GNF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "324",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guatemalan quetzal",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GTQ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "320",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guyanese dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GYD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "328",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Hong Kong dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HKD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "344",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Honduran lempira",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HNL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "340",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Croatian kuna",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HRK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "191",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Haitian gourde",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HTG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "332",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Hungarian forint",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HUF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "348",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Indonesian rupiah",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IDR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "360",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Israeli new shekel",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ILS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "376",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Indian rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "INR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "356",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Iraqi dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IQD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "368",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Iranian rial",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IRR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "364",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Icelandic krÃ³na (plural: krÃ³nur)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ISK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "352",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Jamaican dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JMD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "388",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Jordanian dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JOD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "400",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Japanese yen",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JPY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "392",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kenyan shilling",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KES",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "404",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kyrgyzstani som",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KGS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "417",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cambodian riel",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KHR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "116",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Comoro franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KMF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "174",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "North Korean won",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KPW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "408",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South Korean won",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KRW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "410",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kuwaiti dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KWD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "414",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cayman Islands dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KYD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "136",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kazakhstani tenge",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KZT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "398",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lao kip",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LAK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "418",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lebanese pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LBP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "422",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sri Lankan rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LKR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "144",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Liberian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LRD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "430",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lesotho loti",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LSL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "426",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Libyan dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LYD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "434",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Moroccan dirham",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MAD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "504",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Moldovan leu",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MDL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "498",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malagasy ariary",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MGA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "969",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Macedonian denar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MKD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "807",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Myanmar kyat",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MMK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "104",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mongolian tÃ¶grÃ¶g",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MNT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "496",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Macanese pataca",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MOP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "446",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mauritanian ouguiya",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MRU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "929",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mauritian rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MUR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "480",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Maldivian rufiyaa",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MVR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "462",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malawian kwacha",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MWK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "454",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mexican peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MXN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "484",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mexican Unidad de Inversion (UDI) (funds code)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MXV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "979",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malaysian ringgit",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MYR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "458",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mozambican metical",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MZN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "943",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Namibian dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NAD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "516",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nigerian naira",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NGN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "566",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nicaraguan cÃ³rdoba",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NIO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "558",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Norwegian krone",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NOK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "578",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nepalese rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NPR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "524",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "New Zealand dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NZD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "554",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Omani rial",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "OMR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "512",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Panamanian balboa",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PAB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "590",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Peruvian sol",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PEN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "604",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Papua New Guinean kina",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PGK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "598",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Philippine peso[13]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PHP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "608",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Pakistani rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PKR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "586",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Polish zÅoty",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PLN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "985",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Paraguayan guaranÃ­",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PYG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "600",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Qatari riyal",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "QAR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "634",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Romanian leu",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RON",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "946",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Serbian dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RSD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "941",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Russian ruble",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RUB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "643",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Rwandan franc",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RWF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "646",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saudi riyal",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SAR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "682",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Solomon Islands dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SBD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "090",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Seychelles rupee",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SCR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "690",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sudanese pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SDG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "938",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Swedish krona (plural: kronor)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SEK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "752",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Singapore dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SGD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "702",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Helena pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SHP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "654",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sierra Leonean leone",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SLL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "694",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Somali shilling",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SOS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "706",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Surinamese dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SRD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "968",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South Sudanese pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SSP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "728",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "SÃ£o TomÃ© and PrÃ­ncipe dobra",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "STN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "930",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Salvadoran colÃ³n",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SVC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "222",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Syrian pound",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SYP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "760",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Swazi lilangeni",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SZL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "748",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Thai baht",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "THB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "764",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tajikistani somoni",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TJS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "972",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Turkmenistan manat",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TMT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "934",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tunisian dinar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "788",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tongan paÊ»anga",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TOP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "776",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Turkish lira",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TRY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "949",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Trinidad and Tobago dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TTD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "780",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "New Taiwan dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TWD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "901",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tanzanian shilling",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TZS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "834",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ukrainian hryvnia",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UAH",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "980",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ugandan shilling",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UGX",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "800",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United States dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "USD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "840",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United States dollar (next day) (funds code)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "USN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "997",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UYI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "940",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uruguayan peso",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UYU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "858",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Unidad previsional[15]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UYW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "927",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uzbekistan som",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UZS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "860",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Venezuelan bolÃ­var digital[16]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VED",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "926",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Venezuelan bolÃ­var soberano[13]",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VES",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "928",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Vietnamese Äá»ng",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "704",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Vanuatu vatu",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VUV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "548",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Samoan tala",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "WST",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "882",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "CFA franc BEAC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XAF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "950",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Silver (one troy ounce)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XAG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "961",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gold (one troy ounce)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XAU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "959",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "European Composite Unit (EURCO) (bond market unit)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XBA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "955",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "European Monetary Unit (E.M.U.-6) (bond market unit)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XBB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "956",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "European Unit of Account 9 (E.U.A.-9) (bond market unit)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XBC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "957",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "European Unit of Account 17 (E.U.A.-17) (bond market unit)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XBD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "958",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "East Caribbean dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XCD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "951",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Special drawing rights",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XDR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "960",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "CFA franc BCEAO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XOF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "952",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Palladium (one troy ounce)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XPD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "964",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "CFP franc (franc Pacifique)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XPF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "953",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Platinum (one troy ounce)",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XPT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "962",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "SUCRE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XSU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "994",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Code reserved for testing",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XTS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "963",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "ADB Unit of Account",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XUA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "965",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "No currency",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "XXX",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "999",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Yemeni rial",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "YER",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "886",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South African rand",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZAR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "710",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Zambian kwacha",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZMW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "967",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Zimbabwean dollar",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZWL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "932",
        ],
    ];

    public static function __callStatic($name, $arguments)
    {
        $currencyData = StandardSearchUtility::getByAlpha3(self::CURRENCIES, $name) ?? null;

        return !empty($currencyData) ? self::createCurrency($currencyData) : null;
    }

    /**
     * @return Currency[]
     */
    public static function getAll(): array
    {
        return array_map(
            function (array $rawData): Currency {
                return self::createCurrency($rawData);
            },
            self::CURRENCIES
        );
    }

    public static function getByNumericCode(string $numericCode): ?Currency
    {
        $standardData = StandardSearchUtility::getByNumericCode(self::CURRENCIES, $numericCode);

        return !empty($standardData) ? self::createCurrency($standardData) : null;
    }

    public static function getByAlpha3(string $alpha3): ?Currency
    {
        $standardData = StandardSearchUtility::getByAlpha3(self::CURRENCIES, $alpha3);

        return !empty($standardData) ? self::createCurrency($standardData) : null;
    }

    public static function getRawStandardsData(): array
    {
        return self::CURRENCIES;
    }

    private static function createCurrency(array $currencyData): Currency
    {
        return (
            new Currency(
                $currencyData[AttributeCodes::ATTRIBUTE_NAME],
                $currencyData[AttributeCodes::ATTRIBUTE_ALPHA3],
                $currencyData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE]
            )
        );
    }
}
