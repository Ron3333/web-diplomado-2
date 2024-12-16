<?php

$moustaches = array (
 
                    array (
                     
                        "name"              => "Handlebar",
                        "creep_factor"      => "High",
                        "avg_growth_days"   => 14
                     
                    ),
                     
                    array (
                     
                        "name"              => "Salvador Dali",
                        "creep_factor"      => "Extreme",
                        "avg_growth_days"   => 62
                     
                    ),
                     
                    array (
                     
                        "name"              => "Fu Manchu",
                        "creep_factor"      => "Very High",
                        "avg_growth_days"   => 58
                     
                    )
 
              );

	echo $moustaches[1]["creep_factor"];

?>