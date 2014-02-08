<?php

/**
 * Brew vs Brew Foursquare API
 *
 * Usage:
 *
 *     $fs_api = new Foursquare_API(CLIENT_ID, CLIENT_SECRET);
 *     $venues = $fs_api->fetchBrewVenues();
 *
 */
class Foursquare_API {

    const API_URL = 'https://api.foursquare.com/v2/venues/search';

    public function __construct($client_id, $client_secret)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }

    public function fetchBrewVenues($count = 10, $near = 'Miami, FL', $terms = array('beer', 'coffee'))
    {
        $result = array();

        foreach ($terms as $term)
        {
            $params = array(
                    'near'          => $near,
                    'query'         => $term,
                    'limit'         => 50,
                    'radius'        => 50000,
                    'intent'        => 'checkin',
                    'client_id'     => $this->client_id,
                    'client_secret' => $this->client_secret,
                    'v'             => date('Ymd'),
                );

            $url = self::API_URL . '?' . http_build_query($params);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_VERBOSE, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $res = curl_exec($ch);

            if ($res === false) {
                echo "ERROR: " . curl_error($ch) . "<br>\n";
                continue;
            }

            $data = json_decode($res);

            if ($data && $data->response && $data->response->venues)
            {
                foreach ($data->response->venues as $venue)
                {
                    $result[] = array(
                            'q' => $venue->name,
                            'a' => $term,
                            'lat' => $venue->location->lat,
                            'lng' => $venue->location->lng,
                        );
                }
            }
        }

        $venues = array();

        if (count($result) >= $count)
        {
            $choices = array_rand($result, $count);

            foreach ($choices as $choice)
            {
                $result[$choice]['q'] = $this->sanitizeVenueName($result[$choice]['q']);

                $venues[] = $result[$choice];
            }
        }

        return $venues;
    }

    public function sanitizeVenueName($name)
    {
        return preg_replace("@(beer|brewery|cafe|coffee|starbucks?)@i", '________', $name);
    }
}

