# SQL Manager 2005 for MySQL 3.6.5.1
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : sfakhar1_thepuzzle_db


SET FOREIGN_KEY_CHECKS=0;

#
# Structure for the `authassignment` table : 
#

CREATE TABLE `authassignment` (
  `itemname` varchar(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `authitem` table : 
#

CREATE TABLE `authitem` (
  `name` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `authitemchild` table : 
#

CREATE TABLE `authitemchild` (
  `parent` varchar(250) NOT NULL,
  `child` varchar(250) NOT NULL,
  PRIMARY KEY (`parent`,`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `rights` table : 
#

CREATE TABLE `rights` (
  `itemname` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for the `authassignment` table  (LIMIT 0,500)
#

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES 
  ('SuperAdmin','73',NULL,NULL),
  ('testrole','74',NULL,'N;');

COMMIT;

#
# Data for the `authitem` table  (LIMIT 0,500)
#

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES 
  ('BspAdvertising.*',0,NULL,NULL,'N;'),
  ('BspAdvertising.Create',0,NULL,NULL,'N;'),
  ('BspAdvertising.Delete',0,NULL,NULL,'N;'),
  ('BspAdvertising.Index',0,NULL,NULL,'N;'),
  ('BspAdvertising.Update',0,NULL,NULL,'N;'),
  ('BspAdvertising.View',0,NULL,NULL,'N;'),
  ('BspArticla.*',0,NULL,NULL,'N;'),
  ('BspArticla.Create',0,NULL,NULL,'N;'),
  ('BspArticla.Delete',0,NULL,NULL,'N;'),
  ('BspArticla.Index',0,NULL,NULL,'N;'),
  ('BspArticla.Update',0,NULL,NULL,'N;'),
  ('BspArticla.View',0,NULL,NULL,'N;'),
  ('BspBlog.*',0,NULL,NULL,'N;'),
  ('BspBlog.Create',0,NULL,NULL,'N;'),
  ('BspBlog.Delete',0,NULL,NULL,'N;'),
  ('BspBlog.Index',0,NULL,NULL,'N;'),
  ('BspBlog.Update',0,NULL,NULL,'N;'),
  ('BspBlog.View',0,NULL,NULL,'N;'),
  ('BspCategory.*',0,NULL,NULL,'N;'),
  ('BspCategory.Create',0,NULL,NULL,'N;'),
  ('BspCategory.Delete',0,NULL,NULL,'N;'),
  ('BspCategory.Index',0,NULL,NULL,'N;'),
  ('BspCategory.Update',0,NULL,NULL,'N;'),
  ('BspCategory.View',0,NULL,NULL,'N;'),
  ('BspFaq.*',0,NULL,NULL,'N;'),
  ('BspFaq.Create',0,NULL,NULL,'N;'),
  ('BspFaq.Delete',0,NULL,NULL,'N;'),
  ('BspFaq.Index',0,NULL,NULL,'N;'),
  ('BspFaq.Update',0,NULL,NULL,'N;'),
  ('BspFaq.View',0,NULL,NULL,'N;'),
  ('BspItem.*',0,NULL,NULL,'N;'),
  ('BspItem.Create',0,NULL,NULL,'N;'),
  ('BspItem.Delete',0,NULL,NULL,'N;'),
  ('BspItem.DeleteChildByAjax',0,NULL,NULL,'N;'),
  ('BspItem.EditChild',0,NULL,NULL,'N;'),
  ('BspItem.GetChildrenCategories',0,NULL,NULL,'N;'),
  ('BspItem.Index',0,NULL,NULL,'N;'),
  ('BspItem.LoadChildByAjax',0,NULL,NULL,'N;'),
  ('BspItem.Update',0,NULL,NULL,'N;'),
  ('BspItem.View',0,NULL,NULL,'N;'),
  ('BspMessage.*',0,NULL,NULL,'N;'),
  ('BspMessage.Create',0,NULL,NULL,'N;'),
  ('BspMessage.Delete',0,NULL,NULL,'N;'),
  ('BspMessage.GetUser',0,NULL,NULL,'N;'),
  ('BspMessage.Index',0,NULL,NULL,'N;'),
  ('BspMessage.Update',0,NULL,NULL,'N;'),
  ('BspMessage.View',0,NULL,NULL,'N;'),
  ('BspNewfeed.*',0,NULL,NULL,'N;'),
  ('BspNewfeed.Create',0,NULL,NULL,'N;'),
  ('BspNewfeed.Delete',0,NULL,NULL,'N;'),
  ('BspNewfeed.Index',0,NULL,NULL,'N;'),
  ('BspNewfeed.Update',0,NULL,NULL,'N;'),
  ('BspNewfeed.View',0,NULL,NULL,'N;'),
  ('BspOrder.*',0,NULL,NULL,'N;'),
  ('BspOrder.Create',0,NULL,NULL,'N;'),
  ('BspOrder.Delete',0,NULL,NULL,'N;'),
  ('BspOrder.Index',0,NULL,NULL,'N;'),
  ('BspOrder.Update',0,NULL,NULL,'N;'),
  ('BspOrder.View',0,NULL,NULL,'N;'),
  ('Configurations.*',0,NULL,NULL,'N;'),
  ('Configurations.AppSettings',0,NULL,NULL,'N;'),
  ('Configurations.Index',0,NULL,NULL,'N;'),
  ('Configurations.Load',0,NULL,NULL,'N;'),
  ('testrole',2,'testrole',NULL,'N;');

COMMIT;

#
# Data for the `authitemchild` table  (LIMIT 0,500)
#

INSERT INTO `authitemchild` (`parent`, `child`) VALUES 
  ('BspAdvertising.*','BspAdvertising.Create'),
  ('BspAdvertising.*','BspAdvertising.Delete'),
  ('BspAdvertising.*','BspAdvertising.Update'),
  ('BspAdvertising.Create','BspAdvertising.Index'),
  ('BspAdvertising.Delete','BspAdvertising.Index'),
  ('BspAdvertising.Index','BspAdvertising.View'),
  ('BspAdvertising.Update','BspAdvertising.Index'),
  ('BspArticla.*','BspArticla.Create'),
  ('BspArticla.*','BspArticla.Delete'),
  ('BspArticla.*','BspArticla.Update'),
  ('BspArticla.Create','BspArticla.Index'),
  ('BspArticla.Delete','BspArticla.Index'),
  ('BspArticla.Index','BspArticla.View'),
  ('BspArticla.Update','BspArticla.Index'),
  ('BspBlog.*','BspBlog.Create'),
  ('BspBlog.*','BspBlog.Delete'),
  ('BspBlog.*','BspBlog.Update'),
  ('BspBlog.Create','BspBlog.Index'),
  ('BspBlog.Delete','BspBlog.Index'),
  ('BspBlog.Index','BspBlog.View'),
  ('BspBlog.Update','BspBlog.Index'),
  ('BspCategory.*','BspCategory.Create'),
  ('BspCategory.*','BspCategory.Delete'),
  ('BspCategory.*','BspCategory.Update'),
  ('BspCategory.Create','BspCategory.Index'),
  ('BspCategory.Delete','BspCategory.Index'),
  ('BspCategory.Index','BspCategory.View'),
  ('BspCategory.Update','BspCategory.Index'),
  ('BspFaq.*','BspFaq.Create'),
  ('BspFaq.*','BspFaq.Delete'),
  ('BspFaq.*','BspFaq.Update'),
  ('BspFaq.Create','BspFaq.Index'),
  ('BspFaq.Delete','BspFaq.Index'),
  ('BspFaq.Index','BspFaq.View'),
  ('BspFaq.Update','BspFaq.Index'),
  ('BspItem.*','BspItem.Delete'),
  ('BspItem.*','BspItem.Index'),
  ('BspItem.*','BspItem.Update'),
  ('BspItem.Create','BspItem.GetChildrenCategories'),
  ('BspItem.Create','BspItem.Index'),
  ('BspItem.Create','BspItem.LoadChildByAjax'),
  ('BspItem.Delete','BspItem.Index'),
  ('BspItem.Index','BspItem.View'),
  ('BspItem.Update','BspItem.Index'),
  ('BspItem.View','BspItem.DeleteChildByAjax'),
  ('BspItem.View','BspItem.EditChild'),
  ('BspItem.View','BspItem.GetChildrenCategories'),
  ('BspItem.View','BspItem.LoadChildByAjax'),
  ('BspMessage.*','BspMessage.Create'),
  ('BspMessage.*','BspMessage.Delete'),
  ('BspMessage.*','BspMessage.Update'),
  ('BspMessage.Create','BspMessage.GetUser'),
  ('BspMessage.Create','BspMessage.Index'),
  ('BspMessage.Delete','BspMessage.GetUser'),
  ('BspMessage.Delete','BspMessage.Index'),
  ('BspMessage.Index','BspMessage.View'),
  ('BspMessage.Update','BspMessage.Index'),
  ('BspNewfeed.*','BspNewfeed.Create'),
  ('BspNewfeed.*','BspNewfeed.Delete'),
  ('BspNewfeed.*','BspNewfeed.Update'),
  ('BspNewfeed.Create','BspNewfeed.View'),
  ('BspNewfeed.Delete','BspNewfeed.View'),
  ('BspNewfeed.Index','BspNewfeed.View'),
  ('BspNewfeed.Update','BspNewfeed.View'),
  ('BspOrder.*','BspOrder.Create'),
  ('BspOrder.*','BspOrder.Delete'),
  ('BspOrder.*','BspOrder.Update'),
  ('BspOrder.Create','BspOrder.Delete'),
  ('BspOrder.Create','BspOrder.Update'),
  ('BspOrder.Delete','BspOrder.Index'),
  ('BspOrder.Index','BspOrder.View'),
  ('BspOrder.Update','BspOrder.Index'),
  ('Configurations.*','Configurations.Index'),
  ('Configurations.*','Configurations.Load'),
  ('testrole','BspAdvertising.*');

COMMIT;

#
# Data for the `rights` table  (LIMIT 0,500)
#

INSERT INTO `rights` (`itemname`, `type`, `weight`) VALUES 
  ('BspAdvertising.*',0,0),
  ('BspAdvertising.Create',0,1),
  ('BspAdvertising.Delete',0,2),
  ('BspAdvertising.Index',0,4),
  ('BspAdvertising.Update',0,3),
  ('BspAdvertising.View',0,5),
  ('BspArticla.*',0,6),
  ('BspArticla.Create',0,7),
  ('BspArticla.Delete',0,8),
  ('BspArticla.Index',0,9),
  ('BspArticla.Update',0,10),
  ('BspArticla.View',0,11),
  ('BspBlog.*',0,12),
  ('BspBlog.Create',0,13),
  ('BspBlog.Delete',0,14),
  ('BspBlog.Index',0,15),
  ('BspBlog.Update',0,16),
  ('BspBlog.View',0,17),
  ('BspCategory.*',0,18),
  ('BspCategory.Create',0,19),
  ('BspCategory.Delete',0,20),
  ('BspCategory.Index',0,22),
  ('BspCategory.Update',0,21),
  ('BspCategory.View',0,23),
  ('BspFaq.*',0,24),
  ('BspFaq.Create',0,25),
  ('BspFaq.Delete',0,26),
  ('BspFaq.Index',0,27),
  ('BspFaq.Update',0,28),
  ('BspFaq.View',0,29),
  ('BspItem.*',0,30),
  ('BspItem.Create',0,31),
  ('BspItem.Delete',0,32),
  ('BspItem.DeleteChildByAjax',0,33),
  ('BspItem.EditChild',0,34),
  ('BspItem.GetChildrenCategories',0,35),
  ('BspItem.Index',0,36),
  ('BspItem.LoadChildByAjax',0,37),
  ('BspItem.Update',0,38),
  ('BspItem.View',0,39),
  ('BspMessage.*',0,40),
  ('BspMessage.Create',0,41),
  ('BspMessage.Delete',0,42),
  ('BspMessage.GetUser',0,43),
  ('BspMessage.Index',0,44),
  ('BspMessage.Update',0,45),
  ('BspMessage.View',0,46),
  ('BspNewfeed.*',0,47),
  ('BspNewfeed.Create',0,48),
  ('BspNewfeed.Delete',0,49),
  ('BspNewfeed.Index',0,50),
  ('BspNewfeed.Update',0,51),
  ('BspNewfeed.View',0,52),
  ('BspOrder.*',0,53),
  ('BspOrder.Create',0,54),
  ('BspOrder.Delete',0,55),
  ('BspOrder.Index',0,56),
  ('BspOrder.Update',0,57),
  ('BspOrder.View',0,58),
  ('Configurations.*',0,59),
  ('Configurations.AppSettings',0,60),
  ('Configurations.Index',0,61),
  ('Configurations.Load',0,62);

COMMIT;

