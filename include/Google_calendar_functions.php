<?php
function get_Calendar_events(){
    if (isset($_SESSION['token'])) {
        $client = $_SESSION['$client'];
        $service = new Google_Service_Calendar($client); 
        $calendarId = 'primary';
        $optParams = array(
          'maxResults' => 10,
          'orderBy' => 'startTime',
          'singleEvents' => TRUE,
          'timeMin' => date(DateTime::ATOM));
        $events = $service->events->listEvents($calendarId, $optParams);

        if (count($events->getItems()) == 0) {
          print "No upcoming events found.\n";
        } else {
          foreach ($events->getItems() as $event) {
              $eventDateStr = $event->start->dateTime;
              if(empty($eventDateStr))// it's an all day event
                  { 
                    $eventDateStr = $event->start->date;
                  }
              $eventdate = new DateTime($eventDateStr);
              $TZlink = $event->htmlLink;
              $newmonth = $eventdate->format("M");//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
              $newday = $eventdate->format("j");//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY
              $newtime = $eventdate->format("HH:i");
    ?>
            <div class="event-container">
                <div class="eventDate">
                <span class="month">
    <?php
                echo $newmonth;
    ?>
                </span><br />
                <span class="day">
    <?php
                echo $newday;
    ?>
                </span><span class="dayTrail"></span>
                </div>
                <div class="eventBody">
    <?php
                    echo $newtime;
    ?>
                    <a href="<?php echo $TZlink; ?>"><?php echo $event->summary; ?></a>
                </div>
            </div>
    <?php       
          }
        }
    }
    
/*	$calendarList  = $service->calendarList->listCalendarList();;

	while(true) {
		foreach ($calendarList->getItems() as $calendarListEntry) {

			echo $calendarListEntry->getSummary()."
\n";


			// get events 
			$events = $service->events->listEvents($calendarListEntry->id);


			foreach ($events->getItems() as $event) {
			    echo "-----".$event->getSummary()."
";
			}
		}
		$pageToken = $calendarList->getNextPageToken();
		if ($pageToken) {
			$optParams = array('pageToken' => $pageToken);
			$calendarList = $service->calendarList->listCalendarList($optParams);
		} else {
			break;
		}
	}
    }*/
    
}
?>