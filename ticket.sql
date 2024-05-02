create database ticket;
use ticket;
create table tickets (
	name char(32) character set utf8,
	kidticket		int(3),
	kidbig3 	int(3),
	kidfree		int(3),
	kidyear		int(3),
	adultticket		int(3),
	adultbig3		int(3),
	adultfree	int(3),
	adultyear 	int(3)
);
describe tickets;
INSERT INTO tickets VALUES (
    'dff','1','0','0','1','1','1','1','1'
);