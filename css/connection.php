<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name='wonderland';

$conn = new mysqli($servername, $username, $password,$db_name);
if(!$conn)
{
    die("Cannot connect to Database" .mysqli_connect_error());
}
else
{
  echo "Connected successfully";
}
//Create connection
// $conn = new mysqli($servername, $username, $password);

//Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully"; 
// $sql = "CREATE DATABASE Wonderland";
// if ($conn->query($sql) === TRUE) {  
// echo "Database created successfully";
   
// } else {
//   echo  "Error creating database: " . $conn->error;
// }
// $db_name ="Wonderland";
// $conn = mysqli_connect($servername, $username, $password, $db_name);
// $sql = "CREATE TABLE Tickets (
//   Ticket_ID VARCHAR(30) PRIMARY KEY,
//   Price VARCHAR(30),
//   Expiration_date TEXT(8),
//   Restrictions TEXT(30) 
//   )";
//   if (mysqli_query($conn, $sql)) {
//   echo "Table Tickets created 
//   successfully"; } else {
//   echo "Error creating table: " . mysqli_error($conn);
//   }

// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('7W2MQJE9', '$70.82', '2025-08-15', 'Longer restriction text for entry 1')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('ZRR467RB', '$80.26', '2023-05-26', 'Longer restriction text for entry 2')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('EFRBK1JI', '$37.15', '2023-02-24', 'Longer restriction text for entry 3')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('3WH6ZAL0', '$11.31', '2024-02-17', 'Longer restriction text for entry 4') ";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('7TPOWKNO', '$18.18', '2024-12-11', 'Longer restriction text for entry 5')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('BKMXL46E', '$95.21', '2023-05-08', 'Longer restriction text for entry 6')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('113KXMCN', '$97.68', '2025-08-31', 'Longer restriction text for entry 7')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('89ICHC9F', '$98.48', '2023-02-04', 'Longer restriction text for entry 8')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('RTGBTTUG', '$42.85', '2024-07-17', 'Longer restriction text for entry 9')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('Z68NOOXK', '$44.52', '2024-05-15', 'Longer restriction text for entry 10')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('D0OEI5ZE', '$44.64', '2023-02-05', 'Longer restriction text for entry 11')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('HBRKEJDM', '$29.48', '2025-12-19', 'Longer restriction text for entry 12')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('PI6WAHX5', '$87.89', '2024-12-02', 'Longer restriction text for entry 13')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('D0LC7P9D', '$80.53', '2023-03-11', 'Longer restriction text for entry 14')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('Z90KYP8Z', '$46.97', '2023-07-12', 'Longer restriction text for entry 15')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('W60CSAB2', '$58.29', '2023-04-01', 'Longer restriction text for entry 16')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('4PZXG9NO', '$69.88', '2023-02-14', 'Longer restriction text for entry 17')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('B0WC1TL6', '$99.43', '2023-10-20', 'Longer restriction text for entry 18')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('JSP4RORR', $'55.39', '2024-09-15', 'Longer restriction text for entry 19')";
// $sql = "INSERT INTO Tickets (Ticket_ID,Price,Expiration_date, Restrictions)
// VALUES ('9J6UZMXN', '$49.95', '2024-12-11', 'Longer restriction text for entry 20')" ;
// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
// }


//  $sql = "CREATE TABLE Rides (
//    Ride_ID VARCHAR(30) PRIMARY KEY,
//    Ride_Name TEXT(10),
//    Capacity INT(10),
//    Height_Requirement FLOAT(10),
//    Duration TIME(6),
//    Ride_Description TEXT(30)
//    )";
//    if (mysqli_query($conn, $sql)) {
//    echo "Table Rides created 
//    successfully"; } else {
//    echo "Error creating table: " . mysqli_error($conn);
//    }
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('FU28PTTR', 'Hanging Garden',59, 72, '01:20:00', 'This places amazes with its fabulous atmosphere and nature')";
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('FXI809DY', 'Sky Dizzy Toucan', 99, 72, '00:24:00','Beware: Dizziness Guaranteed')";
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('UEAHY7GP', 'The Sinking Ship', 78, 72, '00:44:00','Get onboard at your own risk')";
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('EB00WYDP', 'Rise of the Resistance', 50, 72, '00:05:00','Make sure that you dont hurt yourself')";
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('VR1I9ZLJ', 'Banshee Coaster', 97, 72, '00:11:00','Thrill awaits you')";
// $sql = "INSERT INTO Rides (Ride_ID,Ride_Name,Capacity,Height_Requirement,Duration,Ride_Description)
// VALUES ('D24DY3W7', 'Drop Tower', 85, 72, '01:30:00','Simulates a zero-gravity experience, offering a mix of suspense and excitement')";

// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
// }

// $sql = "CREATE TABLE Employyes (
// Employee_ID VARCHAR(30) PRIMARY KEY, 
// First_Name  TEXT(30), 
// Last_Name TEXT(30),
// Position TEXT(30), 
// Department TEXT(30),
// Hire_Date DATE(8),
// Employee_Status TEXT(30),
// Date_Of_Birth DATE(8),
// Employee_Address VARCHAR(30), 
// Email VARCHAR(30), 
// Phone_Number VARCHAR(30), 
// Salary INT(30)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Employees created successfully";
// }
// else {
// echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP001', 'John', 'Doe', 'Chief Cheshire Strategist', 'Strategy and Mystique', '2021-01-10', 'Active', '1985-07-12', '1234 Main St', 'john.doe@example.com', '555-0101', 70000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP002', 'Jane', 'Smith', 'Gryphon Keeper', 'Mythical Aviary', '2020-05-15', 'Active', '1990-03-22', '2345 Side St', 'jane.smith@example.com', '555-0202', 80000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP003', 'Michael', 'Brown', 'White Rabbit Timekeeper', 'Temporal Affairs', '2018-02-20', 'Active', '1989-08-15', '3456 Maple Rd', 'michael.brown@example.com', '555-0303', 85000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP004', 'Sarah', 'Wilson', 'Wonderland Cartographer', 'Map Making and Exploration', '2019-06-11', 'Active', '1992-12-05', '4567 Elm St', 'sarah.wilson@example.com', '555-0404', 65000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP005', 'Carlos', 'Garcia', 'Invisible Cat Whisperer', 'Mystical Communication', '2017-09-23', 'Active', '1987-04-19', '5678 Pine Ln', 'carlos.garcia@example.com', '555-0505', 60000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP006', 'Olivia', 'Martinez', 'Queen of Hearts Advisory', 'Royal Counsel', '2018-03-15', 'Active', '1991-11-28', '6789 Birch Dr', 'olivia.martinez@example.com', '555-0606', 72000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP007', 'Daniel', 'Lee', 'HR Manager', 'Human Resources', '2020-07-22', 'Active', '1986-01-14', '7890 Cedar Blvd', 'daniel.lee@example.com', '555-0707', 78000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP008', 'Emily', 'Kim', 'Mad Hatters Apprentice', 'Millinery and Madness', '2021-04-05', 'Active', '1993-09-30', '8901 Spruce St', 'emily.kim@example.com', '555-0808', 77000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP009', 'David', 'Hernandez', 'Dream Weaver', 'Imaginary Fabrication', '2016-12-07', 'Active', '1984-06-23', '9012 Oak Terrace', 'david.hernandez@example.com', '555-0909', 55000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP010', 'Emma', 'Lopez', 'Sales Representative', 'Sales', '2020-01-20', 'Active', '1990-05-17', '123 Oak Ave', 'emma.lopez@example.com', '555-1010', 68000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP011', 'Aiden', 'Nguyen', 'Project Manager', 'Operations', '2019-08-14', 'Active', '1988-03-21', '234 Birch Rd', 'aiden.nguyen@example.com', '555-1111', 83000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP012', 'Sophia', 'Patel', 'Knave of Hearts Assistant', 'Royal Delegation', '2018-05-29', 'Active', '1987-10-08', '345 Cedar Ln', 'sophia.patel@example.com', '555-1212', 76000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP013', 'Lucas', 'Gonzalez', 'Potion Master', 'Magic Department', '2018-04-17', 'Active', '1985-05-25', '678 Maple St', 'lucas.gonzalez@example.com', '555-1313', 76000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP014', 'Mia', 'Rodriguez', 'Dream Analyst', 'Dreamland Operations', '2019-10-21', 'Active', '1993-08-09', '789 Elm Dr', 'mia.rodriguez@example.com', '555-1414', 68000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES('EMP015', 'Alexander', 'Lee', 'Cloud Architect', 'Sky Engineering', '2020-02-12', 'Active', '1986-12-30', '890 Birch Ave', 'alexander.lee@example.com', '555-1515', 82000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP016', 'Sofia', 'Hernandez', 'Time Flow Manager', 'Chronology Department', '2017-06-07', 'Active', '1989-07-14', '901 Cedar Ln', 'sofia.hernandez@example.com', '555-1616', 71000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP017', 'Benjamin', 'Kim', 'Unicorn Caretaker', 'Mythical Creatures Division', '2021-05-03', 'Active', '1990-09-20', '123 Pine St', 'benjamin.kim@example.com', '555-1717', 90000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP018', 'Amelia', 'Patel', 'Rainbow Painter', 'Aesthetics Bureau', '2019-07-15', 'Active', '1992-11-11', '234 Oak Dr', 'amelia.patel@example.com', '555-1818', 65000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP019', 'Elijah', 'Wang', 'Fairy Tale Historian', 'Storytelling Archives', '2018-01-20', 'Active', '1988-03-28', '345 Maple Blvd', 'elijah.wang@example.com', '555-1919', 73000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP020', 'Abigail', 'Lopez', 'Starlight Collector', 'Cosmic Affairs', '2020-09-05', 'Active', '1991-04-22', '456 Elm Lane', 'abigail.lopez@example.com', '555-2020', 67000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP021', 'William', 'Garcia', 'Magic Carpet Engineer', 'Transportation Magic', '2017-12-11', 'Active', '1984-06-19', '567 Birch Rd', 'william.garcia@example.com', '555-2121', 85000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP022', 'Madison', 'Nguyen', 'Enchantment Quality Analyst', 'Spellcasting Department', '2021-01-19', 'Active', '1995-10-05', '678 Cedar St', 'madison.nguyen@example.com', '555-2222', 62000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP023', 'James', 'Martinez', 'Wishing Well Coordinator', 'Wish Fulfillment Agency', '2018-08-08', 'Active', '1987-02-16', '789 Pine Ave', 'james.martinez@example.com', '555-2323', 75000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP024', 'Lily', 'Smith', 'Mystical Botanist', 'Flora & Fauna Exploration', '2019-03-22', 'Active', '1993-09-09', '890 Oak Ln', 'lily.smith@example.com', '555-2424', 78000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP025', 'Oliver', 'Brown', 'Riddle Master', 'Enigma Solutions', '2020-11-30', 'Active', '1992-05-27', '901 Elm Dr', 'oliver.brown@example.com', '555-2525', 66000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP026', 'Charlotte', 'Jones', 'Tea Party Planner', 'Event Coordination', '2017-05-14', 'Active', '1989-07-21', '123 Cedar Blvd', 'charlotte.jones@example.com', '555-2626', 69000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP027', 'Henry', 'Davis', 'Cheshire Cat Behaviorist', 'Mystical Animal Care', '2021-02-09', 'Active', '1990-10-31', '234 Pine St', 'henry.davis@example.com', '555-2727', 81000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP028', 'Ava', 'Martinez', 'Wonderland Tour Guide', 'Visitor Experience', '2018-06-18', 'Active', '1991-08-14', '345 Oak Ave', 'ava.martinez@example.com', '555-2828', 58000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP029', 'Ethan', 'Wang', 'Quality Control', 'Production', '2017-11-03', 'Active', '1992-02-11', '456 Elm Street', 'ethan.wang@example.com', '555-2929', 64000)";
// $sql = "INSERT INTO Employyes (Employee_ID, First_Name, Last_Name, Position, Department, Hire_Date, Employee_Status, Date_Of_Birth, Employee_Address, Email, Phone_Number, Salary)
// VALUES ('EMP030', 'Isabella', 'Martinez', 'Logistics Coordinator', 'Logistics', '2021-03-18', 'Active', '1994-07-26', '567 Pine Road', 'isabella.martinez@example.com', '555-3030', 66000)";
// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
// }

