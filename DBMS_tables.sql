
create database event_manager;
use event_manager;

CREATE TABLE `EventinformationTable` (
  `eventid` int(100) unsigned NOT NULL auto_increment,
  `eventname` varchar(45) NOT NULL,
  `eventtype` varchar(45) NOT NULL,
  `schedule` date NOT NULL,
  `cost` int(100) NOT NULL,
  PRIMARY KEY  (`eventid`)
);

CREATE TABLE `participantinformationTable` (
  `uid` int(100) unsigned NOT NULL auto_increment,
  `uname` varchar(45) NOT NULL,
  `eventid` int(100) unsigned NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY  (`uid`),
  FOREIGN KEY (`eventid`) REFERENCES EventinformationTable(eventid)
);





CREATE TABLE user_permission (

id int not null auto_increment,
role varchar(20),
memberinformation_row_add BOOL,
memberinformation_row_delete BOOL,
memberinformation_row_modify BOOL,
memberinformation_column_add BOOL,
memberinformation_column_delete BOOL,
memberinformation_column_modify BOOL,
eventinformation_row_add BOOL,
eventinformation_row_delete BOOL,
eventinformation_row_modify BOOL,
eventinformation_column_add BOOL,
eventinformation_column_delete BOOL,
eventinformation_column_modify BOOL,
participantinformation_row_add BOOL,
participantinformation_row_delete BOOL,
participantinformation_row_modify BOOL,
participantinformation_column_add BOOL,
participantinformation_column_delete BOOL,
participantinformation_column_modify BOOL,
createevent_row_add BOOL,
createevent_row_delete BOOL,
createevent_row_modify BOOL,
createevent_column_add BOOL,
createevent_column_delete BOOL,
createevent_column_modify BOOL,

primary key (id)
);



