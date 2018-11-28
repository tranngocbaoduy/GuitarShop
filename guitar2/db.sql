CREATE DATABASE QLGUITAR;

USE QLGUITAR;

CREATE TABLE MEMBER (
ID_MEMBER INT PRIMARY KEY NOT NULL,
USERNAME VARCHAR(20) NOT NULL,
FIRSTNAME NVARCHAR(50) NOT NULL,
LASTNAME NVARCHAR(50) NOT NULL,
ADDRESS_MEMBER NVARCHAR(100) NOT NULL,
EMAIL NVARCHAR(100) NOT NULL,
PHONE VARCHAR(20) NOT NULL,
ROLE VARCHAR(20) NOT NULL
);

CREATE TABLE ACCOUNT (
USERNAME VARCHAR(20) PRIMARY KEY NOT NULL,
PASSWORD VARCHAR(40) NOT NULL
);

CREATE TABLE PRODUCT (
ID_PRODUCT INT PRIMARY KEY NOT NULL,
NAME NVARCHAR(100) NOT NULL,
PRICE FLOAT NOT NULL,
DESCRIPTIONS NVARCHAR(100) NOT NULL,
IMG NVARCHAR(100) NOT NULL,
ID_CATEGORY INT NOT NULL
);
CREATE TABLE CATEGORY (
ID_CATEGORY INT PRIMARY KEY NOT NULL,
NAME NVARCHAR(30) NOT NULL,
NOTE NVARCHAR(30) NOT NULL
);

CREATE TABLE GUITARIST (
ID_GUITARIST INT PRIMARY KEY NOT NULL,
NAME NVARCHAR(30) NOT NULL,
DESCRIPTION NVARCHAR(1500) NOT NULL,
IMG NVARCHAR(100) NOT NULL
);

CREATE TABLE BILL (
ID_BILL INT PRIMARY KEY NOT NULL,
ID_MEMBER INT NOT NULL,
TOTAL FLOAT NOT NULL,
DATE_EXPORT DATE NOT NULL
);

CREATE TABLE BILL_DETAIL (
ID_BILL INT NOT NULL,
ID_PRODUCT INT NOT NULL,
QUANTITY INT NOT NULL,
PRICE FLOAT NOT NULL,
PRIMARY KEY (ID_BILL,ID_PRODUCT)
);

ALTER TABLE MEMBER ADD CONSTRAINT FK_MEMBER_ACCOUNT FOREIGN KEY(USERNAME) REFERENCES ACCOUNT(USERNAME);
ALTER TABLE PRODUCT ADD CONSTRAINT FK_PRODUCT_CATEGORY FOREIGN KEY(ID_CATEGORY) REFERENCES CATEGORY(ID_CATEGORY);
ALTER TABLE BILL ADD CONSTRAINT FK_BILL_MEMBER FOREIGN KEY(ID_MEMBER) REFERENCES MEMBER(ID_MEMBER);
ALTER TABLE BILL_DETAIL ADD CONSTRAINT FK_BILL_DETAIL_BILL FOREIGN KEY(ID_BILL) REFERENCES BILL(ID_BILL);
ALTER TABLE BILL_DETAIL ADD CONSTRAINT FK_BILL_DETAIL_PRODUCT FOREIGN KEY(ID_PRODUCT) REFERENCES PRODUCT(ID_PRODUCT);

-- Nhap danh muc
INSERT INTO CATEGORY VALUES
(1, 'Aucostic Guitar', 'An acoustic guitar is a guitar that produces sound acoustically by transmitting the vibration of the strings to the air—as opposed to relying on electronic amplification (see electric guitar).'),
(2, 'Classical Guitar', 'Classical guitar. The classical guitar (also known as the nylon-string guitar, or Spanish guitar) is a member of the guitar family used in classical music. It is an acoustic wooden guitar with strings made of gut or nylon, rather than the metal strings used in acoustic and electric guitars.'),
(3, 'Electric Guitar', 'An electric guitar is a guitar that uses one or more pickups to convert the vibration of its strings into electrical signals. The vibration occurs when a guitar player strums, plucks, fingerpicks, or taps the strings.'),
(4, 'Bass Guitar', 'The bass guitar (also called electric bass, or simply bass) is a stringed instrument played primarily with the fingers or thumb, by plucking, slapping, popping, strumming, tapping, thumping, or picking with a plectrum, often known as a pick.'),
(5, 'Ukulele', 'First and foremost, the ukulele is a paradoxical instrument. It manages to be known around the world and tied to a single location at the same time. The ukulele is a relatively simple instrument, yet it is able to produce beautiful music that\'s adored worldwide.');

-- Nhap san pham

INSERT INTO PRODUCT VALUES
(1, 'Cordoba', '132.99', '','assets/images/product/product-1.png', 1),
(2, 'Takamine P5DC', '132.99', '', 'assets/images/product/product-2.png', 2),
(3, 'Fender Ukulele Hau oli, Laminated Mahogany', '89.99', '', 'assets/images/product/product-3.png', 1),
(4, 'Kapok S1 Pick', '829.99', '', 'assets/images/product/product-4.png', 2),
(5, 'Affinity Strat RW RCR', '49.99', '', 'assets/images/product/product-7.png', 3),
(6, 'Taylor GS Mini All KOA', '96.99', '', 'assets/images/product/product-6.png', 2),
(7, 'Fender CD-100 NAT', '55.99', '', 'assets/images/product/product-2.png', 1),
(8, 'Fender Blacktop™ Jaguar® HH, Rosewood Fingerboard, Black', '67.29', '', 'assets/images/product/product-8.png', 3),
(9, 'Suzuki SCG-11 4/4', '89.59', '', 'assets/images/product/product-4.png', 2),
(10, 'Fender American Deluxe Jazz Bass®, Rosewood Fingerboard, Wine Transparent, 3-Ply B/W/B Pickguard', '98.59', '', 'assets/images/product/product-1.png', 4),
(11, 'Samick UK-50', '84.399', '', 'assets/images/product/product-10.png', 5),
(12, 'Fender Ukulele Nohea All Koa', '159.99', '', 'assets/images/product/product-12.png', 5),
(13, 'Lazer LG-861', '244.99', '', 'assets/images/product/product-11.png', 5),
(14, 'Fender Blacktop™ Stratocaster® HH Rosewood Fingerboard, Candy Apple Red', '78.99', '', 'assets/images/product/product-9.png', 3),
(15, 'Fender American Deluxe Precision Bass®, Rosewood Fingerboard, Olympic White, 3-Ply B/W/B Pickguard', '85.99', '', 'assets/images/product/product-14.png', 4)


-- Nhap tai khoan và thong tin ng dung

INSERT INTO ACCOUNT VALUES ('user','202cb962ac59075b964b07152d234b70');
INSERT INTO MEMBER VALUES (1,'user','NGUYEN','HUE','ABC','demo1@gmail.com','0123456789','ADMIN');

