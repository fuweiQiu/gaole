-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-04-13 16:29:00
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `pokemon`
--

-- --------------------------------------------------------

--
-- 資料表結構 `carddata`
--

CREATE TABLE `carddata` (
  `id` int(11) NOT NULL,
  `1` varchar(10) DEFAULT NULL,
  `2` varchar(10) DEFAULT NULL,
  `3` varchar(10) DEFAULT NULL,
  `4` varchar(10) DEFAULT NULL,
  `5` varchar(10) DEFAULT NULL,
  `6` varchar(10) DEFAULT NULL,
  `7` varchar(10) DEFAULT NULL,
  `8` varchar(10) DEFAULT NULL,
  `9` varchar(10) DEFAULT NULL,
  `10` varchar(10) DEFAULT NULL,
  `11` varchar(10) DEFAULT NULL,
  `12` varchar(10) DEFAULT NULL,
  `13` varchar(10) DEFAULT NULL,
  `14` varchar(10) DEFAULT NULL,
  `15` varchar(10) DEFAULT NULL,
  `16` varchar(10) DEFAULT NULL,
  `17` varchar(10) DEFAULT NULL,
  `18` varchar(10) DEFAULT NULL,
  `19` varchar(10) DEFAULT NULL,
  `20` varchar(10) DEFAULT NULL,
  `21` varchar(10) DEFAULT NULL,
  `22` varchar(10) DEFAULT NULL,
  `23` varchar(10) DEFAULT NULL,
  `24` varchar(10) DEFAULT NULL,
  `25` varchar(10) DEFAULT NULL,
  `26` varchar(10) DEFAULT NULL,
  `27` varchar(10) DEFAULT NULL,
  `28` varchar(10) DEFAULT NULL,
  `29` varchar(10) DEFAULT NULL,
  `30` varchar(10) DEFAULT NULL,
  `31` varchar(10) DEFAULT NULL,
  `32` varchar(10) DEFAULT NULL,
  `33` varchar(10) DEFAULT NULL,
  `34` varchar(10) DEFAULT NULL,
  `35` varchar(10) DEFAULT NULL,
  `36` varchar(10) DEFAULT NULL,
  `37` varchar(10) DEFAULT NULL,
  `38` varchar(10) DEFAULT NULL,
  `39` varchar(10) DEFAULT NULL,
  `40` varchar(10) DEFAULT NULL,
  `41` varchar(10) DEFAULT NULL,
  `42` varchar(10) DEFAULT NULL,
  `43` varchar(10) DEFAULT NULL,
  `44` varchar(10) DEFAULT NULL,
  `45` varchar(10) DEFAULT NULL,
  `46` varchar(10) DEFAULT NULL,
  `47` varchar(10) DEFAULT NULL,
  `48` varchar(10) DEFAULT NULL,
  `49` varchar(10) DEFAULT NULL,
  `50` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `carddata`
--

INSERT INTO `carddata` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`) VALUES
(1, 's1利歐路', 's2路卡利歐', 's4音波龍', 's1鐵啞鈴', 's2阿羅拉九尾', 's3穿著熊', '水君', 's1小火馬', 's1阿羅拉六尾', 's2小卡比獸', 's3阿羅拉九尾', 's2瓦斯彈', 's2呆殼獸', 's3雙彈瓦斯', 's4畢力吉翁', 's1嗡蝠', 's2穿著熊', 's4呆呆王', 's4月石', 's2嗡蝠', 's2金屬怪', 's3路卡利歐', 's2奇魯莉安', 's1拉魯拉絲', 's1阿羅拉六尾', 's3雙彈瓦斯', 's2金屬怪', 's2烈焰馬', 's2奇魯莉安', 's2洛托姆', '金-s4噴火龍', '金-夢幻Z', 's2阿羅拉九尾', 's2烏鴉頭頭', '金-s4妙蛙花', 's2小卡比獸', '拂曉之翼z', 's1黑暗鴉', 's1呆呆獸', 's4太陽岩', 's3烏鴉頭頭', 's1小卡比獸', 's4瑪納霏', 's4太陽岩', 's3烈焰馬', 's1小卡比獸', 's4卡比獸', 's1童偶熊', 's1拉魯拉絲', 's1洛托姆'),
(2, 's3凱路迪歐', 's1拉魯拉絲', 's2穿著熊', 's1洛托姆', 's2嗡蝠', 's3月石', 's1呆呆獸', 's1阿羅拉六尾', 's2金屬怪', 's3沙奈朵', '代歐奇西斯', 's4代拉基翁', 's1童偶熊', 's3卡比獸', 's1鐵啞鈴', 's4太陽岩', 's3阿羅拉九尾', 's2嗡蝠', 's1鐵啞鈴', 's2瓦斯彈', 's4土地雲', '炎帝W', 's4巨金怪', 's2阿羅拉九尾', 's3穿著熊', 's2路卡利歐', 's2阿羅拉九尾', 's2小卡比獸', '金-s4美洛耶塔', 's2洛托姆', 's1童偶熊', 's2烏鴉頭頭', 's1利歐路', 's4凱路迪歐', 's2瓦斯彈', 's1小火馬', '黃昏之鬃z', 's2呆殼獸', 's3巨金怪', 's2奇魯莉安', 's2烈焰馬', 's1黑暗鴉', 's2穿著熊', 's4音波龍', 's3呆呆王', '金-s4妙蛙花', 's1洛托姆', 's1小卡比獸', 's1嗡蝠', '金-s4水箭龜'),
(3, 's1小卡比獸', '雷公W', 's2穿著熊', 's4畢力吉翁', 's1呆呆獸', 's1童偶熊', 's2奇魯莉安', 's2奇魯莉安', 's4水箭龜', 's2烈焰馬', 's4噴火龍', 's4代拉基翁', 's3巨金怪', 's1呆呆獸', 's2阿羅拉九尾', 's1阿羅拉六尾', 's2金屬怪', 's2嗡蝠', 's1利歐路', 's3太陽岩', 's4沙奈朵', 's4瑪納霏', 's1嗡蝠', 's4路卡利歐', 's1小火馬', 's1嗡蝠', '阿爾宙斯(火)', 's4勾帕路翁', 's2呆殼獸', 's3路卡利歐', 's2嗡蝠', 's1黑暗鴉', 's1洛托姆', 's2瓦斯彈', 's2路卡利歐', 's3皮卡丘', 's1小卡比獸', 's3破破舵輪', 's3阿羅拉九尾', 's2小卡比獸', 's2洛托姆', 's3音波龍', 's2小卡比獸', 's3洛托姆', 's3烈焰馬', 's4巨金怪', '金-超夢', 's1鐵啞鈴', 's1拉魯拉絲', 's2烏鴉頭頭'),
(4, 's1呆呆獸', 's2烈焰馬', 's3呆呆王', 's3卡比獸', 's3阿羅拉九尾', 's1小卡比獸', 's4噴火龍', 's4凱路迪歐', 's2奇魯莉安', 's3音波龍', '金-超夢M', 's1童偶熊', 's2路卡利歐', 's1利歐路', 's2洛托姆', 's2洛托姆', 's1嗡蝠', 's4美洛耶塔', 's1拉魯拉絲', 's1利歐路', 's4代拉基翁', 's4雷電雲', 's2奇魯莉安', 's2嗡蝠', 's3月石', 's2阿羅拉九尾', 's2呆殼獸', 's1鐵啞鈴', 's1阿羅拉六尾', '金-夢幻Z', 's3皮卡丘', 's2金屬怪', 's1小火馬', 's4卡比獸', 's1黑暗鴉', 's1嗡蝠', 's1洛托姆', 's3凱路迪歐', 's4巨金怪', 's2小卡比獸', 's2烏鴉頭頭', ' 阿爾宙斯(草)', 's1小火馬', 's3穿著熊', 's2穿著熊', 's2金屬怪', 's2穿著熊', 's2瓦斯彈', 's4勾帕路翁', 's3沙奈朵'),
(5, 's1利歐路', 's3卡比獸', 's1黑暗鴉', 's2阿羅拉九尾', 's4畢力吉翁', 's3洛托姆', 's3月石', 's2洛托姆', 's4瑪納霏', 's2烈焰馬', 's4音波龍', 's4龍捲雲', 's4美洛耶塔', '金-s4水箭龜', 's1童偶熊', 's1嗡蝠', 's3沙奈朵', '代歐奇西斯', 's3皮卡丘', 's1洛托姆', 's1鐵啞鈴', 's3巨金怪', 's2路卡利歐', 's2呆殼獸', 's1鐵啞鈴', 's1小火馬', 's2阿羅拉九尾', 's2呆殼獸', 's1小卡比獸', '阿爾宙斯(水)', 's2嗡蝠', 's2瓦斯彈', 's3烏鴉頭頭', 's2小卡比獸', 's4沙奈朵', 's1拉魯拉絲', 's4路卡利歐', 's1阿羅拉六尾', 's2金屬怪', 's2烏鴉頭頭', 's1拉魯 拉絲', 's1呆呆獸', '阿爾宙斯(一般)', 's2呆殼獸', 's3路卡利歐', 's1小火馬', 's2穿著熊', 's4代拉基翁', 's3雙彈瓦斯', 's2奇魯莉安'),
(6, '金-s4妙蛙花', 's1拉魯拉絲', 's2烏鴉頭頭', 's1洛托姆', 's1黑暗鴉', 's3卡比獸', 's2洛托姆', 's1呆呆獸', '雷吉奇卡斯', 's2洛托姆', 's2奇魯莉安', 's3烏鴉頭頭', 's4路卡利歐', 's1呆呆獸', 's3凱路迪歐', 's2瓦斯彈', 's2金屬怪', '銀伴戰獸W', 's1鐵啞鈴', 's3洛托姆', 's3巨金怪', 's2烈焰馬', 's4凱路迪歐', 's1童偶熊', 's1小火馬', 's4呆呆王', 's2小卡比獸', 's1呆呆獸', 's3破破舵輪', 's2嗡蝠', 's2阿羅拉九尾', 's4卡比獸', 's2呆殼獸', 's1阿羅拉六尾', 's1利歐路', 's3穿著熊', 's4雷電雲', 's2路卡利歐', 's3烈焰馬', 's2穿著熊', 's1阿羅拉六尾', '金-蒂安希', 's3皮卡丘', 's2小卡比獸', 's2路卡利歐', '金-s4美洛耶塔', 's2瓦斯彈', 's1嗡蝠', 's4勾帕路翁', 's2呆殼獸'),
(7, 's2穿著熊', 's4噴火龍', '金-s4水箭龜', 's1利歐路', 's1小火馬', 's1童偶熊', 's3烈焰馬', '金-蒂安希', 's1嗡蝠', 's2烈焰馬', 's1阿羅拉六尾', 's1鐵啞鈴', 's2嗡蝠', 's3路卡利歐', 's1小卡比獸', 's1呆呆獸', 's2路卡利歐', 's2路卡利歐', 's1洛托姆', 's4呆呆王', 's1拉魯 拉絲', '金-拂曉之翼Z', 's2烈焰馬', 's4月石', 's2金屬怪', 's2洛托姆', 's3音波龍', 's4月石', 's2烏鴉頭頭', 's3太陽岩', '澤爾尼亞斯W', 's3凱路迪歐', 's3呆呆王', 's3洛托姆', 's1黑暗鴉', 's4凱路迪歐', 's3皮卡丘', 's4土地雲', 's2小卡比獸', 's2奇魯莉安', 's4卡比獸', 's1黑暗鴉', 's3破破舵輪', 's1黑暗鴉', 's2小卡比獸', 's2呆殼獸', 's4太陽岩', 's2烏鴉頭頭', 's2阿羅拉九尾', 's2瓦斯彈'),
(8, 's4雷電雲', '雷吉奇卡斯', 's4龍捲雲', 's4瑪納霏', 's4畢力吉翁', 's3烏鴉頭頭', 's3雙彈瓦斯', 's1拉魯拉絲', 's2瓦斯彈', 's1利歐路', 's1童偶熊', 's4沙奈朵', 's4勾帕路翁', 's3音波龍', 's3皮卡丘', 's2奇魯莉安', '伊裴爾塔爾', 's1嗡蝠', 's2洛托姆', 's3月石', 's3太陽岩', 's1利歐路', '金-s4妙蛙花', 's2烈焰馬', 's2阿羅拉九尾', 's1童偶熊', 's2烈焰馬', 's2呆殼獸', 's2穿著熊', 's3破破舵輪', 's2金屬怪', 's2路卡利歐', 's1小火馬', 's2小卡比獸', 's2烏鴉頭頭', 's1小卡比獸', 's1阿羅拉六尾', 's3呆呆王', 's1黑暗鴉', 's3沙奈朵', 's2烏鴉頭頭', 's2穿著熊', 's2路卡利歐', 's1洛托姆', 's1鐵啞鈴', 's1呆呆獸', 's4龍捲雲', '金-(黃昏之鬃)z', 's4土地雲', 's2嗡蝠');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carddata`
--
ALTER TABLE `carddata`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carddata`
--
ALTER TABLE `carddata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
