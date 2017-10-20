-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

INSERT INTO `address` (`house_no`, `street_name`, `pincode`, `landmark`, `state`, `city`) VALUES
('001', 'Krishna Road', 682002, 'Ayodhya Upachar', 'Kerala', 'Kochi'),
('1190', 'Jigni Main Road', 560003, 'Paper manufacturers', 'Karnataka', 'Bangalore'),
('12-B', 'Baker Street', 110078, 'Maratha Upachar', 'Delhi', 'Delhi'),
('1259', 'Chat street', 560561, 'VV Puram', 'Karnataka', 'Bangalore'),
('1279', 'Modi Road', 226061, 'Rajpath', 'Uttar Pradesh', 'Lucknow'),
('129', 'Fashion', 110032, 'Brand Factory', 'Delhi', 'DLH'),
('129', 'Ramanjaneya Road', 560061, 'Brindavan Upachar', 'Karnataka', 'Bangalore'),
('1290', 'Abdul Kalam Road', 302001, 'Brigade Road', 'Rajasthan', 'Jaipur'),
('1829', 'MG Road', 400007, 'Gopalan Mall', 'Maharashtra', 'Mumbai'),
('45', 'West Park Road', 560003, 'Udupi Upachar', 'Karnataka', 'Bangalore'),
('556', 'Jai Ram street', 560008, 'Indiranagar BDA', 'Karnataka', 'BLR'),
('567', 'Vajpayee Road', 110568, 'Qutub Minar', 'Delhi', 'Delhi'),
('68', 'Nice Road', 682102, 'Kochi Football Stadium', 'Kerala', 'Kochi'),
('921', 'Laker Street', 560018, 'Black Street', 'Karnataka', 'Bangalore'),
('A-204', 'Palm Street', 230012, 'Coconut Factory', 'Madhya Pradesh', 'Bhopal'),
('B-102', 'Aamcha Street', 405672, 'Kai Payje Cafe', 'Maharashtra', 'Pune'),
('B-103', 'Jayachamarajendra Wodeyar Road', 570023, 'NPS International', 'Karnataka', 'Mysore'),
('F-301', 'Ring Road', 560085, 'Honda Showroom', 'Karnataka', 'Bangalore'),
('F-302', 'Ring Road', 560085, 'PES University', 'Karnataka', 'Bangalore'),
('G-102', 'Kuvempu Main Road', 560003, 'Veena Stores', 'Karnataka', 'Bangalore'),
('H-401', 'DVG Road', 562012, 'Basavanagudi Police Station', 'Karnataka', 'Bangalore'),
('S-5', 'Train Street', 302112, 'Railway Central', 'Rajasthan', 'Jodhpur');

