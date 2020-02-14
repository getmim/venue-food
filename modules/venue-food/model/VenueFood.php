<?php
/**
 * VenueFood
 * @package venue-food
 * @version 0.0.1
 */

namespace VenueFood\Model;

class VenueFood extends \Mim\Model
{

    protected static $table = 'venue_food';

    protected static $chains = [];

    protected static $q = ['name'];
}