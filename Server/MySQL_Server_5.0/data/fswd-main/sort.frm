TYPE=VIEW
query=select `fswd-main`.`emperorinfo`.`UserID` AS `UserID`,`fswd-main`.`emperorinfo`.`EmperorName` AS `Name`,`fswd-main`.`emperorinfo`.`Camp` AS `Faction`,`fswd-main`.`emperorinfo`.`DukePos` AS `Rank`,`fswd-main`.`officialposinfo`.`Grade` AS `RankID`,`fswd-main`.`emperorinfo`.`OfficialPos` AS `Title`,`fswd-main`.`emperorinfo`.`Reputation` AS `Reputation`,count(`fswd-main`.`cityinfo`.`CityID`) AS `Cities`,sum(`fswd-main`.`cityinfo`.`Population`) AS `Population`,`fswd-main`.`emperorinfo`.`League` AS `Guild`,`fswd-main`.`emperorinfo`.`LeagueOfficialPos` AS `GuildLevel` from ((`fswd-main`.`emperorinfo` left join `fswd-main`.`cityinfo` on((`fswd-main`.`emperorinfo`.`UserID` = `fswd-main`.`cityinfo`.`UserID`))) join `fswd-main`.`officialposinfo` on((`fswd-main`.`officialposinfo`.`Name` = `fswd-main`.`emperorinfo`.`OfficialPos`))) where (`fswd-main`.`emperorinfo`.`IsNPC` = _utf8\'0\') group by `fswd-main`.`emperorinfo`.`UserID`
md5=326f55c597beca6233184fb791aa3f94
updatable=0
algorithm=0
definer_user=test0
definer_host=
suid=1
with_check_option=0
revision=1
timestamp=2017-02-06 23:12:32
create-version=1
source=select `emperorinfo`.`UserID` AS `UserID`,`emperorinfo`.`EmperorName` AS `Name`,`emperorinfo`.`Camp` AS `Faction`,`emperorinfo`.`DukePos` AS `Rank`,`officialposinfo`.`Grade` AS `RankID`,`emperorinfo`.`OfficialPos` AS `Title`,`emperorinfo`.`Reputation` AS `Reputation`,count(`cityinfo`.`CityID`) AS `Cities`,sum(`cityinfo`.`Population`) AS `Population`,`emperorinfo`.`League` AS `Guild`,`emperorinfo`.`LeagueOfficialPos` AS `GuildLevel` from ((`emperorinfo` left join `cityinfo` on((`emperorinfo`.`UserID` = `cityinfo`.`UserID`))) join `officialposinfo` on((`officialposinfo`.`Name` = `emperorinfo`.`OfficialPos`))) where (`emperorinfo`.`IsNPC` = _utf8\'0\') group by `emperorinfo`.`UserID`