INSERT INTO `customer` (`uname`, `fname`, `lname`, `password`, `cid`, `email`, `phone`, `gender`, `tot_sales`) VALUES
('manoj129', 'Manoj', 'Hegde', 'manoj', 'CIDBLR0001', 'shegdemanoj@gmail.com', '9483949789', 'M', '1050.00'),
('kedard1995', 'Kedar', 'Deshpande', 'kedar', 'CIDBLR0009', 'kedard1995@gmail.com', '8050678749', 'M', '0.00'),
('ganesh', 'Ganesh', 'Krishna', 'ganesh100', 'CIDBLR0032', 'ganesh@gmail.com', '8765678890', 'M', '4100.00'),
('Joelkiran', 'Joel', 'Kiran Kumar', 'joelkiran45', 'CIDBLR0061', 'joelkiran45@gmail.com', '7654356787', 'M', '0.00'),
('irfan.md1103', 'Mohammed', 'Irfan', 'irfan113', 'CIDBLR0067', 'irfan.md1103@gmail.com', '8867855303', 'M', '1000.00'),
('bhargav', 'Bhargav', 'KN', 'bhargav', 'CIDBLR0212', 'bhargav@gmail.com', '9876784358', 'M', '0.00'),
('abhilash', 'Abhilash', 'Somanath', 'abhi123', 'CIDBLR8711', 'abhilash@gmail.com', '9972886838', 'M', '0.00'),
('kevin', 'Kevin', 'Jude', 'kevinisturing', 'CIDDLH0056', 'kevinjudeconcesso@gmail.com', '9876564352', 'M', '6720.00'),
('manit129', 'Manit', 'Hegde', 'manit', 'CIDDLH4867', 'manit.hegde@gmail.com', '9876556789', 'M', '0.00'),
('iamVirat', 'Virat', 'Kohli', 'anushka', 'CIDDLH7359', 'viratTheRunMachine@gmail.com', '9786573421', 'M', '0.00'),
('kabeerbedi', 'Kabeer', 'Singh', 'foodpanda', 'CIDKLR0201', 'kabeer.pesu@gmail.com', '5678764351', 'M', '45000.00'),
('prabhat', 'Prabhat', 'Agarwal', 'prabhat', 'CIDMHR0027', 'prabhat.ag@gmail.com', '5674251267', 'M', '0.00'),
('Balavantdeshpande', 'Balavant', 'Deshpande', 'Balavanhaha', 'CIDMHR0101', 'balavan@gmail.com', '8767854895', 'M', '0.00'),
('Chitkaladeshmukh', 'Chitkala', 'Deshmukh', 'chitra', 'CIDMHR099', 'chitkalaTheAngel@gmail.com', '9481487713', 'F', '0.00'),
('Kaushik119', 'Kaushik', 'Rao', 'Kaushik', 'CIDMPD0012', 'kaushikrao@gmail.com', '9345672871', 'M', '0.00'),
('Jeevan', 'Jeevan', 'Nagaraj', 'jeevan10', 'CIDRJS0001', 'jeevannagaraj@gmail.com', '9876785434', 'M', '29700.00'),
('hemkesh', 'Hemkesh', 'Kumar', 'hemkesh120', 'CIDUPR0031', 'hemkesh@gmail.com', '8765434568', 'M', '22500.00');

INSERT INTO `customer_stays` (`cid`, `house_no`, `street_name`, `pincode`, `city`) VALUES
('CIDBLR0001', '129', 'Ramanjaneya Road', 560061, 'Bangalore'),
('CIDBLR0067', '45', 'West Park Road', 560003, 'Bangalore'),
('CIDKLR0201', '001', 'Krishna Road', 682002, 'Kochi'),
('CIDUPR0031', '12-B', 'Baker Street', 110078, 'Delhi'),
('CIDKLR0201', '1829', 'MG Road', 400007, 'Mumbai'),
('CIDRJS0001', 'S-5', 'Train Street', 302112, 'Jodhpur'),
('CIDKLR0201', '68', 'Nice Road', 682102, 'Kochi'),
('CIDDLH0056', '567', 'Vajpayee Road', 110568, 'Delhi'),
('CIDMPD0012', 'A-204', 'Palm Street', 230012, 'Bhopal'),
('CIDMHR099', 'B-102', 'Aamcha Street', 405672, 'Pune'),
('CIDBLR0032', 'G-102', 'Kuvempu Main Road', 560003, 'Bangalore'),
('CIDBLR0212', '129', 'Ramanjaneya Road', 560061, 'Bangalore'),
('CIDDLH4867', '129', 'Fashion', 110032, 'DLH'),
('CIDBLR8711', '556', 'Jai Ram street', 560008, 'BLR');

