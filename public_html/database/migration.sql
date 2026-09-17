-- Create Database if not exists
CREATE DATABASE IF NOT EXISTS `dr_pavan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `dr_pavan`;

-- Table structure for leads
CREATE TABLE IF NOT EXISTS `leads` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `form_type` VARCHAR(50) NOT NULL COMMENT 'appointment, contact, callback, floating_contact',
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(50) NOT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `message` TEXT DEFAULT NULL,
  `preferred_date` DATE DEFAULT NULL,
  `preferred_time` TIME DEFAULT NULL,
  `source_page` VARCHAR(255) DEFAULT NULL,
  `utm_source` VARCHAR(255) DEFAULT NULL,
  `utm_medium` VARCHAR(255) DEFAULT NULL,
  `utm_campaign` VARCHAR(255) DEFAULT NULL,
  `utm_term` VARCHAR(255) DEFAULT NULL,
  `utm_content` VARCHAR(255) DEFAULT NULL,
  `gclid` VARCHAR(255) DEFAULT NULL,
  `fbclid` VARCHAR(255) DEFAULT NULL,
  `landing_url` VARCHAR(512) DEFAULT NULL,
  `referrer_url` VARCHAR(512) DEFAULT NULL,
  `ip_address` VARCHAR(45) DEFAULT NULL,
  `user_agent` TEXT DEFAULT NULL,
  `submission_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_form_type` (`form_type`),
  INDEX `idx_submission_time` (`submission_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
