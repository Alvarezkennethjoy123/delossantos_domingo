<?php
function calculateWorkingHours($time_in, $time_out) {
    // Convert time strings to timestamps
    $time_in_stamp = strtotime($time_in);
    $time_out_stamp = strtotime($time_out);

    // Calculate total working hours in seconds
    $working_hours_seconds = $time_out_stamp - $time_in_stamp;

    // Convert working hours from seconds to hours
    $working_hours_hours = $working_hours_seconds / 3600;

    return $working_hours_hours;
}

// Example usage
$time_in_morning = "8:00AM";
$time_out_morning = "12:00PM";
$time_in_afternoon = "1:00PM";
$time_out_afternoon = "5:00PM";

$working_hours_morning = calculateWorkingHours($time_in_morning, $time_out_morning);
$working_hours_afternoon = calculateWorkingHours($time_in_afternoon, $time_out_afternoon);

$total_working_hours = $working_hours_morning + $working_hours_afternoon;

echo "MORNING ATTENDANCE";
echo "<br>";
echo "Time in: $time_in_morning";
echo "<br>";
echo "Time out: $time_out_morning";
echo "<br><br>";
echo "LUNCH BREAK: 12:00-1:00";
echo "<br><br>";
echo "Afternoon attendance";
echo "<br>";
echo "Time in: $time_in_afternoon";
echo "<br>";
echo "Time out: $time_out_afternoon";
echo "<br>";
echo "Total working hours: $total_working_hours hours";

?>