// $sql = "CREATE TABLE Departments (
// Department_ID VARCHAR(30) PRIMARY KEY,
// Department_Name TEXT(10),
// Department_Location VARCHAR(20),
// Number_of_Employees INT(30),
// ManagerID VARCHAR(30) FOREIGN KEY AS FK
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Departments created  successfully"; 
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT001', 'Magic Department', 'Tower of Mystique', 15,  'EMP013')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT002', 'Matrix strategic content', 'Side of Maroon', 10, 'EMP009')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT003', 'Scale open-source e-markets', 'Shire of DarkTurquoise', 23, 'EMP016')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT004', 'Monetize e-business paradigms', 'Haven of Beige', 27, 'EMP004')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT005', 'Mesh collaborative channels', 'Burgh of LightPink', 28, 'EMP020')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT006', 'Deploy one-to-one paradigms', 'Tower of Mystique', 34, 'EMP019')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT007', 'Disintermediate synergistic metrics', 'Port of LightCoral', 44, 'EMP005')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT008', 'Integrate front-end networks', 'Shire of MediumSeaGreen', 18, 'EMP010')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT009', 'Enable transparent platforms', 'Stad of Indigo', 38, 'EMP011')";
// $sql = "INSERT INTO Departments (Department_ID, Department_Name, Department_Location, Number_of_Employees, ManagerID) 
// VALUES ('DPT010', 'Deliver revolutionary communities', 'Mouth of Magenta', 49, 'EMP006')";
// if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
// }

