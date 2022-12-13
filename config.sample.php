<?php

/*
Example configuration. All fields optional except the dataset name.

$args = array( 
            'name' => 'democracymap',
            'username' => 'root',
            'password' => 'root',
            'server' => 'localhost',
            'port' => 3306,
            'type' => 'mysql',
            'table_blacklist' => array(),
            'column_blacklist' => array(),
);

register_db_api( 'democracymap', $args );



// example of how to define a custom query:
// URL used for this custom query would be /democracymap/q/citydata.json?place_id=14000&state_id=17

$sql = "SELECT municipalities.GOVERNMENT_NAME, 
       	 	 	 municipalities.POLITICAL_DESCRIPTION, 
				 municipalities.TITLE, 
				 municipalities.ADDRESS1,
				 municipalities.ADDRESS2, 
				 municipalities.CITY, 
				 municipalities.STATE_ABBR, 
				 municipalities.ZIP, 
				 municipalities.ZIP4, 
				 municipalities.WEB_ADDRESS,
				 municipalities.POPULATION_2005, 
				 municipalities.COUNTY_AREA_NAME, 
				 municipalities.MAYOR_NAME, 
				 municipalities.MAYOR_TWITTER, 
				 municipalities.SERVICE_DISCOVERY, 
				 gnis.FEATURE_ID, 
				 gnis.PRIMARY_LATITUDE, 
				 gnis.PRIMARY_LONGITUDE
   		  	FROM gnis, municipalities
					      WHERE (municipalities.FIPS_PLACE = gnis.CENSUS_CODE
					      	    )
						     AND (municipalities.FIPS_STATE = gnis.STATE_NUMERIC
						     	 )
							 AND (municipalities.FIPS_PLACE = '{[place_id]}'
							      )
							 AND (municipalities.FIPS_STATE = '{[state_id]}'
								)";


$custom_sql = array('parameters' =>  array('place_id', 'state_id'), 'sql' => $sql);

register_custom_sql('citydata', $custom_sql);


*/