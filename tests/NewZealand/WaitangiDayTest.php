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
 * Class for testing Waitangi day in the New Zealand.
 */
class WaitangiDayTest extends NewZealandBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'waitangiDay';

    /**
     * Tests Waitangi Day
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
     *  Tests that Holiday is not present before 1974
     */
    public function testNotHoliday()
    {
        $this->assertNotHoliday(self::REGION, self::HOLIDAY, 1973);
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
            ['en_US' => 'Waitangi Day']
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
            [2025, '2025-02-06'],
            [2103, '2103-02-06'],
            [2073, '2073-02-06'],
            [2039, '2039-02-07'],
            [1980, '1980-02-06'],
            [1977, '1977-02-06'],
            [2009, '2009-02-06'],
            [2097, '2097-02-06'],
            [2080, '2080-02-06'],
            [2142, '2142-02-06'],
            [2097, '2097-02-06'],
            [2072, '2072-02-08'],
            [2103, '2103-02-06'],
            [2022, '2022-02-07'],
            [2147, '2147-02-06'],
            [2145, '2145-02-08'],
            [2107, '2107-02-07'],
            [2027, '2027-02-08'],
            [1999, '1999-02-06'],
            [2144, '2144-02-06'],
            [2031, '2031-02-06'],
            [2129, '2129-02-07'],
            [2103, '2103-02-06'],
            [2057, '2057-02-06'],
            [2102, '2102-02-06'],
            [2112, '2112-02-08'],
            [2140, '2140-02-08'],
            [2030, '2030-02-06'],
            [2132, '2132-02-06'],
            [1987, '1987-02-06'],
            [2126, '2126-02-06'],
            [1995, '1995-02-06'],
            [2002, '2002-02-06'],
            [2102, '2102-02-06'],
            [2086, '2086-02-06'],
            [2031, '2031-02-06'],
            [2123, '2123-02-08'],
            [2098, '2098-02-06'],
            [2045, '2045-02-06'],
            [2058, '2058-02-06'],
            [2092, '2092-02-06'],
            [2070, '2070-02-06'],
            [1988, '1988-02-06'],
            [1974, '1974-02-06'],
            [2020, '2020-02-06'],
            [2074, '2074-02-06'],
            [1982, '1982-02-06'],
            [2136, '2136-02-06'],
            [2065, '2065-02-06'],
            [1991, '1991-02-06'],
            [2015, '2015-02-06'],
            [2017, '2017-02-06'],
            [2130, '2130-02-06'],
            [2006, '2006-02-06'],
            [2093, '2093-02-06'],
            [2013, '2013-02-06'],
            [2122, '2122-02-06'],
            [2004, '2004-02-06'],
            [1983, '1983-02-06'],
            [2108, '2108-02-06'],
            [1979, '1979-02-06'],
            [2112, '2112-02-08'],
            [2112, '2112-02-08'],
            [2130, '2130-02-06'],
            [1992, '1992-02-06'],
            [2134, '2134-02-08'],
            [2096, '2096-02-06'],
            [2126, '2126-02-06'],
            [2039, '2039-02-07'],
            [2139, '2139-02-06'],
            [2040, '2040-02-06'],
            [1997, '1997-02-06'],
            [2031, '2031-02-06'],
            [2110, '2110-02-06'],
            [2128, '2128-02-06'],
            [2120, '2120-02-06'],
            [2058, '2058-02-06'],
            [2030, '2030-02-06'],
            [2076, '2076-02-06'],
            [2020, '2020-02-06'],
            [2065, '2065-02-06'],
            [2132, '2132-02-06'],
            [2014, '2014-02-06'],
            [2095, '2095-02-07'],
            [2128, '2128-02-06'],
            [2004, '2004-02-06'],
            [2143, '2143-02-06'],
            [2100, '2100-02-08'],
            [2124, '2124-02-07'],
            [2127, '2127-02-06'],
            [2020, '2020-02-06'],
            [2022, '2022-02-07'],
            [2049, '2049-02-08'],
            [1982, '1982-02-06'],
            [2043, '2043-02-06'],
            [2130, '2130-02-06'],
            [2125, '2125-02-06'],
            [2121, '2121-02-06'],
            [2043, '2043-02-06'],
        ];
    }
}