// $sql = "CREATE TABLE Restaurant (
// Restaurant_Name TEXT(30) PRIMARY KEY,
// Cuisine_Type TEXT(30), 
// Price VARCHAR(30) , 
// Reviews VARCHAR(30), 
// Payment_Method TEXT(30)
// )"; 
// if (mysqli_query($conn, $sql)) {
// echo "Table Restaurant created  successfully"; 
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "INSERT INTO Restaurant (Restaurant_Name, Cuisine_Type, Price, Reviews, Payment_Method) 
// VALUES ('The Gourmet Bistro', 'French', '$30', '4.5/5 Stars', 'Credit Card')";
// $sql = "INSERT INTO Restaurant (Restaurant_Name, Cuisine_Type, Price, Reviews, Payment_Method) 
// VALUES ('Sushi Zen', 'Japanese', '$50', '4.8/5 Stars', 'Debit Card')";
// $sql = "INSERT INTO Restaurant (Restaurant_Name, Cuisine_Type, Price, Reviews, Payment_Method) 
// VALUES('Pasta Heaven', 'Italian', '$20', '4.2/5 Stars', 'Cash')";
// $sql = "INSERT INTO Restaurant (Restaurant_Name, Cuisine_Type, Price, Reviews, Payment_Method) 
// VALUES ('Spice Route', 'Indian', '$25', '4.6/5 Stars', 'Mobile Payments')";
// $sql = "INSERT INTO Restaurant (Restaurant_Name, Cuisine_Type, Price, Reviews, Payment_Method) 
// VALUES ('Green Bowl', 'Vegan', '$15', '4.7/5 Stars', 'Credit Card or Mobile Payments')";
// if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
// }
   
