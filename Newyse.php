<?php

namespace Jstack\Newyse;

use Jstack\Newyse\Exception\NewyseException;
use Jstack\Newyse\Mapper\ResponseMapper;
use Jstack\Newyse\Model\AccommodationType;
use Jstack\Newyse\Model\Availability;
use Jstack\Newyse\Model\Brochure;
use Jstack\Newyse\Model\Country;
use Jstack\Newyse\Model\Customer;
use Jstack\Newyse\Model\Facility;
use Jstack\Newyse\Model\ModifiedResource;
use Jstack\Newyse\Model\Object;
use Jstack\Newyse\Model\ObjectAvailability;
use Jstack\Newyse\Model\ObjectCapacity;
use Jstack\Newyse\Model\ObjectReservability;
use Jstack\Newyse\Model\Property;
use Jstack\Newyse\Model\Reservation;
use Jstack\Newyse\Model\ReservationQuestionnaireInformation;
use Jstack\Newyse\Model\Resort;
use Jstack\Newyse\Model\AccommodationKind;
use Jstack\Newyse\Model\ResortActivity;
use Jstack\Newyse\Model\ResortDetails;
use Jstack\Newyse\Model\ResourceAddition;
use Jstack\Newyse\Model\ResourceCapacity;
use Jstack\Newyse\Model\Review;
use Jstack\Newyse\Model\Source;
use Jstack\Newyse\Model\Subject;
use Jstack\Newyse\Criteria\ReservationCriteria;

class Newyse
{
    /** @var Client */
    protected $client;

    /** @var ResponseMapper */
    protected $mapper;

    /** @var string */
    protected $username;

    /** @var string */
    protected $password;

    /** @var string */
    protected $distributionChannel;

    /** @var string */
    protected $url;

    /** @var string */
    protected $cacheDir;

    /**
     * Constructor
     *
     * @param string      $username
     * @param string      $password
     * @param string      $distributionChannel
     * @param string      $url
     * @param string|null $cacheDir
     */
    public function __construct($username, $password, $distributionChannel, $url, $cacheDir = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->distributionChannel = $distributionChannel;
        $this->url = $url;
        $this->cacheDir = $cacheDir;
        $this->mapper = new ResponseMapper();
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        if (!$this->client) {
            $this->client = new Client($this->username, $this->password, $this->distributionChannel, $this->url, $this->cacheDir);
        }

        return $this->client;
    }

    /**
     * Get Accommodation Types.
     *
     * @param array $criteria
     *
     * @return array
     */
    public function getAccommodationTypes(array $criteria = array())
    {
        $accommodationTypes = $this->call('getAccommodationTypes', $criteria);

        if ($accommodationTypes->AccommodationTypes == null || !isset($accommodationTypes->AccommodationTypes->AccommodationTypeItem)) {
            return [];
        }

        return $this->mapper->mapArray($accommodationTypes->AccommodationTypes->AccommodationTypeItem, new AccommodationType());
    }

    /**
     * Get Accommodation Kinds.
     *
     * @param array $criteria
     *
     * @return AccommodationKind[]
     */
    public function getAccommodationKinds(array $criteria = array())
    {
        $accommodationKinds = $this->call('getAccommodationKinds', $criteria);

        if ($accommodationKinds->AccommodationKinds == null || !isset($accommodationKinds->AccommodationKinds->AccommodationKindItem)) {
            return [];
        }

        return $this->mapper->mapArray($accommodationKinds->AccommodationKinds->AccommodationKindItem, new AccommodationKind());
    }

    /**
     * @param array $criteria
     *
     * @return object[]
     */
    public function getObjects(array $criteria = array())
    {
        $objects = $this->call('getObjects', $criteria);

        if ($objects->Objects == null || !isset($objects->Objects->ObjectItem)) {
            return [];
        }

        return $this->mapper->mapArray($objects->Objects->ObjectItem, new Object());
    }

    /**
     * @param array $criteria
     *
     * @return Resort[]
     */
    public function getResorts(array $criteria = array())
    {
        $resorts = $this->call('getResorts', $criteria);

        return $this->mapper->mapArray($resorts->Resorts->ResortItem, new Resort());
    }