INSERT INTO `dealer` (`oid`, `did`, `house_no`, `street_name`, `pincode`, `city`, `rating`, `name`) VALUES
('OIDBLR0019', 'DIDUPR0410', '1279', 'Modi Road', 226061, 'Lucknow', '4.20', 'Choudary & Sons'),
('OIDBLR0034', 'DIDBLR1289', '12-B', 'Baker Street', 110078, 'Delhi', '4.80', 'Babu Rao'),
('OIDBLR0043', 'DIDKLR0063', '001', 'Krishna Road', 682002, 'Kochi', '4.30', 'Chetty & Co.'),
('OIDBLR0089', 'DIDMHR0179', '1829', 'MG Road', 400007, 'Mumbai', '3.20', 'Apte Ltd.'),
('OIDDLH0058', 'DIDBLR0069', '45', 'West Park Road', 560003, 'Bangalore', '3.80', 'SLV Pvt Ltd.'),
('OIDKLR2002', 'DIDKLR0063', '001', 'Krishna Road', 682002, 'Kochi', '4.60', 'Chacko Bros.'),
('OIDRJS0010', 'DIDBLR0075', 'F-301', 'Ring Road', 560085, 'Bangalore', '4.90', 'Jaisinghani & Co.'),
('OIDUPR0114', 'DIDUPR0410', '1279', 'Modi Road', 226061, 'Lucknow', '4.30', 'Pandeys''');

INSERT INTO `items` (`iid`, `stock`, `rate`, `reviews`, `category`, `name`) VALUES
('IIDBLR0013', 89, '1650.00', 'Circumaural headphone with 30mW of maximum power input', 'Electronics', 'JBL Headphones'),
('IIDBLR0023', 67, '525.00', 'Grip is good,nice grip on rods/dumbles.The gloves are extremely light and made of leather.', 'Sports', 'Gym Gloves'),
('IIDBLR0046', 112, '4100.00', 'Slim fit, made of 100% cotton.Full sleeve', 'Lifestyle', 'Arrow Shirt'),
('IIDBLR0049', 102, '56500.00', '5 star rating,double door,platinum inox model', 'Home Appliances', 'Samsung Refrigerator'),
('IIDBLR0423', 45, '1000.00', 'High performance rubber cover.Ultra durable and superior grip', 'Sports', 'Spalding Basketball'),
('IIDDLH0086', 115, '6720.00', 'Polyester blend,striped blue pattern', 'Lifestyle', 'Raymond Suit'),
('IIDKLR0053', 25, '4250.00', '2 Car speaker with 150W power output', 'Automotives', 'JBL Car Stereo set'),
('IIDMHR0073', 54, '22500.00', 'Great mobile phone with 2.3 GHz octa core processor,12MP primary camera,curved AMOLED gorilla glass 4', 'Electronics', 'Samsung Galaxy S7'),
('IIDRJS0043', 45, '9900.00', 'Electronic touch pad with 35L capacity.Maximum cooking time:120 min', 'Home Appliances', 'Samsung Oven'),
('IIDUPR0925', 56, '1250.00', 'Classic from Robin Sharma.Paperback edition', 'Books', 'The Monk Who Sold His Ferrari');

INSERT INTO `Order_details` (`cid`, `iid`, `house_no`, `street_name`, `pincode`, `city`, `qty`, `did`, `oid`) VALUES
('CIDBLR0001', 'IIDBLR0023', '129', 'Ramanjaneya Road', 560061, 'Bangalore', 2, 'DIDUPR0410', 'OIDBLR0019'),
('CIDBLR0032', 'IIDBLR0046', 'G-102', 'Kuvempu Main Road', 560003, 'Bangalore', 1, 'DIDMHR0179', 'OIDBLR0089'),
('CIDBLR0067', 'IIDBLR0423', '1190', 'Jigni Main Road', 560003, 'Bangalore', 1, 'DIDKLR0063', 'OIDBLR0043'),
('CIDBLR0212', 'IIDMHR0073', '129', 'Ramanjaneya Road', 560061, 'Bangalore', 1, 'DIDBLR1289', 'OIDBLR0034'),
('CIDDLH0056', 'IIDDLH0086', '12-B', 'Baker Street', 110078, 'Delhi', 1, 'DIDBLR0069', 'OIDDLH0058'),
('CIDKLR0201', 'IIDMHR0073', '68', 'Nice Road', 682102, 'Kochi', 2, 'DIDKLR0063', 'OIDKLR2002'),
('CIDRJS0001', 'IIDRJS0043', '1290', 'Abdul Kalam Road', 302001, 'Jaipur', 3, 'DIDBLR0075', 'OIDRJS0010'),
('CIDUPR0031', 'IIDMHR0073', '12-B', 'Baker Street', 110078, 'Delhi', 1, 'DIDUPR0410', 'OIDUPR0114');