// $db_name ="Wonderland";
// $conn = mysqli_connect($servername, $username, $password, $db_name);
// $sql = "CREATE TABLE Customers (
// Customer_ID VARCHAR(30) PRIMARY KEY,
// First_Name VARCHAR(30), 
// Last_Name VARCHAR(30) , 
// Date_Of_Birth DATE(8), 
// Customer_Address VARCHAR(30), 
// Email VARCHAR(30), 
//Customer_password VARCHAR(30),
// Phone INT(30),
// Visit_Date DATE(8), 
// Customer_Ticket_ID VARCHAR(30) ADD CONSTRAINT customers_ibfk_1 FOREIGN KEY REFERENCES Tickets(Ticket_ID), 
// Payment_Method VARCHAR(30)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Customers created successfully";
// }
// else {
//   echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST101', 'Eva', 'Green', '1984-04-15', '101 Maple Ave, Star City', 'evagreen@email.com', 9801234567, '2023-05-10', '7W2MQJE9', 'Credit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST102', 'Liam', 'Fisher', '1991-08-22', '202 Willow Lane, Brookside', 'liamfisher@email.com', 9801234568, '2023-05-11', 'ZRR467RB', 'Debit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST103', 'Nora', 'Hayes', '1975-12-30', '303 Pine Street, Lakeside', 'norahayes@email.com', 9801234569, '2023-05-12', 'EFRBK1JI', 'Paypal')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES  ('CUST104', 'Oscar', 'Reed', '1988-01-19', '404 Birch Road, Greenfield', 'oscarreed@email.com', 9801234570, '2023-05-13', '3WH6ZAL0', 'Bank Transfer')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST105', 'Zara', 'West', '1993-07-03', '505 Cedar Blvd, Sunnytown', 'zarawest@email.com', 9801234571, '2023-05-14', '7TPOWKNO', 'Cash')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST106', 'Felix', 'Morton', '1980-09-17', '606 Elm Street, Hillcrest', 'felixmorton@email.com', 9801234572, '2023-05-15', 'BKMXL46E', 'Credit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST107', 'Ivy', 'Sloan', '1978-03-24', '707 Oak Avenue, Riverdale', 'ivysloan@email.com', 9801234573, '2023-05-16', '113KXMCN', 'Debit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST108', 'Miles', 'Burton', '1995-05-29', '808 Maple Drive, Cliffside', 'milesburton@email.com', 9801234574, '2023-05-17', '89ICHC9F', 'Paypal')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST109', 'Ruby', 'Santos', '1982-10-13', '909 Walnut Street, Fairview', 'rubysantos@email.com', 9801234575, '2023-05-18', 'RTGBTTUG', 'Bank Transfer')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES('CUST110', 'Ethan', 'Ramirez', '1990-02-07', '1010 Pine Lane, Grandview', 'ethanramirez@email.com', 9801234576, '2023-05-19', 'Z68NOOXK', 'Cash')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST111', 'Leo', 'Griffin', '1979-11-16', '1111 Cherry Lane, Eastwood', 'leogriffin@email.com', 9801234577, '2023-05-20', 'D0OEI5ZE', 'Credit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES('CUST112', 'Maya', 'Pearson', '1992-06-25', '1212 Birch Road, New Haven', 'mayapearson@email.com', 9801234578, '2023-05-21', 'HBRKEJDM', 'Debit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST113', 'Oliver', 'Knight', '1983-08-09', '1313 Cedar St, Oldtown', 'oliverknight@email.com', 9801234579, '2023-05-22', 'PI6WAHX5', 'Paypal')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST114', 'Charlotte', 'Bates', '1996-01-15', '1414 Elm Street, Westfield', 'charlottebates@email.com', 9801234580, '2023-05-23', 'D0LC7P9D', 'Bank Transfer')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST115', 'Noah', 'Fletcher', '1985-04-20', '1515 Oak Ave, Southgate', 'noahfletcher@email.com', 9801234581, '2023-05-24', 'Z90KYP8Z', 'Cash')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST116', 'Lucy', 'Wells', '1994-09-30', '1616 Pine Road, Northville', 'lucywells@email.com', 9801234582, '2023-05-25', 'W60CSAB2', 'Credit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST117', 'Henry', 'Lawson', '1981-03-22', '1717 Maple Drive, Eastbridge', 'henrylawson@email.com', 9801234583, '2023-05-26', '4PZXG9NO', 'Debit Card')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// // VALUES ('CUST118', 'Ava', 'Sullivan', '1976-07-18', '1818 Birch Lane, Northridge', 'avasullivan@email.com', 9801234584, '2023-05-27', 'B0WC1TL6', 'Paypal')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST119', 'Jacob', 'Carter', '1993-12-12', '1919 Cedar Blvd, Lakeview', 'jacobcarter@email.com', 9801234585, '2023-05-28', 'JSP4RORR', 'Bank Transfer')";
// $sql = "INSERT INTO Customers (Customer_ID, First_Name, Last_Name, Date_Of_Birth, Customer_Address,Email,Phone,Visit_Date,Customer_Ticket_ID,Payment_Method) 
// VALUES ('CUST120', 'Emma', 'Nicholson', '1987-10-05', '2020 Elm St, Ridgefield', 'emmanicholson@email.com', 9801234586, '2023-05-29', '9J6UZMXN', 'Cash')";
// if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
// }