    /**
     * @param array $criteria
     *
     * @return Resort[]
     */
    public function getResortDetails(array $criteria = array())
    {
        $resortDetails = $this->call('getResortDetails', $criteria);

        $resortDetails = (array) $resortDetails;

        return $this->mapper->map($resortDetails, new ResortDetails());
    }

    /**
     * @param array $criteria
     *
     * @return ResortActivity[]
     */
    public function getResortActivities(array $criteria = array())
    {
        $activities = $this->call('getResortActivities', $criteria);

        if ($activities->ResortActivities == null || !isset($activities->ResortActivities->ResortActivityItem)) {
            return [];
        }

        return $this->mapper->mapArray($activities->ResortActivities->ResortActivityItem, new ResortActivity());
    }

    /**
     * @param array $criteria
     *
     * @return Facility[]
     */
    public function getFacilities(array $criteria = array())
    {
        $facilities = $this->call('getFacilities', $criteria);

        if ($facilities->Facilities == null || !isset($facilities->Facilities->FacilityItem)) {
            return [];
        }

        return $this->mapper->mapArray($facilities->Facilities->FacilityItem, new Facility());
    }

    /**
     * @param array $criteria
     *
     * @return Source[]
     */
    public function getSources(array $criteria = array())
    {
        $sources = $this->call('getSources', $criteria);

        return $this->mapper->mapArray($sources->Sources->SourceItem, new Source());
    }

    /**
     * @param array $criteria
     *
     * @return Brochure[]
     */
    public function getBrochures(array $criteria = array())
    {
        $brochures = $this->call('getBrochures', $criteria);

        return $this->mapper->mapArray($brochures->Brochures->BrochureItem, new Brochure());
    }

    /**
     * @param array $criteria
     *
     * @return Subject[]
     */
    public function getSubjects(array $criteria = array())
    {
        $subjects = $this->call('getSubjects', $criteria);

        return $this->mapper->mapArray($subjects->Subjects->SubjectItem, new Subject());
    }

    /**
     * @param array $criteria
     *
     * @return Property[]
     */
    public function getProperties(array $criteria = array())
    {
        $properties = $this->call('getProperties', $criteria);

        if ($properties->Properties == null || !isset($properties->Properties->PropertyItem)) {
            return [];
        }

        return $this->mapper->mapArray($properties->Properties->PropertyItem, new Property());
    }

    public function getCountries()
    {
        $countries = $this->call('getCountries');

        return $this->mapper->mapArray($countries->Countries->CountryItem, new Country());
    }

    /**
     * @param array $criteria
     *
     * @return ResourceAddition[]
     */
    public function getResourceAdditions(array $criteria = array())
    {
        $additions = $this->call('getResourceAdditions', $criteria);

        return $this->mapper->mapArray($additions->ResourceAdditions->ResourceAdditionItem, new ResourceAddition());
    }

    /**
     * @param array $criteria
     *
     * @return ResourceCapacity[]
     */
    public function getResourceCapacity(array $criteria = array())
    {
        $capacity = $this->call('getResourceCapacity', $criteria);
        if (empty((array) $capacity->ResourceCapacity)) {
            return [];
        }

        return $this->mapper->mapArray($capacity->ResourceCapacity->ResourceCapacityItem, new ResourceCapacity());
    }

    /**
     * Get Resource Availability.
     *
     * @param array $criteria
     *
     * @return array
     */
    public function getResourceAvailability(array $criteria = array())
    {
        $availabilities = $this->call('getResourceAvailability', $criteria);

        if ($availabilities->Availabilities == null || !isset($availabilities->Availabilities->AvailabilityItem)) {
            return [];
        }

        return $this->mapper->mapArray($availabilities->Availabilities->AvailabilityItem, new Availability());
    }

    /**
     * @param array $criteria
     *
     * @return ObjectCapacity[]
     */
    public function getObjectCapacity(array $criteria = array())
    {
        $capacity = $this->call('getObjectCapacity', $criteria);

        if ($capacity->ObjectCapacity == null || !isset($capacity->ObjectCapacity->ObjectCapacityItem)) {
            return [];
        }

        return $this->mapper->mapArray($capacity->ObjectCapacity->ObjectCapacityItem, new ObjectCapacity());
    }