INSERT INTO `payment_mode` (`tcost`, `cod`, `credit`, `debit`, `did`, `cid`, `oid`) VALUES
('6720.00', 1, 0, 0, 'DIDBLR0069', 'CIDDLH0056', 'OIDDLH0058'),
('29700.00', 0, 0, 1, 'DIDBLR0075', 'CIDRJS0001', 'OIDRJS0010'),
('22500.00', 1, 0, 0, 'DIDBLR1289', 'CIDBLR0212', 'OIDBLR0034'),
('1000.00', 0, 1, 0, 'DIDKLR0063', 'CIDBLR0067', 'OIDBLR0043'),
('45000.00', 0, 1, 0, 'DIDKLR0063', 'CIDKLR0201', 'OIDKLR2002'),
('4100.00', 0, 0, 1, 'DIDMHR0179', 'CIDBLR0032', 'OIDBLR0089'),
('1050.00', 1, 0, 0, 'DIDUPR0410', 'CIDBLR0001', 'OIDBLR0019'),
('22500.00', 1, 0, 0, 'DIDUPR0410', 'CIDUPR0031', 'OIDUPR0114');

INSERT INTO `shipment` (`oid`, `did`, `inc_cost`, `status_item`, `return_item`, `date_of_del`, `empName`, `empId`, `cid`) VALUES
('OIDBLR0019', 'DIDUPR0410', '50.00', 'Out for delivery', 'Yes', '2016-04-18', 'Mahesh', 'EIDBLR0123', 'CIDBLR0001'),
('OIDBLR0034', 'DIDBLR1289', '22500.00', 'Delivered', 'No', '2016-04-15', 'Gagan', 'EIDBLR1290', 'CIDBLR0212'),
('OIDBLR0043', 'DIDKLR0063', '50.00', 'Processing', 'No', '2016-04-26', 'Kantharaju', 'EIDBLR1278', 'CIDBLR0067'),
('OIDBLR0089', 'DIDMHR0179', '150.00', 'Processing', 'No', '2016-04-23', 'Ramesh', 'EIDBLR0098', 'CIDBLR0032'),
('OIDDLH0058', 'DIDBLR0069', '150.00', 'Out for delivery', 'No', '2016-04-20', 'Basavaraju', 'EIDDLH9876', 'CIDDLH0056'),
('OIDKLR2002', 'DIDKLR0063', '300.00', 'Delivered', 'No', '2016-04-13', 'Raju', 'EIDKLR4536', 'CIDKLR0201'),
('OIDRJS0010', 'DIDBLR0075', '250.00', 'Processing', 'No', '2016-04-29', 'Ajay', 'EIDRJS0012', 'CIDRJS0001'),
('OIDUPR0114', 'DIDUPR0410', '250.00', 'Delivered', 'No', '2016-04-12', 'Mani', 'EIDUPR5678', 'CIDUPR0031');

