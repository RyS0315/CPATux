DROP TABLE IF EXISTS EMPLOYEES;
DROP TABLE IF EXISTS EVENTS;
DROP TABLE IF EXISTS CUSTOMERS;
DROP TABLE IF EXISTS ORDERS;
DROP TABLE IF EXISTS SUITS;
DROP TABLE IF EXISTS SHIRT_STYLES;
DROP TABLE IF EXISTS SUIT_STYLES;
DROP TABLE IF EXISTS PANT_STYLES;
DROP TABLE IF EXISTS SHOES_STYLES;
DROP TABLE IF EXISTS VEST_STYLES;
DROP TABLE IF EXISTS TIE_STYLES;
DROP TABLE IF EXISTS JEWELRY_STYLES;
DROP TABLE IF EXISTS POCKETSQUARE_STYLES;
DROP TABLE IF EXISTS SUSPENDERS_STYLES;


CREATE TABLE EMPLOYEES(
    empID INT(10) Primary Key AUTO_INCREMENT,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    username VARCHAR(20),
    pass_word INT(4),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE EVENTS(
    groupID INT(10) Primary Key AUTO_INCREMENT,
    group_name VARCHAR(20),
    leadID INT(10),
    groupType VARCHAR(20),
    eventDate DATETIME,
    default_suit VARCHAR(50),
    default_shirt VARCHAR(50),
    default_shoe VARCHAR(50),
    default_pant VARCHAR(50),
    default_vest VARCHAR(50),
    default_tie VARCHAR(50),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE Customers(
    custID INT(10) Primary Key AUTO_INCREMENT,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    cust_address VARCHAR(20),
    email VARCHAR(20),
    phone VARCHAR(20),
    chest INT(3),
    overarm INT(3),
    waist INT(3),
    hips INT(3),
    outseam INT(3),
    neck INT(3),
    sleeve INT(3),
    shoe INT(3),
    height INT(5),
    cust_weight INT(4),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE ORDERS(
    orderID INT(10) AUTO_INCREMENT PRIMARY KEY,
    custID INT(10),
    groupID INT(10),
    suit VARCHAR(50),
    shirt VARCHAR(50),
    shoe VARCHAR(50),
    pant VARCHAR(50),
    vest VARCHAR(50),
    tie VARCHAR(50)
);

CREATE TABLE SUIT_STYLES(
    suitstyleID INT(10),
    Style VARCHAR(20),
    buttons INT(3),
    lapel_type VARCHAR(12),
    vents VARCHAR(20),
    color VARCHAR(20),
    PRIMARY KEY(suitstyleID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE SUITS(
    suitstyleID INT(10),
    suitID INT(10),
    size INT(20),
    PRIMARY KEY(suitID, suitstyleID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);


CREATE TABLE SHIRT_STYLES(
    shirtID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(shirtID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE PANT_STYLES(
    pantID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(pantID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE SHOES_STYLES(
    shoeID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(shoeID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE VEST_STYLES(
    vestID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(vestID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE TIE_STYLES(
    tieID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(tieID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE POCKETSQUARE_STYLES(
    pocketsquareID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(pocketsquareID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE JEWELRY_STYLES(
    jewelryID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(jewelryID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

CREATE TABLE SUSPENDERS_STYLES(
    suspenderID INT(10),
    Style VARCHAR(20),
    PRIMARY KEY(suspenderID),
    dateLastMaint DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeLastMaint INT(10),
    dateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeAdded INT(10)
);

INSERT INTO SUITS(suitstyleID, suitID, Size) VALUES
(170, 001, 4),
(170, 002, 4),
(170, 003, 4),
(170, 004, 4),
(170, 005, 6);

INSERT into EVENTS(group_name, leadID, groupType, eventDate) VALUES
('Test Group 1', 1, 'Wedding', CURRENT_TIMESTAMP),
('Test Group 2', 2, 'Wedding', CURRENT_TIMESTAMP);

INSERT into Customers(first_name, last_name, cust_address, email, phone) VALUES
('Test', 'Customer', 'address123', 'Test@test.com', '4444444444'),
('Customer', 'Two', 'address123', 'Test@test.com', '4444444444');