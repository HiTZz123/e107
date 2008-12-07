CREATE TABLE linkwords (
linkword_id int(10) UNSIGNED NOT NULL auto_increment,
linkword_active tinyint(1) unsigned NOT NULL default '0',
linkword_word varchar(100) NOT NULL default '',
linkword_link varchar(250) NOT NULL default '',
linkword_tooltip text NOT NULL,
linkword_tip_id int(10) UNSIGNED NOT NULL Default '0',
linkword_newwindow tinyint(1) unsigned NOT NULL default '1',
PRIMARY KEY  (linkword_id)
) TYPE=MyISAM AUTO_INCREMENT=1;