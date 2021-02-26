
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(60) NOT NULL, `price` int(10,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`) VALUES
(1, 'Castor Oil 100 ml', 'High quality castor oil can be used externally for body massage and abdominal packs or can be used by practitioners for purgation for their clients. It is anti-inflammatory and anti-oxidant oil which has been used for centuries.
Widely used as a digestive cleanser it forms a part of the Ayurvedic Panchakarma regime and weight loss regime.
Castor oil is known to reduce Vata and any Vata related ailments in the body.', 'p1.gif', 300.00),
(2, 'Kapha Formula Herbal Massage Oil Energising Balance 100 ml', 'A stimulating and energising massage oil for the Kapha Dosha.Exclusive Kapha formula Massage Oil - specially designed to bring inner balance to those people having a Kapha Dosha (i.e. those with a pure Kapha Dosha or a Kapha Dosha in combination with another Dosha)', 'p2.gif', 400.00);