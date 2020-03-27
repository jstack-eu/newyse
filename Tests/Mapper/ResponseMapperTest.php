<?php

namespace Jstack\Newyse\Tests\Mapper;

use Jstack\Newyse\Mapper\ResponseMapper;
use Jstack\Newyse\Model\AccommodationType;
use Jstack\Newyse\Model\Availability;
use Jstack\Newyse\Model\ObjectReservability;
use Jstack\Newyse\Model\Property;
use Jstack\Newyse\Model\ResourceObject;
use PHPUnit\Framework\TestCase;

class ResponseMapperTest extends TestCase
{
    public function testMapSimpleProperties()
    {
        $accommodationTypeDefinition = [
            'ResourceId' => 4,
            'Code' => 'SomeCode'
        ];

        $responseMapper = new ResponseMapper();
        $accommodationType = $responseMapper->map($accommodationTypeDefinition, new AccommodationType());

        $this->assertEquals(4, $accommodationType->getResourceId());
        $this->assertEquals('SomeCode', $accommodationType->getCode());
    }

    public function testMapOneToManyRelations()
    {
        $availabilityDefinition = [
            'Prices' => (object) [
                'PriceItem' => [
                    ['Price' => 1000],
                    ['Price' => 2000]
                ]
            ]
        ];

        $responseMapper = new ResponseMapper();
        $availability = $responseMapper->map($availabilityDefinition, new Availability());

        $this->assertEquals(2000, $availability->getPrices()[1]->getPrice());
    }

    public function testMapOneToManyRelationsWithOnlyOneChild()
    {
        $availabilityDefinition = [
            'Prices' => (object) [
                'PriceItem' => (object) ['Price' => 1000]
            ]
        ];

        $responseMapper = new ResponseMapper();
        $availability = $responseMapper->map($availabilityDefinition, new Availability());

        $this->assertEquals(1000, $availability->getPrices()[0]->getPrice());
    }

    public function testMapOneToOneRelations()
    {
        $accommodationTypeDefinition = [
            'ComplexDefinition' => (object) [
                'Code' => 'Some Code',
                'ComplexDefinitionId' => 123
            ]
        ];

        $responseMapper = new ResponseMapper();
        $accommodationType = $responseMapper->map($accommodationTypeDefinition, new AccommodationType());

        $this->assertEquals('Some Code', $accommodationType->getComplexDefinition()->getCode());
    }

    public function testMapDateTime()
    {
        $propertyDefinition = [
            'StartDate' => '2019-01-01 12:00:00'
        ];

        $responseMapper = new ResponseMapper();
        $property = $responseMapper->map($propertyDefinition, new Property());

        $this->assertSame('2019-01-01 12:00:00', $property->getStartDate()->format('Y-m-d H:i:s'));
    }

    public function testMapArray()
    {
        $array = [
            ['ResourceId' => 4, 'Code' => 'Code1'],
            ['ResourceId' => 6, 'Code' => 'Code2']
        ];

        $responseMapper = new ResponseMapper();
        $accommodationTypes = $responseMapper->mapArray($array, new AccommodationType());

        $this->assertSame('Code2', $accommodationTypes[1]->getCode());
    }

    public function testMapObjectsAsAssociation()
    {
        $objectReservabilityDefinition = [
            'Object' => (object) [
                'Name' => 'Object 1',
                'Description' => 'The object description'
            ]
        ];

        $responseMapper = new ResponseMapper();
        /** @var ObjectReservability $objectReservability */
        $objectReservability = $responseMapper->map($objectReservabilityDefinition, new ObjectReservability());

        $this->assertInstanceOf(ResourceObject::class, $objectReservability->getObject());
    }
}
