-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 07:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet_consult_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `blood_group` enum('A-','A+','B-','B+','O-','O+','AB-','AB+') DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `choosen_plan` int(11) DEFAULT NULL,
  `suggested_plan` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diet_types`
--

CREATE TABLE `diet_types` (
  `diet_type_id` int(11) NOT NULL,
  `plan` varchar(450) NOT NULL,
  `summary` varchar(1250) DEFAULT NULL,
  `description` varchar(6500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `diet_super` int(11) DEFAULT NULL,
  `calorie_tracking` tinyint(1) NOT NULL,
  `calorie_intake_per_day` varchar(30) DEFAULT NULL,
  `calorie_burnt_per_day` varchar(30) DEFAULT NULL,
  `is_blood_group` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet_types`
--

INSERT INTO `diet_types` (`diet_type_id`, `plan`, `summary`, `description`, `image`, `diet_super`, `calorie_tracking`, `calorie_intake_per_day`, `calorie_burnt_per_day`, `is_blood_group`, `date_added`) VALUES
(1, 'Meat Eaters', NULL, NULL, 'meateaters.png', NULL, 0, NULL, NULL, 0, '2022-02-03 13:56:46'),
(2, 'Vegan', NULL, NULL, 'vegan.png', NULL, 0, NULL, NULL, 0, '2022-02-03 13:56:46'),
(3, 'Vegeterian', 'To get the most out of a vegetarian diet, choose a variety of healthy plant-based foods, such as whole fruits and vegetables, legumes and nuts, and whole grains.', 'Vegetarian diets continue to increase in popularity. Reasons for following a vegetarian diet are varied but include health benefits, such as reducing your risk of heart disease, diabetes and some cancers.\r\n\r\nYet some vegetarians rely too heavily on processed foods, which can be high in calories, sugar, fat and sodium. And they may not eat enough fruits, vegetables, whole grains and calcium-rich foods, thus missing out on the nutrients they provide.\r\n\r\nHowever, with a little planning a vegetarian diet can meet the needs of people of all ages, including children, teenagers, and pregnant or breast-feeding women. The key is to be aware of your nutritional needs so that you plan a diet that meets them.', 'vegeterian.png', NULL, 0, NULL, NULL, 0, '2022-02-03 13:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `food` varchar(450) NOT NULL,
  `food_list` varchar(1500) DEFAULT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') NOT NULL,
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `diet_type_id`, `food`, `food_list`, `info`, `image`, `consumption`, `moderation`, `hour_preferred`, `date_added`) VALUES
(1, 1, 'Seeded soda bread with hummus & tomatoes', NULL, 'Start the day off with a low-GI option for keeping you sustained yet energised through the morning. This yeast-free wholemeal loaf requires no kneading or proving. Instead, the bicarbonate of soda reacts with the acid of the lemon to make the bread rise. We’ve used oat milk, but feel free to use the non-dairy milk of your choosing. This meal also offers a good source of carbs, which is great after exercise.', NULL, 'Take', 'Any', 'Breakfast', '2022-02-03 14:00:05'),
(2, 1, 'Millet porridge with almond milk & berry compote', NULL, 'High in protein and gluten-free, millet is a grain that, once cooked, has a nutty texture, almost like chopped almonds. We used fortified almond milk for this recipe, but feel free to use your preferred non-dairy milk.', NULL, 'Take', 'Any', 'Breakfast', '2022-02-03 14:00:05'),
(3, 1, 'Veg-packed egg muffins with bean salad', NULL, 'Eggs are nutritional powerhouses, providing almost every nutrient you need including protein to aid muscle repair after exercise.', NULL, 'Take', 'Any', 'Lunch', '2022-02-03 14:06:06'),
(4, 1, 'Leek & broccoli soup with cheesy scones', NULL, 'Brassica vegetables like broccoli help to support good gut health and digestion.', NULL, 'Take', 'Any', 'Lunch', '2022-02-03 14:06:06'),
(5, 1, 'Turkey salad with grapes & walnuts', NULL, 'This salad provides protein, carbs and beneficial fats.', NULL, 'Take', 'Any', 'Lunch', '2022-02-03 14:06:06'),
(6, 1, 'Coriander roast chicken thighs with puy lentil salad', NULL, 'This delicious roast provides a clever balance of protein and nutrient-dense carbs, making it an ideal choice post exercise.', NULL, 'Take', 'Any', 'Dinner', '2022-02-03 14:06:06'),
(7, 1, 'Balsamic beef stew with veggie mash', NULL, 'perfect for chilly weather', NULL, 'Take', 'Any', 'Dinner', '2022-02-03 14:06:06'),
(8, 1, 'Vegan tempeh traybake', NULL, 'Made from fermented soya beans, tempeh is a nutrient-rich plan protein. Choosing fermented soya products, like tempeh, provides numerous benefits, including being easier on digestion, making nutrients like calcium and magnesium easier for us to absorb.', NULL, 'Take', 'Any', 'Dinner', '2022-02-03 14:06:06'),
(9, 1, 'Salmon spaghetti soup with broccoli pesto', NULL, 'This tasty bowlful inspired by a classic minestrone, but it’s thicker and more substantial. You should eat oily fish at least once a week in the form of salmon, mackerel or sardines, as the beneficial heart-healthy omega-3 fatty acids can’t be made by your body.', NULL, 'Take', 'Any', 'Dinner', '2022-02-03 14:06:06'),
(10, 1, 'Curried bean & coconut cod', NULL, 'If you like a creamy curry, this cheat’s version combines sweetcorn and unsweetened coconut yogurt, which is lower in fat than traditional coconut milk.', NULL, 'Take', 'Any', 'Dinner', '2022-02-03 14:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredient_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `ingredient` varchar(450) NOT NULL,
  `food_list` varchar(1500) DEFAULT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') NOT NULL,
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `liquids`
--

CREATE TABLE `liquids` (
  `liquid_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `liquid` varchar(450) NOT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') DEFAULT 'Take',
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liquids`
--

INSERT INTO `liquids` (`liquid_id`, `diet_type_id`, `liquid`, `info`, `image`, `consumption`, `moderation`, `hour_preferred`, `date_added`) VALUES
(1, 1, 'Coconut yogurt', NULL, NULL, 'Take', 'Any', 'Any', '2022-02-03 14:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE `shoppinglist` (
  `item_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `category` varchar(450) NOT NULL,
  `items_list` varchar(5500) DEFAULT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') NOT NULL,
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppinglist`
--

INSERT INTO `shoppinglist` (`item_id`, `diet_type_id`, `category`, `items_list`, `info`, `image`, `consumption`, `moderation`, `hour_preferred`, `date_added`) VALUES
(1, 1, 'Fruit', 'Avocados, Cherry Tomatoes, Frozen Mixed Berries, Seedless Red Grapes, Strawberries, Lemons, Lime, Tomatoes', NULL, NULL, 'Take', 'Any', 'Any', '2022-02-03 15:16:06'),
(2, 1, 'Vegetables', 'Baby Potatoes, Baby Spinach, Broccoli, Carrots, Cauliflower, Celery, Chestnut Mushrooms, Courgette, Green Beans, Leeks, Onions, Peppers, Potatoes, Red Onion, Romaine Lettuce Heart, Swede, Sweet Potatoes, Sweetcorn, Watercress, Whole Baby Corn', NULL, NULL, 'Take', 'Any', 'Any', '2022-02-03 15:16:06'),
(3, 1, 'Protein', 'Anchovies, Beef (lean), Chicken Thighs, Large Eggs, Tempeh, Turkey Breast Fillets, Wild Salmon Fillets, Black-eyed beans, Borlotti beans 1x400g, Brown basmati rice, Butter beans 1 x 400g can, Cashews (raw) 110g, Chickpeas 2x400g, Chopped tomatoes 2x400g, Lentils 2x400g, Millet 340g, Passata 200m1, Peanut butter, chunky 75g, Plum tomatoes 400g, Porcini mushrooms (dried) 10g, Pumpkin seeds, Quinoa 125g, Tomato puree, Vegetable bouillon powder, Wholemeal flour, Whole wheat penne, Whole wheat spelt powder ', NULL, NULL, 'Take', 'Any', 'Any', '2022-02-03 15:16:06'),
(4, 1, 'Products', '4 seed mix (sunflower - golden flax seed - pumpkin and sesame), Baking Powder, Bicarbonate of Soda, Black Eyed Beans', NULL, NULL, 'Take', 'Any', 'Any', '2022-02-03 15:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `snack_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `snack` varchar(450) NOT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') DEFAULT 'Take',
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`snack_id`, `diet_type_id`, `snack`, `info`, `image`, `consumption`, `moderation`, `hour_preferred`, `date_added`) VALUES
(1, 1, 'Date & peanut butter dip', 'This sweet dip works really well with savoury crisp veg', NULL, 'Take', 'Any', 'Any', '2022-02-03 14:26:06'),
(2, 1, 'Cinnamon baked oats with blueberries', 'These mini oat pots topped with yogurt and berries make a great little snack.', NULL, 'Take', 'Any', 'Any', '2022-02-03 14:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diet_types`
--
ALTER TABLE `diet_types`
  ADD PRIMARY KEY (`diet_type_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `liquids`
--
ALTER TABLE `liquids`
  ADD PRIMARY KEY (`liquid_id`);

--
-- Indexes for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`snack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diet_types`
--
ALTER TABLE `diet_types`
  MODIFY `diet_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liquids`
--
ALTER TABLE `liquids`
  MODIFY `liquid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `snack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
