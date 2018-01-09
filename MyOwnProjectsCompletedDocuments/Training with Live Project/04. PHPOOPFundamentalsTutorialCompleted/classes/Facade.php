<?php
	class Facade
	{
		public function findApartments($place, $divId)
		{
			$apFinder  = new ApartmentFinder();
			$geolocator = new Geolocator();
			$gmap       = new GoogleMap();
			$apertments= $apFinder->locateApartments($place);
			foreach ($apertments as $apertment) 
			{
				$locations[] = $geolocator->getLocations($apertment); 
			}
			$gmap->initialize();
			$gmap->drawLocation($location);
			$gmap->dispatch($divId);
		}
	}
?>