    /**
     * @param array $criteria
     *
     * @return array
     */
    public function getObjectAvailability(array $criteria = array())
    {
        $objectAvailabilities = $this->call('getObjectAvailability', $criteria);

        if ($objectAvailabilities->ObjectAvailabilities == null || !isset($objectAvailabilities->ObjectAvailabilities->ObjectAvailabilityItem)) {
            return [];
        }

        return $this->mapper->mapArray($objectAvailabilities->ObjectAvailabilities->ObjectAvailabilityItem, new ObjectAvailability());
    }

    /**
     * @param array $criteria
     * @return ObjectReservability[]
     */
    public function getObjectReservability(array $criteria = array())
    {
        $objectReservability = $this->call('getObjectReservability', $criteria);

        if ($objectReservability->Reservabilities == null || !isset($objectReservability->Reservabilities->ReservabilityItem)) {
            return [];
        }

        return $this->mapper->mapArray($objectReservability->Reservabilities->ReservabilityItem, new ObjectReservability());
    }

    /**
     * @param array $criteria
     *
     * @return ModifiedResource[]
     */
    public function getModifiedResources(array $criteria = array())
    {
        $modifiedResources = $this->call('getModifiedResources', $criteria);

        if ($modifiedResources->ModifiedResources == null) {
            return [];
        }

        return $this->mapper->mapArray($modifiedResources->ModifiedResources->ModifiedResourceItem, new ModifiedResource());
    }

    /**
     * @param ReservationCriteria|array $criteria
     *
     * @return Reservation
     */
    public function createReservationProposal($criteria)
    {
        $reservation = $this->call('createReservationProposal', $criteria);
        $reservation = (array) $reservation;

        return $this->mapper->map($reservation, new Reservation());
    }

    /**
     * Confirms a reservation.
     *
     * @param ReservationCriteria|array $criteria
     *
     * @return Reservation
     *
     * @throws NewyseException
     */
    public function confirmReservation($criteria)
    {
        $reservation = $this->call('confirmReservation', $criteria);
        $reservation = (array) $reservation;

        return $this->mapper->map($reservation, new Reservation());
    }

    /**
     * @param array $criteria
     *
     * @return array|object
     *
     * @throws NewyseException
     */
    public function getReservation($criteria)
    {
        $reservationContainer = $this->call('getReservation', $criteria);

        if ($reservationContainer->Reservations == null) {
            return [];
        }

        return $this->mapper->mapArray($reservationContainer->Reservations->ReservationItem, new Reservation());
    }

    public function getQuestionnaireInformation($criteria = array()){
        $questionnaireInformation = $this->call('getQuestionnaireInformation', $criteria);

        if ($questionnaireInformation->ReservationQuestionnaireInformation == null || !isset($questionnaireInformation->ReservationQuestionnaireInformation->ReservationQuestionnaireInformationItem)) {
            return [];
        }

        return $this->mapper->mapArray($questionnaireInformation->ReservationQuestionnaireInformation->ReservationQuestionnaireInformationItem, new ReservationQuestionnaireInformation());
    }

    /**
     * @param Customer|array $criteria
     *
     * @return object
     *
     * @throws NewyseException
     */
    public function createCustomer($criteria)
    {
        $customer = $this->call('createCustomer', $criteria);
        $customer = (array) $customer;

        return $this->mapper->map($customer, new Customer());
    }

    /**
     * @param array $criteria
     *
     * @return object
     *
     * @throws NewyseException
     */
    public function requestBrochures($criteria)
    {
        $this->call('requestBrochures', $criteria);
    }

    /**
     * @param string       $method
     * @param array|object $criteria
     *
     * @throws NewyseException If the api call failed
     *
     * @return mixed
     */
    protected function call($method, $criteria = null)
    {
        $client = $this->getClient();

        try {
            $sessionKey = $client->getSessionKey();

            if ($criteria) {
                if (is_array($criteria)) {
                    $criteria = (object) $criteria;
                }

                $results = $client->$method($sessionKey, $criteria);
            } else {
                $results = $client->$method($sessionKey);
            }

            return $results;
        } catch (\Exception $e) {
            throw new NewyseException($method, $client->__getLastResponse(), $criteria, $e);
        }
    }

    /**
     * @return string
     */
    public function getLastRequest()
    {
        return $this->getClient()->__getLastRequest();
    }

    /**
     * @return string
     */
    public function getLastResponse()
    {
        return $this->getClient()->__getLastResponse();
    }
}
