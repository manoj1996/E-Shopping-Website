/*List the address details of customers residing in Maharashtra*/
select house_no,street_name,pincode,city from customer_stays inner join address using(house_no,street_name,pincode,city) where state = 'Maharashtra';
/*List the names of customers who have shopped above 25000 in any one of their orders*/
select distinct fname,lname from customer where cid in(select cid from transaction where sell_price > 25000);
/*List the details of the items which have less stock(under 50)*/
select * from items where stock < 50;
/*Find the number of customers who pay using cards(credit/debit)*/
select count(*) as Card_payment from payment_mode group by cod having cod = 0;
/*List the details of items which have been returned*/
select * from items where iid in(select iid from Order_details where cid in(select cid from shipment where return_item = 'Yes'));
/*Find the number of items which are yet to be delivered*/
select count(iid) as To_be_delivered from Order_details where oid in(select oid from shipment where status_item != 'Delivered');
/*Display the address of the most popular dealer*/
select house_no,street_name,pincode,city from dealer where rating = (select max(rating) from dealer);
/*List the name of the dealer with the maximum profit*/
select name from dealer where did in (select did from transaction group by did having sum(profit) = (select max(o.pro) from (select sum(t.profit) as pro from transaction t group by t.did) as o));
/*List the name and phone number of the customer from bangalore who has shopped the most on the portal */
select c1.fname,c1.lname,c1.phone from customer c1 where c1.tot_sales = (select max(c.tot_sales) from customer c where c.cid in(select cid from customer_stays cs where cs.city = 'Bangalore'));
/*List all the Electronic goods available on the portal*/
select name from items where category = 'Electronics';

/* List the names of the customers who have registered but not purchased any item from the portal*/
select c.fname,c.lname from customer c where c.cid not in (select t.cid from  transaction t);
/*List the items which are bought by more than 1 customers*/
select i.name from items i where i.iid in(select o.iid from Order_details o group by iid having count(*) > 1);
/*List the total profit of the company through the portal*/
select sum(profit) from transaction;
/*List the profit percentage of each transaction*/
select t.oid,(t.sell_price-t.cost_price)/(t.cost_price*0.01) as percentage from transaction t;
/*List the order IDs of orders in which the customer and dealer are from same place*/
select oid from Order_details where cid in(select c.cid from customer_stays c,dealer d where (c.cid,d.did) in (select o.cid,o.did from Order_details o) and c.city = d.city); 
/*List the order IDs of orders in which the cost of item is greater than 5000 and the customer pays through cash*/
select o.oid from Order_details o where o.oid in (select p.oid from payment_mode p where p.oid in (select o1.oid from Order_details o1 where o1.iid in (select i.iid from items i where i.rate >= 5000)) and p.cod = 1);

/*List the employee names who delivered a mobile phone on 15-04-2016 and whose customer's location is bangalore*/
select empName from shipment where empId in (select empId from shipment where date_of_del='2016-04-15' and status_item='Delivered' and cid in(select cid from customer_stays where city='Bangalore')) and oid in (select oid from Order_details where iid in (select iid from items where reviews LIKE '%mobile%' and category='Electronics'));
/*List all the products which earned profit more than 50% on selling*/
select name from items where iid in (select iid from Order_details where oid in(select oid from transaction where profit >= 0.5*sell_price));






/*DVwQqDC6Zj5ew6JL*/




























