// $sql = "CREATE TABLE Admins (
// Admins_ID VARCHAR(30) PRIMARY KEY,
// Admins_password VARCHAR(30)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Admins created successfully";
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }
// //LOCK TABLES Admins WRITE;
// $sql = "INSERT INTO Admins (Admins_ID, Admins_password) 
// VALUES ('aghafardeen@email.com','21K-3371')";
// //$sql = "INSERT INTO Admins (Admins_ID, Admins_password) 
// //VALUES ('khadeejahmansoor@email.com','21K-3199')";
// //$sql = "INSERT INTO Admins (Admins_ID, Admins_password) 
// //VALUES ('samiailyas@email.com','21K-4947')";

// if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
// }

// $sql = "CREATE TABLE Products (
// Product_ID VARCHAR(30) PRIMARY KEY,
// Product_Name VARCHAR(30),
// Quantity INT(30),
// Price INT(30)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Products created successfully";
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD001','V8 Cap','6','$15')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD002','Cars Neon Tee','4','$20')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD003','Neon Hoodies','9','$30')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD004','Disney Watch','3','$50')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD005','Water Bottle','11','$18')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD006','Castle Locket','8','$12')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD007','Train Set','12','$80')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD008','Disney Bag','15','$100')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD009','Mickey Safari Shirt','17','$50')";
// $sql = "INSERT INTO Products (Product_ID, Product_Name,Quantity,Price) 
// VALUES ('PROD010','Lego Castle','20','$200')";
// if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
// }
// else {
// echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "CREATE TABLE Cart(
// Ticket_ID VARCHAR(30)ADD CONSTRAINT cart_ibfk_1 FOREIGN KEY REFERENCES Tickets(Ticket_ID),
// Adult VARCHAR(30),
// Child VARCHAR(30),
// Adult_Price VARCHAR(30),
// Child_Price VHARCHAR(30),
// SubTotal VARCHAR(1000),
// Tax VARCHAR(30),
// Shipping VARCHAR(30),
// Grand_Total VARCHAR(1000)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Cart created successfully";
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "UPDATE Cart SET Adult_Price=20*Adult";
// $sql = "UPDATE Cart SET Child_Price=15*Child";
// $sql = "UPDATE Cart SET SubTotal= Adult_Price+Child_Price";
// $sql = "UPDATE Cart SET Tax= SubTotal*0.05";
// $sql = "UPDATE Cart SET Shipping= '$5'";
// $sql = "UPDATE Cart SET Grand_Total= SubTotal+Tax+Shipping";
// if (mysqli_query($conn, $sql)) {
//  echo "Record updated successfully";
// }
// else {
// echo "Error updating table: " . mysqli_error($conn);
// }
// $sql = "CREATE TABLE Cart2(
// Product_Name VARCHAR(30)  ADD CONSTRAINT cart2_ibfk_1 FOREIGN KEY REFERENCES Products(Product_Name),
// Quantity INT(30),
// Price VARCHAR(30),
// SubTotal VARCHAR(1000),
// Tax VARCHAR(30),
// Shipping VARCHAR(30),
// Grand_Total VARCHAR(1000)
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table Cart2 created successfully";
// }
// else {
//  echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "UPDATE Cart SET SubTotal= Quantity*Price";
// $sql = "UPDATE Cart SET Tax= SubTotal*0.05";
// $sql = "UPDATE Cart SET Shipping= '$5'";
// $sql = "UPDATE Cart SET Grand_Total= SubTotal+Tax+Shipping";
// if (mysqli_query($conn, $sql)) {
//  echo "Record updated successfully";
// }
// else {
// echo "Error updating table: " . mysqli_error($conn);
// }
//  $conn->close();
// ?>