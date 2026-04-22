<!DOCTYPE html>
<html>
<head>
    <!-- Refresh page every 1 second -->
    <meta http-equiv="refresh" content="1">
    <title>PHP Digital Clock</title>
    <style>
        body { background-color: black; color: #0f0; text-align: center; font-family: 'Courier New', Courier, monospace; }
        .clock { font-size: 80px; margin-top: 20%; }
    </style>
</head>
<body>
    <H1>Shree Ganesha Namaha</H1>

    <div class="clock">
        <?php 
        // Set your timezone
        date_default_timezone_set('Asia/Kolkata'); 
        echo date("H:i:s A"); 
?>

</div>
</body>
</html>        
 <?php



// Function to divide a total number of days into weeks and remaining days
function daysToWeeks($totalDays) {
    // Calculate the number of full weeks using integer division
    $weeks = intdiv($totalDays, 7); //
    
    // Calculate the remaining days using the modulo operator
    $remainingDays = $totalDays % 7; //
    
    return [
        'weeks' => $weeks,
        'days' => $remainingDays
    ];
}
/*********************************************************************************************************/

function printYears($totalDays) {

$days = $totalDays;

$start = new DateTime('now');
$end = (clone $start)->add(new DateInterval("P{$days}D"));

$diff = $start->diff($end);

// Accessing specific parts of the difference
echo $diff->y . " years, " . $diff->m . " months, " . $diff->d . " days";

}

/********************************************************************************************************/

echo "Date of birth: 05-July-1982";
echo "<br />";

// Set the default timezone to India
date_default_timezone_set('Asia/Kolkata');

echo "Today is " . date("d-F-Y") . "<br>";
echo "<br />";
	
echo "************************************************************************************************* ";

echo "<br />";
// Date of Birth
$dob = new DateTime("1982-07-05");

// retirement age in years
$lifespan = 60;

// Calculate retirement  date (DOB + 60 years)
$deathDate = clone $dob;
$deathDate->modify("+$lifespan years");

// Current date
$today = new DateTime();

$intervalLived = $dob->diff($today);


echo "\nLife lived so far Years : ";
echo "<br />";
printYears($intervalLived->days);
echo "<br />";

echo "\nLife lived so far in days : " . $intervalLived->days;
echo "<br />";

$result = daysToWeeks($intervalLived->days);

echo "\n In Weeks: " . $result['weeks'] . "\n";
echo "\n and Days: " . $result['days'] . "\n";

echo "<br />";
echo "<br />";

echo "************************************************************************************************* ";
echo "<br />";
echo "Assuming retirement age is 60 years";
echo "<br />";

// Calculate remaining days
if ($today < $deathDate) {
    $interval = $today->diff($deathDate);
    $daysRemaining = $interval->days;

    echo "\n Time remaining for retirement in Years: ";
    echo "<br />";
    printYears($daysRemaining);
    echo "<br />";

    echo "\n Time remaining for retirement in Days: " . $daysRemaining;
    echo "<br />";
    $result = daysToWeeks($daysRemaining);
    echo "\n In Weeks: " . $result['weeks'] . "\n";
    echo "\n Remaining Days: " . $result['days'] . "\n";
    echo "<br />";

} else {
    echo "The person is ready to retire at 60 years.";
    echo "<br />";
}
echo "<br />";
echo "************************************************************************************************* ";
echo "<br />";

echo "Assuming retirement age is 65 years";
echo "<br />";
// Date of Birth
$dob = new DateTime("1982-07-05");

// retirement age in years
$lifespan = 65;

// Calculate retirement  date (DOB + 65 years)
$deathDate = clone $dob;
$deathDate->modify("+$lifespan years");

// Current date
$today = new DateTime();

$intervalLived = $dob->diff($today);
//echo "\nDays lived so far: " . $intervalLived->days;


// Calculate remaining days
if ($today < $deathDate) {
    $interval = $today->diff($deathDate);
    $daysRemaining = $interval->days;

    echo "\n Time remaining for retirement in Years: ";
    echo "<br />";
    printYears($daysRemaining);
    echo "<br />";



    echo "\n Time remaining for retirement in Days: " . $daysRemaining;
    echo "<br />";
    $result = daysToWeeks($daysRemaining);
    echo "\n In Weeks: " . $result['weeks'] . "\n";
    echo "\n Remaining Days: " . $result['days'] . "\n";

   echo "<br />";
} else {
    echo "The person is ready to retire at 65 years.";
    echo "<br />";
}
echo "<br />";
echo "************************************************************************************************* ";
echo "<br />";


echo "Assuming life of 80 years";
echo "<br />";
// Date of Birth
$dob = new DateTime("1982-07-05");

// Lifespan in years
$lifespan = 80;

// Calculate death date (DOB + 80 years)
$deathDate = clone $dob;
$deathDate->modify("+$lifespan years");

// Current date
$today = new DateTime();

$intervalLived = $dob->diff($today);
//echo "\nDays lived so far: " . $intervalLived->days;


// Calculate remaining days
if ($today < $deathDate) {
    $interval = $today->diff($deathDate);
    $daysRemaining = $interval->days;


    echo "\n Time remaining to live in Years: ";
    echo "<br />";
    printYears($daysRemaining);
    echo "<br />";





    echo "\n Time remaining to live in Days: " . $daysRemaining;
    echo "<br />";
    $result = daysToWeeks($daysRemaining);
    echo "\n In Weeks: " . $result['weeks'] . "\n";
    echo "\n Remaining Days: " . $result['days'] . "\n";


    echo "<br />";
} else {
    echo "The person has already completed 80 years of life.";
    echo "<br />";
}
echo "<br />";
echo "************************************************************************************************* ";
echo "<br />";

echo "Assuming life of 100 years";
echo "<br />";

// Lifespan in years
$lifespan = 100;

// Calculate death date (DOB + 100 years)
$deathDate = clone $dob;
$deathDate->modify("+$lifespan years");

// Current date
$today = new DateTime();

$intervalLived = $dob->diff($today);
//echo "\nDays lived so far: " . $intervalLived->days;


// Calculate remaining days
if ($today < $deathDate) {
    $interval = $today->diff($deathDate);
    $daysRemaining = $interval->days;

    echo "\n Time remaining to live in Years: ";
    echo "<br />";
    printYears($daysRemaining);
    echo "<br />";

    echo "\n Time remaining to live in Days: " . $daysRemaining;
    echo "<br />";
    $result = daysToWeeks($daysRemaining);
    echo "\n In Weeks: " . $result['weeks'] . "\n";
    echo "\n Remaining Days: " . $result['days'] . "\n";

    echo "<br />";
} else {
    echo "The person has already completed 100 years of life.";
    echo "<br />";

}
echo "<br />";
echo "************************************************************************************************* ";
?>