<?php

/**
 * This file is part of the Carbon package.
 * (c) Brian Nesbitt <brian@nesbot.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Authors:
 * - Josh Soref
 * - JD Isaacks
 * - Atef Ben Ali (atefBB)
 */
return [
	'year'                      => implode('|', ['سنة', 'سنة', 'سنتين', 'سنوات' . ' :count', 'سنة' . ' :count']),
	'month'                     => implode('|', ['شهر', 'شهر', 'شهرين', 'أشهر' . ' :count', 'شهر' . ' :count']),
	'week'                      => implode('|', ['أسبوع', 'أسبوع', 'أسبوعين', 'أسابيع' . ' :count', 'أسبوع' . ' :count']),
	'day'                       => implode('|', ['يوم', 'يوم', 'يومين', 'أيام' . ' :count', 'يوم' . ' :count']),
	'hour'                      => implode('|', ['ساعة', 'ساعة', 'ساعتين', 'ساعات' . ' :count', 'ساعة' . ' :count']),
	'minute'                    => implode('|', ['دقيقة', 'دقيقة', 'دقيقتين', 'دقائق' . ' :count', 'دقيقة' . ' :count']),
	'second'                    => implode('|', ['ثانية', 'ثانية', 'ثانيتين', 'ثوان' . ' :count', 'ثانية' . ' :count']),
	'ago'                       => 'منذ :time',
	'from_now'                  => 'في :time',
	'after'                     => 'بعد :time',
	'before'                    => 'قبل :time',
	'formats'                   => [
		'LT'   => 'HH:mm',
		'LTS'  => 'HH:mm:ss',
		'L'    => 'DD/MM/YYYY',
		'LL'   => 'D MMMM YYYY',
		'LLL'  => 'D MMMM YYYY HH:mm',
		'LLLL' => 'dddd D MMMM YYYY HH:mm',
	],
	'calendar'                  => [
		'sameDay'  => '[اليوم على الساعة] LT',
		'nextDay'  => '[غدا على الساعة] LT',
		'nextWeek' => 'dddd [على الساعة] LT',
		'lastDay'  => '[أمس على الساعة] LT',
		'lastWeek' => 'dddd [على الساعة] LT',
		'sameElse' => 'L',
	],
	'meridiem'                  => ['ص', 'م'],
	'months'                    => ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو', 'يوليوز', 'غشت', 'شتنبر', 'أكتوبر', 'نونبر', 'دجنبر'],
	'months_short'              => ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو', 'يوليوز', 'غشت', 'شتنبر', 'أكتوبر', 'نونبر', 'دجنبر'],
	'weekdays'                  => ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
	'weekdays_short'            => ['احد', 'اثنين', 'ثلاثاء', 'اربعاء', 'خميس', 'جمعة', 'سبت'],
	'weekdays_min'              => ['ح', 'ن', 'ث', 'ر', 'خ', 'ج', 'س'],
	'first_day_of_week'         => 6,
	'day_of_first_week_of_year' => 1,
	'list'                      => ['، ', ' و '],
	'weekend'                   => [5, 6],
];
