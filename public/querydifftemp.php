<?php
require_once __DIR__ . '/../app/bootstrap.php';

$query = 'https://bugzilla.mozilla.org/rest/bug?include_fields=id&chfield=cf_status_firefox67&chfieldfrom=2019-03-18&chfieldto=NOW&chfieldvalue=fixed&f0=OP&f1=OP&f10=delta_ts&f11=CP&f12=CP&f13=days_elapsed&f14=attachments.ispatch&f15=flagtypes.name&f2=flagtypes.name&f3=flagtypes.name&f4=flagtypes.name&f5=flagtypes.name&f6=CP&f7=CP&f8=OP&f9=OP&include_fields=id%2Csummary%2Cstatus%2Cproduct%2Ccomponent%2Ckeywords&j9=OR&o10=changedby&o14=substring&o15=substring&o2=substring&o3=substring&o4=changedafter&o5=substring&v15=approval-mozilla-beta%2B';

// $results = array_column(getJson($query, $query)['bugs'], 'id');

$real = getJson('https://pascalc.net/firefoxuplifts/?version=67&json')['total'];

// copy/pasted from a csv for 67 until I get a working api call
$results= [
1533654,
1536059,
1535962,
1536466,
1534290,
1533688,
1537566,
1530305,
1534213,
1535584,
1536264,
1534629,
1535766,
1535701,
1422815,
1537587,
1537924,
1538253,
1535986,
1535441,
1536123,
1533150,
1537542,
1536752,
1537707,
1538021,
1539211,
1512472,
1530659,
1536157,
1462911,
1530507,
1535307,
1533539,
1538285,
1540171,
1539101,
1536538,
1537725,
1537675,
1534442,
1529559,
1537883,
1539757,
1534202,
1538987,
1536110,
1539309,
1538575,
1535631,
1539255,
1531333,
1533172,
1538762,
1533405,
1538966,
1538546,
1539817,
1539813,
1533290,
1528573,
1535080,
1536220,
1541597,
1534447,
1536387,
1535253,
1539137,
1541168,
1518807,
1538378,
1536521,
1538643,
1539647,
1532730,
1529556,
1534340,
1538455,
1539311,
1533989,
1530351,
1541314,
1534492,
1540944,
1530706,
1539172,
1538974,
1539618,
1450893,
1540112,
1540231,
1539408,
1536773,
1537609,
1536070,
1534209,
1520929,
1536575,
1543166,
1533263,
1541399,
1541088,
1542193,
1542221,
1541113,
1538708,
1541920,
1541804,
1540123,
1534219,
1539766,
1525642,
1539535,
1538236,
1498102,
1536194,
1543844,
1479145,
1536459,
1532165,
1542800,
1532530,
1528562,
1536427,
1540085,
1500719,
1506913,
1542933,
1534749,
1535794,
1514733,
1533764,
1544039,
1544074,
1524478,
1479433,
1525941,
1543617,
1543694,
1538083,
1541045,
1533789,
1544065,
1539348,
1423917,
1532746,
1544188,
1533071,
1543680,
1527666,
1543731,
1539784,
1540545,
1492668,
1538460,
1543828,
1537554,
1533925,
1544478,
1537964,
1546500,
1536850,
1546367,
1538952,
1545360,
1544525,
1545838,
1543314,
1536454,
1543584,
1531650,
1540251,
1540628,
1543350,
1544539,
1537723,
1546098,
1535040,
1540385,
1536866,
1529879,
1547191,
1515497,
1545190,
1539620,
1545575,
1538508,
1539414,
1546889,
1545807,
1543356,
1532850,
1532576,
1547852,
1538648,
1546326,
1542213,
1539208,
1542827,
1493611,
1545273,
1546599,
1540154,
1533559,
1541339,
1537589,
1535585,
1541449,
1546415,
1535866,
1536229,
1548000,
1545593,
1544023,
1536447,
1548626,
1532203,
1538474,
1535808,
1540637,
1528690,
1528319,
1537640,
1382650,
1543555,
1548959,
1529892,
1538737,
1527182,
1542921,
1539959,
1531057,
1519007,
1549249,
1530188,
1470107,
1543641,
1540017,
1538218,
1508961,
1539220,
1536159,
1546836,
1535393,
1542324,
1542829,
1534196,
1535612,
1538619,
1542097,
1540166,
1540136,
1543159,
1528939,
1542581,
1532465,
1540221,
1536405,
1539393,
1538736,
1546327,
1534593,
1546544,
1541580,
1533554,
1541927,
1538583,
1538666,
1545842,
1516425,
1516325,
1542465,
1544670,
1519013,
1538970,
1544589,
1536768,
1532599,
1546617,
1555179,
1537117,
1532525,
1525209,
1527511,
1535995,
1525372,
1545805,
1516333,
1546139,
1547073,
1521158,
1513019,
1554744,
1555962,
1551282,
1539846,
1536877,
1556076,
1552275,
1527778,
1547924,
1522817,
1536783,
1533704,
1525977,
1548042,
1542541,
1534699,
1495363,
1541317,
1538042,
1549833,
1552627,
1527704,
1556612,
1544792,
1550098,
1541489,
1524619,
1535301,
1527463,
1481164,
1532170,
1553413,
1539640,
1548410,
1554167,
1544386,
1539541,
1535194,
1554029,
1545232,
];

echo "<h3>In 67 hg but not in bugzilla query (" . count(array_diff($real, $results)). " bugs):</h3>";

function bugLink($id) {
    return '<a href="https://bugzilla.mozilla.org/' . $id . '">' . $id . '</a>';
}
foreach(array_diff($real, $results) as $notinhg) {
    print bugLink($notinhg) . '<br>';
}

echo "<h3>In bugzilla query but was not committed to 67 beta (" . count(array_diff($results, $real)). " bugs):</h3>";
foreach(array_diff($results, $real) as $notinbz) {
    print bugLink($notinbz) . '<br>';
}

