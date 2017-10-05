<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connected successfully" . "<br>";
} 

// Create database
$sql = "CREATE DATABASE c0705314";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


//Use Db
$sql = "USE C0688912";
if ($conn->query($sql) === TRUE) {
    echo "Database changed successfully"."<br>";
} else {
    echo "Error created in creating the database: " . $conn->error . "<br>";
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
employeeId INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50) NOT NULL,
gender VARCHAR(20) NOT NULL,
email VARCHAR(50),
birth DATE,
address VARCHAR(100),
city VARCHAR(50),
province VARCHAR(50),
postalCode VARCHAR(50),
website VARCHAR(50),
reg_date TIMESTAMP,
annualPay INT(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests was created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$stmt = $conn->prepare("INSERT INTO MyGuests (name,gender,email,birth,address,city,province,postalCode,website,annualPay) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssi",$name,$gender,$email,$birth,$address,$city,$province,$postalCode,$website,$annualPay);

// set parameters and execute
$employeeId = "001";
$name = "Nirav";
$gender="Male";
$email = "nirav4294@gmail.com";
$birth="1994-04-02";
$address="Scarborough,Canada";
$city="Antrim ";
$province="Ontario";
$postalCode="M1S3E6";
$website="http://google.com";
$annualPay="4500";

$stmt->execute();

$employeeId = "002";
$name = "Brijesh";
$gender="Male";
$email = "prajapati442@gmail.com";
$birth="1995-15-05";
$address="Scarborough";
$city="Toronto";
$province="Ontario";
$postalCode="M9P4N9";
$website="http://yahoo.com";
$annualPay="9500";

$stmt->execute();

$employeeId = "003";
$name = "Tarun";
$gender="Male";
$email = "tarun998@gmail.com";
$birth="1990-07-25";
$address="Dundas";
$city="Toronto";
$province="Ontario";
$postalCode="B2B2Y2";
$website="http://hotmail.com";
$annualPay="11000";

$stmt->execute();

$employeeId = "004";
$name = "Chaitali";
$gender="Female";
$email = "Chaitali007@gmail.com";
$birth="1994-04-25";
$address="India";
$city="Ahemdabad";
$province="GUJRAT";
$postalCode="387002";
$website="http://facebook.com";
$annualPay="20000";

$stmt->execute();

$employeeId = "005";
$name = "Damini";
$gender="Female";
$email = "patel123@gmail.com";
$birth="1989-08-07";
$address="Alkapuri";
$city="Vadodara";
$province="Gujarat";
$postalCode="387998";
$website="http://slideshare.com";
$annualPay="8500";

$stmt->execute();

$employeeId = "006";
$name = "Jaspreet";
$gender="Male";
$email = "jaspreetkaur@gmail.com";
$birth="1989-10-15";
$address="Chandnichawk";
$city="Delhi";
$province="India";
$postalCode="373737";
$website="http://hotmail.com";
$annualPay="7000";

$stmt->execute();

$employeeId = "007";
$name = "Neeraj";
$gender="Male";
$email = "neerajkhan@gmail.com";
$birth="1989-09-11";
$address="Kennedy";
$city="Scarborough";
$province="Canada";
$postalCode="M1P4L8";
$website="http://gmail.com";
$annualPay="12000";

$stmt->execute();

$employeeId = "008";
$name = "Amber";
$gender="Male";
$email = "amber123@gmail.com";
$birth="1990-11-11";
$address="Scarbrough";
$city="Toronto";
$province="Ontario";
$postalCode="M5S4S7";
$website="http://twitter.com";
$annualPay="40000";

$stmt->execute();

$employeeId = "009";
$name = "Hardeep";
$gender="Female";
$email = "hardeep789@gmail.com";
$birth="1994-11-20";
$address="Haryana";
$city="Punjab";
$province="Punjab";
$postalCode="389006";
$website="http://ymail.com";
$annualPay="33333";

$stmt->execute();

$employeeId = "010";
$name = "Phaninder";
$gender="Male";
$email = "reddy@gmail.com";
$birth="1993-5-15";
$address="Markham Road";
$city="DownTown";
$province="Ontario";
$postalCode="M1J5N9";
$website="http://reddy.com";
$reg_date="";
$annualPay="5555";

$stmt->execute();

echo " record inserted successfully";

echo "<br>";

