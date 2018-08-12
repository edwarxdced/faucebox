-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 17:33:17
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `faucet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_addresses`
--

CREATE TABLE `faucetinabox_addresses` (
  `address` varchar(60) NOT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `last_used` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `faucetinabox_addresses`
--

INSERT INTO `faucetinabox_addresses` (`address`, `ref_id`, `last_used`) VALUES
('3DKXuSUStXCoWSyMQS4G4wuMe9Mn59Jbxa', NULL, '2017-12-28 02:18:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_address_locks`
--

CREATE TABLE `faucetinabox_address_locks` (
  `address` varchar(60) NOT NULL,
  `locked_since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_ips`
--

CREATE TABLE `faucetinabox_ips` (
  `ip` varchar(20) NOT NULL,
  `last_used` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `faucetinabox_ips`
--

INSERT INTO `faucetinabox_ips` (`ip`, `last_used`) VALUES
('::1', '2017-12-28 02:18:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_ip_locks`
--

CREATE TABLE `faucetinabox_ip_locks` (
  `ip` varchar(20) NOT NULL,
  `locked_since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_pages`
--

CREATE TABLE `faucetinabox_pages` (
  `id` int(11) NOT NULL,
  `url_name` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_refs`
--

CREATE TABLE `faucetinabox_refs` (
  `id` int(11) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faucetinabox_settings`
--

CREATE TABLE `faucetinabox_settings` (
  `name` varchar(64) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `faucetinabox_settings`
--

INSERT INTO `faucetinabox_settings` (`name`, `value`) VALUES
('address_ban_list', ''),
('apikey', '2a6831ca9bf2bd3c910033c835cb7780'),
('asn_ban_list', ''),
('balance', '11'),
('block_adblock', 'on'),
('button_timer', '1'),
('country_ban_list', ''),
('currency', 'BTC'),
('custom_admin_link_default', 'false'),
('custom_body_bg_default', ''),
('custom_body_cl_default', ''),
('custom_body_tx_default', ''),
('custom_box_bottom_bg_default', ''),
('custom_box_bottom_cl_default', ''),
('custom_box_bottom_default', ''),
('custom_box_bottom_tx_default', ''),
('custom_box_left_bg_default', ''),
('custom_box_left_cl_default', ''),
('custom_box_left_default', ''),
('custom_box_left_tx_default', ''),
('custom_box_right_bg_default', ''),
('custom_box_right_cl_default', ''),
('custom_box_right_default', ''),
('custom_box_right_tx_default', ''),
('custom_box_top_bg_default', ''),
('custom_box_top_cl_default', ''),
('custom_box_top_default', ''),
('custom_box_top_tx_default', ''),
('custom_css_default', '/* custom_css */\r\n/* center everything! */\r\n.row {\r\n    text-align: center;\r\n}\r\n#recaptcha_widget_div, #recaptcha_area {\r\n    margin: 0 auto;\r\n}\r\n/* do not center lists */\r\nul, ol {\r\n    text-align: left;\r\n}'),
('custom_footer_bg_default', ''),
('custom_footer_cl_default', ''),
('custom_footer_default', ''),
('custom_footer_tx_default', ''),
('custom_input_style_SpaceRacket', '1'),
('custom_left_ad_slot_base', ''),
('custom_main_box_bg_default', ''),
('custom_main_box_cl_default', ''),
('custom_main_box_tx_default', ''),
('custom_palette_default', 'default'),
('custom_right_ad_slot_base', ''),
('custom_right_ad_slot_SpaceRacket', ''),
('custom_top_ad_slot_SpaceRacket', ''),
('default_captcha', 'SolveMedia'),
('funcaptcha_private_key', ''),
('funcaptcha_public_key', ''),
('hostname_ban_list', ''),
('iframe_sameorigin_only', ''),
('ip_ban_list', ''),
('ip_white_list', ''),
('last_balance_check', '1515426642'),
('name', 'Faucet'),
('nastyhosts_enabled', 'on'),
('password', '$1$lFlSOc4n$qEZfQ3bZrHgfRLs4yAGqX/'),
('recaptcha_private_key', ''),
('recaptcha_public_key', ''),
('referral', '10'),
('reverse_proxy', 'on'),
('rewards', '100*1'),
('safety_limits_end_time', ''),
('service', 'faucethub'),
('short', 'The best way to earn free satoshis.'),
('solvemedia_auth_key', 'NHK2IE1TcP9GGwdmJesYR.h46LJiT57D'),
('solvemedia_challenge_key', 'Vv1OHJvBuCTeOOS8whrSSwDXj4DMkcoU'),
('solvemedia_verification_key', 'aTv-QK3-1YYJNJIh4Peyf8oXVF1XJhT6'),
('template', 'default'),
('timer', '0'),
('update_last_check', '2017-12-27'),
('version', '69');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `faucetinabox_addresses`
--
ALTER TABLE `faucetinabox_addresses`
  ADD PRIMARY KEY (`address`);

--
-- Indices de la tabla `faucetinabox_address_locks`
--
ALTER TABLE `faucetinabox_address_locks`
  ADD PRIMARY KEY (`address`);

--
-- Indices de la tabla `faucetinabox_ips`
--
ALTER TABLE `faucetinabox_ips`
  ADD PRIMARY KEY (`ip`);

--
-- Indices de la tabla `faucetinabox_ip_locks`
--
ALTER TABLE `faucetinabox_ip_locks`
  ADD PRIMARY KEY (`ip`);

--
-- Indices de la tabla `faucetinabox_pages`
--
ALTER TABLE `faucetinabox_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url_name` (`url_name`);

--
-- Indices de la tabla `faucetinabox_refs`
--
ALTER TABLE `faucetinabox_refs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indices de la tabla `faucetinabox_settings`
--
ALTER TABLE `faucetinabox_settings`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `faucetinabox_pages`
--
ALTER TABLE `faucetinabox_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faucetinabox_refs`
--
ALTER TABLE `faucetinabox_refs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
