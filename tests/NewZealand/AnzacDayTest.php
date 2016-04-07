<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\Tests\NewZealand;

use DateTime;
use DateTimeZone;

/**
 * Class for testing ANZAC day in the New Zealand.
 */
class AnzacDayTest extends NewZealandBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'anzacDay';

    /**
     * Tests ANZAC Day
     *
     * @dataProvider HolidayDataProvider
     *
     * @param int $year the year for which the holiday defined in this test needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testHoliday($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime($expected, new DateTimeZone(self::TIMEZONE)));
    }

    /**
     *  Tests that Labour Day is not present before 1921
     */
    public function testNotHoliday()
    {
        $this->assertNotHoliday(self::REGION, self::HOLIDAY, 1920);
    }

    /**
     * Tests the translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(
            self::REGION,
            self::HOLIDAY,
            $this->generateRandomYear(1921),
            ['en_US' => 'ANZAC Day']
        );
    }

    /**
     * Returns a list of test dates
     *
     * @return array list of test dates for the holiday defined in this test
     */
    public function HolidayDataProvider()
    {
        return [
            ['2148', '2148-04-25'],
            ['2002', '2002-04-25'],
            ['2105', '2105-04-27'],
            ['2065', '2065-04-27'],
            ['2052', '2052-04-25'],
            ['2039', '2039-04-25'],
            ['2047', '2047-04-25'],
            ['2117', '2117-04-26'],
            ['2122', '2122-04-27'],
            ['2007', '2007-04-25'],
            ['2089', '2089-04-25'],
            ['2063', '2063-04-25'],
            ['1992', '1992-04-25'],
            ['1931', '1931-04-25'],
            ['1941', '1941-04-25'],
            ['1935', '1935-04-25'],
            ['2044', '2044-04-25'],
            ['2069', '2069-04-25'],
            ['2101', '2101-04-25'],
            ['2086', '2086-04-25'],
            ['2094', '2094-04-26'],
            ['2012', '2012-04-25'],
            ['2082', '2082-04-27'],
            ['2028', '2028-04-25'],
            ['1934', '1934-04-25'],
            ['2121', '2121-04-25'],
            ['2107', '2107-04-25'],
            ['2019', '2019-04-25'],
            ['1999', '1999-04-25'],
            ['2058', '2058-04-25'],
            ['2033', '2033-04-25'],
            ['2079', '2079-04-25'],
            ['2069', '2069-04-25'],
            ['2079', '2079-04-25'],
            ['2105', '2105-04-27'],
            ['2109', '2109-04-25'],
            ['2065', '2065-04-27'],
            ['2076', '2076-04-27'],
            ['2017', '2017-04-25'],
            ['2079', '2079-04-25'],
            ['1963', '1963-04-25'],
            ['2019', '2019-04-25'],
            ['2109', '2109-04-25'],
            ['2077', '2077-04-26'],
            ['2058', '2058-04-25'],
            ['2120', '2120-04-25'],
            ['1960', '1960-04-25'],
            ['2093', '2093-04-27'],
            ['2011', '2011-04-25'],
            ['2106', '2106-04-26'],
            ['1946', '1946-04-25'],
            ['1995', '1995-04-25'],
            ['2005', '2005-04-25'],
            ['1932', '1932-04-25'],
            ['2030', '2030-04-25'],
            ['2124', '2124-04-25'],
            ['1980', '1980-04-25'],
            ['1962', '1962-04-25'],
            ['2136', '2136-04-25'],
            ['2017', '2017-04-25'],
            ['2098', '2098-04-25'],
            ['2015', '2015-04-27'],
            ['2016', '2016-04-25'],
            ['2069', '2069-04-25'],
            ['2102', '2102-04-25'],
            ['2044', '2044-04-25'],
            ['2008', '2008-04-25'],
            ['2045', '2045-04-25'],
            ['2093', '2093-04-27'],
            ['2084', '2084-04-25'],
            ['2052', '2052-04-25'],
            ['2136', '2136-04-25'],
            ['2034', '2034-04-25'],
            ['2033', '2033-04-25'],
            ['1924', '1924-04-25'],
            ['1977', '1977-04-25'],
            ['2024', '2024-04-25'],
            ['2095', '2095-04-25'],
            ['2087', '2087-04-25'],
            ['2117', '2117-04-26'],
            ['2003', '2003-04-25'],
            ['2116', '2116-04-27'],
            ['1986', '1986-04-25'],
            ['1968', '1968-04-25'],
            ['2068', '2068-04-25'],
            ['2007', '2007-04-25'],
            ['2068', '2068-04-25'],
            ['2095', '2095-04-25'],
            ['2013', '2013-04-25'],
            ['1986', '1986-04-25'],
            ['2032', '2032-04-26'],
            ['1925', '1925-04-25'],
            ['1969', '1969-04-25'],
            ['2063', '2063-04-25'],
            ['2043', '2043-04-27'],
            ['2009', '2009-04-25'],
            ['1939', '1939-04-25'],
            ['2031', '2031-04-25'],
            ['1929', '1929-04-25'],
        ];
    }
}
