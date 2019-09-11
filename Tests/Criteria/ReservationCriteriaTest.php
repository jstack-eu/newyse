<?php

namespace Jstack\Newyse\Tests\Criteria;

use Jstack\Newyse\Criteria\ReservationCriteria;
use Jstack\Newyse\Reservation\Preference;
use Jstack\Newyse\Reservation\SubjectQuantity;
use PHPUnit\Framework\TestCase;

class ReservationCriteriaTest extends TestCase
{
    public function testToRequest()
    {
        $preference = new Preference();
        $preference->setId(123);
        $preference->setType('SomeType');

        $subject = new SubjectQuantity();
        $subject->setQuantity(2);
        $subject->setSubjectId(1);

        $reservationCriteria = new ReservationCriteria();
        $reservationCriteria->setResourceId(1);
        $reservationCriteria->setArrivalDate('2019-01-01');
        $reservationCriteria->setDuration(3);
        $reservationCriteria->setPreferences([$preference]);
        $reservationCriteria->setLanguage('nl');
        $reservationCriteria->setCustomerId(1234);
        $reservationCriteria->setRemark('Some remarks');
        $reservationCriteria->setSubjects([$subject]);

        $expected = [
            'ReservationCategoryCode' => 'res',
            'Accommodation' => [
                'ResourceId' => 1,
                'ArrivalDate' => '2019-01-01',
                'Duration' => 3,
                'SpecialCode' => null,
            ],
            'Preferences' => [
                ['Id' => 123, 'Type' => 'SomeType']
            ],
            'Language' => 'nl',
            'SubjectQuantities' => [
                ['SubjectId' => 1, 'Quantity' => 2]
            ],
            'CustomerId' => 1234,
            'Remark' => 'Some remarks',
            'Voucher' => null,
            'SourceCode' => null,
            'SendMethodCode' => null,
            'Additions' => [],
            'ReturnBill' => true,
            'ReturnInstalments' => null,
            'ReturnTermsAndConditions' => null,
            'SendEmail' => null,
        ];

        $this->assertEquals($expected, $reservationCriteria->getRequest());
    }
}
