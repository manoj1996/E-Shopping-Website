CREATE TABLE `address` (
  `house_no` varchar(10) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `landmark` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `customer` (
  `uname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `cid` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `tot_sales` decimal(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `customer_stays` (
  `cid` varchar(10) DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `street_name` varchar(30) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `dealer` (
  `oid` varchar(10) NOT NULL,
  `did` varchar(10) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `items` (
  `iid` varchar(10) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `reviews` varchar(200) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Order_details` (
  `cid` varchar(10) NOT NULL,
  `iid` varchar(10) NOT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `street_name` varchar(30) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `did` varchar(10) NOT NULL,
  `oid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `payment_mode` (
  `tcost` decimal(10,2) NOT NULL,
  `cod` int(1) DEFAULT NULL,
  `credit` int(1) DEFAULT NULL,
  `debit` int(1) DEFAULT NULL,
  `did` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `oid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `shipment` (
  `oid` varchar(10) NOT NULL,
  `did` varchar(10) NOT NULL,
  `inc_cost` decimal(10,2) DEFAULT NULL,
  `status_item` varchar(20) DEFAULT NULL,
  `return_item` varchar(20) DEFAULT NULL,
  `date_of_del` date DEFAULT NULL,
  `empName` varchar(30) DEFAULT NULL,
  `empId` varchar(10) DEFAULT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `transaction` (
  `tid` varchar(10) NOT NULL,
  `did` varchar(10) NOT NULL,
  `profit` decimal(10,2) DEFAULT NULL,
  `d_pay` decimal(10,2) DEFAULT NULL,
  `sell_price` decimal(10,2) DEFAULT NULL,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `oid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