INSERT INTO `transaction` (`tid`, `did`, `profit`, `d_pay`, `sell_price`, `cost_price`, `oid`, `cid`) VALUES
('TIDBLR0121', 'DIDUPR0410', '300.00', '100.00', '1050.00', '600.00', 'OIDBLR0019', 'CIDBLR0001'),
('TIDBLR1290', 'DIDBLR1289', '12500.00', '2000.00', '22500.00', '8000.00', 'OIDBLR0034', 'CIDBLR0212'),
('TIDBLR5643', 'DIDMHR0179', '750.00', '200.00', '4100.00', '3000.00', 'OIDBLR0089', 'CIDBLR0032'),
('TIDBLR7863', 'DIDKLR0063', '200.00', '100.00', '1000.00', '650.00', 'OIDBLR0043', 'CIDBLR0067'),
('TIDDLH5436', 'DIDBLR0069', '600.00', '250.00', '6720.00', '5720.00', 'OIDDLH0058', 'CIDDLH0056'),
('TIDKLR7654', 'DIDKLR0063', '6000.00', '400.00', '45000.00', '38300.00', 'OIDKLR2002', 'CIDKLR0201'),
('TIDRJS6879', 'DIDBLR0075', '6500.00', '300.00', '29700.00', '22650.00', 'OIDRJS0010', 'CIDRJS0001'),
('TIDUPR3210', 'DIDUPR0410', '3000.00', '250.00', '22500.00', '19000.00', 'OIDUPR0114', 'CIDUPR0031');


--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`house_no`,`street_name`,`pincode`,`city`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer_stays`
--
ALTER TABLE `customer_stays`
  ADD KEY `customer_stays_ibfk_1` (`cid`),
  ADD KEY `customer_stays_ibfk_2` (`house_no`,`street_name`,`pincode`,`city`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`oid`,`did`),
  ADD KEY `dealer_ibfk_2` (`house_no`,`street_name`,`pincode`,`city`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `Order_details`
--
ALTER TABLE `Order_details`
  ADD PRIMARY KEY (`cid`,`did`,`oid`),
  ADD UNIQUE KEY `cid_2` (`cid`),
  ADD KEY `cid` (`cid`,`house_no`,`street_name`,`pincode`,`city`),
  ADD KEY `Order_details_ibfk_4` (`iid`),
  ADD KEY `Order_details_ibfk_6` (`house_no`,`street_name`,`pincode`,`city`),
  ADD KEY `oid` (`oid`,`did`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`did`,`cid`,`oid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `oid` (`oid`,`did`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`oid`,`did`,`cid`),
  ADD KEY `shipment_ibfk_1` (`cid`,`oid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`,`did`,`oid`,`cid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `oid` (`oid`,`did`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_stays`
--
ALTER TABLE `customer_stays`
  ADD CONSTRAINT `customer_stays_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_stays_ibfk_2` FOREIGN KEY (`house_no`,`street_name`,`pincode`,`city`) REFERENCES `address` (`house_no`, `street_name`, `pincode`, `city`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dealer`
--
ALTER TABLE `dealer`
  ADD CONSTRAINT `dealer_ibfk_2` FOREIGN KEY (`house_no`,`street_name`,`pincode`,`city`) REFERENCES `address` (`house_no`, `street_name`, `pincode`, `city`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Order_details`
--
ALTER TABLE `Order_details`
  ADD CONSTRAINT `Order_details_ibfk_4` FOREIGN KEY (`iid`) REFERENCES `items` (`iid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_details_ibfk_5` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_details_ibfk_6` FOREIGN KEY (`house_no`,`street_name`,`pincode`,`city`) REFERENCES `address` (`house_no`, `street_name`, `pincode`, `city`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_details_ibfk_7` FOREIGN KEY (`oid`,`did`) REFERENCES `dealer` (`oid`, `did`);

--
-- Constraints for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD CONSTRAINT `payment_mode_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `payment_mode_ibfk_2` FOREIGN KEY (`oid`,`did`) REFERENCES `dealer` (`oid`, `did`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `shipment_ibfk_2` FOREIGN KEY (`oid`,`did`) REFERENCES `dealer` (`oid`, `did`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`oid`,`did`) REFERENCES `dealer` (`oid`, `did`);
