<?php
/**
 * CODNITIVE
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade to newer
 * versions in the future.
 *
 * @category   Codnitive
 * @package    Codnitive_Iranianregions
 * @author     Hassan Barza <support@codnitive.com>
 * @copyright  Copyright (c) 2011 CODNITIVE Co. (http://www.codnitive.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;

$installer->startSetup();

$installer->run("
INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`)
VALUES 
('IR', 'AZEA', 'آذربایجان شرقی'),
('IR', 'AZWE', 'آذربایجان غربی'),
('IR', 'ARIL', 'اردبیل'),
('IR', 'ISAN', 'اصفهان'),
('IR', 'ALRZ', 'البرز'),
('IR', 'ILAM', 'ایلام'),
('IR', 'BUHR', 'بوشهر'),
('IR', 'TEAN', 'تهران'),
('IR', 'CHBA', 'چهارمحال و بختیاری'),
('IR', 'KHSO', 'خراسان جنوبی'),
('IR', 'KHRA', 'خراسان رضوی'),
('IR', 'KHNO', 'خراسان شمالی'),
('IR', 'KHAN', 'خوزستان'),
('IR', 'ZAAN', 'زنجان'),
('IR', 'SEAN', 'سمنان'),
('IR', 'SIBA', 'سیستان و بلوچستان'),
('IR', 'FARS', 'فارس'),
('IR', 'QAIN', 'قزوین'),
('IR', 'QOM-', 'قم'),
('IR', 'KOAN', 'کردستان'),
('IR', 'KEAN', 'کرمان'),
('IR', 'KEAH', 'کرمانشاه'),
('IR', 'KOBO', 'کهگیلویه و بویراحمد'),
('IR', 'GOAN', 'گلستان'),
('IR', 'GIAN', 'گیلان'),
('IR', 'LOAN', 'لرستان'),
('IR', 'MAAN', 'مازندران'),
('IR', 'MAZI', 'مرکزی'),
('IR', 'HOAN', 'هرمزگان'),
('IR', 'HAAN', 'همدان'),
('IR', 'YAZD', 'یزد');

REPLACE INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`)
(SELECT 'en_US', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'fr_FR', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'de_DE', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'es_ES', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'it_IT', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'pt_PT', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR');
");

$installer->endSetup(); 